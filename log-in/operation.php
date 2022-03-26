<?php
session_start();
include('db-conn.php');

if(isset($_POST['Email']) && isset($_POST['Password'])){
function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

    $email = validate($_POST['Email']);
    $password = validate($_POST['Password']);


    if(empty($email)) {
    header("location: login.php?error=يجب إدخال البريد الإلكتروني ");
    exit();
} elseif (empty($password)) {
    header("location: login.php?error=يجب إدخال كلمة المرور");
    exit();
} else {

   // $password =password_verify( $_SESSION['Password'] ,  $password  );

$pass = md5($password);
$sql = " select * from student  where Email = '$email' and Password='$pass' ";
$result = mysqli_query($conn , $sql);

if(mysqli_num_rows($result) === 1 ){
    $row = mysqli_fetch_assoc($result); 

    
    if($row['Email'] === $email && $row['Password'] === $pass) { 
        $_SESSION['Student_id'] = $row['Student_id'] ;
        $_SESSION['Student_name'] = $row['Student_name'] ;
        $_SESSION['Email'] = $row['Email'] ;
        $_SESSION['Password'] = $row['Password'] ;
        $_SESSION['Gender'] = $row['Gender'] ;
        $_SESSION['Birth_date'] = $row['Birth_date'] ; 
        $_SESSION['Address'] = $row['Address'] ;
        $_SESSION['Type'] = $row['Type'];

        header("location: ../../index.php"); 
        exit(); 
}

}

else  {
    header("location: login.php?error=خطأ في البريد الإلكتروني او كلمة المرور");
    exit();
}


}

    


} else { // for isset
    header("location: login.php");
    exit();
}



?>


