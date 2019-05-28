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

        if( $request->ajax() )
        {

            $query = $request->get('query');


            if( $query )
            {
                $data = DB::table('users')->where('email', $query)->first();


                if ( $data == null ) $output = 1;

                elseif( $data->email == Auth::user()->email ) $output = 1;

                else $output = 0;


            }


            echo json_encode($output);
        }

        else
            return "You're dumb! ;)";
    }

    // find the phone belongs to other or not
    function phoneSearch(Request $request)
    {

        if( $request->ajax() )
        {

            $query = $request->get('query');


            if( $query )
            {
                $data = DB::table('users')->where('phone', $query)->first();


                if ( $data == null ) $output = 1;

                elseif( $data->phone == Auth::user()->phone ) $output = 1;

                else $output = 0;


            }


            echo json_encode($output);
        }

        else
            return "You're dumb! ;)";
    }

}
