<?php
header("Content-Type:application/json;charset=utf-8");
$output=[];
$output[]=['label'=>'1月','value'=>'2500'];
$output[]=['label'=>'2月','value'=>'3500'];




echo json_encode($output);