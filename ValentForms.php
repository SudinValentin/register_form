<?php
require_once 'functions.php';
//echo date('Y-m-d', 1);
//exit();
if ($_POST){
    $name = filter_input(INPUT_POST, 'name');
    $surname = filter_input(INPUT_POST, 'surname');
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');
    $day = filter_input(INPUT_POST, 'day');
    $month = filter_input(INPUT_POST, 'month');
    $year = filter_input(INPUT_POST, 'year');

$birthday=[];    
$birthday['year']=$year;
$birthday['month']=$month;
$birthday['day']=$day;
$age=age($birthday);
$errors = [];

if($age<0){
    $errors[]= 'no correct birthday'.'<br />';
}

if(!$name){
    $errors[]= 'Name is empty'.'<br />';
}
if(!$surname){
    $errors[]= 'Surname is empty'.'<br />';
}
if(!$email){
    $errors[] ='Email is empty'.'<br />';
}
if(preg_match("/^\@)$", $email)){
    $errors[] = 'invalid email'.'<br />';
}
if(!$password){
    $errors[] = 'Password is empty'.'<br />';
}

if ($errors){
    echo implode('', $errors);
    require_once 'registerForm.php';
}else {
    require_once 'registerData.php';
    }
}  else {
    require_once 'registerForm.php';    
}
?>

<?php


