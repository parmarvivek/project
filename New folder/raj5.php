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
    
 ;
    if(isset($_POST['submitFeedBack']))
    {
            $whereTo = $_POST['name'];
            $arrival = $_POST['email'];
            $leaving = $_POST['number'];
            $leaving = $_POST['subject'];
            $leaving = $_POST['message'];
            $sql = "insert into feedback (name,email,number,subject,message) values('$nameTo','$email','$number','$subject','$message')";
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
    <link rel="stylesheet" href="raj5.css">
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


    <div class="ss"><h1>RAJASTHAN FORT AND PALACES
    </h1>
    <p>Delhi - Samode - Mandawa - Gajner - Bikaner - Jaisalmer - Rohet - Udaipur - Deogarh - Jaipur - Bharatpur - Agra - Delhi

    </p> </div>&nbsp
    
        <div class="video-container">
            <video src="images\transformative Trip to India _ Golden Triangle Tour _ India Tour_Trim.mp4" id="video-slider" loop autoplay muted></video>
        </div>
       


    <div class="overview">
        <h1> Overview</h1>&nbsp
        <p>Visit India and follow the famous Golden Triangle. Enjoy the perfect introduction to India’s three most popular destinations – Delhi, Agra and Jaipur – as we explore the icons and discover the secrets of this fascinating region. Experience the history of massive forts, the opulence and splendour of Rajasthan’s palaces, the bustle and buzz of markets and bazaars, and the traditions of a heritage homestay. Travel through a land full of contrasts on this compact India tour, jam-packed with unforgettable highlights.</p>
    </div>

    <div class="card">
        <div class="slideshow-container fade">

            <!-- Full images with numbers and message Info -->
            <div class="Containers">
              
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS71fe1oHJE7-VYNYJHvbhIuE2AeSJA1gtcfQ&usqp=CAU" style="width: 100%;">
            
            </div>
          
            <div class="Containers">
             
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSVPgskel4csLliUJfWc54R5a2PUDxMUjHrw&usqp=CAU" style="width: 100%;" >
              
            </div>
          
            <div class="Containers">
              
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUghcj0LLlRYRYOiuObT4e21vbdjTO4paq1A&usqp=CAU"style="width: 100%;" >
              
            </div>
          
            <!-- Back and forward buttons -->
            <a class="Back" onclick="plusSlides(-1)">&#10094;</a>
            <a class="forward" onclick="plusSlides(1)">&#10095;</a>
          </div>
          <br>
          
          <!-- The circles/dots -->
         

         

          <script>
              var slidePosition = 1;
SlideShow(slidePosition);

// forward/Back controls
function plusSlides(n) {
  SlideShow(slidePosition += n);
}

//  images controls
function currentSlide(n) {
  SlideShow(slidePosition = n);
}

function SlideShow(n) {
  var i;
  var slides = document.getElementsByClassName("Containers");
  var circles = document.getElementsByClassName("dots");
  if (n > slides.length) {slidePosition = 1}
  if (n < 1) {slidePosition = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < circles.length; i++) {
      circles[i].className = circles[i].className.replace(" enable", "");
  }
  slides[slidePosition-1].style.display = "block";
  circles[slidePosition-1].className += " enable";
} 
var slidePosition = 0;
SlideShow();

function SlideShow() {
  var i;
  var slides = document.getElementsByClassName("Containers");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slidePosition++;
  if (slidePosition > slides.length) {slidePosition = 1}
  slides[slidePosition-1].style.display = "block";
  setTimeout(SlideShow, 2000); // Change image every 2 seconds
} 
          </script>
    
    </div>
    </div>
  

    <div class="detail-tour">
        <h1>DETAILED TOUR ITERNARY</h1>
    </div>
    <div class="detail">
        <div class="text-1"><h1>Day-1</h1>&nbsp
        <p>Today, enter the world of Pack The Bag Tours as you begin your journey to Golden Triangle Tour. On arrival into Delhi proceed to the hotel and check in.Overnight in Delhi.</p></div>&nbsp
        <div class="text-2"><h1>Day-2</h1>&nbsp
            <p>After breakfast proceed on a guided city tour of Delhi. Visit the Qutub Minar, Humayun’s Tomb, India Gate (war memorial arch), Lakshminarayan Temple – a modern Hindu Temple. Drive past the President’s House, Parliament House, Government Secretariat Buildings and Connaught Place.
                Later proceed to Old Delhi and visit the Red Fort, Jama Masjid, Raj Ghat and Shanti Vana, the cremation sites of Mahatma Gandhi and Jawaharlal Nehru. See Chandni Chowk and many more interesting sights on your tour.Overnight in Delhi.</p></div>&nbsp
        <div class="text-3"><h1>Day-3</h1>&nbsp
            <p>(Approx. 5 Hrs) After breakfast drive to Agra – the city of the Taj Mahal. Arrive into Agra and check into your hotel. Enroute, visit Sikandra which houses Akbar’s tomb – its design features are similar to the design of the Taj Mahal.
                This afternoon visit the Agra fort, built by the great Emperor Akbar, and the famous Taj Mahal the symbol of love, built by Emperor Shah Jahan in memory of his wife Mumtaz Mahal.Overnight in Agra.</p></div>&nbsp
        <div class="text-4"><h1>Day-4</h1>&nbsp
            <p>
                (Approx 5 Hrs) After breakfast drive to the pink city of Jaipur. En route visit, Fatehpur Sikri, the deserted red sandstone city built by the Mughal emperor Akbar. On arrival check into your hotel. The rest of the day is at leisure.Overnight in Jaipur.</p></div>&nbsp
        <div class="text-5"><h1>Day-5</h1>&nbsp
            <p>After breakfast visit the Amber fort, built in 16th century, which is a blend of Hindu and Mughal architecture. Visit the Sheesh Mahal – Palace of Mirrors, one of the most spectacular sights in Amber Fort. Enjoy an elephant ride at Amber.
                Later visit the City Palace Museum, Jantar Mantar – the largest stone observatory in the world, Hawa Mahal – a “Palace of Winds” & the Laxmi Narayan Temple – known for its intricate carvings.Overnight in Jaipur.</p></div>&nbsp
        <div class="text-6"><h1>Day-6</h1>&nbsp
            <p>
                (Approx. 5 Hrs) After breakfast drive back to Delhi and return home with wonderful memories of your Golden Triangle Tour  with Pack The Bag Tours.</p>&nbsp
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
