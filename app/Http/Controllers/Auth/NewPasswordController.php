<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Services\PasswordService;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Validation\ValidationException;

class NewPasswordController extends Controller
{
    protected $passwordService;

    public function __construct(PasswordService $passwordService){
        $this->passwordService = $passwordService;
    }
    
    public function create(Request $request): Response
    {
        return Inertia::render('auth/ResetPassword', [
            'email' => $request->email,
            'token' => $request->route('token'),
        ]);
    }

    /**
     * Handle an incoming new password request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'token' => 'required',
            
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $reset = DB::table('password_reset_tokens')->get()->first(function ($record) use ($request) {
            return Hash::check($request->token, $record->token);
        });

        if (!$reset) {
            return back()->withErrors(['token' => 'Invalid or expired token.']);
        }
    
        $user = User::where('email', $reset->email)->first();
        if (!$user) {
            return back()->withErrors(['email' => 'User not found.']);
        }
    
        $this->passwordService->resetPassword($user, $request->password);
    
        DB::table('password_reset_tokens')->where('email', $reset->email)->delete();

        // return Inertia::render(route('login'));
        return to_route('home');

        
        // $status = Password::reset(
        //     $request->only( 'password', 'password_confirmation', 'token'),
        //     function ($user) use ($request) {
        //         $user->forceFill([
        //             'password' => Hash::make($request->password),
        //             'remember_token' => Str::random(60),
        //         ])->save();

        //         event(new PasswordReset($user));
        //     }
        // );

        // if ($status == Password::PasswordReset) {
        //     return to_route('login')->with('status', __($status));
        // }

        // throw ValidationException::withMessages([
        //     'email' => [__($status)],
        // ]);


    }
}
