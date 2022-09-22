<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    // Incluimos el archivo fpdf
    require_once APPPATH."/third_party/fpdf/fpdf.php";
 
    //Extendemos la clase Pdf de la clase fpdf para que herede todas sus variables y funciones
    class Pdf extends FPDF {		
		

        // El encabezado del PDF
        public function Header(){
          if ($this->PageNo() == 1){
            $this->Image('assets/images/logo-victor.png',15,12,30);
            $this->SetFont('Arial','B',13);
            $this->Cell(30);
            $this->Cell(120,10,utf8_decode('DISTRIBUIDOR AUTORIZADO'),0,0,'C');
            $this->Ln('5');
          }
       }

	   
	   public function Footer(){
            $ahora=time();
            $ahora = date("d-m-Y H:i:s", $ahora); 

           $this->SetY(-15);
           $this->SetFont('Arial','I',7);
           //$this->Cell(0,10,$ahora.'Pag. '.$this->PageNo().'/{nb}',0,0,'R');
      }
}
?>