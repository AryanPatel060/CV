<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use app\ThirdParty\Dompdf\dompdf;
use \App\Models\JoinModel;

class PdfController extends BaseController
{
    public function index() 
	{
        return view('unknownachivments');
    }
    function htmlToPDF(){
        $dompdf = new \Dompdf\Dompdf(); 
        $model= new JoinModel();
        $id = $this->request->getpost('makepdf');
        $result['achivments']=$model->profilebyid($id);
        $dompdf->loadHtml(view('pdfview',$result));
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream();
    }
}