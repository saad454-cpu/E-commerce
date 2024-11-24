<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\User;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Mail;
// use \App\Mail\ActivateYourAccount;
// class ActivationController extends Controller
// {
//     //account activation
//     public function activation($code){
//         $user = User::whereCode($code)->first();
//         $user->code = null;
//         $user->update(
//             [
//                 'active' => 1
//             ]);
//         Auth::login($user);
//         return redirect()->route('index.home')->withSuccess('Your account has been activated!');
//     }
//     //send email to activate account
//     public function resend($email){
//         $user = User::whereEmail($email)->first();
//         if($user->active == 1){
//             return redirect()->route('index.home')->withSuccess('Your account is already activated!');
//         }
//         Mail::to($user)->send(new ActivateYourAccount($user->code));
//         return redirect()->route('index.login')->withSuccess('Your activation code has been sent to your email!');
//     }
// }
