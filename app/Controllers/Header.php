<?php

namespace App\Controllers;
use \App\Models\AchivmentModel;
use \App\Models\UserModel;
use \App\Models\JoinModel;
use \App\Models\CategoryModel;




class Header extends BaseController
{
    public function index()
    {   
                   
        $model = new CategoryModel();
        $result['categorys']=$model->selectall();
                    
        // echo view('partials/header',$result);
        return rediract()->to('partials/header')->with($result);
    }
}
?>