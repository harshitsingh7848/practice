<?php
/**
parameters:
output: mixed 
WAP to count all the characters individually in a given array and show this format in string.
?do we have to count the spaces as well??? no

assumption:
.you will always get non empty string.
.expected time comlexity O(n).
*/
$str="Piping Rock India Pvt Ltd.";

/* $res=preg_match_all("/[A-Z]/",$str);

$result=preg_match_all("/[a-z]/",$str);

echo"$res<br>";

echo"$result<br>";

echo strlen($str)."<br>";


$re="";
foreach(count_chars($str, 1) as $i => $val) {
   $re.=chr($i)."$val" ;
}

echo $re;
 */
/*  $var="";
 $arr=array();
 $str=str_replace(" ","",$str);

 
  for($i=0;$i<(strlen($str));$i++){
	  $arr[$i]=0;
  }
 
 for($i=0;$i<(strlen($str));$i++){
	$count=1;	
	if($arr[$i]==1)
			  continue;
		  else{
	 for($j=$i+1;$j<strlen($str);$j++){
		 if($str[$i]==$str[$j]){
			 $count++;
			 $arr[$j]=1;
			 
		 }
		  
		  
	 }
		  }
	 
	 $var.="$str[$i]$count";
	
 }
 echo '<pre>';
 print_r($var);
 echo '</pre>';
 
 
 //print_r($arr);
  */
 
 
 
 






foreach(preg_split('//',$s='Piping Rock India Pvt Ltd.',-1,1)as$v)$v++;




	

