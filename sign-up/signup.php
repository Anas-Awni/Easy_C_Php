

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>sign up</title>

    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://kit.fontawesome.com/4af1eacb05.js" crossorigin="anonymous"></script>



</head>

<body>



<nav class="navbar navbar-expand-sm navbar-light bg-light">

<a href="../../index2.php" class="navbar-brand d-flex ms-5 mt-2">
            <img src="../../img/brand/d-5.jpg" alt="" style="    height: 60px;
            width:250px ; margin-top:-10px; margin-bottom:-10px; ">
</a>

<ul class="navbar-nav ms-auto me-5 mt-2">

<li class=" nav-item">
<a href="../log-in/login.php" > دخول </a>
</li> 
        
<li class=" nav-item ">
<a href="signup.php" > تسجيل حساب </a>
</li>

</ul>

</nav>




    <div class="container-signup">

        <div class="wrap-login p-l-50 p-r-50 p-t-50 p-b-30">

        <?php if (isset($_GET['error'])){?> <p class="error"> <?php echo $_GET['error']; ?> </p>  <?php } ?> 
            <?php if (isset($_GET['success'])){?> <p class="success"> <?php echo $_GET['success']; ?> </p>  <?php } ?>
        
            <form class="login-form validate-form" action="operation.php" method="post">



                <span class="login-form-title p-b-40 m-t-20">
                إنشاء حساب
                </span>
                
                <div class="wrap-input-full validate-input "data-validate="الرجال إدخال اسم المستخدم">
                    <label for="f-name" class="form-label"> إسم المستخدم </label>
                    <input class="input" type="text" id="name" name="Student_name"  >
                    <span class="symbol-input"></span>

                </div>


                <div class="wrap-input-full validate-input" data-validate="الرجاء إدخال البريد الالكتروني">
                    <label for="email" class="form-label">البريد الإلكتروني</label>
                    <input class="input" type="email" id="email" name="Email" >
                    <span class="symbol-input"></span>
                </div>

                <div class="wrap-input validate-input "data-validate="الرجاء تأكيد كلمة المرور">
                    <label for="pass2" class="form-label"> تأكيد  كلمة المرور</label>
                    <input class="input" type="password" id="pass2" name="Password2" >
                </div>


                <div class="wrap-input validate-input "data-validate="الرجاء أدخال كلمة المرور">
                    <label for="pass1" class="form-label">كلمة المرور</label>
                    <!-- <input class="input" type="password" id="pass1" name="pass1" placeholder="Password"> -->
                    <input class="input" type="password" id="pass1" name="Password" >
                </div>


                <div class="wrap-input  "data-validate="الرجاء أدخال عنوان المستخدم">
                    <label for="address" class="form-label">العنوان</label>
                    <input class="input" type="text" id="address" name="Address" >
                </div>




                <div class="wrap-input " data-validate="الرجاء أدخال تاريح الميلاد">
                    <label for="address" class="form-label">تاريخ الميلاد </label>
                    <input class="input" type="date" id="date" name="Birth_date">
                </div>


                <div class="wrap-input-full validate-input">
                <label class="form-label p-l-50">الجنس</label>

                    <div class="p-t-6">              
                        <label class="radio-container">ذكر
                            <input type="radio" checked="checked" name="Gender" value="ذكر">
                            <span class="checkmark"></span>
                    </label>
                        <label class="radio-container m-r-20">أنثى
                            <input type="radio" name="Gender" value="أنثى">
                            <span class="checkmark"></span>
                        </label>

                    </div>
                </div>

                <div class="wrap-input-full signup-form-btn p-t-15">
                    <button class="signup-btn">
                        تسجيل
                    </button>
                </div>

                <div class="wrap-input-full  pt-3 text-center">
                    <div class=" txt1 "> <bdo dir="rtl">
                        <!-- لديك حساب بلفعل؟ <a href="../log-in/login.php"class=" txt1  hov1 text-muted">تسجيل الدخول</a>
                        &nbsp;او -->
                    <a href="../../index.php " class="fs-4 txt1">الرجوع الى الموقع</a></bdo>
</div>

                </div>

            </form>
        </div>
    </div>



    <script src="../../js/jquery.js"></script>
    <script src="../../js/bootstrap.js"></script>
    <script src="js/main.js"></script>
</body>

</html>