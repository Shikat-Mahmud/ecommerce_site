<?php

use App\Models\Category;
use App\Models\ApplicationSetting;
use Illuminate\Support\Facades\Auth;
use Darryldecode\Cart\Facades\CartFacade as Cart;

function generalSettings(){
    $application = ApplicationSetting::latest()->first();
    return $application;
}

function user($id)
{
    $user = Auth::user();
    return $user;
}

function categories(){
    $categories = Category::where('status', 1)->get();
    return $categories;
}

function totalCartItems()
{
    $totalCartItems =Cart::getContent()->count();

    return $totalCartItems;
}