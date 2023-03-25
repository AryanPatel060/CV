<?= view('partials/header');?>
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
            <p><?=$achivment['achivment_desc']?></p>
            <form method="post" action="<?=site_url('aproove')?>">
                <input type="hidden" id="userid" name="userid" value="<?$achivment['achivment_id']?>">
                <button class="btn btn-primary" type="submit">Aproove Achivment</button>
            </form>
        </div>
    </div>
</div>
</div>
<?php endforeach;?>
<?= view('partials/footer');?>
