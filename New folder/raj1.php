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
    <link rel="stylesheet" href="raj1.css">
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

    </p> </div>
    <div class="card">
        <div class="slideshow-container fade">

            <!-- Full images with numbers and message Info -->
            <div class="Containers">
              
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvsKzF_XY0mWR95mbIeACWG5hboTcKvzxrQA&usqp=CAU" style="width: 100%;">
            
            </div>
          
            <div class="Containers">
             
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTERtJG9DhkJ8XYjXQ-jI9aEEJ5M_-cZVRn5Q&usqp=CAU" style="width: 100%;" >
              
            </div>
          
            <div class="Containers">
              
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVBt-u7GjX-jdoE0t0QFgIK1fC5ueUw_qn6w&usqp=CAU"style="width: 100%;" >
              
            </div>
          
            <!-- Back and forward buttons -->
            <a class="Back" onclick="plusSlides(-1)">&#10094;</a>
            <a class="forward" onclick="plusSlides(1)">&#10095;</a>
          </div>
          <br>
          
          <!-- The circles/dots -->
          <div style="text-align:center">
            <span class="dots" onclick="currentSlide(1)"></span>
            <span class="dots" onclick="currentSlide(2)"></span>
            <span class="dots" onclick="currentSlide(3)"></span>
          </div> &nbsp

         

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


    <div class="overview">
        <h1> Overview</h1>&nbsp
        <p>Rajasthan fort and Palaces Tour package gives you the opportunity to get into the beauty of the most colorful state in India. Rajasthan is famous for its historical Havelis and Palaces. Scattered all around in the state, these palaces and forts have a uniqueness of their own, with each one of them narrating a story about its kings, kingdom and colorful culture.</p>
    </div>
    <div class="famous">
        <h1>Following are the most famous palaces in Rajasthan:</h1>&nbsp
        <ol>
            <li>Lake Palace, Udaipur</li>&nbsp
            <li>Deogarh Mahal near Udaipur</li>&nbsp
            <li>Udai Vilas Palace, Udaipur</li>&nbsp
            <li>Rambagh Palace, Jaipur</li>&nbsp
            <li>City Palace, Jaipur</li>&nbsp
            <li>Amber Palace, Jaipur</li>&nbsp
            <li>Hawa Mahal, Jaipur</li>&nbsp
            <li>Jai Mahal Palace, Jaipur</li>&nbsp
            <li>Bundi Palace, Bundi</li>&nbsp
        </ol>
        <ul>
            <li>Taragarh Fort, Bundi</li>&nbsp
            <li>Junagarh Fort, Bikaner</li>&nbsp
            <li>Mehrangarh Fort, Jodhpur</li>&nbsp
            <li>Jaisalmer Fort, Jaisalmer</li>&nbsp
            <li>Kumbhalgarh Fort near Udaipur</li>&nbsp
            <li>Chittorgarh Fort, Udaipur</li>&nbsp
            <li>Ranthambore Fort, Sawai Madhopur</li>&nbsp
            <li>Jaigarh Fort, Jaipur
            </li>&nbsp
            <li>Amber Fort, Jaipur</li>&nbsp
        </ul>
    </div>

    <div class="detail-tour">
        <h1>DETAILED TOUR ITERNARY</h1>
    </div>
    <div class="detail">
        <div class="text-1"><h1>Day-1</h1>&nbsp
        <p>Upon arrival you will be met at the airport with garlands. Our executive would escort you to your hotel Imperial . We would have done a pre check in for you at the hotel which saves you time in the middle of the night.</p></div>&nbsp
        <div class="text-2"><h1>Day-2</h1>&nbsp
            <p>After a good rest and a leisurely breakfast , we’ll take an orientation tour of the city, that s quite a remarkable mixture of the old and new. The very modern metro , which once was the seat of most of the ruling clans of Hindustan. The visit includes the 12th century qutub minar and the vibrant old Delhi. A Welcome dinner at the Village Bistro with cocktails.</p></div>&nbsp
        <div class="text-3"><h1>Day-3</h1>&nbsp
            <p>After a restful night and a leisurely breakfast, we head out for the village of Samode for two nights at the beautiful Samode Palace.</p></div>&nbsp
        <div class="text-4"><h1>Day-4</h1>&nbsp
            <p>We spend the day exploring the rural life and the comforts of the pristine Samode palace.
                Tonight we host you a dinner at a special venue to add to the charm of the palace.</p></div>&nbsp
        <div class="text-5"><h1>Day-5</h1>&nbsp
            <p>This morning, we depart for the very special region of Rajasthan, also known as the open air art gallery. Upon arrival around lunch , check in at the Mandawa castle / desert resort. The afternoon offers us a chance to walk through the narrow lanes and witness the wall frescos from the 15th-16th centaury.Dinner and overnight at the hotel.</p></div>&nbsp
        <div class="text-6"><h1>Day-6</h1>&nbsp
            <p>A morning drive brings us to Gajner Palace, a former hunting lodge besides a lake, built by Maharaja Ganga Singh of Bikaner, where we spend the next two nights. The afternoon is free to explore the surroundings of the palace and view birds and animal life along the lake.</p></div>&nbsp
        <div class="text-7"><h1>Day-7</h1>&nbsp
            <p>Today we enjoy an excursion to Bikaner to see the imposing Junagarh Fort, the Royal Complex and the Camel breeding Farm. Evening we return to the Gajner palace for a cocktail session with folk dance and music. Get prepared to be pampered to dance the local belly dance.</p></div>&nbsp
        <div class="text-8"><h1>Day-8</h1>&nbsp
            <p>Today’s sightseeing of Jaisalmer town takes us to the Gadisar Lake with its gateway temple and carved havelis of local merchants and an evening camel ride into dunes of the Thar Desert at sunset rounds off our visit to this medieval city.</p></div>&nbsp
        <div class="text-9"><h1>Day-9</h1>&nbsp
            <p>The village Rohet at its doorstep is out next stop, where we are guests of the royal family. En route we visit the grand Mehrangarh Fort, perched on a hilltop, the Umaid Bhavan Palace and the Jaswant Thada in Jodhpur. Located in the heart of a village, Rohet Garh offers a chance to get close to the locals of the region or simply relax by the pool and unwind to prepare for the further caravan.
                This evening we host you a bar-be-que dinner by the pool.</p></div>&nbsp
        <div class="text-10"><h1>Day-10</h1>&nbsp
            <p>We head south through scenic countryside towards Udaipur, visiting the stunning Jain Temple at Ranakpur, with its 1444 marble pillars, on the way. En route we host you a lunch at the very special Ranakpur hill resort. Upon arrival check in at the lake palace for a stay of two nights.</p></div>&nbsp
        <div class="text-11"><h1>Day-11</h1>&nbsp
            <p>The morning sightseeing tour of Udaipur includes the City Palace, Jagdish Temple and Sahelion-ki-Bari, a pleasure garden built for the royal maids-of-honour. This evening we offer you a sun set bat ride on the placid waters of lake pichola. Dinner and over night at the hotel.</p></div>&nbsp
        <div class="text-12"><h1>Day-12</h1>&nbsp
            <p>A short drive takes us to Deogarh Village where the royal family are our hosts at the Deogarh Mahal. The afternoon here is spent exploring the village and its colourful markets. Take a walking tour through the narrow lanes of the market area , truly a photographers delight. The mahal invites the local musicians to perform for the royal audience. Dinner and overnight at the hotel.</p></div>&nbsp
        <div class="text-13"><h1>Day-13</h1>&nbsp
            <P>Today we drive to the city of it’s own charms , the pink city jaipur. Upon arrival check in at the jai Mahal Palace for a stay of 2 nights. This evening we explore the walled city , the vibrant colours of jaipur and particiate in the special treasure hunt and rickshaw ride .We spend a good time in the illuminated bazaars where time stands still. Dinner and overnight at the hotel.</P></div>&nbsp
        <div class="text-14"><h1>Day-14</h1>&nbsp
        <p>A busy day of sightseeing takes us to the hilltop Fort of Amber, ascended on caparisoned elephants; the City Palace, current home of the Royal Family; the Palace of Winds & Jantar Mantar observatory. We host you a lunch at the restaurant renowned not just for its tongue teasing meals but also the clay oven demonstrations and the very special event for us …..the turban tying.</p></div>&nbsp
        <div class="text-15"><h1>Day-15</h1>&nbsp
        <p>Enjoy the morning breakfast and later we drive by surface to Bharatpur – once the capital of the Kingdom of Jat Maharajas. Bharatpur is famous for Keoladeo Ghana National Park also known as Bharatpur Bird Sanctuary which is also a UNESCO World Heritage Site. On arrival at Bharatpur check in at pre-booked hotel, freshen-up and enjoy the welcome drink at the comfort of your room. Later visit to Lohagarh fort – the iron fort, government museum and the Bharatpur palace, Fatej Burj and Jawahar Burj. Later return back on time to enjoy delicious dinner and overnight stay at the hotel in Bharatpur.</p></div>&nbsp
        <div class="text-16"><h1>Day-16</h1>&nbsp
        <p>After breakfast drive to Agra – the city of the Taj Mahal. Arrive into Agra and check into your hotel. Enroute, visit Sikandra which houses Akbar’s tomb – its design features are similar to the design of the Taj Mahal.
            This afternoon visit the Agra fort, built by the great Emperor Akbar, and the famous Taj Mahal the symbol of love, built by Emperor Shah Jahan in memory of his wife Mumtaz Mahal.Overnight in Agra.</p></div>&nbsp
        <div class="text-17"><h1>Day-17</h1>&nbsp
        <p>Checkout and continue to drive 5 hrs to Delhi.Departure to delhi Airport/Railway Stn. Your tour end here.</p></div>&nbsp
         
        

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