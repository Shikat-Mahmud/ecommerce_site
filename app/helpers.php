<?php

use App\Models\ApplicationSetting;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

function generalSettings(){
    $application = ApplicationSetting::latest()->first();
    return $application;
}

function user($id)
{
    $user = Auth::user();
    return $user;
}