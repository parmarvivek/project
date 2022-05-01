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
    <link rel="stylesheet" href="raj4.css">
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


    <div class="ss"><h1>CAMEL SAFARI TOUR PACKAGE</h1>
    <p>Delhi – Agra – Jaipur – Pushkar – Rathambhore – Bundi – Chittaurgarh – Bijaipur – Udaipur – Jodhpur – Jaisalmer – Bikaner – Mandawa – Delhi</p> </div>
    <div class="card">
        <div class="slideshow-container fade">

            <!-- Full images with numbers and message Info -->
            <div class="Containers">
              
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtUXklFog8tEX_JAnuD4FvZTiDRuDq3mfaCQ&usqp=CAU" style="width: 100%;">
            
            </div>
          
            <div class="Containers">
             
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYR7QhszlcetaSV8ng8xJjmr4_cQNxurA70w&usqp=CAU" style="width: 100%;" >
              
            </div>
          
            <div class="Containers">
              
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6FgBv1xM3BA2yuYtD2em2Tnh_jAqdzDztww&usqp=CAU"style="width: 100%;" >
              
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
        <p>Rajasthan, a well known destination among the people to enjoy the desert life and to view the most amazing emperor state. One of the most unforgettable and enchanting experiences you can have in India is to ride through the rippling, windswept desert on camel back and camp out under the open sky. Taking a camel safari give you the opportunity to witness the adventure,and soothing night in the desert.
            Rajsthan camel safari tour gives you a whole new experience to enjoy this beautiful place. Deserts around Jaisalmer and Bikaner are the most popular destination for enjoying the desert safari and also to enjoy the nights in camps</p>
    </div>
    <div class="detail-tour">
        <h1>DETAILED TOUR ITERNARY</h1>
    </div>
    <div class="detail">
        <div class="text-1"><h1>Day-1</h1>&nbsp
        <p>Welcome for Camel Safari Tour. On arrival at Delhi the capital city of India our representative assist you to transfer you to the hotel. Freshen-up, change and relax as you will be served with welcome drink for some refreshment. Later enjoy short trip visiting India Gate built by Edwin Lutyens to commemorate the 90000 soldiers who lost their life in the World War I. Also visit to Rashtrapati Bhawan (President House), Parliament House and also enjoy shopping in Cannaught Place and Palika Bazar. Later return back on time to delight in the delicious continental or the desi Indian food and cozy overnight stay at the hotel in Delhi.</p></div>&nbsp
        <div class="text-2"><h1>Day-2</h1>&nbsp
            <p>After breakfast, we take you out for a full day sightseeing to all the historical monuments in Delhi. Today we visit to Red Fort also called Lal Qila (UNESCO World Heritage Site), Qutub Minar (the largest brick minaret in the world), Jama Masjid (Largest Mosque in India), Lotus Temple and Raj Ghat the resting place of Mahatma Gandhiji- the father of Nation. Dinner and overnight stay will be at the hotel in Delhi.

            </p></div>&nbsp
        <div class="text-3"><h1>Day-3</h1>&nbsp
            <p>After early morning breakfast, we transfer you to Agra the city which once served as the capital of Mughal Empire and now the seat of the famous world monument Taj Mahal. On arrival check in at hotel, freshen up and later enjoy the sightseeing tour of Agra visiting Taj Mahal the monumental wonder located on the bank of Yamuna River. Also visit to Agra Fort, Itmad-Ud-Daulah’s Tomb and in the evening enjoy shopping in the bustling Meena Bazaar. Dinner and overnight stay will be at the hotel in Agra.</p></div>&nbsp
        <div class="text-4"><h1>Day-4</h1>&nbsp
            <p>After early morning breakfast we drive on wheels to Jaipur the royal city of India also famously known as the Pink City of India. On arrival check in at pre-booked hotel, freshen-up and after lunch rest at the hotel. In the evening you can go for shopping in the bustling market of Jaipur. Later enjoy the sumptuous dinner and overnight stay at the hotel.

            </p></div>&nbsp
        <div class="text-5"><h1>Day-5</h1>&nbsp
            <p>Morning after breakfast we go for a full day sightseeing tour of Jaipur the capital city of Rajasthan. One of the favored attractions of Golden Triangle Tour Packages, Jaipur is famous for architectural wonder and rich culture and traditions. Visit to Amber Fort one of the magnificent fort in Rajasthan, Hawa Mahal (the palaces of Wind), Jantar Mantar, City Palace and Laxmi Narayan Temple. In the evening enjoy shopping in the bustling market of Jaipur and take home souvenir of Jaipur tour Rajasthan. Dinner and overnight stay will be at the hotel in Jaipur.

            </p></div>&nbsp
        <div class="text-6"><h1>Day-6</h1>&nbsp
            <p>Enjoy the morning breakfast the hotel and have some rest. Later we drive to Pushkar one of the holy city of Hindu famous for Brahma Temple and several other revered temples of Hindu religion. The Pushkar Camel Fair is also globally famous and is attended by tourists from all over the world. On arrival check in at pre-booked hotel, freshen-up and relax at the comfort of your room. Later in the evening participate in the “aarti” or Darshan of Brahma Temple. You can spend some time at Pushkar Lake or even can take a holy dip inside the lake. Later return back on time for a dinner and overnight stay at the hotel.</p></div>&nbsp
        <div class="text-7"><h1>Day-7</h1>&nbsp
            <p>Morning after breakfast today enjoys full day sightseeing tour of Pushkar. If you are visiting during the month of November you have wonderful opportunity to take part in the colorful fairs and festivals of Pushkar Camel Fair. Enjoy the colorful fairs and festival, songs and exhibitions shows and true harmony of Rajasthan culture and rich heritage. Offer prayer at the Brahma Temple, the only temple in the world dedicated to Lord Brahma, the creator of World according to Hindu Mythology. Dinner and overnight stay will be at the hotel in Pushkar.</p></div>&nbsp
        <div class="text-8"><h1>Day-8</h1>&nbsp
            <p>Enjoy healthy breakfast at the hotel and drive to Ranthambhore National Park, famous wildlife park in Rajasthan known for tiger’s population and varied other species of animals. The park is named after the historic fortress located inside the park that is also the major attraction of tourists. The park is home to tiger and many other wildlife animals including leopard, nilgai, sloth bear, hyena, sambar, wild boar and chital. It also has a wide variety of trees, plants, birds and reptiles. On arrival check in at hotel, freshen and later enjoy the well organised and guided wildlife jeep safari. Catch the exciting view of the varied wildlife species in their natural home, birds and the lush greenery. You can also see the tiger drinking water at the lake if you go deep inside the forest. Dinner and overnight stay will be at the hotel in the park.</p></div>&nbsp
        <div class="text-9"><h1>Day-9</h1>&nbsp
            <p>After morning breakfast we go for a morning safari inside the Ranthambhore Park. Later we move to Kota an industrial city located on the bank of Chambal River that has now much developed but the rich heritage and culture beauty are still the same. Here we visit to the Chambal Garden, Maharao Madho Singh Museum, Kota Barrage, The Government Museum and the Jag Mandir. Later return on time to the hotel for dinner and overnight stay at the hotel in Kota. Day 10: Kota – Bundi – Chittourgarh- Bijaipur
                After breakfast transfer to Bundi. Bundi is famous for its particular architectural note for its ornate forts, palaces, and step well reservoirs known as baoris. Then move to Chittourgarh. After visiting the fort proceed to stay at the Bijaipur Hotel.</p></div>&nbsp
        <div class="text-10"><h1>Day-10</h1>&nbsp
            <p>After breakfast transfer to Bundi. Bundi is famous for its particular architectural note for its ornate forts, palaces, and step well reservoirs known as baoris. Then move to Chittourgarh. After visiting the fort proceed to stay at the Bijaipur Hotel.</p></div>&nbsp
        <div class="text-11"><h1>Day-11</h1>&nbsp
            <p>After breakfast check out from the hotel and we drive Udaipur – Udaipur-The city of lakes. Udaipur was the capital of the Rajput kingdom of Mewar and was founded by Rana Udai Singh. Udaipur is remarked with its palaces, blue lakes, temples, gardens and narrow lanes strewn with stalls which all carry the flavor of a heroic past. On arrival, check in at the hotel. Relax and fresh up. Later move for a short visit to the famous City Palace – City Palace adorned with mirrored walls and ivory doors, colored glass windows and inlaid marble balconies overlooking the lake and the city of Udaipur and the Peacock Courtyard. Return to the hotel in the evening and overnight stay will be at the Udaipur hotel.</p></div>&nbsp
        <div class="text-12"><h1>Day-12</h1>&nbsp
            <p>After morning breakfast enjoys full day sightseeing tour of Udaipur the city also dubbed as “City of Lakes”. First we visit Lake Pichola one of the most picturesque lakes in Udaipur built by Maharana Udai Singh II and consists of two islands. Enjoy a cruise through the lake and have a look on the famous Lake Palace and Jag Mandir Palace – which houses Jagdish Temple and the Royal Cenotaphs of the Rajput kings. Then we move to visit Fateh Sagar Lake originally built by Maharana Jai Singh in the year 1678 AD, but later on reconstructed and extended by Maharana Fateh Singh and the solar observatory inside. Further we move to Jagdish temple and Saheliyon-Ki-Bari. In the evening return back to the hotel. Overnight will be at Udaipur hotel.</p></div>&nbsp
        <div class="text-13"><h1>Day-13</h1>&nbsp
            <P>After breakfast we move to Jodhpur – the Sun City. Jodhpur was the capital of Marwar Kingdom and now is a popular tourist destination, featuring many palaces, forts and temples, set in the border of the Thar Desert. On arrival at Jodhpur, we move for a visit to Mehrangarh Fort (1459 AD), which houses many miniature paintings & cradle room followed by a visit to Jaswant Thada Memorial. On time return back to the hotel and enjoy delicious Rajasthani dinner and cozy overnight stay at the hotel.</P></div>&nbsp
        <div class="text-14"><h1>Day-14</h1>&nbsp
        <p>Morning after breakfast, today we go for a village safari to the Bishnois Villages. Bishnois are followers of Lord Vishnu and are a community of nature worshippers. The community was founded by Guru Jambheshwar and he strictly directed not to destroy any plant or animal. Thus trees and animals are considered to be sacred by the Bishnois. Along with these you can visit the nearby villages of weavers, potters and durries makers also. Overnight is in Jodhpur hotel</p></div>&nbsp
        <div class="text-15"><h1>Day-15</h1>&nbsp
        <p>After breakfast, check out from the hotel and we drive to Jaisalmer – “The Golden City”- stands on a ridge of yellowish sandstone, crowned by a fort, which contains the palace and several ornate Jain temples. Jaisalmer is named after its founder Rao Jaisal and it means “the Hill Fort of Jaisal” and was inhibited by Bhatti Rajputs. On arrival, check into hotel. Afternoon is free for leisure or to enjoy the city atmosphere. Overnight stay is at the Jaisalmer hotel.</p></div>&nbsp
        <div class="text-16"><h1>Day-16</h1>&nbsp
        <p>After morning breakfast enjoys the full day sightseeing tour of Jaisalmer the city also dubbed as Golden City of India. The city is synonyms with forts, palaces and havelis, Thar Desert and Camel Safari. Here visit to the famous museums, Golden Fort and later in the evening enjoy Camel Safari over the golden Thar Desert and explore the mesmerizing beauty of the golden sands and before returning back to the hotel see the sun-set over the horizon. Dinner and overnight stay will be at the hotel in Jaisalmer.</p></div>&nbsp
        <div class="text-17"><h1>Day-17</h1>&nbsp
        <p>After breakfast, check out from the hotel and we transfer you to Bikaner-the green City. The city was once the capital of the princely state of Bikaner and was founded by Rao Bika in 1486. On arrival, check in at the hotel. Later enjoy the city tour covering Junagarh Fort – constructed between 1588 and 1593 by Raja Rai Singh, Bhand Sagar Temple – the 16th century Jain temple, Laxmi Niwas Palace, Lalgarh Palace, and Moolnayakji-the Vaishno temple. Finally you can visit Camel Breeding Farm – where you can ride on a camel & have perhaps the first taste of camel’s milk. Overnight stay is at Bikaner hotel.</p></div>&nbsp
        <div class="text-18"><h1>Day-18</h1>&nbsp
            <p>After breakfast we drive to Mandawa, which is popularly known as ‘Castle City of Rajasthan’ and considered as open air art gallery of Shekhawati region. Mandawa was settled & fortified by the rich & dominant Silk Route merchants of the region who constructed numerous decorated Havelis, Chhatris, temples and Baolis (Step-wells) which showcases age old Rajasthani art and architecture. Visit Mandawa Fort-built by Thakur Nawal Singh, Chowkhani Haveli, Goenka Haveli, Saraf Haveli and Ladia Haveli. Dinner and overnight stay is at Mandawa hotel.</p></div>&nbsp
            <div class="text-19"><h1>Day-19</h1>&nbsp
                <p>After breakfast we drive to Mandawa, which is popularly known as ‘Castle City of Rajasthan’ and considered as open air art gallery of Shekhawati region. Mandawa was settled & fortified by the rich & dominant Silk Route merchants of the region who constructed numerous decorated Havelis, Chhatris, temples and Baolis (Step-wells) which showcases age old Rajasthani art and architecture. Visit Mandawa Fort-built by Thakur Nawal Singh, Chowkhani Haveli, Goenka Haveli, Saraf Haveli and Ladia Haveli. Dinner and overnight stay is at Mandawa hotel.</p></div>&nbsp
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