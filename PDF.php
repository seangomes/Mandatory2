<?php
require('fpdf17/fpdf.php');

class PDF extends FPDF
{

	function setInfomation($name, $address, $city)
	{
		
		$this->addPage();
		$this->SetFont('Arial','B',32);
		$this->Cell(0,10,'Webshop!',0,1,'C');
		$this->Ln();
		$this->SetFont('Arial','',16);
		$this->Cell(30,20,'Navn:  ' . $name);
		$this->Cell(120,20,'');
		$this->SetFont('Arial','',10);
		$this->Cell(30,20,'DATE:  ');
		$this->Ln();
		$this->SetFont('Arial','',16);
		$this->Cell(30,20,'Adresse:  ' . $address);
		$this->Cell(120,20,'');
		$this->SetFont('Arial','',10);
		$this->Cell(30,20,'Invoice nr:  ');
		$this->Ln();
		$this->SetFont('Arial','',16);
		$this->Cell(30,20,'By:  ' . $city);
	}
	
	function setOrder($array1, $array2)
	{
		
		$this->Ln();
		$this->Ln();
		$this->Ln();
		
		//Invoice table
		$this->SetFont('Arial','',12);
		$this->Cell(30,10,'ODRE');
		$this->Line(150,140,10,140	);
		
		$this->Ln();
		$this->SetFont('Arial','',10);
		$this->Cell(30,10,$array1[0]);
		$this->Cell(30,10,$array1[1]);
		$this->Cell(70,10,'');
		$this->Cell(30,10, $array1[2]*$array1[1],',- kr');
		
		$this->Ln();
		
		$this->Cell(30,10,$array2[0]);
		$this->Cell(30,10,$array2[1]);
		$this->Cell(70,10,'');
		$this->Cell(30,10, $array2[2]*$array2[1],',- kr');
		
		$this->Ln();
		$this->Line(150,200,10,200);
		$this->Ln();
		
		
		$this->Cell(90,10,'');
		$this->Cell(30,10,'Amount');
		
		$this->Cell(30,10,$array2[2]*$array2[1]+$array1[2]*$array1[1]);
		$this->Ln();
		$this->Cell(90,10,'');
		$this->Cell(30,10,'Moms 25%');
		$this->Cell(30,10,1.25*($array2[2]*$array2[1]+$array1[2]*$array1[1]));
		
		$this->Ln();
		$this->Cell(90,5,'');
		$this->Cell(30,5,'Total', 'B');
		$this->Cell(12,5,1.25*($array2[2]*$array2[1]+$array1[2]*$array1[1]),'B');
	}
	
	function setBankInfo($bankInfo) {
		
		$this->Ln();
		$this->Ln();
		$this->Ln();
		$this->Ln();
		$this->Cell(30,5,'BANK X-BANK');
		$this->Ln();
		$this->Cell(30,5,'ACCOUNT 1234 1212121212');
		$this->Ln();
		$this->Cell(30,5,'ACCOUNT 1234 1212121212');
		
		$this->Ln();
		$this->Ln();
		$this->Ln();
		$this->Cell(110,5,'');
		$this->SetFont('Arial','B',10);
		$this->Cell(30,5,'Company name');
		$this->Ln();
		$this->Cell(110,5,'');
		$this->SetFont('Arial','',10);
		$this->Cell(30,5,'Vejnavn');
		$this->Ln();
		$this->Cell(110,5,'');
		$this->Cell(30,5,'123 Bynavn');
		$this->Ln();
		$this->Cell(110,5,'');
		$this->Cell(30,5,'Tlf: 34 34 34 34');
		$this->Output();
	}



}
?>