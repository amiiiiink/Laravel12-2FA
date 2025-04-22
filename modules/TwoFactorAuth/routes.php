<?php



use Illuminate\Support\Facades\Route;
use Modules\TwoFactorAuth\Http\Controllers\TokenSenderController;

Route::get('request-token',[TokenSenderController::class,'issueToken']);
