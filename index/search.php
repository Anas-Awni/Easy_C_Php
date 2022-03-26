<?php 
session_start();
$conn = mysqli_connect("localhost" , 'root' , '' , 'easy course');
if(!$conn){
    echo 'failed';
}
$q = $_GET['q'];
$sql = "select *  from course where Course_name like'%$q%'";
$query = mysqli_query($conn , $sql);
if(empty($q)){
    echo " <center style='margin-top:30px'><h2>عفوا.. انك لم تبحث عن اي كلمة</h2></center> ";
    exit();
} 

if(mysqli_num_rows($query)==0){

    echo " <center style='margin-top:30px'><h2>عفو .. لا  يوجد نتائج لبحثك </h2></center> ";
    exit();
} else {

    if(isset($_GET['q'])){
    while($row = mysqli_fetch_assoc($query)){
if($_GET['q'] == 'java'){ // for course
header("location: http://localhost/project/courses/java/java.php ");

} elseif($_GET['q']== 'web developer'){
    header("location: http://localhost/project/courses/web%20developer/web-developer.php ");
}
elseif($_GET['q']== 'c++'){
    header("location: http://localhost/project/courses/cs/cs.php");
}

elseif($_GET['q']== 'ruby'){
    header("location: http://localhost/project/courses/ruby/ruby.php");
}

elseif($_GET['q']== 'android'){
    header("location: http://localhost/project/courses/android/android.php");
}
elseif($_GET['q']== 'php'){
    header("location: http://localhost/project/courses/php/php.php");
}
else {
    header("location: http://localhost/project/index.php");

}

}
}
}






?>