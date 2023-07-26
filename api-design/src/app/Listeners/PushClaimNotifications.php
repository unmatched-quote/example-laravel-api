<?php

namespace App\Listeners;

use Carbon\Carbon;
use RuntimeException;
use Illuminate\Support\Arr;
use App\Events\ClaimsRevisionSaved;
use App\Events\ClaimsSettlementSaved;
use Illuminate\Support\Facades\Blade;
use App\Models\ClaimNotificationTemplate;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Collection;
use App\Models\ClaimNotificationConfiguration;
use App\Events\DefaultSNSNotificationProcessed;
use App\Models\ClaimSettlementNotificationTemplate;
use App\Models\ClaimGeneralNotificationConfiguration;
use App\Models\ClaimSettlementNotificationConfiguration;
use App\Models\ClaimSettlementGeneralNotificationConfiguration;
use App\DTO\NotificationsConfigurations\NotificationConfiguration;

class PushClaimNotifications implements ShouldQueue
{
    /**
     * @var ClaimSettlementNotificationConfiguration[]|ClaimNotificationConfiguration[]|Collection
     */
    private array|Collection $notificationsConfigurations;

    /**
     * @var ClaimGeneralNotificationConfiguration[]|ClaimSettlementGeneralNotificationConfiguration[]|Collection
     */
    private array|Collection $generalNotificationsConfigurations;

    /**
     * @var ClaimSettlementNotificationTemplate[]|ClaimNotificationTemplate[]|Collection
     */
    private array|Collection $notificationsTemplates;

    private array $templateData;

    /**
     * This array holds data of pushed notifications so that we can test what got pushed
     * @var array
     */
    private array $pushedNotifications = [];

    public function handleClaimsRevisionSaved(ClaimsRevisionSaved $event): void
    {
        $this->notificationsConfigurations = ClaimNotificationConfiguration
            ::whereClaimId($event->claimDTO->id)
            ->whereStatusId($event->revisionDTO->status_id)
            ->get();

        $this->notificationsTemplates = ClaimNotificationTemplate
            ::whereStatusId($event->revisionDTO->status_id)
            ->get();

        $this->generalNotificationsConfigurations = ClaimGeneralNotificationConfiguration
            ::whereClaimTypeId($event->revisionDTO->type_id)
            ->whereClaimSubtypeId($event->revisionDTO->subtype_id)
            ->get();

        $this->templateData = [
            'claim' => $event->claimDTO,
            'revision' => $event->revisionDTO
        ];

        $this->pushNotifications();
    }

    public function handleClaimsSettlementSaved(ClaimsSettlementSaved $event): void
    {
        $this->notificationsConfigurations = ClaimSettlementNotificationConfiguration
            ::whereSettlementId($event->settlementDTO->id)
            ->whereStatusId($event->settlementDTO->settlement_status_id)
            ->get();

        $this->notificationsTemplates = ClaimSettlementNotificationTemplate
            ::whereStatusId($event->settlementDTO->settlement_status_id)
            ->get();

        $this->generalNotificationsConfigurations = ClaimSettlementGeneralNotificationConfiguration
            ::whereSettlementTypeId($event->settlementDTO->settlement_type_id)
            ->get();

        $this->templateData = [
            'settlement' => $event->settlementDTO
        ];

        $this->pushNotifications();
    }

    public function pushNotifications(): void
    {
        foreach ($this->notificationsTemplates as $template) {
            if ("email" === $template->type) {
                $subject = Blade::render(
                    Arr::get($template->template, 'subject', ''),
                    $this->templateData
                );

                $body = Blade::render(
                    Arr::get($template->template, 'body', ''),
                    $this->templateData
                );

                $this->pushEmailNotifications($subject, $body, $this->notificationsConfigurations);
                $this->pushEmailNotifications($subject, $body, $this->generalNotificationsConfigurations);
            }
        }
    }

    private function pushEmailNotifications(
        string $subject,
        string $body,
        array|Collection $configurations
    ): void {
        $snsTopics = [];

        foreach ($configurations as $configuration) {
            $configurationDTO = new NotificationConfiguration(...$configuration->toArray());

            if (self::isMuted($configurationDTO->date_muted_start, $configurationDTO->date_muted_end)) {
                continue;
            }

            if ($configurationDTO->is_summarised) {
                //TODO: handle summarised notification, consider schedule
            } else {
                if (empty($configurationDTO->duration->schedule)) {
                    $driverType = $configurationDTO->driver_logic->type;

                    if ($driverType === 'SNS') {
                        $snsTopics = array_merge($snsTopics, $configurationDTO->driver_logic->topics);
                    } elseif ($driverType === 'SES') {
                        //TODO: handle SES and files
                        //Note: general notifications dont have files property on their configuration object
                        //so if they by chance get assigned to SES topic take that property into consideration
                    } else {
                        throw new RuntimeException('Unsupported notifications email driver type');
                    }
                } else {
                    //TODO: handle scheduled notification
                }
            }
        }

        if (!empty($snsTopics)) {
            $uniqueTopics = array_unique($snsTopics);

            DefaultSNSNotificationProcessed::dispatch($subject, $body, $uniqueTopics);

            $this->pushedNotifications['sns'][] = [
                'subject' => $subject,
                'body' => $body,
                'topics' => $uniqueTopics
            ];
        }
    }

    public static function isMuted(?string $beginDateString, ?string $endDateString): bool
    {
        if (!is_null($beginDateString)) {
            if ((new Carbon($beginDateString))->isPast()) {
                if (is_null($endDateString)) {
                    return true;
                } elseif (!(new Carbon($endDateString))->isPast()) {
                    return true;
                }
            }
        } else {
            if (!is_null($endDateString)) {
                if (!(new Carbon($endDateString))->isPast()) {
                    return true;
                }
            }
        }

        return false;
    }

    /**
     * @return ClaimNotificationConfiguration[]|ClaimSettlementNotificationConfiguration[]|Collection
     */
    public function getNotificationsConfigurations(): array|Collection
    {
        return $this->notificationsConfigurations;
    }

    /**
     * @return ClaimGeneralNotificationConfiguration[]|ClaimSettlementGeneralNotificationConfiguration[]|Collection
     */
    public function getGeneralNotificationsConfigurations(): array|Collection
    {
        return $this->generalNotificationsConfigurations;
    }

    /**
     * @return ClaimNotificationTemplate[]|ClaimSettlementNotificationTemplate[]|Collection
     */
    public function getNotificationsTemplates(): array|Collection
    {
        return $this->notificationsTemplates;
    }

    public function getTemplateData(): array
    {
        return $this->templateData;
    }

    public function getPushedNotifications(): array
    {
        return $this->pushedNotifications;
    }
}
