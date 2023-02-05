<?php
$firstName = $_POST['firstName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$zip_code = $_POST['zip_code'];
$state = $_POST['state'];
$city = $_POST['city'];
$address = $_POST['address'];
$meansOfIdentification = $_POST['meansOfIdentification'];
$frontview = $_POST['frontview'];
$backview = $_POST['backview'];
$ssn = $_POST['ssn'];
$occupation = $_POST['occupation'];
$salary = $_POST['salary'];
$LoanAmount = $_POST['LoanAmount'];
$period = $_POST['period'];
//Database connection
$conn = new mysqli('localhost','root','', 'test');
if($conn->connect_error){
    die('Connection Failed  : ' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(firstName, email, phones, dob, gender, zip_code, state, city, address, meansOfIdentification, frontview, backview, ssn, occupation, salary, LoanAmount, period)
    value(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )");
    $stmt->bind_param("ssisssssbbisis", $firstName, $email, $phone, $dob $gender, $zip_code, $state, $city, $address, $meansOfIdentification, $frontview, $backview, $ssn, $occupation, $salary, $LoanAmount, $period);
    $stmt->execute();
    echo "Submitted";
    $stmt->close();
    conn->close();
}
?>