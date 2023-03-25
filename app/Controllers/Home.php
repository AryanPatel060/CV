<?php

namespace App\Controllers;
use \App\Models\AchivmentModel;
use \App\Models\UserModel;
use \App\Models\JoinModel;



class Home extends BaseController
{
    public function index()
    {   
        $_SESSION['homepage'] = 'homepage';
            $session = session();
            $session->markAsFlashdata('homepage');
        $record=new JoinModel();       
        $r['achivments']=$record->getallachivment();
        echo view('home',$r);
    }
}
?>