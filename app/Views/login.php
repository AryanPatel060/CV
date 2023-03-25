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


<div class="container">
        <h1>
          Login
        </h1>
        <form method="post" action="<?= base_url("login");?>">
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="password">
            </div>
            <button type="submit" class="btn btn-primary">login</button>
          </form>
      </div>
        
      </div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>