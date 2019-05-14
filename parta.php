<?php

if (!isset($validationObj)) 
    $validationObj = new stdClass();

	$validationObj->name = "3";
	$validationObj->studentID = "3";
	$validationObj->program = "3";
	if ((($_REQUEST['name']) == "Harry Potter") or (($_REQUEST['name']) == "Hermione Granger"))
	{
		$validationObj->name = "1";
	  }
	else if(1 === preg_match('~[0-9]~', ($_REQUEST['name'])))
	{
		$validationObj->name = "2";
	}
	else if (empty($_REQUEST['name']))
	{
		$validationObj->name = "3";
	}
	else
	{
		$validationObj->name = "4";
	}
   
	if (1 === preg_match('/^[0-9]{9}$/', ($_REQUEST['studentID'])))
	{
		$validationObj->studentID = "1";
	}
	else if(0 === preg_match('/^[0-9]*$/', ($_REQUEST['studentID'])))
	{
		$validationObj->studentID = "2";
	}
	else if (empty($_REQUEST['studentID']))
	{
		$validationObj->studentID = "3";
	}
	else
	{
		$validationObj->studentID = "4";
	}
 
	if ((($_REQUEST['program']) == "Basket Weaving") or (($_REQUEST['program']) == "Beanstalk Climbing"))
	{
		$validationObj->program = "1";
	}
	else if ((($_REQUEST['program']) == "Geology") or (($_REQUEST['program']) == "Microbiology"))
	{
		$validationObj->program = "2";
	}
	else if (empty($_REQUEST['program']))
	{
		$validationObj->program = "3";
	}
	else
	{
		$validationObj->program = "4";
	}
 
	echo json_encode($validationObj);

?>