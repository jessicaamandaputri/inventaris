<?php
//============================================================+
// File name   : example_002.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 002 for TCPDF class
//               Removing Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Removing Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
// require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('Laporan Pengembalian');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('times');

// add a page
$pdf->AddPage();

// set some text to print

$table1 = '<table border="0" width="650px">';
$table1.='<tr>
            <td style="text-align: center; font-size: 16px; font-weight:bold;">LAPORAN PENGEMBALIAN BARANG
            </td>
        </tr>';
$table1.= '</table> </br>';

$table2 = '<table border="1" width="650px">';
$table2.='<tr style="background-color:lightblue">
            <td height="30" style="text-align:center; font-weight:bold;">Id Pengembalian</td>
            <td style="text-align:center; font-weight:bold;">Peminjam</td>
            <td style="text-align:center; font-weight:bold;">Nama Barang</td>
            <td style="text-align:center; font-weight:bold;">Tanggal pinjam</td>
            <td style="text-align:center; font-weight:bold;">Tanggal Kembali</td>
         </tr>';

         foreach ($data as $row) {
$table2.='<tr>
            <td height="30" style="text-align:center;">' .$row->id_kembali. '</td>  
            <td style="text-align:center;">' .$row->nama_anggota. '</td>
            <td style="text-align:center;">' .$row->nama_barang. '</td>
            <td style="text-align:center;">' .$row->tgl_pinjam. '</td>
            <td style="text-align:center;">' .$row->tgl_kembali. '</td>
         </tr>';
         }
$table2.= '</table>';

// print a block of text using Write()
$pdf->WriteHTMLCell(0, 0, '', '', $table1, 0, 1,0, true, 'L', true);
$pdf->WriteHTMLCell(0, 0, '', '', $table2, 0, 1,0, true, 'L', true);

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_002.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+