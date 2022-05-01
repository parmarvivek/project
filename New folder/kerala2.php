<?php
    require_once './lib/config.php';
    if(isset($_POST['submit']))
    {
            $whereTo = $_POST['where'];
            $arrival = $_POST['arrival'];
            $leaving = $_POST['leaving'];
            $sql = "insert into booknow (place,arrival,leaving) values('$whereTo','$arrival','$leaving')";
            if($conn->query($sql))
            {
                echo "bingoooooo";
            }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="kerla1.css">
    <link rel="stylesheet" type="text/css" href="http://schauhan.in/Examples/ecommerce_product_slider/style1.css" />
<link rel="stylesheet" type="text/css" href="http://schauhan.in/Examples/ecommerce_product_slider/lightslider.css" />
<script src="http://schauhan.in/Examples/ecommerce_product_slider/jquery-3.5.1.js" ></script>
<script src="http://schauhan.in/Examples/ecommerce_product_slider/lightslider.js" ></script>
<script>
	  $(document).ready(function() {
    $('#autoWidth').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        } 
    });  
  });
	</script>
 
    
</head>
<body>
 <header>

        <div id="menu-bar" class="fas fa-bars"></div>
    
        <a href="index.php" class="logo"><span>PACK</span>The Bag Tours</a>
    
        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="#book">book</a>
            <a href="#packages">packages</a>
            <a href="#services">services</a>
            <a href="#gallery">gallery</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
        </nav>
    
        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <i class="fas fa-user" id="login-btn"></i>
        </div>
    
        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>
    
 </header>


    <div class="ss"><h1>KERALA TOUR PACKAGE</h1>
    <p>COCHIN – MUNNAR – PERIYAR – KUMARAKOM – HO-- USEBOAT – KOVALAM – KANYAKUMARI</p> </div>&nbsp

    
        <div class="slideshow-container fade">

            <div class="video-container">
                <video src="images\production ID_4612080.mp4" id="video-slider" loop autoplay muted ></video>
            </div>
    
    </div>

  
    <div class="overview">
        <h1> Overview</h1>&nbsp
        <p>Kerala Tour Package, an ideal tour package to know this amazing place. Kerala is well known for its wildlife, ancient ayurveda, hill stations, the malabar coast, houseboat and every other thing that makes this place so attractive.</p>
    </div>

  
  

    <div class="detail-tour">
        <h1>DETAILED TOUR ITERNARY</h1>
    </div>
    <div class="detail">
        <div class="text-1"><h1>Day-1</h1>&nbsp
        <p>Tour package in kerala starts on arrival at Kochi airport / Ernakulam Railway station, you will be greeted by our representative and we will transfer you to Hotel. In the afternoon walk off for a half day sightseeing of Kochi including Dutch Palace, Jewish Synagogue, Jews Street, St.Francis church, Chinese fishing net & the Indo-Portuguese Museum. Later in the day we transfer you back to Hotel. Overnight stay is at Hotel in Kochi.</p></div>&nbsp
        <div class="text-2"><h1>Day-2</h1>&nbsp
            <p>After breakfast check out from the hotel and we take you to Munnar (140 Kms / 04 Hrs).Munnar is a picturesque hill station where the earth is dressed in green. Munnar is blessed with emerald green forests and tea plantations, small springs, small cascades, lakes and various species of wild animals. On arrival at Munnar, check into Hotel. Afternoon is for relaxation. Overnight stay is in Hotel.</p></div>&nbsp
        <div class="text-3"><h1>Day-3</h1>&nbsp
            <p>After breakfast we take you for a visit to the breathtaking attractions of Munnar – covering – Mattupetty Lake & Dam, Echo Point, Kundale Lake, Blossom Garden, Rajamalai, Eravikulam Wildlife sanctuary & Tea Plantation. You will be back to the hotel with the ever shining memories of Munnar. Overnight stay is in Hotel.<p></div>&nbsp
        <div class="text-4"><h1>Day-4</h1>&nbsp
            <p>After breakfast we take you to Periyar (Thekkady). Thekkady is the place of famous Periyar Wild Life Sanctuary and which offers green forests, grass lands and various species of wild animals. On arrival at Thekkady, check into Hotel. Relax in the resort. In the afternoon enjoy the mind blowing view of calm and crystal clear Periyar Lake. Later go for spice plantation tour (optional). Overnight stay is at Hotel.<p></div>&nbsp
        <div class="text-5"><h1>Day-5</h1>&nbsp
            <p>After breakfast check out from Hotel and we drive down to Kumarakom (175 Kms / 5 Hrs).Kumarakom is a confluence of beautiful small islands and is characterized by marvelous backwaters, vast paddy fields, mangrove forests, coconut groves etc. On arrival at Kumarakom visit the Kumarakom Bird Sanctuary and later check in at the hotel. In the evening go for Sunset cruise (optional) or enjoy the beauty of backwater by just relaxing near Vembanadu Lake.Night stay at the hotel at Kumarakom.<p></div>&nbsp
        <div class="text-6"><h1>Day-6</h1>&nbsp
            <p>After breakfast checks out from Hotel and we drive you to Alleppey which is famous for its beautiful backwaters. On arrival, board the houseboat which is also known as Kettuvallams, from the jetty. Sit back and relax while the boat cruises through beautiful rivers and canals with palm trees, coconut trees, villages, paddy fields, churches etc. on either side. Experience the toddy outside, . Enjoy the delicious and traditional Kerala food. Overnight stay is in houseboat.<p></div>&nbsp
        <div class="text-7"><h1>Day-7</h1>&nbsp
            <p>Ejoy your breakfast in houseboat and continue the morning cruise in houseboat , checkout and transfer to Kovalam by car( 190 KM/4 hrs) , The journey is through costal areas of Kerala, you can see , view of lagoons rivers, evergreen coconut palms make this journey very enjoyable , Reach Kovalam and check in at your hotel It is one of the beast beaches of India with its lovely slice beach sand and perfectly positioned palms. Evening relax on the kovalam beach. Overnihgt at Hotel.<p></div>&nbsp
        <div class="text-8"><h1>Day-8</h1>&nbsp
            <p>After the breakfast start your tour of Trivandrum and Kovalam beach , Trivandrum is the Evergreen city of India where it offers a feel of natural beauty, commercial touch up and even pilgrimage. Visit: The Napier Museum, Kuthiramalika Museum, Sri Padmanabha Temple. In the evening move back to Kovalam. Overnight is at hotel in Kovalam.<p></div>&nbsp
        <div class="text-9"><h1>Day-9</h1>&nbsp
            <p>Enjoy the sunrise on the beach, after breakfast checkout from the hotel and transfer to kanyakumari enroot visit majestic Padmanaphapuram The capital of the State of Travancore. built in the Travancore architectural style arrive kanyakumari and check in at hotel afternoon go for kanyakumari sightseeing . Visit Vivekananda Rock that houses a memorial dedicated to Swami Vivekanan .The Memorial is built at the convergence of the Indian Ocean, the Arabian Sea and the Bay of Bengal. Ejoy Sunset of Kanyakumari from the tip of India, overnight at Hotel.</p><p></div>&nbsp
        <div class="text-10"><h1>Day-10</h1>&nbsp
            <p>Geet up early for a beautifull view of Sunrise, kanyakumari is a place where you can enjoy Sun rise and Sunset from the same point, something special to remember, After breakfast checkpout and transfer to Trivandrum for your onward journey ,End of your tour package in Kerala<p></div>&nbsp
            </div>
            
            <div class="footer-txt">
        <h3> Pack The Bag Tours </h3>&nbsp
        <p>Pack the bag tours is one of the finest online travel portals in India right now. Managed by a team of dedicated Indians, it is a perfect platform to plan your vacations with. Since we have been in the business of tourism and hospitality for more than 4 successful years now, with us, you can expect to find your entire experience of travelling, staying & sightseeing the best you ever had. </p>
       </div>&nbsp

       <section class="book" id="book">

    <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="images/book-img.svg" alt="">
        </div>

        <form method="post">
            <div class="inputBox">
                <h3>where to</h3>
                <input type="text" placeholder="place name" name="where">
            </div>
           
            <div class="inputBox">
                <h3>arrivals</h3>
                <input type="date" name="arrival">
            </div>
            <div class="inputBox">
                <h3>leaving</h3>
                <input type="date" name="leaving">
            </div>
            <input type="submit" name="submit" class="btn" value="book now">
        </form>

    </div>

