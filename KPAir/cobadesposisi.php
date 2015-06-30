<?php
require('fpdf/fpdf.php'); // file fpdf.php harus diincludekan


    $pdf=new FPDF('P','mm','A4');
    $pdf->AddPage();
// setting jenis font Times New Roman, standard, size 12
    $pdf->SetFont('Times','',12);

// cell berukuran 20tinggi_awal10 mm, tanpa border, teks berikutnya akan
// diletakkan di bawah teks ini, posisi teks center dalam cell
/*
    $pdf->Cell(100,100,"Text inside first column",1,0,'L');
    $pdf->SetX($pdf->GetX() - 100);
    $pdf->Cell(35,35,'Text inside second column ',1,0,'C');*/

    $tinggi_awal = 20;
    $tinggi_tengah = 60;
    $lebar_awal = 60;
    $lebar_total = 180;

    $pdf->Cell($lebar_awal,$tinggi_awal,$pdf->Image('assets/img/logoairnav.jpg',13,12,14),1,0,'L');
    $pdf->SetX($pdf->GetX() - 40);
    $pdf->Cell(40,$tinggi_awal,"Airnav Indonesia",0,0,'L');

    $pdf->Cell(120,$tinggi_awal,'Teks 1',1,1,'R');
    $pdf->Cell($lebar_total,$tinggi_awal,'Teks 1',1,1,'C');
    $pdf->Cell($lebar_awal,$tinggi_tengah,'Teks 1',1,0,'L');
    $pdf->Cell(90,$tinggi_tengah,'Teks 1',1,0,'L');
    $pdf->Cell(30,$tinggi_tengah,'Teks 1',1,1,'L');
    $pdf->Cell($lebar_total,$tinggi_awal,'Teks 1',1,1,'L');
    $pdf->Cell($lebar_awal,$tinggi_tengah,'Teks 1',1,0,'L');
    $pdf->Cell(($lebar_total-$lebar_awal),$tinggi_tengah,'Teks 1',1,1,'L');
/* cell berukuran 40tinggi_awal10 mm, dengan border, teks berikutnya akan
// diletakkan pada posisi awal baris berikutnya, teks berada di kanan
// dalam cell
    $pdf->Cell(40,10,'Teks 2',1,1,'R');

// cell berukuran 20tinggi_awal50 mm, dengan border, teks berikutnya akan
// diletakkan di kanan teks ini, teks berada di tengah cell
    $pdf->Cell(20,50,'Teks 3',1,0,'C');

// setting warna hijau pada cell yang akan dibuat
    $pdf->SetFillColor(0, 255, 0);

// cell berukuran 40tinggi_awal10 mm, dengan border, teks berikutnya akan
// diletakkan tepat di bawah teks ini, teks berada di kiri
// dalam cell, diberi latar dengan warna hijau
    $pdf->Cell(40,10,'Teks 4',1,2,'L', 1);

// setting warna biru pada cell yang akan dibuat
    $pdf->SetFillColor(0, 0, 255);

// cell berukuran 40tinggi_awal10 mm, tanpa border, teks berikutnya akan
// diletakkan posisi awal pada baris selanjutnya, teks berada di tengah
// cell, diberi latar dengan warna biru, diberi link ke Google.
    $pdf->Cell(40,10,'Teks 5',0,1,'C', 1, 'http://www.google.com');*/
    $pdf->Output();
    ?>
