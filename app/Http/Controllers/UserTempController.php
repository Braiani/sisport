<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

class UserTempController extends VoyagerBaseController
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

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $request->merge([
            'alter_pass' => $user->alter_pass,
            'siape' => $user->siape,
            'pessoa_id' => $user->pessoa_id,
            'role_id' => $user->role_id
        ]);
        return parent::update($request, $id);
    }


}
