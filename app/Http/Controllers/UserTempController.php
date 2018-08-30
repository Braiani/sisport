<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use TCG\Voyager\Facades\Voyager;

class UserTempController extends VoyagerBaseController
{
    public function index(Request $request)
    {
        $dataType = Voyager::model('DataType')->where('slug', 'users')->first();
        $permissao = Voyager::can('browse_' . $dataType->slug);
        if ($permissao) {
            return parent::index($request);
        }else{
            return redirect()->route('voyager.profile');
        }
    }
}
