<?php

namespace App\Http\Controllers;

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
            return redirect()->route('voyager.profile')->with([
                'message' => 'Voce não tem permissão para acessar aquele local.',
                'alert-type' => 'error'
            ]);
        }
    }
}
