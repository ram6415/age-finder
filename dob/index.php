

<!DOCTYPE html>
<html lang="en">
<head>

  <title>Find Age</title>
  <link rel="icon" href="febicon.png" type="image/png" /> 

  <meta charset="UTF-8">

   <!---   css files links  --->  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="font-awesome/font-awesome.min.css" /> 

  <!---   content delivery network(CDN)  --->  
  <link rel="stylesheet" href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!---   Js file links --->  
  <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="jquery/jquery-3.3.1.min.js"></script>

</head>
<body>

    <form action="" method="post" enctype="mulipart/form-data">
  Enter DOB:
  <input type="date" name="dob">
 &nbsp;&nbsp;&nbsp;
  Enter till Date:
  <input type="date" name="cd">&nbsp;
    	<button type="submit" name="submit" value="submit" class="btn btn-success"></i> <span class="fa fa-saveA"></span> submit <i class="glyphicon glyphicon-floppy-savedA"></i> </button>
    	
    	<!--<input type="submit" name="submit" value="submit" />-->
    </form>	

  <!--  <script type="text/javascript">
    	$(document).ready(function(){
           
           alert("hello ram....");

    	});
    </script>--->
	
	
	
	<div class='container-fluid'>
	
	
<?php

if(isset($_POST['submit']) && !empty($_POST['submit']) ){

$dob['dob']=$_POST['dob'];

$cd['cd']=$_POST['cd'];

if(!empty($dob['dob']) && !empty($cd['cd'])){
	

$dobd = $dob['dob']['8'].$dob['dob']['9'];
$dobm = $dob['dob']['5'].$dob['dob']['6'];
$doby = $dob['dob'][0].$dob['dob'][1].$dob['dob'][2].$dob['dob'][3];
 
echo "Your date of birth:- ".$dob['dob'];
/*echo "<br/>Your date of birth Day:- ".$dobd;
echo "<br/>Your date of birth Month:- ".$dobm;
echo "<br/>Your date of birth Year:- ".$doby."<br/>";*/

//echo "<br/>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;";
$cdd = $cd['cd']['8'].$cd['cd']['9'];
$cdm = $cd['cd']['5'].$cd['cd']['6'];
$cdy = $cd['cd'][0].$cd['cd'][1].$cd['cd'][2].$cd['cd'][3];

echo "Your Entered date:- ".$cd['cd'];
/*echo "<br/>Your date of Current Day:- ".$cdd;
echo "<br/>Your date of Current Month:- ".$cdm;
echo "<br/>Your date of Current Year:- ".$cdy."<br/>";*/

if($cdd == $dobd){
	$ad = 0;
}

elseif($cdd >= $dobd){
	$ad = $dobd-$cdd;
}

elseif($cdd <= $dobd){
	$ad = (($cdd+31)-$dobd);
	$cdm = $cdm-1;
}

if($cdm == $dobm){
	$am = 0;
}

elseif($cdm >= $dobm){
	$am = $dobm-$cdm;
}

elseif($cdm <= $dobm){
	$am = (($cdm+12)-$dobm);
	$cdy = $cdy-1;
}

if($cdy == $doby){
	$ay = 0;
}

elseif($cdy >= $doby){
	$ay = $doby-$cdy;
}

elseif($cdy <= $doby){
	$ay = $cdy-$doby;
}
echo "</br></br><center><h2>Your Age: ".$ay."years - ".$am."months - ".$ad." days </h2></center><br/>";

//echo "</br>".$ay;

}

else{
	echo "<p class='text-danger text-center'>Please enter Date of Birth or Current Date....</p>";
}

}
/*else{
	echo "<p class='text-danger text-center'>Please enter Date of Birth or Current Date....</p>";
  }*/

?>
	
	
	  </div>

</body>
</html>