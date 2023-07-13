<?php
session_start(); 
include('indexDB.php');
if(isset($_POST['username']))
{
    $uname =$_POST['username'];
}

$Bname= $_POST['Bankname'];
$amount= $_POST['Amount'];
$loandetails=$_POST['Loandetails'];
$cnum= $_POST['Chequenumber'];
$popt= $_POST['Paymentoption'];

$sql = "INSERT into payment (UID,buyer,Bank_name,amount,Loan_details,cheque_number,payment_opt) VALUES ($j,'$bname','$Bname',$amount,'$loandetails',$cnum)";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
mysqli_close($conn);
?>