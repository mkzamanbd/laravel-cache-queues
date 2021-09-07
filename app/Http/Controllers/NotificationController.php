<?php

namespace App\Http\Controllers;

use App\Mail\UserAccountVerificationMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NotificationController extends Controller
{
    function sendNotificationMail(){
        $users = User::query()->limit(30)->get();
        foreach($users as $user){
            Mail::to($user->email)->queue(new UserAccountVerificationMail());
        }
        return back();
    }
}
