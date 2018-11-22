<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function insert(Request $req)
    {
        $id = $req->input('id');
        $name = $req->input('name');
        $description = $req->input('description');
        $price = $req->input('price');

        $data= array('id'=>$id,'name'=>name,'description'=>$description,'price'=>$price);

    }
}
