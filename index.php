<?php
  include "config.php";
  
  $sql="SELECT * FROM `found` where status=1";

  $result=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Tangerine"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lemon&family=Monoton&family=Montserrat:ital,wght@0,200;0,400;0,500;1,300&display=swap"
      rel="stylesheet"
    />

    <!-- mdbootstrap -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    />
    <link
      rel="stylesheet"
      href="node_modules/mdbootstrap/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/mdb.min.css" />
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/style.css" />
    <title>Home</title>
    
      <!--font Awesome ... for button icon-->
      <script src="https://kit.fontawesome.com/9973cec642.js" crossorigin="anonymous"></script>

  </head>

  <body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark">
      <a class="navbar-brand grow" href="#">Lost and Found</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item grow">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item grow">
            <a class="nav-link" href="list.php">List</a>
          </li>
          <li class="nav-item grow">
            <a class="nav-link" href="forms/lostForm.html">Lost</a>
          </li>
          <li class="nav-item grow">
            <a class="nav-link" href="forms/foundForm.html">Found</a>
          </li>
          <li class="nav-item grow">
            <a class="nav-link" href="aboutus.html">About Us</a>
          </li>
          <li class="nav-item grow">
            <a class="nav-link" href="help.html">Help</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- <h1>Hello, world!</h1> -->
    <main>
      <section class="discovery container section-1">
        <div
          class="
            text
            col-lg-6 col-md-6 col-12 w-50 d-flex flex-column align-items-center justify-content-center">
          <h1 class="a" style="font-family: 'Courier New', Courier, monospace;"><b>LOST IT  -  LIST IT  -  FIND IT </b></h1>

          <p style="padding:5px" class="px-3">
            We will all, at some point in our lives, fall. Every single one of us. 
            We shouldn't spend our time trying to avoid falling. We should spend it finding someone who will help us up!
          </p>
          <!-- <p class="mb-5">
            Or if you've lost something just chill! People here are damnnn cool!
          </p> -->
          <div class="shrink">
            <a class="learn-more" href="forms/register.html">Register Now</a>
          </div>
        </div>

        <div class="img col-lg-6 col-md-6 col-12">
          <img
            src="images/lost_and_found.jpg"
            alt="image"
            class="img-fluid lost-found"
          />
        </div>
      </section>

      <section class="discovery-col-ak section-2">
        <div class="container">
          <div class="img col-lg-6 col-md-6 col-12 w-50 pt-5 pb-5">
            <img
              src="images/what_we_do.jpeg"
              alt="image"
              class="img-fluid border-top-20"
              height="1000px"
              width="500px"
            />
          </div>
          <div class="text col-lg-6 col-md-6 col-12 w-50 pt-5 pb-5">
            <h2 class="title mb-3">
              WHAT WE DO
              <hr />
            </h2>

            <p class="mb-5">
              There are two sections where you can go to one is the
              <b><a href="">LOST</a></b> section and the
              other is the
              <b><a href="">FOUND</a></b> section. You can
              inform other people about what precious belonging you’ve lost and
              ask for help and if you’ve found something
              then you can be of help to somebody else. Both the sections have
              their respective instructions. <br />
            </p>
            <div class="shrink d-inline-block">
              <a class="learn-more px-5" href="">Learn More</a>
            </div>
          </div>
        </div>
      </section>
      <section class="service section-3">
        <div class="col mx-auto align-items-center pt-5">
          <div class="heading text-center mb-5 pt-3">
            <h2 class="heading">
              OUR SERVICES
              <div class="d-flex justify-content-center">
                <hr />
              </div>
            </h2>
          </div>
          <div
            class="d-flex flex-row-reverse justify-content-between container"
          >
            <div class="card-image w-50 col-lg-6 col-md-3 col-12 text-right">
              <img class="img-fluid w-100" src="images/lost1.jpg" alt="" />
            </div>
            <div
              class="
                one
                col-lg-6 col-md-3 col-12
                w-50
                m-2
                align-items-center
                lost-found-card 
              "
              style="color:black;"
            >
            
              <h5 class="card-title">Lost</h5>
              <ul class="my-3">
                <li class="text-left mb-3">
                  Any property lost on public places can be reported.
                </li>
                <li class="text-left mb-3">
                  Maximum time for filing any lost report should be 2 days.
                </li>
                <li class="text-left mb-3">
                  Try to be as much detailed as you can be.
                </li>
                <li class="text-left mb-5">
                  Head towards the form below if you have lost your property.
                </li>
              </ul>

              <div class="shrink">
                <a class="learn-more px-5" href="">Next</a>
              </div>
            </div>
          </div>
          <div
            class="d-flex flex-row justify-content-between container mt-5 pb-5"
          >
            <div class="card-image w-50 col-lg-6 col-md-3 col-12 text-left p-5">
              <img class="img-fluid w-100 p-2" src="images/found.jpeg" alt="" />
            </div>
            <div
              class="
                one
                col-lg-6 col-md-3 col-12
                w-50
                m-2
                align-items-center
                lost-found-card
              "
            >
              <h5 class="card-title">Found</h5>
              <ul class="my-3">
                <li class="text-left mb-3">
                  Below is the form, if you've found any lost property.
                </li>
                <li class="text-left mb-3">
                  Please try to report as soon as possible so that you can help
                  someone in need.
                </li>
               
              </ul>

              <div class="shrink">
                <a class="learn-more px-5" href="">Next</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- RECENT RETURNS -->
      

      <section class="section section-lg ">
      <div class="heading text-center mb-4">
          <h2 class="heading">
            RECENT RETURNS
            <div class="d-flex justify-content-center">
              <hr />
            </div>
          </h2>
        </div>
            <div class="container">     
                          <div class="main-container container-fluid">
                <div class="row row-sm m-3">
             <?php   if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){ ?>
                                    
    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
    <div class="carousel slide" data-bs-ride="carousel" id="carouselExample3">
                        <ol class="carousel-indicators">
                            <li class="active" data-bs-slide-to="0" data-bs-target="#carouselExample3"></li>
                            <li data-bs-slide-to="1" data-bs-target="#carouselExample3"></li>

                        </ol>
                        <div class="carousel-inner">
                            <div class="image m-5"  width="540" height="300">
                                <img alt="img" class="d-block w-60" src="images/message/<?php echo $row['image']?>">
                            </div>
                            
                        </div>
                    </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-3"><span style="font-size:20px; color:#1d71f2; text-transform:none;"></span></h4>
                <p class="card-text"><span style="color: #ff6700; font-size:15px;">Item name :</span><span style="font-size:15px;"><?php echo $row['item'];?>  </p>
                <p class="card-text"><span style="color: #ff6700; font-size:15px;">Return by :</span><span style="font-size:15px;"><?php echo $row['name'];?> </p>
                <p class="card-text"><span style="color: #ff6700; font-size:15px;">Last Updated :</span><span style="font-size:15px;"><?php echo $row['return_date'];?>	</p>

               
                
            </div>
         </div>
    </div>
 <?php 
                    }
                  }?>
                  

