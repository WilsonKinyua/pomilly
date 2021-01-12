<?php include "includes/header.php"; 

include "config/database.php";


if(isset($_POST['send_mess'])) {

    $name       = trim($_POST['name']);
    $email      = trim($_POST['email']);
    $phone      = trim($_POST['phone']);
    $comment    = trim($_POST['comment']);

    $conn->query("INSERT INTO `comments` (`name`,`email`,`phone`,`comment`,`post`,`status`) VALUES ('$name','$email','$phone','$comment','food-insecurity','0')") or die($conn->error);
    header("Location: food-insecurity");
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
                            <h2 style="text-transform: uppercase;">Indoor Vertical Farming</h2>
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
                        <p align="justify"> Types of Indoor Vertical Farming: Which is Best? <br>
                            Typically, we find there are three major vertical farming methods businesses 
                            utilise to achieve optimum levels of quality and growth. These are, aeroponics, aquaponics 
                            and hydroponics, all of which operate with the absence of sunlight and soil, all using direct 
                            access of various nutrient rich solutions instead.
                        </p>

                        <p align="justify"> 
                            The first of these methods, aeroponics is one of the least common methods used but one of the most
                             profitable. This method was developed by NASA in the 1990s with the intention of searching for more
                              innovative ways of growing food indoors (inside space habitats). There are many commonalities with
                               the other methods such as the compact stacks on top of each other with LED lighting systems over 
                               the crops and controlled environment inside negating the disadvantage of unfavourable weather patterns. 
                               The difference with this technique is that it exposes the crops roots to nutrient rich droplets. One of 
                               the largest companies to use this method is AeroFarms, based out of New Jersey. The reason for its 
                               favourability amongst certain companies is that is by far the most efficient system of the three as it 
                               uses up to 90% less water than traditional farming methods and 40% less water than most standard hydroponics 
                               systems. Furthermore, using mist instead of liquid water allows for the plants in aeroponics systems to take 
                               in more minerals and vitamins compared to its counterparts.

                        </p>

                        <p align="justify">
                            In hydroponics systems, the nutrient solution is pumped around reservoirs which the plant roots grow
                             directly into, whereas in aeroponic systems, the plant roots grow free and a water and nutrient solution 
                             is sprayed directly onto them. This increases the degree of aeration of the roots, which can have favourable
                              effects in terms of plant health and growth potential. The benefits of this system include its water efficiency,
                               nutrient control and relative affordability compared to the other two methods. As this is the most entry-friendly 
                               method, the majority of vertical farming companies utilise these kinds of systems with one of the largest in London
                                being Growing Underground. 
                        </p>

                        <p align="justify">
                        The final method of the three, aquaponics takes the hydroponics system one stage further with the addition of the circular 
                        structure between crops and fish. Aquaponics, as a concept, can trace its origins back 1000 years to the Aztecs but
                         the modern-day aquaponics has been steadily growing in popularity since the 1970s where many university researchers, 
                         such as Dr. James Rakocy of the University of the Virgin Islands, worked to develop technological ways to improve output.
                          The main draw to this methodology is that both the fish and crops contribute to the development of each other. 
                          This happens as the nutrient rich wastewater garnered from the fishponds is fed to the crops in the vertical farm. 
                          The wastewater is then filtered and purified by the plants and sent back to the fishponds. A main user of this method
                           is GrowUp Farms in London. 
                        </p>

                        <p align="justify"> So, what is the best of these methods? We have all heard the benefits and disadvantages of such,
                             how can we decide what horse to back? Well, I am sure you already know, it’s not as simple as that. There are
                              so many other factors to consider which can drastically alter what would be the most favourable method for you 
                              yourself to consider when opening your own vertical farm. Here we will make three considerations for what could 
                              be considered the best systems of the varying systems, these are: initial costs, crop yields and cycling time. 
                              There are other factors that could be considered but for now we will go with these three. 
                        </p>

                        <p align="justify">   So, with the first consideration, initial costs, it is clear that the cheapest entry into the
                             market of the three is the hydroponics system as this is oldest and most developed method. Aquaponics
                              farms typically initially cost 30-50% more than hydroponics farms due to the integration with the fish 
                              tanks and those extra costs. This is true of aeroponics farms as well with the need for additional accessories 
                              such to an optimal function. 
                        </p>

                        <p align="justify"> However, this does not necessarily follow once the farms reach full capacity, aeroponics 
                            systems often have the highest yields than aquaponics but aeroponics come out on top of the three.
                             The main reason for this is that unlike the other two systems, plants are not having to compete with 
                             each other for nutrients allowing for quicker development and higher crop yields. Moreover, due to the
                              nature of the aeroponics crops’ roots being suspended in air, there is little to no wastage of nutrients
                               allowing for the crops to absorb almost everything added to the system. 
                        </p>

                        <p align="justify">  Finally, when we look at cycling times aquaponics systems can take up to 12 months to reach 
                            full capacity mainly due to the need to build a healthy microbial community prior to even adding the 
                            fish to the cycle, even once this is completed, there will be a long period whereby there will be a 
                            depressed production. However, once this is done, Aquaponics systems often experience greater yields than 
                            their hydroponic counterparts and can then decrease their cycling times to 6 weeks. Comparatively, we see
                             a cycling time of just 3-4 weeks for a hydroponics system from the get-go to reach full capacity, proving 
                             very tempting for first time urban farmers. When looking at Aeroponics, notable user of this method, AeroFarms,
                              can achieve a cycle time of 16 days. 
                        </p>

                        <p align="justify"> There are many other factors that could be considered such as environmental impact and 
                            energy requirements, but these are relatively even amongst the three system, the determinant for the 
                            individual companies would be what energy saving measure they use as well as if they integrate any 
                            renewable energy collection into their system. For now, we acknowledge that each system has its advantages 
                            and disadvantages, aeroponics seems like the best way but its high initial costs may repel potential investors. 
                            Aquaponics may seem like a long cycle time, but they may provide better returns in the long-term as they sell
                             both crops and fish. Hydroponics has the cheapest initial costs and is therefore the most popular but does
                              end up using more water than the others. With each system having their own advantages and disadvantages, 
                              there are companies that cycle between them depending on the needs of the plant, type of substrate or the 
                              stage of growth such as Vertical Future. 
                        </p>
                        <p align="justify">
                        Perhaps the best answer is that there is no best option and that, with each system having their own specific
                         advantages, we can have a larger diversity of farms concentrating on different crops and differing scales
                        </p>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- About Details End -->

</main>




<?php include "includes/footer.php"; ?>