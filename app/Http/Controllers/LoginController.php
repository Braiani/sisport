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
            
            return parent::postLogin($request);

        }else{
            $siape = $request->email;
            if ($siape !== $request->password) {
                return $this->sendFailedLoginResponse($request);
            }

            $servidor = Pessoa::where('siape', $siape)->count() > 0;

            if ($servidor) {

                if (User::where('siape', $siape)->count() > 0) {
                    $request->merge(['siape' => $siape]);
                    return parent::postLogin($request);
                }

                $servidor = Pessoa::where('siape', $siape)->first();
                User::create([
                    'name' => $servidor->nome,
                    'password' => bcrypt($servidor->siape),
                    'siape' => $siape
                ]);

                $request->merge(['siape' => $siape]);

                return parent::postLogin($request);
            }
            
            return $this->sendFailedLoginResponse($request);
        }
    }

    public function username()
    {
        return $this->userhasEmail ? 'email' : 'siape';
    }
}
