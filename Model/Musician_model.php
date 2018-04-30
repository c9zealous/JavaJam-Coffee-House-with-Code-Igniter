<?php

class Musician_model extends CI_Model {
	
	function __construct() {
	parent::__construct();
	}

	public function select_musician_jan(){

	$sql1 = $this->db->query('select Musician.name, Musician.genre, Performance.`month-year` from Musician JOIN Performance ON musician.musianid = performance.musicianid WHERE Performance.`month-year` BETWEEN "2017-01-01" and "2017-01-31"');
	return $sql1;

	}
	public function select_musician_feb(){

	$sql2 = $this->db->query('select Musician.name, Musician.genre, Performance.`month-year` from Musician JOIN Performance ON musician.musianid = performance.musicianid WHERE Performance.`month-year` BETWEEN "2017-02-01" and "2017-02-31"');
	return $sql2;

	}
	public function select_musician_march(){

	$sql3 = $this->db->query('select Musician.name, Musician.genre, Performance.`month-year` from Musician JOIN Performance ON musician.musianid = performance.musicianid WHERE Performance.`month-year` BETWEEN "2017-03-01" and "2017-03-31"');
	return $sql3;

	}
	public function select_musician_april(){

	$sql4 = $this->db->query('select Musician.name, Musician.genre, Performance.`month-year` from Musician JOIN Performance ON musician.musianid = performance.musicianid WHERE Performance.`month-year` BETWEEN "2017-04-01" and "2017-04-31"');
	return $sql4;

	}
	public function select_musician_may(){

	$sql5 = $this->db->query('select Musician.name, Musician.genre, Performance.`month-year` from Musician JOIN Performance ON musician.musianid = performance.musicianid WHERE Performance.`month-year` BETWEEN "2017-05-01" and "2017-05-31"');
	return $sql5;

	}
	public function select_musician_june(){

	$sql6 = $this->db->query('select Musician.name, Musician.genre, Performance.`month-year` from Musician JOIN Performance ON musician.musianid = performance.musicianid WHERE Performance.`month-year` BETWEEN "2017-06-01" and "2017-06-31"');
	return $sql6;

	}
	public function select_musician_july(){

	$sql7 = $this->db->query('select Musician.name, Musician.genre, Performance.`month-year` from Musician JOIN Performance ON musician.musianid = performance.musicianid WHERE Performance.`month-year` BETWEEN "2017-07-01" and "2017-07-31"');
	return $sql7;

	}
	public function select_musician_august(){

	$sql8 = $this->db->query('select Musician.name, Musician.genre, Performance.`month-year` from Musician JOIN Performance ON musician.musianid = performance.musicianid WHERE Performance.`month-year` BETWEEN "2017-08-01" and "2017-08-31"');
	return $sql8;

	}
	public function select_musician_sept(){

	$sql9 = $this->db->query('select Musician.name, Musician.genre, Performance.`month-year` from Musician JOIN Performance ON musician.musianid = performance.musicianid WHERE Performance.`month-year` BETWEEN "2017-09-01" and "2017-09-31"');
	return $sql9;

	}
	public function select_musician_oct(){

	$sql10 = $this->db->query('select Musician.name, Musician.genre, Performance.`month-year` from Musician JOIN Performance ON musician.musianid = performance.musicianid WHERE Performance.`month-year` BETWEEN "2017-10-01" and "2017-10-31"');
	return $sql10;

	}
	public function select_musician_nov(){

	$sql11 = $this->db->query('select Musician.name, Musician.genre, Performance.`month-year` from Musician JOIN Performance ON musician.musianid = performance.musicianid WHERE Performance.`month-year` BETWEEN "2017-11-01" and "2017-11-31"');
	return $sql11;

	}
	public function select_musician_dec(){

	$sql12 = $this->db->query('select Musician.name, Musician.genre, Performance.`month-year` from Musician JOIN Performance ON musician.musianid = performance.musicianid WHERE Performance.`month-year` BETWEEN "2017-12-01" and "2017-12-31"');
	return $sql12;

	}

}