<h3>All approved achivments of <?=session('user')->username?></h3>
<?php foreach($achivments as $achivment){

    
echo'<div>
    <p>
    <b>Title</b> = '.$achivment['achivment_title'].'<br>
    
    description = '.$achivment['achivment_desc'].'</p>        
    </div>';
}?>