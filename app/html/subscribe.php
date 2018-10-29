<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Subscribe page">
    <meta name="author" content="Brendan Giberson">

    <title>UNLTD | Subscribe</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/icon/favicon-16x16.png">
    <link rel="manifest" href="../assets/icon/site.webmanifest">

    <!-- Bootstrap core CSS -->
    <link href="../assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700" rel="stylesheet">
    <link href="../assets/vendors/owl/css/owl.carousel.min.css" rel="stylesheet">
    <link href="../assets/vendors/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="../assets/css/adonis-dark.css" rel="stylesheet">
</head>
<body>
<div id="wrap" class="light main-wrap clearfix">


    <div id="site-header">
        <div id="primary-menu-offcanvas" class="off-canvas off-canvas-left d-flex flex-column">
            <div class="m-3">
                <a class="close-offcanvas-main-menu" href="#" data-target="#primary-menu-offcanvas"><span
                            class="adonis-icon icon-5x"><svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                             height="20" viewBox="0 0 24 24"><path
                                    d="M13.4 12l5.3-5.3c0.4-0.4 0.4-1 0-1.4s-1-0.4-1.4 0l-5.3 5.3-5.3-5.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4l5.3 5.3-5.3 5.3c-0.4 0.4-0.4 1 0 1.4 0.2 0.2 0.4 0.3 0.7 0.3s0.5-0.1 0.7-0.3l5.3-5.3 5.3 5.3c0.2 0.2 0.5 0.3 0.7 0.3s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4l-5.3-5.3z"></path></svg></span></a>
            </div>

        </div>
        <header class="site-header">
            <div class="master-container-fluid header-inner">
                <div class="row justify-content-between">
                    <div class="col-2 col-xl-3 d-flex align-items-center">
                        <div class="d-block d-lg-none">
                            <a href="#" class="navbar-toggler toggle-off-canvas-main-menu mr-2"
                               data-target="#primary-menu-offcanvas">
                                <span class="navbar-toggler-icon"></span>
                                <span class="navbar-toggler-icon"></span>
                                <span class="navbar-toggler-icon"></span>
                            </a>
                        </div>
                        <div class="brand">
                            <a class="brand d-flex align-items-center">
                            <span class="adonis-icon mr-md-2 mr-1 icon-5x">
                                <img src="../assets/images/new-images/unltd-logo-small.png">
                            </span>
                                <strong class="p-1 fs-6 fs-md-8"></strong>
                            </a>
                        </div>
                    </div>


                </div>
            </div>
        </header>
    </div>

    <div id="site-content">
        <div id="site-content-inner">
            <div class="pt-4 pt-lg-5">
                <h3 style="text-align: center;color:#7df442">
                    Welcome to UNLTD
                </h3>

            </div>
            <h4 style="text-align: center;color: #7df442">
                Subscribe to hear more about the revolution
            </h4>
            <div class="form-wrapper-2 w-form">
                <form class="form-subscribe" data-name="Email Form 3" id="email-form-3" name="email-form-3"
                      action="../php/new_subscription.php" method="post" enctype="multipart/form-data">
                    <input class="text-field-8 w-input" data-name="emailTxt" id="email" maxlength="256" name="email"
                           placeholder="dame@rvmrunltd.us" type="email" required="">
                    <input class="submit-button-4 w-button" data-wait="Please wait..." id="uploadBtn" type="submit"
                           value="Subscribe">
                </form>
            </div>
        </div><!--/#site-content-inner-->
    </div><!--/#site-content-->
</div>
</body>
</html>