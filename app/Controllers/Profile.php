<?php

namespace App\Controllers;
use \App\Models\AchivmentModel;


class Profile extends BaseController
{
    public function index()
    {
        $_SESSION['profilepage'] = 'profilepage';
        $session = session();
        $session->markAsFlashdata('profilepage');
        if(!isset($_SESSION['user'])){
            return redirect()->to('login');
        }
        else{

           $model= new AchivmentModel();
           $p=session('user')->profession;
           if($p==0){  
               $result['achivments']=$model->where('user_id',$userid)->orderby('achivment_id','desc')->findAll();
            }
            else{
                $result['achivments']=$model->orderby('achivment_id','desc')->findAll();
            }
           
            echo view('profile',$result);

        }
        
        
    }
}
?>
