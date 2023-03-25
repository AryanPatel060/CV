<?php

namespace App\Controllers;
use \App\Models\AchivmentModel;
use \App\Models\UserModel;
use \App\Models\JoinModel;



class Adminpanel extends BaseController
{
    public function index()
    {   
        if(isset($_SESSION['admin'])){
            echo view('partials/header');
            echo view('adminpanel');
            echo view('partials/footer');
        }
        else{
            return redirect()->to('adminlogin');
        }
    }
}
?>