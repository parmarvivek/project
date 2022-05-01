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
    <link rel="stylesheet" href="raj2.css">
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


    <div class="ss"><h1>
        RAJASTHAN DESERT SAFARI TOUR
        </h1>
    <p>Delhi - Nawalgarh - Bikaner - Chimana - Khangan - Bhardia - Jhamba - Jaisalmer - Jodhpur - Ranakpur - Kelwara - Kumbhalgarh - Ghanerao - Udaipur - Pushkar - Jaipur - Agra

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
    <div class="famous">
        <h1>Following are the most famous palaces in Rajasthan:</h1>&nbsp
        <ol>
            <li>Nawalgarh</li>&nbsp
            <li>Bikaner</li>&nbsp
            <li>Khangan
            </li>&nbsp
            <li>Bhardia
            </li>&nbsp
            <li>Jaisalmer</li>&nbsp
            <li>Jodhpur</li>&nbsp
            <li>Ranakpur</li>&nbsp
            <li>Kelwara – Kumbhalgarh</li>&nbsp
            <li>Udaipur</li>&nbsp
            <li>Pushkar</li>&nbsp
        </ol>
    </div>

    <div class="detail-tour">
        <h1>DETAILED TOUR ITERNARY</h1>
    </div>
    <div class="detail">
        <div class="text-1"><h1>Day-1</h1>&nbsp
        <p>On arrival at the Delhi airport or the railway station our representative meet you and assist you to transfer you to the hotel. Freshen-up, change and enjoy the welcome drink at the comfort of your room. Later enjoy shopping at the famous Cannaught Place and Palika Bazaar of Delhi or leisure time at your free will. In the evening enjoy the delicious dinner and cozy overnight stay at the hotel in Delhi.</p></div>&nbsp
        <div class="text-2"><h1>Day-2</h1>&nbsp
            <p>After early morning breakfast, embark on city tour of Delhi visiting historical monuments like Red Fort (UNESCO World Heritage Site), Huyamun’s Tomb (UNESCO World Heritage Site), Lotus Temple, Qutub Minar (World’s Largest Brick Minaret), Rajghat – the resting place of Mahatma Gandhi and Shanti Van. Also visit to Jantar Mantar and Lakshmi Narayan Temple and if time permits we also visit to Akshardham Temple the world’s largest temple complex. Later on return back on time to enjoy the delicious continental and spicy Indian delicacies and cozy overnight stay at the Delhi hotel.</p></div>&nbsp
        <div class="text-3"><h1>Day-3</h1>&nbsp
            <p>After early morning breakfast at the hotel, we drive to Nawalgarh (270 km/ 6hrs) a home to some of the grand havelis and frescos that still brings back the past glory.Situated in Jhunjhunu district of Rajasthan, Nawalgarh was founded by Thakur Nawal Singh Ji Bahadur in 1737. On arrival, check in to the pre-booked hotel for dinner and overnight stay..</p></div>&nbsp
        <div class="text-4"><h1>Day-4</h1>&nbsp
            <p>Morning after breakfast we visit the fantastic havelis and forts with wonderful architecture and some eye-catching frescoes in the region. Nawalgarh is also called the Open Air Art Gallery due to the presence of exquisitely painted havelis. Also visit to Bala Kila Fort, Fatehgarh Fort, Roop Niwas Palace and Laxmi Naravan Mandir. Dinner and overnight stay will be at the hotel in Nawalgarh</p></div>&nbsp
        <div class="text-5"><h1>Day-5</h1>&nbsp
            <p>After breakfast at the hotel, we drive to Bikaner the favored tourist’s destination of Rajasthan tour. Founded in 1488 by Rao Bika, Bikaner in Rajasthan is famous its impressive monuments and forts that reminds you of glorious past and the colorful rich culture of Bikaner. On arrival check in at hotel, freshen up and enjoy welcome drink at the comfort of your hotel room. Later we go for sightseeing tour of Bikaner visiting Bhand Sagar Temple – the 16th Century Jain Temple, Laxmi Niwas Palace, Lalgarh Palace and Moolnayakji- the Vaishnav Temple. Also visit to Camel Breeding Farm one of the largest camel farm in Asia. Dinner and overnight stay will be at the hotel in Bikaner.</p></div>&nbsp
        <div class="text-6"><h1>Day-6</h1>&nbsp
            <p>After morning breakfast, get ready to experince the real magic of Rajasthan tourism and tours in Rajasthan. Today we drive to Chimana from where we begin our Rajasthan Desert Safari on the Camel’s back. Rajasthan Thar Desert offers you out of the world experince that you will treasure it to cherish forever. Dinner and overnight stay will be at the desert camp.<p></div>&nbsp
        <div class="text-7"><h1>Day-7</h1>&nbsp
            <p>After morning breakfast we continue our journey of camel safari on the golden sand dunes blankes of Bhardia (13 km). Enjoy the glistering view of the sand where each grain depicts the story of its glorious past. Dinner and overnight stay will be at desert camp.</p></div>&nbsp
        <div class="text-8"><h1>Day-8</h1>&nbsp
            <p>Enjoy the morning breakfast at the camp and we continue our Camel Safari to Jhamba (15 kms) later to drive to Jaisalmer the city referred as Golden City of India because of the honey colour imparted to its stone ramparts by the setting sun. On arrival check in at pre-booked hotel, freshen-up and enjoy leisure time at your free will. Later in the evening enjoy the continental or delicious Rajasthani delicacies that and cozy overnight stay at the hotel.</p></div>&nbsp
        <div class="text-9"><h1>Day-9</h1>&nbsp
            <p>After morning breakfast we enjoy full day sightseeing of Jaisalmer. We visit Jaisal Fort, Jain Temples and some beautiful havelis like Patwon – Ki – havelis, Salim-Singh-Ki-Haveli and Nathmal-Ki-Haveli and museums. Did i mention to visit Gadsisar Lake to visit which is a scenic rainwater lake surrounded by small temples and shrines. Later return back on time to the hotel for dinner and cozy overnight stay.</p></div>&nbsp
        <div class="text-10"><h1>Day-10</h1>&nbsp
            <p>Morning after breakfast we drive to Jodhpur the second largest city of Rajasthan also dubbed as “the blue city”.This city was founded in 1459 by Rao Jodha, a chief of the Rajput clan known as the Rathores. The architectural splendor & vibrant and colorful culture depicts the glorious past of the city that allures tourist from all over. We visit Mehangarh Fort, the mighty fort located on the hillock, overlooking the city, Ummaid Bhavan Palace, Jaswant Thada and Mahamandir. Dinner and overnight stay will be at the hotel.</p></div>&nbsp
        <div class="text-11"><h1>Day-11</h1>&nbsp
            <p>After early morning breakfast, we drive to Ranakpur. The city in Rajasthan is famous for Jain Temples also known as Ranakpur Jain Temple dedicated to Jain Religion and it commands huge respect from the Jain Community worldwide. The temple has 1444 marble pillars and each of them have there are intricately designed and carved and none of them resembles each other. After lunch drive 9 kms to a trekking point from where we start 4 hr trekking up via Paras Ram Mahadev Temple and then to Kelwara for the overnight.</p></div>&nbsp
        <div class="text-12"><h1>Day-12</h1>&nbsp
            <p>After early morning breakfast we go for a trekking to Kumbhalgarh Fort. It is the second most important fort in Rajasthan after Chittorgarh. The fortification of the fort extend to the length of 36 kilometers and the fact has made an international record of being the second largest wall in world first being the “Great wall of China”. After that we go on for a trekking to Bange Ka Bagh via thick forest of Kumbhalgarh Sanctuary. Dinner and overnight stay will be at the hotel in Kumbhalgarh.</p></div>&nbsp
        <div class="text-13"><h1>Day-13</h1>&nbsp
            <P>After early morning breakfast we further trek to Ghanerao visiting some typical villages where people still preserves the rich heritage and culture beauty of the bygone era. We can also see some wild animals and birds as during our trekking period as we come across several villages. Ghanerao is a small village in Rajasthan beautifully set around some tribal villages. We take lunch at Ghanerao Royal castle and afternoon we continue our trekking uphill through forest to visit Ghersia Tribal Villages. After the beautiful and memorable we return back to Ghanerao Royal Castle where delicious dinner and royal beds will be waiting for you.</P></div>&nbsp
        <div class="text-14"><h1>Day-14</h1>&nbsp
        <p>After morning breakfast at the hotel, we drive to Udaipur also referred as romantic city of India and City of Lakes. Udaipur is endowed with picturesque lakes, temples, blossoming and well maintained gardens, fantastic forts and palaces. On arrival check in at pre-booked hotel, freshen up, relax and enjoy the welcome drink at the comfort of your room. Later in the afternoon we go for a boat ride over the picturesque Pichola Lake and see the marvelous and mesmerizing Lake Palace seems emerging our of the lake. Dinner and overnight stay will be at the hotel in Udaipur.p></div>&nbsp
        <div class="text-15"><h1>Day-15</h1>&nbsp
        <p>After early morning breakfast, today we go for a full day sightseeing of romantic city of Udaipur. We visit the Lake Palace the most beautiful palaces in the world arising out of the Picturesque Lake Pichola like an elegant fantasy in white marble. We also visit to the Jagdish Temple built by Maharaja Jagat Singh in 1651 that enshrines a black stone image of Vishnu as Jagnnath, Lord of the Universe. Further we also visit to Saheliyon-Ki-Bari, Fateh Sagar Lake originally built by Maharana Jai Singh and later on reconstructed and extended by Maharana Fateh Singh and the Solar Obervatory inside. Dinner and overnight stay will be at the hotel in Udaipur.</p></div>&nbsp
        <div class="text-16"><h1>Day-16</h1>&nbsp
        <p>In the morning after breakfast we go on by surface to Pushkar an important pilgrim center of Hindu and major tourists destinations in Rajasthan. The Holy Pushkar Lake is also the major attraction of the city where people take a holy bath or dip during their visit to world famous Pushkar Camel Fair or during the visit to famous Brahma Temple which is one and only temple dedicated to Lord Brahma the creator of the world according to Hindu mythology. On arrival check in at hotel, freshen up and later we go for a sightseeing tour of Pushkar. Later return back on time to the hotel for dinner and overnight stay.</p></div>&nbsp
        <div class="text-17"><h1>Day-17</h1>&nbsp
        <p>In the morning after breakfast we go on by surface to Pushkar an important pilgrim center of Hindu and major tourists destinations in Rajasthan. The Holy Pushkar Lake is also the major attraction of the city where people take a holy bath or dip during their visit to world famous Pushkar Camel Fair or during the visit to famous Brahma Temple which is one and only temple dedicated to Lord Brahma the creator of the world according to Hindu mythology. On arrival check in at hotel, freshen up and later we go for a sightseeing tour of Pushkar. Later return back on time to the hotel for dinner and overnight stay.</p></div>&nbsp
        <div class="text-18"><h1>Day-18</h1>&nbsp
            <p>After early morning breakfast enjoy the full day sightseeing tour of Jaipur visiting Amber Fort on elephant back. Later we visit to Hawa Mahal (the palaces of wind), Jantar Mantar (Astronomical wonderment) and City Palace Complex. In the Evening we go on for a shopping in the bustling market of Jaipur. Dinner and overnight stay will be at the Jaipur hotel.</p></div>&nbsp
         
        

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