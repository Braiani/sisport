<?php

namespace App\Http\Controllers;

use App\Jobs\SendNewUserMailJob;
use App\Pessoa;
use App\User;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\VoyagerUserController;

class UserTempController extends VoyagerUserController
{
    public function index(Request $request)
    {
        try {
            $dataType = Voyager::model('DataType')->where('slug', 'users')->first();
            $this->authorize('browse', app($dataType->model_name));
            return parent::index($request);
        } catch (\Exception $exception) {
            return redirect()->route('voyager.profile');
        }
    }

    public function store(Request $request)
    {
        $alterPass = $request->alter_pass ?? false;
        $request->merge([
            'alter_pass' => !$alterPass,
            'pessoa_id' => $request->person,
        ]);
        $return = parent::store($request);

        $user = User::where('pessoa_id', $request->pessoa_id)->first();
        $password = $request->password;
        dispatch(new SendNewUserMailJob($user, $password));

        return $return;
    }


    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $alterPass = $request->alter_pass ?? false;
        $request->merge([
            'alter_pass' =>  !$alterPass,
            'siape' => $user->siape,
            'pessoa_id' => $user->pessoa_id,
            'role_id' => $user->role_id
        ]);
        return parent::update($request, $id);
    }

    public function searchPeople(Request $request)
    {
        $search = $request->term ?? null;

        $people = Pessoa::when(!is_null($search), function ($query) use ($search) {
            $query = $query->where('nome', "LIKE", "%{$search}%");
            $query = $query->orWhere('siape', "LIKE", "%{$search}%");
            $query = $query->orWhere('email', "LIKE", "%{$search}%");

            return $query->get();
        }, function ($query) {
            return $query->limit(15)->get();
        });

        return [
            "results" => $people
        ];
    }

    public function searchPerson(Pessoa $person)
    {
        return $person->load('usuario');
    }
}
