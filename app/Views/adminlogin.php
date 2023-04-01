<?php 
if(isset($_SESSION['Signupdone'])){
    $signupdone = $_SESSION['Signupdone'];
    
    if($signupdone !== NULL){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        '.$signupdone.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
  }
  else if (isset($_SESSION['emailpass']))
  {
    $emailpass =$_SESSION['emailpass'];
    if($emailpass !== NULL)
    {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      '.$emailpass.'
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>';
    }
  }
?>






<div class="container my-5 d-flex justify-content-center">
<div class="card text-dark bg-light p-5 pt-4 pb-4" style="width:800px;">
<div class="container my-5">
    <h1 class="my-3">Login for admin</h1>
<div class="container">

    <form method="post" action="<?=site_url("adminlogin")?>">
        <div class="mb-3">
            <label for="adminemail" class="form-label">Admin Email</label>
            <input type="email" class="form-control" id="adminemail" name="adminemail" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="adminpassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="adminpassword" name="adminpassword">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>

        
      </div>
    </div>
</div>
    