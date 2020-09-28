<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Reset Password Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Reset Password
     *
     * @param User $user
     * @param string $password
     */
    protected function resetPassword($user, $password)
    {
        $user->password = Hash::make($password);;
        $user->save();
        event(new PasswordReset($user));
    }

    /**
     * Send reset password response
     *
     * @param Request $request
     * @param $response
     * @return Response
     */
    protected function sendResetResponse(Request $request, $response)
    {
        $response = ['message' => 'Password has been reset successfully.'];
        return response($response, 200);
    }

    /**
     * Send reset password failed response
     *
     * @param Request $request
     * @param $response
     * @return Response
     */
    protected function sendResetFailedResponse(Request $request, $response)
    {
        $response = ['error' => 'Invalid request'];
        return response($response, 401);
    }
}
