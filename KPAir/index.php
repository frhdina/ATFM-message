<?php
require('fpdf/fpdf.php'); // file fpdf.php harus diincludekan

    $pdf=new FPDF('P','mm','A4');
    $pdf->AddPage();
// setting jenis font Times New Roman, standard, size 12
    $pdf->SetFont('Times','',12);

// cell berukuran 20x10 mm, tanpa border, teks berikutnya akan
// diletakkan di bawah teks ini, posisi teks center dalam cell
    $pdf->Cell(20,10,'Teks 1',0,2,'C');

// cell berukuran 40x10 mm, dengan border, teks berikutnya akan
// diletakkan pada posisi awal baris berikutnya, teks berada di kanan
// dalam cell
    $pdf->Cell(40,10,'Teks 2',1,1,'R');

// cell berukuran 20x50 mm, dengan border, teks berikutnya akan
// diletakkan di kanan teks ini, teks berada di tengah cell
    $pdf->Cell(20,50,'Teks 3',1,0,'C');

// setting warna hijau pada cell yang akan dibuat
    $pdf->SetFillColor(0, 255, 0);

// cell berukuran 40x10 mm, dengan border, teks berikutnya akan
// diletakkan tepat di bawah teks ini, teks berada di kiri
// dalam cell, diberi latar dengan warna hijau
    $pdf->Cell(40,10,'Teks 4',1,2,'L', 1);

// setting warna biru pada cell yang akan dibuat
    $pdf->SetFillColor(0, 0, 255);

// cell berukuran 40x10 mm, tanpa border, teks berikutnya akan
// diletakkan posisi awal pada baris selanjutnya, teks berada di tengah
// cell, diberi latar dengan warna biru, diberi link ke Google.
    $pdf->Cell(40,10,'Teks 5',0,1,'C', 1, 'http://www.google.com');
    $pdf->Output();?>
