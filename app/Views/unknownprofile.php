
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
    Profile 
</h3>
<div class="container mt-4 d-flex justify-content-center">
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
        <?php foreach($achivments as $achivment):?>
        <b>username</b>:<?=$achivment['username'];?><hr>
        <b>email</b> :<?=$achivment['useremail'];?><hr>
        <b>contact no</b> :<?=$achivment['phonenumber'];?><hr>
        <b>Profession</b>:<?php if($achivment['profession']==0){echo'Student';}else if($achivment['profession']==1){echo'Faculty';}?>
        <?php break;endforeach;?>
    </p>
</div>
    </div>
  </div>
</div>
</div>

<div class="container mt-2">
    <p>
        <a class="btn btn-primary  d-flex justify-content-evenly" style="width:800px; margin-left:250px;" data-bs-toggle="collapse" href="#view" role="button" aria-expanded="false" aria-controls="collapseExample">
            view achivment
        </a>
    </p>
    <div class="collapse" id="view">
        <?php echo view('unknownachivments');?>
    </div>
</div>
</div>
<?php echo view('partials/footer');?>