</div>
</div>

</div>
</div>
            </div>
        </section>

      <!--
      <section class="service section-5">
        <div class="row align-items-center container mx-auto py-5">
          <div class="img col-lg-6 col-md-6 col-12 w-75">
            <img src="images/mission.png" alt="image" class="img-fluid" />
          </div>
          <div class="text col-lg-6 col-md-6 col-12 w-75">
            <h2 class="title mb-3">
              OUR MISSION
              <hr />
            </h2>
            <p class="mb-5">
              Our mission is to make the students community more trustworthy and
              faithful and this place a safe space for all of your precious
              belongings. <br />
              We all know the students have to bring many sorts of precious
              belongings to college for many reasons and there are many chances
              of loosing it which might give the students some permanent scars
              because who knows what insane amount of value a little thing might
              hold in a person’s life but don’t worry that’s where our page and
              your fellow collegemates come forward to help you ! We don’t want
              you to be stressed if you’ve lost something on the college and
              hostel grounds we just want you to fill the form under the
              <b><a href="forms/lostForm.html">LOST</a></b> section so that we
              can get you out of this stress ASAP. <br />
              Even this page is created and managed by some of the students, so
              your fellow collegemates have already started helping you in a
              way.
            </p>
            <div class="shrink d-inline-block">
              <a class="learn-more" href="about_us.html">Learn More</a>
            </div>
          </div>
        </div>
      </section>-->
      <section class="section-primary t-bordered section-6">
        <div class="heading text-center mb-4">
          <h2 class="heading">
            TESTIMONIALS
            <div class="d-flex justify-content-center">
              <hr />
            </div>
          </h2>
        </div>
        <div class="container pb-5">
          <div class="row testimonial-three testimonial-three--col-three">
          <?php  
          include "config.php";
            $f_sql="SELECT * FROM `feedback`";

            $f_result=mysqli_query($conn,$f_sql);
             if($f_result->num_rows>0){
                    while($f_row=$f_result->fetch_assoc()){ ?>
            <div class="col-md-4 testimonial-three-col">
              <div class="testimonial-inner">
                <div class="testimonial-image" itemprop="image">
                  <img
                    width="180"
                    height="180"
                    src="https://bootdey.com/img/Content/avatar/avatar6.png"
                  />
                </div>
                <div class="testimonial-meta mb-2">
                  <strong class="testimonial-name" itemprop="name"
                    ><?php echo $f_row['name'];?></strong
                  >
                </div>
                <div class="testimonial-content">
                  <p>
                  <?php echo $f_row['feedback'];?>
                  </p>
                </div>
              </div>
            </div>
            <?php }
             }
             ?>
          </div>
        </div>
      </section>
    </main>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243208.17099296628!2d83.12250464246186!3d17.738622503740615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a39431389e6973f%3A0x92d9c20395498468!2sVisakhapatnam%2C%20Andhra%20Pradesh!5e0!3m2!1sen!2sin!4v1679666880180!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    <footer id="page-footer" class="py-2 bg-dark">
      <div class="brand">
        <a class="navbar-brand" href="#">Lost and Found</a>
      </div>
      <div class="copyright">
        <small>
          <span>Designed by &copy;</span> <span>3435363739</span>
          <span>Terms of Use</span> and <span>Privacy Policy</span></small
        >
      </div>
<br>
<hr>
      <!-- <div class="favicon">
        <i class="social-media fab fa-facebook-f fa-2x"></i>
        <i class="social-media fab fa-twitter fa-2x"></i>
        <i class="social-media fab fa-instagram fa-2x"></i>
        <i class="social-media fas fa-envelope fa-2x"></i>
      </div> -->

      <div class="BackToTop">
        <a id="back-to-top" href="#"  role="button"><i class="back fas fa-chevron-up fa-2x"></i></a>
        <h4>Back To Top</h4>
        </div>
        
    </footer>


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>

    <!-- mdbootstrap -->
    <script
      type="text/javascript"
      src="node_modules/mdbootstrap/js/jquery.min.js"
    ></script>
    <script
      type="text/javascript"
      src="node_modules/mdbootstrap/js/popper.min.js"
    ></script>
    <script
      type="text/javascript"
      src="node_modules/mdbootstrap/js/bootstrap.min.js"
    ></script>
    <script
      type="text/javascript"
      src="node_modules/mdbootstrap/js/mdb.min.js"
    ></script>
  </body>
</html>
