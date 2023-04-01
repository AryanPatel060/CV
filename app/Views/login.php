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
  if (isset($_SESSION['emailnotexist']))
  {
    $emailpass =$_SESSION['emailnotexist'];
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

<div class="container my-5 card w-50 p-4 shadow  bg-body-tertiary rounded align-middle">
        <div class="signup my10">
            <div class="sign-up my-2 d-flex justify-content-center p-2">
                <h1>
                    <b> Login </b>
                </h1>
            </div>
            <form method="post" action=<?= site_url('login');?>>
                <div class="row mb-3">
                    <label for="loginemail" class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" name="loginemail" id="loginemail">
                    </div>
                </div>
        
                <div class="row mb-3">
                  <label for="loginpassword" class="col-sm-2 col-form-label">Password:</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="loginpassword" name="loginpassword">
                  </div>
                </div>
                </div>
                <div class="submit d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary mr-2 ">Login</button>
                  
                  <a href="<?=site_url('/');?>" class="btn btn-secondary mx-2">cancel</a>
                  <!-- give a path to homepage -->
              </div>
              </form>
                            
              
            </div>
        </div>
        </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>