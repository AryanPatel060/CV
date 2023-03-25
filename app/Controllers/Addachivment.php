<?php

namespace App\Controllers;
use \App\Models\AchivmentModel;


class Addachivment extends BaseController
{
    public function index()
    {
        $achivmentmodel = new AchivmentModel();

      $userid=session('user')->id;
      $title=$this->request->getpost('title');
      $desc=$this->request->getpost('desc');
      $catagory=$this->request->getpost('catagory');
      $approved=0;
      $data=[
        'user_id'=>$userid,
        'achivment_title'=>$title,
        'achivment_desc'=>$desc,
        'catagory'=>$catagory,
        'aproovment'=>$approved
    ];

    $r = $achivmentmodel->insert($data);
    if($r)
    {
        $_SESSION['achivmentadded'] = 'achivment added successfully';
        $session = session();
        $session->markAsFlashdata('achivmentadded');
       return redirect()->to('profile');

    }
    else 
    {
        echo"Error";
    }

    }

}

?>