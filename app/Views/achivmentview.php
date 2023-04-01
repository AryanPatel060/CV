<?= view('partials/header');?>
<?php 
if(isset($_SESSION['approved'])){
    $aprooved = $_SESSION['approved'];
    
    if($aprooved !== NULL){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        '.$aprooved.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
  }
  if(isset($_SESSION['undo'])){
    $aprooved = $_SESSION['undo'];
    
    if($aprooved !== NULL){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        '.$aprooved.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
  }?>
  

<?php foreach($achivments as $achivment):?>
<div class="container my-5 d-flex justify-content-center">
        <div class="p-5 w-75 bg-body-tertiary border rounded-3">
        <div class="row">
            <div id="data" class="col">
                <div class=" d-flex flex-row ">
                    <div class="p-2">
                        <img src="https://www.logolynx.com/images/logolynx/s_4b/4beebce89d681837ba2f4105ce43afac.png" width="50px" class="img-fluid rounded-start" class="card-img-top" >
                    </div> 
                    <div class="p-2">
                        <h6 class="card-title"><b><?=$achivment['username']?></b></h6>
                        <p class="card-text"><?=$achivment['useremail']?></p>        
                    </div>
                    <div class="col mt-3 mx-5">
                                <form method="post" action="<?=site_url('unknownprofile')?>">
                                    <input type="hidden" id="userid" name="userid" value="<?=$achivment['id']?>">
                                    <button class="btn btn-primary" type="submit">View profile</button>
                                </form>
                    </div>
                </div>
            </div>
        </div>

            <h2 class="my-3">Achivment</h2>
            <h5>Title</h5>
            <p><?=$achivment['achivment_title']?></p>
            <h5>Discription</h5>
            <p><?=$achivment['achivment_desc']?> </p>
            <?php if($achivment['doc']!=NULL){
                echo'<a class="btn btn-primary mb-3" href="'.base_url("uploads/".$achivment['doc']).'">View Document</a>';
            }
                else{
                  echo'<h6 class="text-muted opacity-50">(Achivment not contain any document):</h6>';
                }
           ?>
            <?php 
            if(isset($_SESSION['user'])){if(session('user')->profession==1 && $achivment['aproovment'] == 0):?>
            <form method="post" action="<?=site_url('aproove')?>">
                <input type="hidden" id="achivmentid" name="achivmentid" value="<?=$achivment['achivment_id'];?>">
                <button class="btn btn-primary"  type="submit">Aproove Achivment</button>
            </form>
            <?php endif;}?>
            <?php if($achivment['aproovment']==1):?>
            <form>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Aproove Undo</button>
            </form>
            <?php endif;?>

            
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reason For Undo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form method="post" action="<?=site_url('undoaproove')?>">
            <div class="mb-3">
                <label for="reason" class="form-label">Reason for Undo</label>
                <textarea class="form-control" id="reason" name="reason" rows="3"></textarea>
            </div>
            <input type="hidden" id="achivmentid" name="achivmentid" value="<?=$achivment['achivment_id'];?>">
            <button class="btn btn-danger"  type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal">Aproove Undo</button>
        </form>
    </div>
    <div class="modal-footer">
      </div>
    </div>
  </div>
</div> 



            <div class="row">
            <div class="col"><h6 >Catagory : <?=$achivment['catagory']?></h6></div>
            <div class="col"><?php if($achivment['aproovment'] == 0){echo '<h6 class="text-danger">Approvel Pending</h6>';}else{echo'<h6 class="text-success">Approved</h6>';}?>
            </div>
            </div>
            <div class="row"><?php if($achivment['aproovment'] == 1){echo '<h6 class="text-danger">Approved By : '.$achivment['approvedby'].'</h6>';}?>
            </div>
            <div class="row">
            
            <?php
            if(isset($_SESSION['user'])){
             if($achivment['aproovment'] == 0 && session('user')->profession==0){echo '<h6 class="text-muted opacity-50">(only Faculty can Approve this):</h6>';}}
             else{
                echo '<h6 class="text-muted opacity-50">(login for approve):</h6>';
             }?></div>
            
        </div>
    </div>
</div>
</div>
<?php endforeach;?>
<?= view('partials/footer');?>
