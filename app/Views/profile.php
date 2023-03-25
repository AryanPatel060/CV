
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
        <b>Profession</b>:<?php if(session('user')->profession==0){echo'Student';}else if(session('user')->profession==1){echo'Faculty';}?>
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
<h1 class="container my-3"><?php if(session('user')->profession==0){echo'Your Achivment';}else if(session('user')->profession==1){echo'Pending Achivment';}?></h1>

<!-- show achivments -->
<?php $i=0; foreach($achivments as $achivment): ?>
      <?php if($achivment['aproovment']==0):?>
            <div class="card w-75 my-2 d-flex justify-content-evenly">
                <div class="row">
                    <div class="col">
                        <div class="card-body">
                            <h5 class="card-title"><?=$achivment['achivment_title']?></h5>
                            <p class="card-text"><?=$achivment['achivment_desc']?></p>
                            <form method="post" action="<?=site_url('achivmentview')?>">
                 <input type="hidden" id="achivmentid" name="achivmentid" value="<?=$achivment['achivment_id']?>">
                 <button class="btn btn-primary" type="submit">View achivment</button>
                </form>
                        </div>
                    </div>
                    <div class="col">
                        <p class="my-2">
                            Catagory:<?=$achivment['catagory']?>
                        </p>
                    </div>
                </div>
            </div>
<?php endif;?>
<?php endforeach;?>

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
                </div>
            </div>
            <div class="col">
                <p class="my-2">
                    Catagory:<?=$achivment['catagory']?>
                </p>
            </div>
        </div>
    </div>
    <?php endif;?>
    <?php endforeach;?>
    <?php endif;?>   
</div>
</div>        
<?php echo view('partials/footer');?>