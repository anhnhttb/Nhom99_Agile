<?php
	include_once("Model/Order.php");

	$Order = new Order();
	$OrderInDayDone = $Order->CountOrderInDayDone();
//hzzzz
	// alert($OrderInDayDone);
	$TotalInDay = $Order->GetTotalDay();
	$ThuNhapTrongNgay = 0;
    if ($TotalInDay==null)
    {
        $ThuNhapTrongNgay = 0;
    }
    else 
    {
        $ThuNhapTrongNgay = $TotalInDay['TotalDay'];
    }
    //djsjdk

	// InMonth
	$OrderInMonthDone = $Order->CountOrderInMonthDone();
	$TotalInMonth = $Order->GetTotalMonth();
	if ($TotalInMonth==null)
	{
	    $ThuNhapTrongThang = 0;
	}
	else 
	{
	    $ThuNhapTrongThang = $TotalInMonth['TotalMonth'];
	}
	$data7daysvalue=array();
	$data7daystoshow = array();
	$a=array("red","green");
	// array_push($a, "apple");
	$rs = $Order-> GetList7Day();
	$max = 0;
	foreach($rs as $row)
	{
		if ( $row['Money'] > $max) $max =  $row['Money'];
		echo "<script>console.log(" . $row['Money'] . ");</script>";
		array_push($data7daysvalue, $row['Money']);
		array_push($data7daystoshow, str_replace(" 2020","", $row['TimeShow']));
		echo "<script>console.log('" . $row['TimeShow'] . "');</script>";
	}



	echo "<script>console.log('" . $data7daysvalue[0] . "');</script>";

	include_once("View/Products/TK.php");
?>