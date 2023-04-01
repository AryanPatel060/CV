
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

if(isset($_SESSION['catadd'])){
    $catadd = $_SESSION['catadd'];
    if($catadd !== NULL){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        '.$catadd.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
  }
  if(isset($_SESSION['catdelete'])){
    $catadd = $_SESSION['catdelete'];
    if($catadd !== NULL){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        '.$catadd.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
  }
?>


<div class="container my-4 d-flex justify-content-center">
<div class="signup my-2">
  <div class="card p-5 bg-light text-dark" style="width:800px;">

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
        <!-- <div class="row mb-3">
          <label for="fphoneno" class="col-sm-2 col-form-label">contact No</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="fphoneno" id="fphoneno" required>
          </div>
        </div> -->
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
          <label for="fc1" class="form-label">Catagory</label>
            <div class="input-group mb-3">
            <select class="form-select " name="fc1" id="fc1" required>
              <option selected>Choose</option>
              <?php foreach($categorys as $category):?>
              <option value="<?=$category['category_id'];?>"><?=$category['category_name'];?></option>
              <?php endforeach;?>
            </select>
          </div>
          <label for="fc2" class="form-label">Second Catagory</label>
          <small>(if any)</small>
            <div class="input-group mb-3">
            <select class="form-select " name="fc2" id="fc2">
              <option selected>Choose</option>
              <?php foreach($categorys as $category):?>
              <option value="<?=$category['category_id'];?>"><?=$category['category_name'];?></option>
              <?php endforeach;?>
            </select>

          </div>
        </div>
        <button type="submit" class="btn btn-primary px-4">Add</button>
      </form>
    </div>
  </div>
  </div>
</div>

<div class="container">
    <p>
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            add category
        </a>
            </p>
      <div class="collapse" id="collapseExample">
        <div class="card card-body" style="width: 500px;">
            <form method="post" action="<?=site_url('addcat');?>">
                <div class="mb-3">
                  <label for="newcat" class="form-label">category</label>
                  <input type="text" class="form-control" id="newcat" name="newcat">
                </div>
                
                <button type="submit" class="btn btn-primary">Add</button>
              </form>
        </div>
      </div>
    </div>

    <div class="container">
    <table class="table mx-3  " style="width: 800px; border: 1px black solid; box-sizing: border-box;">
        <thead>
          <tr>
            <!-- <th scope="col">SNo</th> -->
            <th scope="col">Category_id</th>
            <th scope="col">category_name</th>
            <th scope="col">EDIT</th>
            <th scope="col">DELETE</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($categorys as $category):?>
          <tr>
            <!-- <th scope="row"></th> -->
            <td><?=$category['category_id'];?></td>
            <td><?=$category['category_name'];?></td>  
            <td> 
              <form class="mb-0" method="post" action="<?=site_url('editcat')?>">
                    <input type="hidden" id="catid" name="catid" value="<?=$category['category_id']?>">
                    <button class="btn btn-success" type="submit">Edit</button>
                </form>
              </td>
            <td>  
            <form class="mb-0" method="post" action="<?=site_url('deletecat')?>">
                    <input type="hidden" id="catid" name="catid" value="<?=$category['category_id']?>">
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
              </td>
          </tr>
          <?php endforeach;?>
        </tbody>
      </table>
    </div>