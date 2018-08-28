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
        if (strpos($request->email, '@') !== false) {
            $this->userHasEmail = true;
        }
        

        if ($this->userHasEmail) {
            
            return parent::postLogin($request);

        }else{
            $siape = $request->email;
            $request->merge(['siape' => $siape]);


            if ($this->primeiroLogin($siape) and $siape !== $request->password) {
                return $this->sendFailedLoginResponse($request);
            }

            if ($this->primeiroLogin($siape)) {
                $servidor = Pessoa::where('siape', $siape)->count() > 0;

                if ($servidor) {

                    if (User::where('siape', $siape)->count() > 0) {
                        return parent::postLogin($request);
                    }

                    $servidor = Pessoa::where('siape', $siape)->first();
                    User::create([
                        'name' => $servidor->nome,
                        'password' => bcrypt($servidor->siape),
                        'siape' => $siape,
                        'email' => $servidor->email
                    ]);

                    return parent::postLogin($request);
                }
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
        return User::where('siape', $siape)->count() == 0;
    }
}
