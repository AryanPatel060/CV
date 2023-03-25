
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
if(isset($_SESSION['Signupdone'])){
    $signupdone = $_SESSION['Signupdone'];
    
    if($signupdone !== NULL){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        '.$signupdone.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
  }
?>

<div class="container my-4">
<div class="signup my-2">
    <div class="sign-up my-2">
        <h1>
            Add Faculty
        </h1>
    </div>
    <form method="post" action="<?=site_url("addfaculty");?>">
     <div class="username">
        <div class="row mb-3">
            <label for="fusername" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
              <input type="input" class="form-control" 
              name="fusername" id="fusername" required>
            </div>
        </div>

        <div class="row mb-3">
            <label for="fuseremail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input name="fuseremail" type="email" class="form-control"  id="fuseremail" required>
            </div>
        </div>
        <div class="row mb-3">
          <label for="fphoneno" class="col-sm-2 col-form-label">contact No</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="fphoneno" id="fphoneno" required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="fpassword" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="fpassword" id="fpassword" required>
          </div>
        </div>
        <div class="row mb-3">
            <label for="fcpassword" class="col-sm-2 col-form-label">confirm Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="fcpassword" id="fcpassword" required>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
      </form>
    </div>
</div>
</div>

