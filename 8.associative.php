<!DOCTYPE html>
<html>
 <head>
<title>Latihan Array</title>
<<style>
.kotak {
width: 30px;
height: 30px;
background-color: #BADA55;
text-align: center;
line-height: 30px
margin: 3px;
float: left;
transition: 9.55;
}
kotak:hover {
transform: rotate(360deg);
boder-radius:50%
}
 </style>
 </head>
 <body>>

 <?php
$angka = [
         [1,2,3],
         [4,5,6], 
         [7,8,9]
 ];
?>
<?php foreach($a as $b): ?>
<?php foreach($a as $b): ?>
 <div class="kotak"><?= $b; ?></div>
 <?php endforeach; ?>
<div class="clear"></div>
<?php endforeach; ?>