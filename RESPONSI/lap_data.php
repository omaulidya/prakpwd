<?php
// memanggil library FPDF
require('fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'HASIL DATA REKAM MEDIS',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR PASIEN',0,1,'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(5,7,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,6,'NAMA PASIEN',1,0);
$pdf->Cell(25,6,'TTL',1,0);
$pdf->Cell(20,6,'ALAMAT',1,0);
$pdf->Cell(20,6,'HASIL',1,0);
$pdf->Cell(50,6,'TINDAKAN',1,0);
$pdf->Cell(52,6,'PEMERIKSA',1,1);
$pdf->SetFont('Arial','',10);
include 'koneksi.php';
$pasien = mysqli_query($con, "select * from data_pasien");
while ($row = mysqli_fetch_array($pasien)){
 $pdf->Cell(30,6,$row['nama'],1,0);
 $pdf->Cell(25,6,$row['ttl'],1,0);
 $pdf->Cell(20,6,$row['temting'],1,0);
 $pdf->Cell(20,6,$row['hasil'],1,0); 
$pdf->Cell(50,6,$row['tindakan'],1,0);
$pdf->Cell(52,6,$row['dokter'],1,1);
}
$pdf->Output();
?>
