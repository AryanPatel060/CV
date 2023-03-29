
<?php
echo view('partials\header');
if(!isset($_SESSION['user'])){
    echo 'returning to login';
    return redirect()->to('login');
}

if(isset($_SESSION['achivmentadded'])){
    $item = $_SESSION['achivmentadded'];
    if($item !== NULL){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>'.$item.'</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
}
?>
<?php $all=0;$approved=0; foreach($achivments as $achivment){
if($achivment['aproovment'] == 1){
    $approved = $approved+1;
} 
    
    $all=$all+1;
} ?>

<!-- profiole details -->
<h3 class="container my-3 d-flex justify-content-center">
    welcome to your 
    profile <?= session('user')->username;?>
</h3>
<div class="container d-flex justify-content-center">
<div class="card mb-3" style="width:1000px;">
  <div class="row">
    <div class="col-md-4 m-5 d-flex justify-content-center">
      <img src="https://www.logolynx.com/images/logolynx/s_4b/4beebce89d681837ba2f4105ce43afac.png" class="img-fluid rounded-start" >
    </div>
    <div class="col-md-4 d-flex justify-content-center" >
      <div class="card-body">
        <h5 class="card-title">Information</h5>
        <p class="card-text">
        <br>
        <b>name</b> :<?=session('user')->username;?><hr>
        <b>email</b> :<?=session('user')->useremail;?><hr>
        <b>contact no</b> :<?=session('user')->phonenumber;?><hr>
        <b>Profession</b>:<?php if(session('user')->profession==0){echo'Student';}else if(session('user')->profession==1){echo'Faculty';}?><hr>
<div class="text-muted"><h6>Totle achivments : <?=$all?></h6>
                         <h6>Approved : <?=$approved?></h6></div>

    </p>
</div>
    </div>
  </div>
</div>
</div>

<!-- add achivments -->
<?php if(session('user')->profession==0):?>
<div class="container my-5 ">

    <p>
        <a class="btn btn-primary  d-flex justify-content-evenly" style="width:800px; margin-left:250px;" data-bs-toggle="collapse" href="#add" role="button" aria-expanded="false" aria-controls="collapseExample">
            Add achivment
        </a>
    </p>
    <div class="collapse" id="add">
        <?php 
echo view('addachivment');
?>
</div>
</div>
<?php endif;?>





<div class="container ">
<?php if(session('user')->profession==0){echo'<div class="row">
<div class="col">';}?>
<h1><?php if(session('user')->profession==0){echo'Your Achivment';}else if(session('user')->profession==1){echo'Pending Achivment';}?></h1>

<!-- show achivments -->
<?php $i=0; foreach($achivments as $achivment): 
     if($achivment['aproovment']==0):?>
            <div class="card w-75 my-2">
                <div class="row">
                    <div class="col">
                        <div class="card-body">
                            <h5 class="card-title"><?=$achivment['achivment_title']?></h5>
                            <p class="card-text"><?=$achivment['achivment_desc']?></p>
                            <form method="post" action="<?=site_url('achivmentview')?>">
                            <input type="hidden" id="achivmentid" name="achivmentid" value="<?=$achivment['achivment_id']?>">
                            <button class="btn btn-primary" type="submit">View achivment</button>
                            </form>
                            <div class="row">
                            <div class="col"><h6 >Catagory : <?=$achivment['catagory']?></h6></div>
                            <div class="col"><h6 class="text-danger">Approval Pending</h6></div>
                            </div>
                            <div class="row"><?php if($achivment['aproovment'] == 1){echo '<h6 class="text-danger">Approved By : '.$achivment['approvedby'].'</h6>';}?>
            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php $i=$i+1;endif;?>
    <?php endforeach;?>
    <?php if($all==0){echo'<h6 class="text-muted opacity-50 mb-3">No Achivments Added Yet!</h6>';}else if($i==0){echo'<h6 class="text-muted opacity-50">All achivments are approved!</h6>';}?>
    </div>
    <?php if(session('user')->profession==0):?>
        <div class="col"> 
            <h1>Aprooved Achivment</h1>
            <?php $i=0; foreach($achivments as $achivment): ?>
                <?php if($achivment['aproovment'] == 1):?>   
                    <div class="card w-75 my-2">
                        <div class="row">
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="card-title"><?=$achivment['achivment_title']?></h5>
                                    <p class="card-text"><?=$achivment['achivment_desc']?></p>
                                    <form method="post" action="<?=site_url('achivmentview')?>">
                                    <input type="hidden" id="achivmentid" name="achivmentid" value="<?=$achivment['achivment_id']?>">
                                    <button class="btn btn-primary" type="submit">View achivment</button>
                                    </form>
                                    <div class="row">
                                        <div class="col"><h6 >Catagory : <?=$achivment['catagory']?></h6></div>
                                        <div class="col"><h6 class="text-success">Approved</h6></div>
                                    </div>
                                    <div class="row"><?php if($achivment['aproovment'] == 1){echo '<h6 class="text-danger">Approved By : '.$achivment['approvedby'].'</h6>';}?>
            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif;?>
            <?php endforeach;?>
    <?php endif;?>   
    <?php if($approved==0){echo'<h6 class="text-muted opacity-50">Approved Achivment comes here</h6>';}?>
</div>
</div>        
</div> 

<?php if(session('user')->profession == 0):?>
<div class="container ">
<h5 class="my-3"><spam>Download Your Achivments For Resume</spam> </h5>    

<form method="post" action="<?=site_url('makepdf')?>">
<input type="hidden" id="makepdf" name="makepdf" value="<?=session('user')->id;?>">
<button class="btn btn-primary" type="submit">Download</button>
</form>
</div>

<?php endif;?>

<!-- <button class="btn btn-primary" onclick="generatepdf()">Download</button> -->

<?php echo view('partials/footer');?>