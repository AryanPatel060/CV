
<?php 
if(isset($_SESSION['passcpass'])){
    $item = $_SESSION['passcpass'];
    if($item !== NULL){
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>'.$item.'</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
}?>

<div class="container my-4">
<div class="signup my-2">
    <div class="sign-up my-2">
        <h1>
            Signup
        </h1>
    </div>
    <form method="post" action="<?= base_url("signup");?>">
     <div class="username">
        <div class="row mb-3">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
              <input type="input" class="form-control" 
              name="username" id="username" required>
            </div>
        </div>

        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input name="useremail" type="email" class="form-control"  id="email" required>
            </div>
        </div>

        <div class="row mb-3">
          <label for="phoneno" class="col-sm-2 col-form-label">contact No</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="phoneno" id="phoneno" required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="password" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="password" id="password" required>
          </div>
        </div>
        <div class="row mb-3">
            <label for="cpassword" class="col-sm-2 col-form-label">confirm Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="cpassword" id="cpassword" required>
            </div>
          </div>
        <!-- <fieldset class="row mb-3">
          <legend class="col-form-label col-sm-2 pt-0">Profession</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="profession" id="profession" value="student" checked>
              <label class="form-check-label" for="student">
               student
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="profession" id="profession" value="faculty">
              <label class="form-check-label" for="faculty">
               faculty
              </label>
            </div>     
          </div>
        </fieldset> -->
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
      </form>
    </div>
</div>
</div>

