<?php

namespace App\Controllers;
use \App\Models\AchivmentModel;
use \App\Models\UserModel;
use \App\Models\JoinModel;
use \App\Models\CategoryModel;




class Home extends BaseController
{
    public function index()
    {   
        
        
        $_SESSION['homepage'] = 'homepage';
        $session = session();
        $session->markAsFlashdata('homepage');
        
         
        $record=new JoinModel();       
            if($this->request->getGet('search')){
                $q=$this->request->getGet('search');
                $r['achivments']=$record->findlike('achivment_title',$q);
            }
            else{
                $r['achivments']=$record->getallachivment();
            }

            $model = new CategoryModel();
        $result['categorys']=$model->selectall();
                    
            echo view('partials/header2',$result);
        echo view('home',$r);
    }
}
?>