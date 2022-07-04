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

    <!-- Start sign up section -->
    <section id="signup">
        <div class="container">
            <div class="signup-wrap">
                <div class="card">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="card-heading card-img-left">
                                <img src="images/signup.png" alt="signup">
                            </div><!-- card heading -->
                        </div><!-- end col -->
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h2 class="heading">Registration Info</h2>
                                <form class="s_reg" action="profile.php" method="POST" enctype="multipart/form-data">
                                <div class="input-group mb-3">
                                        <input type="file" name="profile_img" class="form-control">
                                    </div><!-- end input-group -->
                                    <div class="input-group mb-3">
                                        <input type="text" name="s_name" placeholder="Name" class="form-control">
                                    </div><!-- end input-group -->
                                    <div class="input-group mb-3 date" id="datepicker">
                                        <input type="text" name="s_bdate" class="form-control" id="date" placeholder="Birthday">
                                        <span class="input-group-append">
                                          <span class="input-group-text d-block">
                                            <i class="fa fa-calendar"></i>
                                          </span>
                                        </span>
                                    </div><!-- end input-group -->
                                    <div class="input-group mb-3">
                                        <select class="form-select" name="s_gender" aria-label="Default select example">
                                            <option selected>Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div><!-- end input-group -->
                                    <div class="input-group mb-3">
                                        <input type="email" name="s_email" placeholder="Email" class="form-control">
                                    </div><!-- end input-group -->
                                    <div class="input-group mb-3">
                                        <input type="text" name="phone" placeholder="Phone" class="form-control">
                                    </div><!-- end input-group -->
                                    <div class="input-group mb-3">
                                        <select class="form-select" name="subject" aria-label="Default select example">
                                            <option selected>Subject</option>
                                            <option value="Computer">Computer</option>
                                            <option value="Civil">Civil</option>
                                            <option value="Eloctronic">Eloctronic</option>
                                        </select>
                                    </div><!-- end input-group -->
                                    <div class="input-group mb-3">
                                        <input type="text" name="password" placeholder="Password" class="form-control">
                                    </div><!-- end input-group -->
                                    <div class="input-group mb-3">
                                        <input type="submit" name="submit" value="Submit" class="btn btn-success">
                                    </div><!-- end input-group -->
                                </form>
                            </div><!-- end card-body -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end card -->
            </div><!-- end signup wrap -->
        </div><!-- end constiner -->
    </section>
    <!-- end signup -->
    



    <!-- Site script file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap js file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
</body>
</html>