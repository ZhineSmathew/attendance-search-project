<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttendanceController extends Controller
{
    public function searchAttendance(Request $request)
    {
        $input = $request->get('parameter');
        $query = DB::table('attendances');
        if($input)
        {
            if (filter_var($input, FILTER_VALIDATE_EMAIL)) {
                $query->join('internal_users', 'attendances.internal_user_id','=','internal_users.id')
                        ->where('internal_users.email',$input)
                        ->select('attendances.*', 'internal_users.username','internal_users.email','internal_users.phone');
            }
            else {
                $query->join('external_users', 'attendances.external_user_id','=','external_users.id')
                        ->where('external_users.phone_2',$input)
                        ->select('attendances.*', 'external_users.phone_2','external_users.address','external_users.dob');
            }
        }
        $request  = $query->get();
        if ($request->isEmpty()){
            return response() ->json(['message'=>'Data Not Found']);
        }
        return response()->json([
                'status_code' => 200,
                'data' => $request
            ]);
        }
}
