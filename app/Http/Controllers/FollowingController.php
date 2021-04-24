<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FollowingController extends Controller
{
    public function __invoke($identifier,$follow){
        $user=User::where('hash',$identifier)->orWhere('username',$identifier)->firstOrFail();
        if($follow=="following"){
            $follows=$user->follows()->paginate(1);
        }else{
            $follows=$user->followers()->paginate(1);
        }
        return view('follows.index',compact('follow','follows'));
    }

}
