<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected function Alert($status,$msg,$array = []){
        return response()
            ->json(['status' => $status, 'message' => $msg, "array" => $array]);
    }
    protected function SwAlert($status,$msg,$detail = null,$tab = null){
        if($status == true){
            return redirect()->back()->withInput()->with("swalert",'<script>swAlert("'.$msg.'","'.$detail.'","success");activaTab("'.$tab.'")</script>');
        }else{
            return redirect()->back()->withInput()->with("swalert",'<script>swAlert("'.$msg.'","","error");</script>');
        }
    }
}
