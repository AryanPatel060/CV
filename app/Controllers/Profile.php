<?php

namespace App\Controllers;
use \App\Models\AchivmentModel;
use \App\Models\JoinModel;



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
           $userid=session('user')->id;
           $p=session('user')->profession;

        if($p==0){
            $record=new JoinModel();       
            if($this->request->getGet('search')){
                $q=$this->request->getGet('search');
                $result['achivments']=$record->findlike('achivment_title',$q);
            }
            else{
            $result['achivments']=$model->where('user_id',$userid)->orderby('achivment_id','desc')->findAll();
        }}
        else{
            $record=new JoinModel();       
            if($this->request->getGet('search')){
                $q=$this->request->getGet('search');
                $result['achivments']=$record->findlike('achivment_title',$q);
            }
            else{
            $result['achivments']=$model->orderby('achivment_id','desc')->findAll();
            }
        }
           
            echo view('profile',$result);

        }
        
        
    }
}
?>
