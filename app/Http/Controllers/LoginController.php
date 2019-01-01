<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerAuthController;
use App\User;
use App\Pessoa;

class LoginController extends VoyagerAuthController
{
    protected $userHasEmail = false;


    public function postLogin(Request $request)
    {
        if (strpos($request->email, '@')) {
            $this->userHasEmail = true;
        }
        
        if ($this->userHasEmail) {
            return parent::postLogin($request);
        } else {
            $siape = $request->email;
            $request->merge(['siape' => $siape]);
            
            $primeiroLogin = $this->primeiroLogin($siape);

            if ($primeiroLogin and $siape !== $request->password) {
                return $this->sendFailedLoginResponse($request);
            }

            if ($primeiroLogin) {
                $servidor = Pessoa::where('siape', $siape);
                if ($servidor->exists()) {
                    $servidor = $servidor->first();
                    User::create([
                        'name' 		=> $servidor->nome,
                        'password' 	=> bcrypt($servidor->siape),
                        'siape' 	=> $siape,
                        'email' 	=> $servidor->email,
                        'pessoa_id' => $servidor->id
                    ]);

                    return parent::postLogin($request);
                }
                return $this->sendFailedLoginResponse($request);
            }

            return parent::postLogin($request);
        }
    }

    public function username()
    {
        return $this->userHasEmail ? 'email' : 'siape';
    }

    public function primeiroLogin($siape)
    {
        return User::where('siape', $siape)->count() === 0;
    }
}
