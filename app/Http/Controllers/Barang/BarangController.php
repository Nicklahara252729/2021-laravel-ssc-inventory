<?php

namespace App\Http\Controllers\Barang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\Authorization;
use Illuminate\Support\Facades\Session;
use App\Repositories\Barang\BarangRepositories;

class BarangController extends Controller
{
    public function __construct(Request $req,
    BarangRepositories $BarangRepositories){
        date_default_timezone_set('Asia/Jakarta');
        $this->request = $req;
        $this->BarangRepositories = $BarangRepositories;
    }

    public function index(){
        if (Session::get('id_user') <= 0) :
            return redirect('/');
        endif;
        $active = "barang";
        $user   = Authorization::getUserInfo();
        $view   = $this->BarangRepositories->viewData();
        return view("barang.index",compact('user','active','view'));
    }

    public function saveData()
    {
        $req      = $this->request;
        $response = $this->BarangRepositories->saveData($req);
        return response($response);
    }
    
    public function saveTakeOutData()
    {
        $req      = $this->request;
        $response = $this->BarangRepositories->saveTakeOutData($req);
        return response($response);
    }

    public function saveRestock()
    {
        $req      = $this->request;
        $response = $this->BarangRepositories->saveRestock($req);
        return response($response);
    }

    public function deleteData()
    {
        $req      = $this->request;
        $response = $this->BarangRepositories->deleteData($req->id);
        return response($response);
    }

    public function getData()
    {
        $req      = $this->request;
        $response = $this->BarangRepositories->getData($req->id);
        return response($response);
    }

}
