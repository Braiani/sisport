<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerAuthController;
use App\User;
use App\Pessoa;

class LoginController extends VoyagerAuthController
{
    protected $userHasEmail;

    public function __contstruct()
    {
        $this->userhasEmail = false;
    }

    public function postLogin(Request $request)
    {
        $this->userhasEmail = User::where('email', $request->email)->count() > 0;

        if ($this->userhasEmail) {
            
            return self::logar($request);

        }else{
            $siape = $request->email;
            if ($siape !== $request->password) {
                return $this->sendFailedLoginResponse($request);
            }

            $servidor = Pessoa::where('siape', $siape)->count() > 0;

            if ($servidor) {

                if (User::where('siape', $siape)->count() > 0) {
                    $request->merge(['siape' => $siape]);
                    return self::logar($request);
                }

                $servidor = Pessoa::where('siape', $siape)->first();
                User::create([
                    'name' => $servidor->nome,
                    'password' => bcrypt($servidor->siape),
                    'siape' => $siape
                ]);

                $request->merge(['siape' => $siape]);

                return self::logar($request);
            }
            
            return $this->sendFailedLoginResponse($request);
        }
    }

    public function username()
    {
        return $this->userhasEmail ? 'email' : 'siape';
    }

    public function logar(Request $request)
    {
        $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        $credentials = $this->credentials($request);

        if ($this->guard()->attempt($credentials, $request->has('remember'))) {
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }
}
