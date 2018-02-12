<?php

$str="Piping Rock India Pvt Ltd";

echo strlen($str)."<br>";

$st=mb_strtolower($str);

$similar=similar_text($str,$st);

echo  strlen($str)-$similar."<br>". $similar;


$s=123;

$v=strval($s);

echo "<br>$v";