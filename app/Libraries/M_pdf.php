<?php if(defined('BASEPATH')) exit('No script access allowed');
 define('PROJECT_ROOT_PATH', __DIR__);
include_once(APPPATH.'/ThirdParty/mpdf/mpdf-mpdf-84a5568');
class M_pdf {

    public $param;
    public $pdf;
    
    public function __construct($param ='"en-GB-x","A4","","",10,10,10,10,6,3')
    {
        $this->param=$param;
        $this->pdf = new mPDF($this->param);
    }
}
?>