<?php

namespace App\Controllers;

use \App\Models\CategoryModel;


class Adminpanel extends BaseController
{
    public function index()
    {   
        if(isset($_SESSION['admin'])){
            $model = new CategoryModel();
             $result['categorys']=$model->selectall();
                         
            echo view('partials/header');
            echo view('adminpanel',$result);
            echo view('partials/footer');
        }
        else{
            return redirect()->to('adminlogin');
        }
    }
}
?>