<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller
{
    // find the email belongs to other or not
    function emailSearch(Request $request)
    {

        $data =
            [
                "query" => $request->get('query'),
                "column" => 'email',
                "ajax" => $request->ajax(),
            ];

        $this->ajaxRequestHandler( $data );

    }

    // find the phone belongs to other or not
    function phoneSearch(Request $request)
    {

        $data =
            [
                "query" => $request->get('query'),
                "column" => 'phone',
                "ajax" => $request->ajax(),
            ];

        $this->ajaxRequestHandler( $data );
    }

    // Handler Ajax Request
    private function ajaxRequestHandler( $data )
    {

        if( $data['ajax'] )
        {

            if( $data['query'] )
            {
                $column = $data['column'];
                
                $dataDB = DB::table('users')->where($data['column'], $data['query'])->first();

                if ( $dataDB == null ) $output = 1;

                elseif( $dataDB->$column == Auth::user()->$column ) $output = 1;

                else $output = 0;

            }

            echo json_encode($output);
        }

        else
            return "You're dumb! ;)";

    }


}
