<?php

class ExcelController extends BaseController {

	public function index() {

		set_time_limit(0);

		date_default_timezone_set('Europe/Paris');

		include_once ROOT_PATH.'core/PHPExcel/PHPExcel/IOFactory.php';

		$inputFileName = UPLOADS_PATH.'example1.xls';

		echo 'Loading file ',pathinfo($inputFileName,PATHINFO_BASENAME),' using PHPExcel_Reader_Excel5<br />';

		$objReader = new PHPExcel_Reader_Excel5();
		//	$objReader = new PHPExcel_Reader_Excel2007();
		//	$objReader = new PHPExcel_Reader_Excel2003XML();
		//	$objReader = new PHPExcel_Reader_OOCalc();
		//	$objReader = new PHPExcel_Reader_SYLK();
		//	$objReader = new PHPExcel_Reader_Gnumeric();
		//	$objReader = new PHPExcel_Reader_CSV();
		$objPHPExcel = $objReader->load($inputFileName);

		echo '<hr />';

		$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);

		$vars = array(
			'sheet_data' => $sheetData
		);

		$this->render('excel', $vars);
	}

}
