<?php

namespace App\Controllers;

use \App\Models\JoinModel;
use \App\Models\UserModel;
use \App\Controllers\session;

class Unknownprofile extends BaseController
{
    public function index()
    {   
        $usermodel=new UserModel();
        $joinmodel=new JoinModel();
         if(!isset($_SESSION['user'])){
            return redirect()->to('login');
        }
        $id=$this->request->getpost('userid');
    //  $result['achivments'] = $usermodel->where('id',$id)->first();
     $result['achivments'] = $joinmodel->profilebyid($id);
    //  print_r($result);
        echo view('unknownprofile',$result);
    }
}
?>