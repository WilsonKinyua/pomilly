<?php

include "includes/header.php"; 
include "config/database.php"; 

if(isset($_POST['contact_us'])) {

    $name      = trim($_POST['name']);
    $subject   = trim($_POST['subject']);
    $email     = trim($_POST['email']);
    $message   = trim($_POST['message']);

    $conn->query("INSERT INTO `contact`(`name`, `subject`, `email`, `message`) VALUES ('$name','$subject','$email','$message') ") or die($conn->error);
    setcookie("success_submitted", true, time()+3);

    header('location: contactus');
}
?>
    <main>
        <!--? Hero Start -->
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Contact Us</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!-- ================ contact section start ================= -->
        <section class="contact-section">
            <div class="container">
           
                
                <!--Google Maps-->
                <div class="row">
                <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
                    </div>
                    <div class="col-12">
                    <style>
                    .map-container{
                    overflow:hidden;
                    padding-bottom:56.25%;
                    position:relative;
                    height:0;
                    margin-bottom: 20px;
                    }
                    .map-container iframe{
                    left:0;
                    top:0;
                    height:100%;
                    width:100%;
                    position:absolute;
                    }
                </style>
            
                <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7655710236354!2d36.83241031475404!3d-1.3162339990399992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f11af9e4bf357%3A0x7c987dd1ae3da749!2sCapital%20Centre!5e0!3m2!1sen!2ske!4v1610624084276!5m2!1sen!2ske" frameborder="0"
                    style="border:0" allowfullscreen>
                </iframe>
                </div>
                  <!--Google map-->
                    </div>
                   
                    <div class="col-md-12">
                  <?php if(isset($_COOKIE['success_submitted']) and $_COOKIE['success_submitted']) {?>
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-md-12 pt-4 text-center">
                                  <div id="notif" class="alert alert-success text-center alert-dismissible fade show mt-4" role="alert">
                                      <strong>Message Submitted Successfully. </strong>
                                      <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                              </div>
                          </div>
                      </div>

                  <?php } ?>
                  </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30"
                                            rows="9" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter Message'"
                                            placeholder=" Enter Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text"
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email"
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'"
                                            placeholder="Enter Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" name="contact_us" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>5338-00100, Capital Center, Nairobi, Kenya.</h3>

                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+254 751 877 377 | +254 745 462 781</h3>

                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>info@pomilly.com</h3>

                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </section>
        <!-- ================ contact section end ================= -->
    </main>
    <?php include "includes/footer.php"; ?>