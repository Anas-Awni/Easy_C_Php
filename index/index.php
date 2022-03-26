<?php 
session_start();

if (isset($_SESSION['Password']) && isset($_SESSION['Email'])){ 
    ?>


<!DOCTYPE html>
<head>
    <title>Project</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.css">

    <script src="https://kit.fontawesome.com/4af1eacb05.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="ui.js">

    <link rel="stylesheet" href="css/main.css">

</head>

<body>
    <!-- -------------------------------------------------------------- -->


    <div id="home"></div>
    <!-- start top nav -->
    <section class=" bg-dark text-white-50 ">
        <div class="container">
            <div class="row">

                <div class="col-md-6 ">
                    <ul class="navbar-nav flex-row ">
                        <li class="nav-link ">
                            <i class="fa fa-envelope "></i>
                            <span class="ms-2 me-2">moataz516 </span>
                            <span>|</span>
                        </li>

                        <li class="nav-link ms-3">
                            <i class="fa fa-phone "></i>
                            <span class="ms-2 me-2 ">(568) 986 652</span>
                        </li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <ul class="navbar-nav flex-row float-end">
                        <li class="nav-link ">
                            <i class="fa fa-facebook ms-2"></i></li>
                        <li class="nav-link ms-2">
                            <i class="fa fa-twitter ms-2"></i></li>
                        <li class="nav-link">
                            <i class="fa fa-google-plus ms-2"></i></li>
                        <li class="nav-link">
                            <i class="fa fa-linkedin ms-2"></i></li>
                        <li class="nav-link" <i class="fa fa-youtube ms-2">
                            </i>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
    <!-- end top nav -->




    <!-- start navbar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light " >

        <div class="container-fluid">
            <!-- start navbar-brand -->
            <a href="index.php" class="navbar-brand d-flex ms-3" >
            <img src="img/brand/d-5.jpg" alt="" style="height: 60px; width:250px ; margin-top:-10px; margin-bottom:-10px; ">
            </a> 
            <!-- end navbar-brand -->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggle" aria-controls="navbar-toggle" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- start menu navbar -->
            <div class="collapse navbar-collapse justify-content-end" id="navbar-toggle">
                <ul class="navbar-nav flex-row-reverse" id="menu">

                <?php //  في حال تم تسجيل الدخول يتم وضع تسجيل الخروج

if(isset($_SESSION['Email']) && isset($_SESSION['Password'])  )
{ ?>

<button class=" rounded-pill logoutbtn">
<a href="form/log-in/logout.php" > تسجيل الخروج </a>
</button>

<!-- <?php } ?>
<?php if($_SESSION['Type'] == 1){ ?>
<p class="fs-4 text-muted mt-1" style="margin-right:-60px; " >    اهلا أدمن </p>
<?php } else { ?>
<p class="fs-4 text-muted mt-1" style="margin-right:-60px;" >   <?php echo $_SESSION['Student_name']; ?> اهلا </p>
<?php } ?> -->






<span class="right-nav" >

<?php if($_SESSION['Type'] == 1) { ?>


                    <li class="nav-item">
                        <a href="admin/message.php" class="nav-link" target="_black">  متابعة الرسائل</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="books/upload.php" class="nav-link" target="_blank">اضافة كتب</a>
                    </li> 


                    <li class="nav-item">
                        <a href="#course" class="nav-link">دورات</a>
                    </li>

                    <li class="nav-item ">
                        <a href="#home" class="nav-link active">الرئيسية</a>
                    </li>

                    <?php } elseif($_SESSION['Type'] == 2)  {?>

    <!-- ***************************************************************************************************************** -->
<!--                                                    form search                                                    -->
<!-- ***************************************************************************************************************** -->
<form action="search.php" method="get" >

<script>
    function selec() {
        var select = document.getElementById('select');
        var box = document.getElementById('box');
        var search = select.options[select.selectedIndex].value;
        var b = document.getElementById('search').value = search;

        if(search == search){
            select.style.display='none';
            box.style.width= '200px';
        } else {
            select.style.display = 'block';
        }
    }
</script>

<div class="box" id='box'>
	<i class="fa fa-search" aria-hidden="true"></i>
	<input type="text" name='q'class="search" placeholder="بحث" autocomplete="off" id='search'>
    <select class='selection' id='select' onchange="selec()">
    <option class='option1'>الدورات</option>
        <option value="java">java</option>
        <option value="web developer">web developer</option>
        <option value="c++">c++</option>
        <option value="ruby">ruby</option>
        <option value="android">android</option>
        <option value="php">php</option>

    </select>
</div>

    </form>
<!-- ***************************************************************************************************************** -->
<!--                                                   end form search                                                    -->
<!-- ***************************************************************************************************************** -->
                    <li class="nav-item">
                        <a href="#contact" class="nav-link"> تواصل معنا</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="#help" class="nav-link">مركز المساعدة</a>
                    </li>
                    <li class="nav-item">
                        <a href="#books" class="nav-link">كتب</a>
                    </li>
                    <li class="nav-item">
                        <a href="#course" class="nav-link">دورات</a>
                    </li>
                    <li class="nav-item ">
                        <a href="#home" class="nav-link active">الرئيسية</a>
                    </li>

                    
                    <?php } ?>

</span>
                </ul>
            </div>
            <!-- end menu navbar -->

        </div>
    </nav>
    <!-- end navbar -->





    <!-- start carousel -->
    <div id="carousel" class="carousel slide  pb-5 " data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active " data-bs-interval=" 4000 " data-bs-interval=" 10000 ">
                <img src="img/carousel/aa.jpg" class="d-block w-100 ">
            </div>
            <div class="carousel-item " data-bs-interval=" 4000 ">
                <img src="img/carousel/ss.jpg" class="d-block w-100 ">
            </div>
            <div class="carousel-item " data-bs-interval=" 4000 ">
                <img src="img/carousel/dd.jpg" class="d-block w-100 ">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"aria-hidden="true"></span>
            <span class="visually-hidden">previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"aria-hidden="true"></span>
            <span class="visually-hidden">next</span>
        </button>

    </div>
    <!-- end carousel -->





    <!--  end box-info   -->
    <!-- start box-info in bottom carousel-->
    <section class="container d-flex justify-content-center box-control">
        <div class=" box-info">
            <div class="row">
                <div class="col-md-3 text-center">
                    <bdo dir="rtl">
                    <h4 class="fw-normal pb-2"> 40 الف </h4>
                    <span class="text-muted"> حل مشروع  </span>
                    </bdo>
                </div>
                <div class="col-md-3 text-center">
                    <bdo dir="rtl">
                    <h4 class="fw-normal pb-2">500 الف </h4>
                    <span class="text-muted"> حل تحدي برمجي   </span>
                </bdo>
                </div>
                <div class="col-md-3 text-center">
                    <bdo dir="rtl">
                    <h4 class="fw-normal pb-2">270 الف  </h4>
                    <span class="text-muted"> طالب   </span>
                    </bdo>
                </div>
                <div class="col-md-3 text-center">
                    <bdo dir="rtl">
                    <h4 class="fw-normal pb-2">4 مليون </h4>
                    <span class="text-muted"> مشاهدة للدروس </span>
                </bdo>
                </div>

            </div>
        </div>
    </section>
    <!--  end box-info   -->





    <div id="course"></div>
    <!-- course box -->
    <section class="container-fluid" style=" width: 1800px; ">
        <div class="box-card">
            <div class="header-details text-center ">
                <h1 class=" header-title ">الدورات</h1>
                <p class="header-text "> دورات شاملة على التطبيق العملي , تبدأ معك من الصفر وتأخدك خطوة بخطوة حتى الاحتراف</p>
            </div>
            <div class="row pb-5 ">


                <div class="col-md-4 box-course " >
                    <a href="courses/java/java.php ">
                        <img src="img/for-course/java.PNG " alt=" java">
                    </a>
                </div>

                <div class="col-md-4  box-course ">
                    <a href="courses/web developer/web-developer.php">
                        <img src="img/for-course/web-developer.PNG" alt=" web">
                    </a>
                </div>

                <div class="col-md-4  box-course">
                    <a href="courses/cs/cs.php ">
                        <img src="img/for-course/cis.PNG" alt="cs">
                    </a>
                </div>

                <div class="col-md-4  box-course ">
                    <a href="courses/ruby/ruby.php ">
                        <img src="img/for-course/ruby.PNG " alt="ruby">
                    </a>
                </div>

                <div class="col-md-4  box-course">
                    <a href="courses/android/android.php">
                        <img src="img/for-course/android.PNG" alt="android">
                    </a>
                </div>

                <div class="col-md-4  box-course ">
                    <a href="courses/php/php.php ">
                        <img src="img/for-course/php.PNG " alt=" php">
                    </a>
                </div>

            </div>
        </div>
    </section>
    <!-- end course box -->





    <div id="books"></div>
    <!-- books -->
    <section class="container margin-top-100 margin-bottom">
        <div class="book">

            <h1 class=" text-center text-muted pb-2 fw-bolder">
                الكتب
            </h1>
            <p class="header-text text-center pb-2 ">
                كتب عالية الجودة وبمختلف المجالات
            </p>

            <div class="row">

                <div class="col-md-3">
                    <div class="card ">
                        <img src="img/pdf/pdf-phyton.PNG " class="card-img-top">
                        <div class="card-body">
                            <p class=""> البرمجة بلغة بايثون </p>
                            <a href="books/python.php" class="nav-link stretched-link" >ليزا تاغليفيري
                            </a>

                            <div class="star text-center ">
                                <img src="img/star.png " style="width:16px ; ">
                                <img src="img/star.png " style="width:16px ; ">
                                <img src="img/star.png " style="width:16px ; ">
                                <img src="img/star.png " style="width:16px ; ">
                                <img src="img/star.png " style="width:16px ; ">
                            </div>

                        </div>

                    </div>
                </div>

                <div class="col-md-3 ">
                    <div class="card ">

                        <img src="img/pdf/pdf-ai.PNG " class="card-img-top ">
                        <div class="card-body ">
                            <p class=""> مدخل الى الذكاء الاصطناعي </p>
                            <a href="books/ai.php" class="nav-link stretched-link "> محمد لحلح </a>
                            <div class="star text-center">
                                <img src="img/star.png " style="width:16px ; ">
                                <img src="img/star.png " style="width:16px ; ">
                                <img src="img/star.png " style="width:16px ; ">
                                <img src="img/star.png " style="width:16px ; ">
                                <img src="img/star.png " style="width:16px ; ">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 ">
                    <div class="card ">

                        <img src="img/pdf/pdf-sql.PNG " class="card-img-top ">
                        <div class="card-body ">
                            <p class=" ">postreSQL مدخل الى </p>
                            <a href="books/sql.php" class="nav-link stretched-link "> مصطفى عطا العايش </a>
                            <div class="star text-center">
                                <img src="img/star.png" style="width:16px ; ">
                                <img src="img/star.png" style="width:16px ; ">
                                <img src="img/star.png" style="width:16px ; ">
                                <img src="img/star.png" style="width:16px ; ">
                                <img src="img/star.png" style="width:16px ; ">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 ">
                    <div class="card ">

                        <img src="img/pdf/pdf-shopping.PNG " class="card-img-top ">
                        <div class="card-body ">
                            <p class="  "> مدخل الى التسويق </p>
                            <a href="books/ec.php" class="nav-link stretched-link "> جون بورنت</a>
                            <div class="star text-center ">
                                <img src="img/star.png " style="width:16px ; ">
                                <img src="img/star.png " style="width:16px ; ">
                                <img src="img/star.png " style="width:16px ; ">
                                <img src="img/star.png " style="width:16px ; ">
                                <img src="img/star.png " style="width:16px ; ">
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- end books -->





    <div id="help"></div>
    <!-- comment people -->
    <div class="container margin-300">
        <div class="row">
            <h2 class="pb-4 text-center header-title" style="font-size:3rem">قالوا عنا</h2>

            <div class="col-md-4 ">
                <div class="comment-body">
                    <div class="star float-end">
                        <img src="img/star.png" style="width:18px ;">
                        <img src="img/star.png" style="width:18px ;">
                        <img src="img/star.png" style="width:18px ;">
                        <img src="img/star.png" style="width:18px ;">
                        <img src="img/star.png" style="width:18px ;">
                    </div>
                    <div class="comment ">
                        <bdo dir="rtl" class="float-end mt-4">
                            <p> لا تفي كلماتي عن مقدار سعادتي استمتعت واستفدت الكثير .. شكرا لعطائك دكتور وشكرا منصة إثرائي جزيت خير الجزاء❤️❤️ </p>
                            <div class="container-name">
                        <span class="comment-name">انس</span>
                        <span class="comment-full-name ">انس عوني خباص</span>
                            </div> 
                        </bdo>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="comment-body">
                    <div class="star float-end">
                        <img src="img/star.png" style="width:18px ;">
                        <img src="img/star.png" style="width:18px ;">
                        <img src="img/star.png" style="width:18px ;">
                        <img src="img/star.png" style="width:18px ;">
                        <img src="img/star.png" style="width:18px ;">
                    </div>
                    <div class="comment">
                        <bdo dir="rtl" class="float-end mt-4">
                        <p>  بفضل الله تعالى تم الاستفادة من البرماكد التدريبي واوصي بزيادة البرنامج زنشكر كل القائمين على هذا المؤتمر</p>
                            <div class="container-name">
                                <span class="comment-name">معتز</span>
                                <span class="comment-full-name"> معتز خلوي محمد النتشة  </span>
                            </div>
                        </bdo>
                    </div>
                </div>
            </div>


            <div class="col-md-4 ">
                <div class="comment-body">
                    <div class="star float-end">
                        <img src="img/star.png" style="width:18px ;">
                        <img src="img/star.png" style="width:18px ;">
                        <img src="img/star.png" style="width:18px ;">
                        <img src="img/star.png" style="width:18px ;">
                        <img src="img/star.png" style="width:18px ;">
                    </div>
                    <div class="comment">
                        <bdo dir="rtl" class="float-end mt-4">
                            مؤتمر ملئ بالفوائد والمعلومات نشكر الدكتور ونشكر كل القائمين على هذا المؤتمر الرائع والمدهش جدا
                            <div class="container-name">
                        <span class="comment-name">ابراهيم</span>
                        <span class="comment-full-name">ابراهيم مدري شنو حباشنة</span></div>
                        </bdo>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end comment people -->






    <!-- help center -->
    
    <?php if($_SESSION['Type']==2) { ?>
    
    <div class="container margin-bottom-100 ">
        <div class="d-flex justify-content-between ">
            <button class="btn">
                    <a href="help-center/help-center.html " class="nav-link text-white help-center " >مركز المساعدة</a>
                </button>
            <div class="text-end">
                <h1>هل لديك اسئلة </h1>
                <h5 class="text-muted">ربما تجد الاجابة في الأسئلة الشائعة في صفحة مركز المساعدة</h5>
            </div>
        </div>
    </div>
    <?php } ?>
    <!-- end help center -->







    <div id="contact"></div>
    <!-- contact -->

<?php if($_SESSION['Type'] == 2) {?>

    <section class="container margin-top margin-bottom ">
        <!-- form content -->
        <div class="form-content">
            <!-- paragraph -->
            <h1> تواصل معنا </h1>
            <p>هل لديك اي فكرة في ذهنك ؟ اترك لنا تعليقا</p>
            <form id="contactForm" method="post">
                <div class="row ">

                    <div class="col-md-6 col-sm-6 ">
                        <div class="form-group">
                            <label for="name" class="form-label">الاسم</label>
                            <input type="text" class="form-control" id="name" name="Name" placeholder="ادخل الاسم" required>
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="email" class="form-label">البريد الإلكتروني</label>
                            <input type="email" class="form-control" id="email" name="Email" placeholder="ادخل البريد الإلكتروني" required>
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="phone" class="">رقم الهاتف</label>
                            <input type="text" class="form-control" id="phone" name="Phone" placeholder="ادخل رقم الهاتف الخاص بك">
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6  ">
                        <div class="form-group">
                            <label for="message" class="form-label ">رسالة</label>
                            <textarea class="form-control " id="message" name="Message" rows="9" placeholder="ادخل رسالتك هنا" required></textarea>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-lg btn-theme" name="Send"> ارسال الرسالة</button>
                </div>
                

            </form> 
            </div>

<?php }  ?>
    </section>
    <?php //  كود لارسال الكومنت الى الداتا بيس 
        $dbserver = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "easy course";
        $conn = mysqli_connect($dbserver , $dbuser , $dbpass , $dbname);
        if(!$conn){ echo 'connection failed!'; } 
        if(isset($_POST['Send'])) {
        $name = $_POST['Name'];
        $email = $_POST['Email'];
        $message = $_POST['Message'];   

        $sql ="insert into message( Student_name , Email , Message ) values ( '$name' , '$email' , '$message' )";
        $result = mysqli_query($conn , $sql);
        
        } ?>

    <!-- contact end -->





    <!-- footer -->

    <footer>
        <div class="container ">
            <!-- social media links -->
            <div class="social ">
                <a class="h-facebook " href="# "><i class="fa fa-facebook "></i></a>
                <a class="h-google " href="# "><i class="fa fa-google-plus "></i></a>
                <a class="h-linkedin " href="# "><i class="fa fa-linkedin "></i></a>
                <a class="h-twitter " href="# "><i class="fa fa-twitter "></i></a>
            </div>
            <!-- copy right -->
            <!-- <p class="copy-right"> <span>&copy;</span> حقوق النشر 2021 ، جميع الحقوق محفوظة    </p> -->
        </div>
    </footer>
    <!-- footer end -->

    <!-- Scroll to top -->
    <span class="totop"><a href="# "><i class="fa fa-chevron-up "></i></a></span>

    </div>

    <!--end footer -->




    <!-- ----------------------------------------------------------- -->
    <script src="js/jquery.js "></script>
    <script src="js/bootstrap.js "></script>
    <script src="js/index.js "></script>
    <script src="js/popper.js "></script>



</body>

</html>

<?php } else {
    include("index2.php");
    } ?>
    