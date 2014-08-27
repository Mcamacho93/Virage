<?php
session_start();
/**
 * PHPExcel
 *
 * Copyright (C) 2006 - 2014 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel
 * @copyright  Copyright (c) 2006 - 2014 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt	LGPL
 * @version    1.8.0, 2014-03-02
 */

/** Error reporting */
include ("conexion.php");
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/London');

if (PHP_SAPI == 'cli')
	die('This example should only be run from a Web Browser');

/** Include PHPExcel */
require_once dirname(__FILE__) . '/Classes/PHPExcel.php';


// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set document properties
$objPHPExcel->getProperties()->setCreator("Virage")
							 ->setLastModifiedBy("Virage")
							 ->setTitle("Reportes")
							 ->setSubject("Reportes")
							 ->setDescription("Reportes de los viajes realizados.")
							 ->setKeywords("office 2007 openxml php")
							 ->setCategory("Reportes");


$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'SERIE')
            ->setCellValue('B1', 'FECHA')
            ->setCellValue('C1', 'FECHASALIDA')
            ->setCellValue('D1', 'FECHAREGRESO')
            ->setCellValue('E1', 'NO. DOCUMENTO')
            ->setCellValue('F1', 'AGENTE VENTAS')
            ->setCellValue('G1', 'CODIGO CLIENTE')
            ->setCellValue('H1', 'NOMBRE DEL CLIENTE')
            ->setCellValue('I1', 'PNR')
            ->setCellValue('J1', 'NOMBRE DE PASAJERO')
            ->setCellValue('K1', 'NO. EMPLEADO')
            ->setCellValue('L1', 'DEPARTAMENTO')
            ->setCellValue('M1', 'CENTRO DE COSTOS')
            ->setCellValue('N1', 'PROVEEDOR')
            ->setCellValue('O1', 'REGION')
            ->setCellValue('P1', 'SOLICITANTE')
            ->setCellValue('Q1', 'PROYECTO')
            ->setCellValue('R1', 'ORDEN DE COMPRA')
            ->setCellValue('S1', 'NO. BOLETO')
            ->setCellValue('T1', 'BOLETO EN CONTRA')
            ->setCellValue('U1', 'RUTA 1')
            ->setCellValue('V1', 'CODIGO PRODUCTO/SERVICIO')
            ->setCellValue('W1', 'DESCRIPCION DEL PRODUCTO/SERVICIO')
            ->setCellValue('X1', 'CLAVE PROVEEDOR')
            ->setCellValue('Y1', 'RUTA DE ABC')
            ->setCellValue('Z1', 'FECHA DE INICIO')
            ->setCellValue('AA1', 'MONTO TARIFA BASE')
            ->setCellValue('AB1', 'IVA')
            ->setCellValue('AC1', 'TUA')
            ->setCellValue('AD1', 'OTROS IMPUESTOS')
            ->setCellValue('AE1', 'ISH')
            ->setCellValue('AF1', 'IMPORTE TOTAL')
            ->setCellValue('AG1', 'FORMA DE PAGO')
            ->setCellValue('AH1', 'NO. TARJETA CREDITO (REGISTRADA)');
               

            
 
 
                 
 $select=$conexion->query("select * from reportesvirage where CODIGOCLIENTE = ".$_SESSION['Usuario']."");
 $i = 2;    
    while ($columna=$select->fetch_array(MYSQLI_ASSOC))
      {
        
            $objPHPExcel->setActiveSheetIndex(0)
                  ->setCellValue('A'.$i, $columna["SERIE"])
                  ->setCellValue('B'.$i, $columna["FECHA"])
                  ->setCellValue('C'.$i, $columna["FECHASALIDA"])
                  ->setCellValue('D'.$i, $columna["FECHAREGRESO"])
                  ->setCellValue('E'.$i, $columna["NODOCUMENTO"])
                  ->setCellValue('F'.$i, $columna["AGENTEVENTAS"])
                  ->setCellValue('G'.$i, $columna["CODIGOCLIENTE"])
                  ->setCellValue('H'.$i, $columna["NOMBREDELCLIENTE"])
                  ->setCellValue('I'.$i, $columna["PNR"])
                  ->setCellValue('J'.$i, $columna["NOMBREDEPASAJERO"])
                  ->setCellValue('K'.$i, $columna["NOEMPLEADO"])
                  ->setCellValue('L'.$i, $columna["DEPARTAMENTO"])
                  ->setCellValue('M'.$i, $columna["CENTRODECOSTOS"])
                  ->setCellValue('N'.$i, $columna["PROVEEDOR"])
                  ->setCellValue('O'.$i, $columna["REGION"])
                  ->setCellValue('P'.$i, $columna["SOLICITANTE"])
                  ->setCellValue('Q'.$i, $columna["PROYECTO"])
                  ->setCellValue('R'.$i, $columna["ORDENDECOMPRA"])
                  ->setCellValue('S'.$i, $columna["NOBOLETO"])
                  ->setCellValue('T'.$i, $columna["BOLETOENCONTRA"])
                  ->setCellValue('U'.$i, $columna["RUTA1"])
                  ->setCellValue('V'.$i, $columna["CODIGOPRODUCTO"])
                  ->setCellValue('W'.$i, $columna["DESCRIPCIONPRODUCTO"])
                  ->setCellValue('X'.$i, $columna["CLAVEPROVEEDOR"])
                  ->setCellValue('Y'.$i, $columna["RUTAABC"])
                  ->setCellValue('Z'.$i, $columna["FECHADEINICIO"])
                  ->setCellValue('AA'.$i, $columna["MONTOTARIFABASE"])
                  ->setCellValue('AB'.$i, $columna["IVA"])
                  ->setCellValue('AC'.$i, $columna["TUA"])
                  ->setCellValue('AD'.$i, $columna["OTROSIMPUESTOS"])
                  ->setCellValue('AE'.$i, $columna["ISH"])
                  ->setCellValue('AF'.$i, $columna["IMPORTETOTAL"])
                  ->setCellValue('AG'.$i, $columna["FORMADEPAGO"])
                  ->setCellValue('AH'.$i, $columna["NoTARJETA"]);

            $i++;
      }
       




/*// Add some data
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Hello')
            ->setCellValue('B2', 'world!')
            ->setCellValue('C1', 'Hello')
            ->setCellValue('D2', 'world!');

// Miscellaneous glyphs, UTF-8
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A4', 'Miscellaneous glyphs')
            ->setCellValue('A5', 'éàèùâêîôûëïüÿäöüç');
*/
// Rename worksheet
$objPHPExcel->getActiveSheet()->setTitle('Reporte');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="01simple.xls"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
