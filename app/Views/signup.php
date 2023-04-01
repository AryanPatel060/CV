
<?php 
if(isset($_SESSION['passcpass'])){
    $item = $_SESSION['passcpass'];
    if($item !== NULL){
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>'.$item.'</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
}
if(isset($_SESSION['emailalready'])){
  $item = $_SESSION['emailalready'];
  if($item !== NULL){
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>'.$item.'</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
  }
}
if(isset($_SESSION['usernamealready'])){
  $item = $_SESSION['usernamealready'];
  if($item !== NULL){
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>'.$item.'</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
  }
}
?>


<div class="container my-5 card w-50 p-4 shadow p-3 mb-5 bg-body-tertiary rounded:">
<div class="signup my10">
    <div class="sign-up my-2 d-flex justify-content-center p-2">
        <h1>
            <b>Sign Up</b>
        </h1>
    </div>
    <form method="post" action=<?=site_url('signup');?>>
     <div class="username">
        <div class="row mb-3">
            <label for="username" class="col-sm-2 col-form-label">Username :</label>
            <div class="col-sm-10">
              <input type="input" class="form-control" name="username" id="username">
            </div>
        </div>

        <div class="row mb-3">
            <label for="useremail" class="col-sm-2 col-form-label">Email :</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" name="useremail" id="useremail">
            </div>
        </div>

        <div class="row mb-3">
          <label for="phoneno" class="col-sm-2 col-form-label">ContactNo :</label>
          <div class="col-sm-10">
            <input type="tel" class="form-control" name="phoneno" id="phoneno">
          </div>
        </div>
        <div class="row mb-3">
          <label for="password" class="col-sm-2 col-form-label">Password :</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="password" id="password">
          </div>
        </div>
        <div class="row mb-3">
            <label for="cpassword" class="col-sm-2 col-form-label">Confirm Password :</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="cpassword" id="cpassword">
            </div>
          </div>
      
        </div>
        <div class="submit d-flex justify-content-center">
          <button type="submit" class="btn btn-primary mx-2 ">SignUp</button>
          <button type="reset" class="btn btn-secondary mx-2">Reset</button>
      </div>
      </form>
    </div>
</div>
</div>
 
