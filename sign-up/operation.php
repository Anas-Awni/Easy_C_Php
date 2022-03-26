<?php
session_start();
include('db-conn.php');

if(isset($_POST['Student_name']) && isset($_POST['Email']) && isset($_POST['Password']) && isset($_POST['Password2']) && isset($_POST['Address'])
&& isset($_POST['Birth_date']) && isset($_POST['Gender'])){

ini_set('display_errors', 'off'); // ***********************

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
    $Student_id = validate($_POST['Student_id']);
    $name = validate($_POST['Student_name']);
    $email = validate($_POST['Email']);
    $password = validate($_POST['Password']);
    $password2 = validate($_POST['Password2']);
    $address = validate($_POST['Address']);
    $date = validate($_POST['Birth_date']);
    $gender = validate($_POST['Gender']);


// $user_data = 'email = ' . $email . '& name=' . $name;



if(empty($email)) {
    header("location: signup.php?error=قم بأدخال الايميل&$user_data");
    exit();

} elseif (empty($name)) {
    header("location: signup.php?error=الاسم مطلوب&$user_data");
    exit();
} 


elseif (empty($password)) {
    header("location: signup.php?error=كلمة المرور مطلوبة&$user_data");
    exit();
} 

elseif (empty($password2)) {
    header("location: signup.php?error=الرجاء تاكيد كلمة المرور&$user_data");
    exit();
} 

elseif ($password !== $password2) {
    header("location: signup.php?error=كلمة المرور غير مطابقة&$user_data");
    exit();
}  

elseif (empty($address)) {
    header("location: signup.php?error=الرجاء ادخال عنوان المستخدم&$user_data");
    exit();
} 

elseif (empty($date)) {
    header("location: signup.php?error=الرجاء ادخال تاريح الميلاد&$user_data");
    exit();
} 

elseif (empty($gender)) {
    header("location: signup.php?error=الرجاء ادخال الجنس&$user_data");
    exit();
} 

else {
    //$pass = sha1($password);
    $pass = md5($password);

    $sql = "select * from student where Email='$email' ";
    $result = mysqli_query($conn , $sql);

    if(mysqli_num_rows($result) > 0){
        header("location: signup.php?error=البريد الإلكتروني  تم إستخدامه&$user_data");
        exit();  
    } else {
    $sql2="insert into student (Student_name , Password , Email , Gender , Birth_date , Address , Type ) values('$name' , '$pass' , '$email', '$gender' , '$date' , '$address' , '2')";
    $result2 = mysqli_query($conn , $sql2);
    if($result2){
        header("location: signup.php?success=تم إنشاء الحساب بنجاح");
        exit();
    } else {
        header("location: signup.php?error=حدث خطأ غير معروف&$user_data");
        exit();
    }

    }
}

} else { // for isset
    header("location: signup.php");
    exit();
}

?>