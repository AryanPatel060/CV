<?php 


namespace App\Controllers;
// namespace App\Libraries;

use \App\Models\AchivmentModel;
use \App\Models\UserModel;
use \App\Models\JoinModel;
use \App\Models\PdfModel;
use \App\Libraries\M_pdf;

class Pdf extends BaseController
{
    public function __construct()
    {
        $l= new M_pdf();
        parent::__construct();
        // $this->load->library('M_pdf');
        $model = new JoinModel();

    }

    public function index()
    {
        $model = new JoinModel();

      $datatbl="";
      $datatbl =`div class="container my-5 d-flex justify-content-center">
      <div class="p-5 w-75 bg-body-tertiary border rounded-3">
      <div class="row">
          <div id="data" class="col">
              <div class=" d-flex flex-row ">
                  <div class="p-2">
                      <img src="https://www.logolynx.com/images/logolynx/s_4b/4beebce89d681837ba2f4105ce43afac.png" width="50px" class="img-fluid rounded-start" class="card-img-top" >
                  </div> 
                  <div class="p-2">
                      <h6 class="card-title"><b></b></h6>
                      <p class="card-text"></p>        
                  </div>
              </div>
          </div>
      </div>

          <h2 class="my-3">Achivment</h2>
          <h5>Title</h5>
          <p>['achivment_title']</p>
          <h5>Discription</h5>
          <p>['achivment_desc']</p>
          <?php endif;?>
          <div class="row">
          <div class="col"><h6 >Catagory :['catagory']</h6></div>
          </div>
          </div>
      </div>
  </div>
</div>
</div>`;


        $data['achivments'] = $model->getallachivment();
         foreach($data['achivments'] as $achivment):
         $datatbl .=`div class="container my-5 d-flex justify-content-center">
         <div class="p-5 w-75 bg-body-tertiary border rounded-3">
         <div class="row">
             <div id="data" class="col">
                 <div class=" d-flex flex-row ">
                     <div class="p-2">
                         <img src="https://www.logolynx.com/images/logolynx/s_4b/4beebce89d681837ba2f4105ce43afac.png" width="50px" class="img-fluid rounded-start" class="card-img-top" >
                     </div> 
                     <div class="p-2">
                         <h6 class="card-title"><b>`.$achivment['username'].`</b></h6>
                         <p class="card-text">`.$achivment['useremail'].`</p>        
                     </div>
                 </div>
             </div>
         </div>
   
             <h2 class="my-3">Achivment</h2>
             <h5>Title</h5>
             <p>`.$achivment['achivment_title'].`</p>
             <h5>Discription</h5>
             <p>`.$achivment['achivment_desc'].`</p>
             <?php endif;?>
             <div class="row">
             <div class="col"><h6 >Catagory :`.$achivment['catagory'].`</h6></div>
             </div>
             </div>
         </div>
     </div>
   </div>
   </div>`;
            endforeach;

        // $this->load->library('M_pdf');
        $l=new M_pdf();
        $pdfFilePath="cvuser.pdf";
        $va=$l->pdf->writeHTML($datatbl);
        $this->M_pdf->Output($pdfFilePath,"D");
    }
   
}


?>