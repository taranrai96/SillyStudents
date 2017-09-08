<?php
/**
* Description of Student
*
* @author Taran Rai
*/
class Student {

	function __construct() { // Constructor for Student type objects
    	$this->surname = '';
    	$this->first_name = '';
    	$this->emails = array();
    	$this->grades = array();
	}

	function add_email($which,$address) { // method that be used to add an email address to a student's record
    	$this->emails[$which] = $address;
	}

	function add_grade($grade) { // method that can be used to add a grade to a student's record
    	$this->grades[] = $grade;
	}

	function average() { // method to calculate a student's average grade
    	$total = 0;
    	foreach ($this->grades as $value)
    	    $total += $value;
    	return $total / count($this->grades);
	}

	function toString() { // method to print a student's record
    	$result = $this->first_name . ' ' . $this->surname;
    	$result .= ' ('.$this->average().")\n";
    	foreach($this->emails as $which=>$what)
    	    $result .= $which . ': '. $what. "\n";
    	$result .= "\n";
    	return '<pre>'.$result.'</pre>';
	}

}