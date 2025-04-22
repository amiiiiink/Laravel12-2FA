<?php


use Illuminate\Support\Facades\Route;

Route::get('request-token',['TokenSenderController','issueToken']);
