<?php



use Illuminate\Support\Facades\Route;
use Modules\TwoFactorAuth\Http\Controllers\TokenSenderController;

Route::post('request-token',[TokenSenderController::class,'issueToken']);
