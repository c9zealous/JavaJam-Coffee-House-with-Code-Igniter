<?php 
   class Musician extends CI_Controller { 

	function __construct(){

		parent::__construct();
		$this->load->model('Musician_model');

	}

	public function index(){
	$details['sql1'] = $this->Musician_model->select_musician_jan();
	$details['sql2'] = $this->Musician_model->select_musician_feb();
	$details['sql3'] = $this->Musician_model->select_musician_march();
	$details['sql4'] = $this->Musician_model->select_musician_april();
	$details['sql5'] = $this->Musician_model->select_musician_may();
	$details['sql6'] = $this->Musician_model->select_musician_june();
	$details['sql7'] = $this->Musician_model->select_musician_july();
	$details['sql8'] = $this->Musician_model->select_musician_august();
	$details['sql9'] = $this->Musician_model->select_musician_sept();
	$details['sql10'] = $this->Musician_model->select_musician_oct();
	$details['sql11'] = $this->Musician_model->select_musician_nov();
	$details['sql12'] = $this->Musician_model->select_musician_dec();
	$this->load->view('musician', $details); 
 }
}
?>