<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\Authorization;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function __construct(Request $req){
        date_default_timezone_set('Asia/Jakarta');
        $this->request = $req;
    }

    public function index(){
        if (Session::get('id_user') <= 0) :
            return redirect('/');
        endif;

        $user = Authorization::getUserInfo();
        return view("user.index",compact('user'));
    }
}