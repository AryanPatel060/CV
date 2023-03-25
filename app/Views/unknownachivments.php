<div class="container ">
<div class="row">
<div class="col">
<h1 class="container my-3">Pending Achivment</h1>

<!-- show achivments -->
<?php $i=0; foreach($achivments as $achivment): ?>
      <?php if($achivment['aproovment']==0):?>
            <div class="card w-75 my-2 d-flex justify-content-evenly">
                <div class="row">
                    <div class="col">
                        <div class="card-body">
                            <h5 class="card-title"><?=$achivment['achivment_title']?></h5>
                            <p class="card-text"><?=$achivment['achivment_desc']?></p>
                            <form method="post" action="<?=site_url('achivmentview')?>">
                 <input type="hidden" id="achivmentid" name="achivmentid" value="<?=$achivment['achivment_id']?>">
                 <button class="btn btn-primary" type="submit">View achivment</button>
                </form>
                        </div>
                    </div>
                    <div class="col">
                        <p class="my-2">
                            Catagory:<?=$achivment['catagory']?>
                        </p>
                    </div>
                </div>
            </div>
<?php endif;?>
<?php endforeach;?>

</div>
    <div class="col">
    <h1>Aprooved Achivment</h1>
    <?php $i=0; foreach($achivments as $achivment): ?>
<?php if($achivment['aproovment'] == 1):?> 
    <div class="card w-75 my-2">
        <div class="row">
            <div class="col">
                <div class="card-body">
                    <h5 class="card-title"><?=$achivment['achivment_title']?></h5>
                    <p class="card-text"><?=$achivment['achivment_desc']?></p>
                    <form method="post" action="<?=site_url('achivmentview')?>">
                 <input type="hidden" id="achivmentid" name="achivmentid" value="<?=$achivment['achivment_id']?>">
                 <button class="btn btn-primary" type="submit">View achivment</button>
                </form>
                </div>
            </div>
            <div class="col">
                <p class="my-2">
                    Catagory:<?=$achivment['catagory']?>
                </p>
            </div>
        </div>
    </div>
    <?php endif;?>
    <?php endforeach;?>
</div>
</div>        