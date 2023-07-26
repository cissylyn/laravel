<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //
    public function registerMember(Request $request){
        $memba = $request->$request->validate([
            'memberId'=> 'required',
            'username'=> 'required',
            'password'=> 'required',
            'email_address'=> 'required',
            'mobile_number'=> 'required'

        ]);
        $memba['memberId']=strip_tags($memba['memberId']);
        $memba['username']=strip_tags($memba['username']);
        $memba['password']=strip_tags($memba['password']);
        $memba['email_address']=strip_tags($memba['email_address']);
        $memba['mobile_number']=strip_tags($memba['mobile_number']);
        Member::create($memba);
        return 'member registered successfully';


    }
}
