<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\LikeEvent;

class FrontendController extends Controller
{
    public function like(Request $request){
        $params = [
            'name'      => $request->get('name'),
            'message'   => $request->get('name'). ' curtiu sua publicação',
            'id'        => $request->get('id')
        ];

        event(new LikeEvent($params, 'like'));
    }
}
