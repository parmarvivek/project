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
    <link rel="stylesheet" href="raj3.css">
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


    <div class="ss"><h1>Rajasthan Wildlife Tour
    </h1>
</div>
    <div class="card">
        <div class="slideshow-container fade">

            <!-- Full images with numbers and message Info -->
            <div class="Containers">
              
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_oZWGgxk600iWFNEMKPnUigXrYbQ7WVhL8A&usqp=CAU" style="width: 100%;">
            
            </div>
          
            <div class="Containers">
             
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAVxlCzyEPs4hFMfmrWzYfNQMIxEY9N_-xvw&usqp=CAU" style="width: 100%;" >
              
            </div>
          
            <div class="Containers">
              
              <img src="https://www.sketchindiajourneys.com/wp-content/uploads/2018/09/Rajasthan-Wildlife-with-Desert-Tour.jpg"style="width: 100%;" >
              
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
        <p>Rajasthan is famed for its rich and abundant wilderness, and wildlife sighting is a must when on a trip to this beautiful land. Not only this, Rajasthan wildlife tour bring you close to different sorts of wildlife which make your holidays in India more appealing and adventurous.</p>
    </div>

    <div class="detail-tour">
        <h1>DETAILED TOUR ITERNARY</h1>
    </div>
    <div class="detail">
        <div class="text-1"><h1>Day-1</h1>&nbsp
        <p>Your Rajasthan Wildlife Tour Package starts right from your arrival at Delhi, the capital city of India. On arrival at the Airport of the Railway Station or representative meet and greets you happily and assist you to transfer you to the hotel. Freshen up and enjoy the welcome drink at the comfort of your room. Later in the evening we go for a short trip to India Gate built in memory of the 90000 Soldiers, who died during the World War I and Rashtrapati Bhawan. Later enjoy shopping in the heart of Delhi Cannaught Place and Palika Bazaar. Return back on time where delicious continental and Indian delicacies will be waiting for you. Overnight stay will be at the hotel in Delhi.</p></div>&nbsp
        <div class="text-2"><h1>Day-2</h1>&nbsp
            <p>After early morning breakfast, today we go for a full day sightseeing tour of the entire historical man-made marvel. Today we visit to Red Fort (UNESCO World Heritage Site), Huyamun’s Tomb (UNESCO World Heritage Site), Qutub Minar (Largest brick minaret in the world), Jama Masjid (largest Mosque in India), Lotus Temple, Raj Ghat the memorial of Gandhiji – the Father of Nation, Shanti Van – where the India’s first Prime Minister Jawaharlal was cremated. After the full day sightseeing tour return back on time to for dinner and overnight stay at the Delhi hotel.</p></div>&nbsp
        <div class="text-3"><h1>Day-3</h1>&nbsp
            <p>Enjoy the hearty morning breakfast at the hotel and later we drive by surface to Ranthambhore National Park. The park is named for the historic Ranthambhore fortress, which lies within the national park with an area of 392 km. Inside the park there are number of lakes which serves the drinking water for animals within the park. Famous for tigers the Ranthambhore national park is also home to many other wild animals such as nilgai, leopard, sambar, hyena, sloth bear, chital, etc. On arrival check into the hotel, freshen up and rest of the day enjoy at your free will. Dinner and overnight stay will be at the hotel in Ranthambhore.</p></div>&nbsp
        <div class="text-4"><h1>Day-4</h1>&nbsp
            <p>After early morning breakfast we go for a wildlife tour of Ranthambore National Park. The guided jeep safari inside the parks gives a heart racing experince as you come across several wildlife animals most importantly being the tigers. The sweet twittering of the birds, the trick of the monkeys and the astonishing move of the wildlife animals will surely give you some thrill to experince. Dinner and overnight stay will be at the hotel in Ranthambhore.</p></div>&nbsp
        <div class="text-5"><h1>Day-5</h1>&nbsp
            <p>Enjoy the morning breakfast and later we drive by surface to Bharatpur – once the capital of the Kingdom of Jat Maharajas. Bharatpur is famous for Keoladeo Ghana National Park also known as Bharatpur Bird Sanctuary which is also a UNESCO World Heritage Site. On arrival at Bharatpur check in at pre-booked hotel, freshen-up and enjoy the welcome drink at the comfort of your room. Later visit to Lohagarh fort – the iron fort, government museum and the Bharatpur palace, Fatej Burj and Jawahar Burj. Later return back on time to enjoy delicious dinner and overnight stay at the hotel in Bharatpur.</p></div>&nbsp
        <div class="text-6"><h1>Day-6</h1>&nbsp
            <p>After early morning breakfast drive to Agra en-route visiting Fatehpur Sikri, a UNESCO World Heritage Site which once served as the empire’s capital from 1571 to 1585 during the reign of Akbar. Now the surviving palace and the ruins are major attraction of tourists. One can see here the Buland Darwaza one of the largest gateway in the world and grandest and biggest in the India, Salim Chisti Ka Mazar, Diwan-I-Am, Turkish Sultan’s House, Palace of Jodha Bai, Birbal’s Palace and Panch Mahal. Later drive to Arrival and on arrival check in at pre-booked hotel for dinner and overnight stay.</p></div>&nbsp
        <div class="text-7"><h1>Day-7</h1>&nbsp
            <p>Today after breakfast we visit to one of the world’s most beautiful monument, Taj Mahal which is also the Seven Wonder of the World and UNESCO World Heritage Site. Built in white marble in the sprawling areas of lush green surrounding with well maintained gardens on the bank of River Yamuna, Taj Mahal first look is enough to leave tourists awe-struck. Later in the afternoon we transfer you to railway station to board the train to UMARIA. Dinner and overnight stay will be onboard.</p></div>&nbsp
        <div class="text-8"><h1>Day-8</h1>&nbsp
            <p>On arrival at Umaria in the morning, our representative meets you and assists you to transfer you to the pre-booked Bandhavgarh Resort. Enjoy the delicious and healthy breakfast and take rest, relax and enjoy comfort of your room. Later visit to the famous national park in the state of Madhya Pradesh, Bandhavgarh National Park. The forest is packed with lush green forest and wildlife life including white tigers, Nilgai, Chausingha, chital, chinkara, wild boar and sometime fox and jackals are also seen. Later in the evening our representative assists you to transfer you to the resort for dinner and cozy overnight stay at the resort in Bandhavgarh.</p></div>&nbsp
        <div class="text-9"><h1>Day-9</h1>&nbsp
            <p>After morning breakfast at the resort, today we go for a full day enjoyment in the park. You can enjoy elephant safari or jeep safari inside and catch the view of the astonishing animal and birds which have made this national park their home. Later return back on time to the resort for dinner and overnight stay.</p></div>&nbsp
        <div class="text-10"><h1>Day-10</h1>&nbsp
            <p>Enjoy healthy morning breakfast at the resort today we drive to Kanha National Park, which was the inspiration behind Rudyard Kipling classic Jungle Book. The park created in 1855 still preserves the romance and varied species of animals of which are some rare, endangered and commonly found. Kanha is especially known as a tiger reserve and the population in this forest is much higher than any other wildlife parks in India. On arrival at Kanha our representative will meet you and assist you to transfer you to the pre-booked hotel. Freshen-up and enjoy welcome drink at the comfort of your room. Rest of the day enjoy at your free will. Dinner and overnight stay will be at the Kanha Resort.</p></div>&nbsp
        <div class="text-11"><h1>Day-11</h1>&nbsp
            <p>After early morning breakfast enjoy the full day in Kanha National Park. Enjoy jeep safari or elephant safari and catch the glimpse of the varied species of animals and birds that includetiger, bison, gaur, sambhar, chital, barasingha, barking deer, black deer, black buck, chousingha, nilgai, mouse deer, sloth bear, jackal fox, porcupine, hyena, jungle cat, python, pea fowl, hare, monkey, mongoose, tiger, and leopard and birds including storks, teals, pintails, pond herons, egrets, peacock, pea fowl, jungle fowl, spur fowl, partridges, quails, ring doves, spotted parakeets, green pigeons, rock pigeons, cuckoos, papihas, rollers, bee-eater, hoopoes, drongos, warblers, kingfishers, woodpeckers, finches, orioles, owls, and fly catchers. Later return back on time to the resort where the delicious and lip-smacking dinner and cozy bed will be waiting for you.</p></div>&nbsp
        <div class="text-12"><h1>Day-12</h1>&nbsp
            <p>Enjoy health morning breakfast and check out from the resort to reach Nagpur. On arrival our representative assists you to transfer you to the hotel. Freshen up, change and relax enjoying the welcome drink at the comfort of your hotel room. Rest of the time enjoy at your free will. Dinner and overnight stay will be at the hotel in Nagpur.</p></div>&nbsp
        <div class="text-13"><h1>Day-13</h1>&nbsp
            <P>After early morning breakfast we fly to Delhi. On arrival, our representative will assists you to transfer you to the hotel. Check in at the hotel freshen up and change. Later enjoy the last minute shopping in the bustling market or malls of Delhi. Later our representative will assist you to transfer you to the airport – railway station to board flight or train for onwards journey or way back home. Here your memorable tour of Wildlife Parks in India comes to an end.</P></div>&nbsp
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