<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::put('payments/verify', 'API\PaymentController@verify');
Route::put('refresh-tokens/verify', 'API\RefreshTokenController@verify');

Route::apiResources([
    'audiens' => 'API\AudiensController',
    'cores' => 'API\CoreController',
    'volunteers' => 'API\VolunteerController',
    'speakers' => 'API\SpeakerController',
    'talents' => 'API\TalentController',
    'partners' => 'API\PartnerController',
    'payments' => 'API\PaymentController',
    'user-tickets' => 'API\UserTicketController',
    'refresh-tokens' => 'API\RefreshTokenController',
]);
