<h3>All approved achivments of <?=session('user')->username?></h3>
<?php foreach($achivments as $achivment){

    
echo'<div>
    <p>
    <b>Title</b> = '.$achivment['achivment_title'].'<br>
    
    description = '.$achivment['achivment_desc'].'</p>     
    Document = <img src="'.base_url("uploads/".$achivment['doc']).'" alt="img" height="300px" width="300px"> 
    <a class="btn btn-primary mb-3" href="'.base_url("uploads/".$achivment['doc']).'">View Document</a>

    </div>';
}?>