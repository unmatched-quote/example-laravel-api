<?php

use App\DTO\Claims\ClaimAndRevision;
use App\DTO\ClaimsStatuses\ClaimStatus;
use App\DTO\ClaimsWorkflows\Transitions;
use App\DTO\ClaimsComments\ClaimComment;
use App\DTO\Claims\ClaimAndRevisionData;
use App\DTO\Claims\WithEAV\ClaimWithEAV;
use App\DTO\Claims\ClaimListingPaginated;
use App\DTO\Claims\ClaimAndRevisionsData;
use App\Http\Requests\API\v1\Claims\Write;
use App\Http\Requests\API\v1\Claims\Delete;
use App\Http\Requests\API\v1\Claims\Update;
use App\Http\Requests\API\v1\Claims\Listing;
use App\Http\Requests\API\v1\Claims\ReadById;
use App\Http\Requests\API\v1\Claims\ReadByUuid;
use Buckhill\RouteRegistry\Responses\JsonArray;
use App\Http\Requests\API\v1\Claims\ReadWithEav;
use App\Http\Controllers\API\v1\ClaimsController;
use App\Http\Requests\API\v1\Claims\ReadStatuses;
use Buckhill\RouteRegistry\Responses\ResponseTypes;
use App\Http\Requests\API\v1\Claims\CommentsListing;
use App\Http\Requests\API\v1\Claims\ReadWithRevisions;
use App\Http\Requests\API\v1\Claims\ReadTransitionsById;
use App\DTO\ClaimsComments\ClaimCommentListingPaginated;
use App\Http\Requests\API\v1\Claims\ReadTransitionsByUuid;
use App\Http\Requests\API\v1\ClaimsComments\Write as WriteComment;

//Prefix api/v1

Route::get('claims', [ClaimsController::class, 'listing'])
    ->input(Listing::class)
    ->output(ClaimListingPaginated::class);

Route::post('claim/create', [ClaimsController::class, 'create'])
    ->input(Write::class)
    ->output(ClaimAndRevision::class);

// Create claim with eav/files/financials
Route::post('claim/submission', [ClaimsController::class, 'createWithEav']);

// Read the claim
Route::get('claim/submission/{uuid}', [ClaimsController::class, 'readWithEav'])
    ->input(ReadWithEav::class)
    ->output(ClaimWithEAV::class);

Route::put('claim/submission/{uuid}', [ClaimsController::class, 'updateWithEav']);

Route::get('claim/id/{id}', [ClaimsController::class, 'readById'])
    ->input(ReadById::class)
    ->output(ClaimAndRevisionData::class);

Route::get('claim/uuid/{uuid}', [ClaimsController::class, 'readByUuid'])
    ->input(ReadByUuid::class)
    ->output(ClaimAndRevisionData::class);

Route::get('claim/uuid/{uuid}/revisions', [ClaimsController::class, 'revisions'])
    ->input(ReadWithRevisions::class)
    ->output(ClaimAndRevisionsData::class);

Route::get('claim/id/{id}/transitions', [ClaimsController::class, 'transitionsById'])
    ->input(ReadTransitionsById::class)
    ->output(Transitions::class);

Route::get('claim/uuid/{uuid}/transitions', [ClaimsController::class, 'transitionsByUuid'])
    ->input(ReadTransitionsByUuid::class)
    ->output(Transitions::class);

Route::put('claim/uuid/{uuid}', [ClaimsController::class, 'update'])
    ->input(Update::class)
    ->output(ClaimAndRevision::class);

Route::delete('claim/uuid/{uuid}', [ClaimsController::class, 'delete'])
    ->input(Delete::class)
    ->output(ResponseTypes::Empty);

Route::get('claim/uuid/{uuid}/claim-comments', [ClaimsController::class, 'comments'])
    ->input(CommentsListing::class)
    ->output(ClaimCommentListingPaginated::class);

Route::post('claim/uuid/{uuid}/claim-comment/create', [ClaimsController::class, 'createComment'])
    ->input(WriteComment::class)
    ->output(ClaimComment::class);

Route::get('claim/id/{id}/allowed-statuses', [ClaimsController::class, 'allowedStatuses'])
    ->input(ReadStatuses::class)
    ->output(new JsonArray(ClaimStatus::class));
