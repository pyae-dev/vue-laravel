<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Models\User;
use Inertia\Inertia;
use Inertia\Response;
use App\Mail\ResetPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;


class MailController extends Controller
{
    public function sendMail(Request $request):Response
    {

        $request->validate([
            'email' => 'required|email',


        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user){
            return Inertia::render('Auth/ForgotPassword', [
                'status' => 'error',
                'message' => 'Email not found'
            ]);
        }
        $token = Password::createToken($user);
        
        Mail::to($request->email)->send(new ResetPassword($user->name,$token));
        return Inertia::render('Auth/ForgotPassword', [
            'status' => 'success',
            'message' => 'Password reset email sent successfully!'
        ]);

    }
}
