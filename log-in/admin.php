

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/util.css">

    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />

    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

    <script src="https://kit.fontawesome.com/4af1eacb05.js" crossorigin="anonymous"></script>

</head>

<body>


<!-- 
<nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top">

<a href="#" class="navbar-brand d-flex ms-5 align-items-center img-thumbnail ">
            <img src="../../d-1.PNG" alt="" style="    height: 60px;
            width:250px ; margin-top:-10px; margin-bottom:-10px; ">
</a>

<ul class="navbar-nav ms-auto me-5 mt-2">

        
<li class=" nav-item ">
<a href="lo" > تسجيل الدخول كـطالب </a>
</li>

</ul>

</nav> -->



    <section>
        <div class="container-login " >
        <div class="wrap-login p-l-50 p-r-50 p-t-60 p-b-50 " style="margin-top:-15px">
        <?php if (isset($_GET['error'])){?> <p class="error"> <?php echo $_GET['error']; ?> </p>  <?php } ?> 


                <form class="login-form validate-form" action='operation_admin.php'  method="POST">
                    <span class="login-form-title p-b-40 ">
                    تسجيل دخول للأدمن 
					</span>

                    <div class="wrap-input validate-input m-b-16" data-validate="يرجى أدخال البريد الالكتروني">
                    <label for="pass" class="form-label "> البريد الإلكتروني</label>
                        <input class="input" type="email" name="Email" >
                        <span class="focus-input"></span>
                        <span class="symbol-input">
							<span class="lnr lnr-envelope"></span>
                        </span>
                    </div>

                    <div class="wrap-input validate-input m-b-16" data-validate="يرجى أدخال كلمة المرور">
                        <label for="pass" class="form-label "> كلمة المرور</label>
                        <input class="input" type="password" name="Password"  id="pass">
                        <span class="focus-input " id="toggle" onclick="showHide()"></span>

                    </div>

                    <div class="login-form-btn p-t-25">
                        <button class="login-btn " name='btn-login'>
							دخول
						</button>
                        
                        <span class='mt-5 '>
                        <a href="login.php" class='fs-4 '>تسجيل الدخول كـطالب</a>
                        </span>
                    </div>

                </form>
            </div>
        </div>
    </section>




    <!-- ////////////////////////////////////////// -->
    <script src="../../js/jquery.js"></script>
    <script src="../../js/bootstrap.js"></script>
    <script src="js/main.js"></script>
</body>

</html>