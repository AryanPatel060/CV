<?php echo view('partials\header');?>

<?php foreach($achivments as $achivment):?>
    <div class="container my-5 d-flex justify-content-center">
    <div class="card" style="width:800px;">
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
                 </div>
        </div>
        <div class="col mt-3">
         <div class="row">
            <div class="col">
                <form method="post" action="<?=site_url('achivmentview')?>">
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
<div class="mx-2"><hr></div>
<div class="row ">
    <div class="d-flex justify-content-between">
    <div class="container col m-3 mt-0">
        <div><h4><?=$achivment['achivment_title']?></h4></div>
        <div class="data opacity-75"><?=$achivment['achivment_desc']?></div>
    </div>
    <div class="col"><h6>Catagory:<?=$achivment['catagory']?></h6></div>
    </div>
</div>
</div>
</div>
</div>
<?php endforeach;?>
<?php echo view('partials\footer');?>
