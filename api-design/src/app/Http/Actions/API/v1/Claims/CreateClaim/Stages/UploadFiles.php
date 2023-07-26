<?php

namespace App\Http\Actions\API\v1\Claims\CreateClaim\Stages;

use App\Models\Claim2File;
use Illuminate\Support\Facades\Storage;
use App\Http\Actions\API\v1\Claims\CreateClaim\CreateClaimState;

class UploadFiles
{
    public function handle(CreateClaimState $state): CreateClaimState
    {
        $files = $state->getFilesData();
        $claim_id = $state->getClaim()->id;
        $revision_id = $state->getClaim()->revision;

        foreach($files as $file)
        {
            $path = sprintf('claims/%s/%s', $claim_id, $file['file_renamed']);

            // Upload to file storage
            $result = Storage::disk('claims')->put($path, base64_decode($file['contents']));

            if(true !== $result)
            {
                throw new \Exception('Failed uploading file to storage: '. $path, 500);
            }

            $model = Claim2File::create([
                'claim_id' => $claim_id,
                'revision_id' => $revision_id,
                'is_muted' => $file['is_muted'],
                'file_name' => $file['file_name'],
                'file_renamed' => $file['file_renamed'],
                'file_path' => $path,
                'file_type' => $file['file_type'],
                'file_size' => (int)$file['file_size']
            ]);

            $state->addUploadedFile($model);
        }

        return $state;
    }
}