</section>
       <div class="simmlar"><h1>You May Also Like</h1></div>


       <section class="slider">
        <ul id="autoWidth" class="cs-hidden">
    
      <li class="item-a">
        <div class="box">
        <div class="slide-img">
        <img alt="schauhan.in responsive product slider using html css and javascript" src="images\blake-verdoorn-cssvEZacHvQ-unsplash.jpg">
        <div class="overlay">
        <a href="andman.php" class="buy-btn">Book Now</a>	
        </div>
        </div>
        <div class="detail-box">
        <div class="type">
        <h3>Andman</h3>
        <p>Tour Package</p>
        </div>
        <a href="#" class="price">$45</a>
        </div>
        </div>		
       </li>
       
       
        <li class="item-a">
        <div class="box">
        <div class="slide-img">
        <img alt="schauhan.in responsive product slider using html css and javascript" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQArXdUdktyjzBtU7HjaWUPWaoBFldbD9g-zg&usqp=CAU">
        <div class="overlay">
        <a href="kerla.php" class="buy-btn">Book Now</a>	
        </div>
        </div>
        <div class="detail-box">
        <div class="type">
        <h3>kerala</h3>
        <p>Tour Package</p>
        </div>
        <a href="#" class="price">$23</a>
        </div>
        </div>		
       </li>
       
       
        <li class="item-a">
        <div class="box">
        <div class="slide-img">
        <img alt="schauhan.in responsive product slider using html css and javascript" src="https://static.toiimg.com/photo/76662273.cms">
        <div class="overlay">
        <a href="darjling-1.php" class="buy-btn">Book Now</a>	
        </div>
        </div>
        <div class="detail-box">
        <div class="type">
            <h3>Darjeeling</h3>
            <p>Tour Package</p>
        </div>
        <a href="#" class="price">$23</a>
        </div>
        </div>		
       </li>
       
       
        <li class="item-a">
        <div class="box">
        <div class="slide-img">
        <img alt="schauhan.in responsive product slider using html css and javascript" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdMJVfpN8TaIgNJ3GafG6tj0-9TWCh27r6KQ&usqp=CAU">
        <div class="overlay">
        <a href="himachal.php" class="buy-btn">Book Now</a>	
        </div>
        </div>
        <div class="detail-box">
        <div class="type">
            <h3>Himachal Pardesh</h3>
            <p>Tour Package</p>
        </div>
        <a href="#" class="price">$23</a>
        </div>
        </div>		
       </li>
       
       
        <li class="item-a">
        <div class="box">
        <div class="slide-img">
        <img alt="schauhan.in responsive product slider using html css and javascript" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRC3BMY9dnUXHx4-26L4hECnXhFU4n9WqTRxw&usqp=CAU">
        <div class="overlay">
        <a href="goa.php" class="buy-btn">Book Now</a>	
        </div>
        </div>
        <div class="detail-box">
        <div class="type">
            <h3>Goa</h3>
            <p>Tour Package</p>
        </div>
        <a href="#" class="price">$23</a>
        </div>
        </div>		
       </li>

       <li class="item-a">
        <div class="box">
        <div class="slide-img">
        <img alt="schauhan.in responsive product slider using html css and javascript" src="https://tse2.mm.bing.net/th?id=OIP.tbegq4tSXkoNZU165mvzAQHaDD&pid=Api&P=0&w=376&h=155">
        <div class="overlay">
        <a href="kashmir.php" class="buy-btn">Book Now</a>	
        </div>
        </div>
        <div class="detail-box">
        <div class="type">
            <h3>Kashmir Tour</h3>
            <p>Tour Package</p>
        </div>
        <a href="#" class="price">$23</a>
        </div>
        </div>		
       </li>
       
    </ul>
        </section>

                
<section class="contact" id="contact">
    
    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="images/contact-img.svg" alt="">
        </div>

        <form action="">
            <div class="inputBox">
                <input type="text" placeholder="name">
                <input type="email" placeholder="email">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="number">
                <input type="text" placeholder="subject">
            </div>
            <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>
            <input type="submit" class="btn" value="send message">
        </form>

    </div>
    
</section>

            
<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quas magni pariatur est accusantium voluptas enim nemo facilis sit debitis.</p>
        </div>
        <div class="box">
            <h3>branch locations</h3>
            <a href="#">india</a>
            <a href="#">USA</a>
            <a href="#">japan</a>
            <a href="#">france</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">book</a>
            <a href="#">packages</a>
            <a href="#">services</a>
            <a href="#">gallery</a>
            <a href="#">review</a>
            <a href="#">contact</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">instagram</a>
            <a href="#">twitter</a>
            <a href="#">linkedin</a>
        </div>

    </div>

    <h1 class="credit"> created by <span> VIVEK & SIDHARTH </span> | all rights reserved! </h1>

</section>


    </body>
</html>
