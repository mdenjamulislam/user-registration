<?php 


    if (isset($_POST['submit'])) {
        
        $s_name = $_POST['s_name'];
        //$s_bdate = $_POST['S_bdate'];
        $s_gender = $_POST['s_gender'];
        $s_email = $_POST['s_email'];
        $s_phone = $_POST['phone'];
        $s_subject = $_POST['subject'];
        $s_password = $_POST['password'];
        // profile pic showing 
        $img_name = $_FILES['profile_img']['name'];
        $tmp_name = $_FILES['profile_img']['tmp_name'];
        move_uploaded_file($tmp_name, "images/".$img_name);
        

    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Md Enjamul Islam">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>

    <!-- Bootstrap stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
     <!-- Owl carousel -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
     <!-- Fontwesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <!-- site stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Start profile banner section -->
    <section id="pro_banner">
        <div class="cover_photo"></div>
    </section>
    <!-- end profile banner section -->

    <!-- Start profile section -->
    <section id="profile">
        <div class="container pro_container">
            <div class="profile-abbsoulate">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="profile_pic">
                            <figure class="figure">
                                <img src="images/<?php if(isset($img_name)){echo $img_name;} ?>" class="figure-img" alt="">
                            </figure>
                        </div>
                    </div><!-- end col -->
                    <div class="col-sm-8">
                        <div class="profile_details">
                            <h2 class="name"><?php if (isset($s_name)) {
                                echo $s_name;
                            }?></h2>
                            <small class="subject"><?php if (isset($s_subject)) {echo $s_subject;} ?> Science of Engieering</small>
                            <h4 class="title">Web Developer & Data Entry Expart</h4>
                            <span class="q_point">154 Quice Point</span>
                            <div class="activity">
                                <p><a href="#">10/15</a> <b>Attendance</b></p>
                                <p><a href="#">10/15</a> <b>Attendance</b></p>
                                <p><a href="#">10/15</a> <b>Attendance</b></p>
                                <p><a href="#">10/15</a> <b>Attendance</b></p>
                            </div><!-- end activity -->
                            <div class="descriptio">
                                <p>Hi I am MD Enjamul Islam. I am Professional Website Font-end Designer and Expert in HTML , CSS. Mostly I like to work to do with HTML, CSS and Bootatrap. I also work to keep my clients happy.</p>
                            </div>
                        </div>
                    </div><!-- end col -->
                    <!-- Start personal details -->
                    <div class="col-sm-4">
                        <div class="personal_details">
                            <h4 class="hr">Personal Information</h4>
                            <h6 class="name">Name: <span><?php if (isset($s_name)) {echo $s_name;} ?></span></h6>
                            <h6 class="subject">Subject: <span><?php if (isset($s_subject)) {echo $s_subject;} ?> Science</span></h6>
                            <h6 class="email">Email: <span><?php if (isset($s_email)) {echo $s_email;} ?></span></h6>
                            <h6 class="phone">Phone: <span><?php if (isset($s_phone)) {echo $s_phone;} ?></span></h6>
                        </div>
                    </div>
                </div><!-- end row -->
            </div>
            
        </div><!-- end container -->
    </section>
    <!-- End profile section -->
    



    <!-- Site script file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap js file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
</body>
</html>