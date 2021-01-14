<?php

include "includes/header.php";
include "config/database.php";


if (isset($_POST['send_mess'])) {

    $name       = trim($_POST['name']);
    $email      = trim($_POST['email']);
    $phone      = trim($_POST['phone']);
    $comment    = trim($_POST['comment']);
    $date       = date('Y-m-d H:i:s');

    $conn->query("INSERT INTO `comments` (`name`,`email`,`phone`,`comment`,`post`,`status`,`created_at`) VALUES ('$name','$email','$phone','$comment','food-security','0','$date')") or die($conn->error);
    setcookie("success", true, time()+3);
    header("location: food-security");
}


?>

<main>
    <!--? Hero Start -->
    <div class="slider-area">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>FOOD SECURITY</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Details Start -->
    <div class="about-details section-padding30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="about-details-cap mb-50">
                        <p align="justify">
                            <span style="font-weight: 600;">What is Food Security?</span> <br>
                            In Kenya it’s common to find a grocery store, convenience store, or even a farmers’ market in your area.
                            How often have you visited, pushed a cart around, and seen the variety of available food on the shelves?
                            Maybe you’ve selected the best fruits and vegetables from the stacks or picked your favourite meat and
                            dairy products from the refrigerated displays. But have you ever stopped to think about how it got there?
                            dairy products from the refrigerated displays. But have you ever stopped to think about how it got there?
                            dairy products from the refrigerated displays. But have you ever stopped to think about how it got there?
                        </p>
                        <p align="justify">
                            Food goes through a cycle from production to waste management, and every step along the way we must be
                            Food goes through a cycle from production to waste management, and every step along the way we must be
                            Food goes through a cycle from production to waste management, and every step along the way we must be
                            thinking of ways to ensure that food is available, accessible, affordable, nutritious, and stable for
                            thinking of ways to ensure that food is available, accessible, affordable, nutritious, and stable for
                            thinking of ways to ensure that food is available, accessible, affordable, nutritious, and stable for
                            all people. When these five basic elements are not met, food insecurity can occur. In Kenya,3 in ten
                            all people. When these five basic elements are not met, food insecurity can occur. In Kenya,3 in ten
                            all people. When these five basic elements are not met, food insecurity can occur. In Kenya,3 in ten
                            households and one in six children were food insecure between 2017 and 2018. Globally, the situation is
                            households and one in six children were food insecure between 2017 and 2018. Globally, the situation is
                            households and one in six children were food insecure between 2017 and 2018. Globally, the situation is
                            even more critical, with nearly 690 million people who are hungry and 750 million who are exposed to severe
                            even more critical, with nearly 690 million people who are hungry and 750 million who are exposed to severe
                            even more critical, with nearly 690 million people who are hungry and 750 million who are exposed to severe
                            levels of food insecurity. Achieving the five elements of food security, in all stages of the food cycle, is
                            vital to the goal of eliminating hunger and malnutrition worldwide.
                            vital to the goal of eliminating hunger and malnutrition worldwide.
                            vital to the goal of eliminating hunger and malnutrition worldwide.
                        </p>
                        <p align="justify">
                            <span style="font-weight: 600;">Production</span> <br>
                            Most people do not grow or raise their own food, which means they rely on farmers to produce the food they find on
                            Most people do not grow or raise their own food, which means they rely on farmers to produce the food they find on
                            Most people do not grow or raise their own food, which means they rely on farmers to produce the food they find on
                            their retail shelves. With the high demand of a growing population, the development of crops that are more resilient
                            to weather, disease, and pests are important to keeping food available to the population. New innovations, such as
                            temperature-controlled grain silos, global positioning systems, and drip irrigation, help preserve environmental
                            temperature-controlled grain silos, global positioning systems, and drip irrigation, help preserve environmental
                            temperature-controlled grain silos, global positioning systems, and drip irrigation, help preserve environmental
                            resources like water and land. They also reserve food stores for longer periods of time. The developments of more
                            accurate farming techniques keep food available and sustainable, allowing an increase in crop growth and a decrease
                            in land, water, and nutrient usage.
                        </p>
                        <p align="justify">
                            <span style="font-weight: 600;">Manufacturing</span> <br>
                            Food needs to be processed and packaged for transportation to retailers. This step of the food cycle has the highest level of waste in the developed world at 43 per cent. Evolving to reduce this percentage while keeping food from degradation during the process is an ongoing challenge. This requires new, more efficient processing technologies and the recovery of food by-products . The use of recycled, edible, or biodegradable packaging also helps to protect the environment and create a more sustainable food-processing system.
                            Food needs to be processed and packaged for transportation to retailers. This step of the food cycle has the highest level of waste in the developed world at 43 per cent. Evolving to reduce this percentage while keeping food from degradation during the process is an ongoing challenge. This requires new, more efficient processing technologies and the recovery of food by-products . The use of recycled, edible, or biodegradable packaging also helps to protect the environment and create a more sustainable food-processing system.
                            Food needs to be processed and packaged for transportation to retailers. This step of the food cycle has the highest level of waste in the developed world at 43 per cent. Evolving to reduce this percentage while keeping food from degradation during the process is an ongoing challenge. This requires new, more efficient processing technologies and the recovery of food by-products . The use of recycled, edible, or biodegradable packaging also helps to protect the environment and create a more sustainable food-processing system.
                        </p>
                        <p align="justify">
                            <span style="font-weight: 600;">Distributing</span> <br>
                            Transportation ensures that food makes it from farms and manufacturers to retailers, such as grocery stores. Shortening the distance food needs to travel by supporting local production reduces emissions and creates a more sustainable system. However, to ensure the availability of food in all circumstances, it is essential to have transportation plans in place for instances when local food production faces challenges. Access to produce from foreign climates also provides a greater variety of nutritious and culturally diverse food.
                        </p>
                        <p align="justify">
                            <span style="font-weight: 600;">Retail</span> <br>
                            Supermarkets, convenience stores, independent grocers, and farmers’ markets are all examples of retailers that sell food. People rely on these businesses to provide them access to the food they need, and having diverse, affordable options within reach is a vital aspect of food security. Sustainable practices can also be implemented at a retail level, by reducing amounts of plastic and food waste. Encouraging the use of reusable grocery bags, donating near-expired products, and even composting at a store level can help achieve this.
                        </p>
                        <p align="justify">
                            <span style="font-weight: 600;">Consumption</span> <br>
                            Food is a requirement of life, but the type of food consumed matters. Proper nourishment means having strong bodies and sharp minds. Nutrition education and access to healthy choices is vital to supplying us with the daily needs necessary to support a healthy lifestyle. Religious, medical, and ethical factors are also important. Enough options need to be available for those with dietary restrictions. Likewise, for quality of life, people should have choice and access to food they enjoy. What’s common to eat in one country
                            might not be common in another.For instance, insects are not as widely as consumed in Kenya as they are in other countries.
                        </p>
                        <p align="justify">
                            <span style="font-weight: 600;">Waste Management</span> <br>
                            Food that isn't consumed is disposed off through waste management systems.Compost is one way that organic waste can be managed in a suitable way, using old food to fertilize new production, however food security aims to limit foodwastes in areas of abundance surpluses to areas where Hunger is still a concern.
                            <!-- Download pdf  -->
                            <a style="color: green; font-weight: 600;" class="" href="What is Food security.pdf" download>
                                Download pdf
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="comment-form">
                <h4>Leave a Comment</h4>
                <div class="row">
                    <div class="col-md-12">

                        <?php if(isset($_COOKIE['success']) and $_COOKIE['success']) {?>
                            <div class="container-fluid">

                                <div class="row">
                                    <div class="col-md-12 pt-4 text-center">
                                        <div id="notif" class="alert alert-success text-center alert-dismissible fade show mt-4" role="alert">
                                            <strong>Your Comment Was Submitted Successfully. </strong>
                                            <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        <?php } ?>
                    </div>
                </div>
                <form class="form-contact comment_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data" id="commentForm">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment" required></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="name" id="name" type="text" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="email" id="email" type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="phone" id="website" type="number" placeholder="Phone" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="send_mess" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- About Details End -->

</main>




<?php include "includes/footer.php"; ?>