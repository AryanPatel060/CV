

<?php    $i=0;
 foreach($achivments as $achivment):
 $i++;?>
    <div class="container my-5 d-flex justify-content-center">
    <div class="card text-dark bg-light " style="width:800px">
        <div class="row pt-2 mb-0">
            <div id="data" class="col">
                <div class=" d-flex flex-row ">
                    <div class="p-2 mx-2">
                        <img src="https://www.logolynx.com/images/logolynx/s_4b/4beebce89d681837ba2f4105ce43afac.png" width="50px" class="img-fluid rounded-start" class="card-img-top" >
                    </div> 
                    <div class="pt-2 pl-2">
                        <h6 class="card-title"><b><?=$achivment['username']?></b></h6>
                        <p class="card-text"><?=$achivment['useremail']?></p>        
                    </div>
                 </div>
        </div>
        <div class="col mt-3 mb-0">
         <div class="row">
            <div class="col">
                <form class="mb-0" method="post" action="<?=site_url('achivmentview')?>">
                    <input type="hidden" id="achivmentid" name="achivmentid" value="<?=$achivment['achivment_id']?>">
                    <button class="btn btn-primary" type="submit">View achivment</button>
                </form>
            </div>
            <div class="col">
                <form method="post" action="<?=site_url('unknownprofile')?>">
                    <input type="hidden" id="userid" name="userid" value="<?=$achivment['id']?>">
                    <button class="btn btn-primary" type="submit">View profile</button>
                </form>
            </div>
        </div>
    </div>
    
</div>
<hr class="my-0">
<div class="row mt-3">
    <div class="d-flex justify-content-between">
    <div class="container col m-3 mt-0">
        <div><h4><?=$achivment['achivment_title']?></h4></div>
        <div class="data opacity-75"><?=$achivment['achivment_desc']?></div>
    </div>
    <div class="col">
    <div class="row"><h6 >Catagory : <?=$achivment['catagory']?></h6></div>
    <div class="row"><?php if($achivment['aproovment'] == 0){echo '<h6 class="text-danger">Approvel Pending</h6>';}else{echo'<h6 class="text-success">Approved</h6>';}?>
    </div>
    <div class="row"><?php if($achivment['aproovment'] == 1){echo '<h6 class="text-danger">Approved By : '.$achivment['approvedby'].'</h6>';}?>
            </div>
    </div>
    </div>
</div>
</div>
</div>
</div>
<?php endforeach;?>

<?php if($i==0){
   echo'<div class="container my-5 d-flex justify-content-center">
   <div class="card p-5" style="width:500px">
   <h1>Sorry, there is no data to show</h1>
   </div>
</div>';

}?>
<?php echo view('partials\footer');?>

