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
    <link rel="stylesheet" href="darjling.css">
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
    <div class="banner">
     
        <img class="img1" src ="https://images.pexels.com/photos/6711262/pexels-photo-6711262.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
        <h3><b>Kerala Tourism</b></h3> &nbsp
         <p>Kerala, a state situated on the tropical Malabar Coast of southwestern India,
        <p>is one of the most popular tourist destinations in the country.</p
            ><p>  Kerala is famous especially for its ecotourism initiatives and beautiful backwaters.</p>
         <p>Its unique culture and traditions, coupled with its varied demography</p>
         <p>have made Kerala one of the most popular tourist destinations in the world.</p>
         <p>Kerala is an established destination for both domestic as well as foreign tourists.</p>&nbsp
        
         
            
        
    </div> &nbsp
    <div class="slide">
    <img src="https://images.pexels.com/photos/962464/pexels-photo-962464.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
    </div>&nbsp

    <div class="card">
    
    
     <!--  <img src="https://tse4.mm.bing.net/th?id=OIP.YkzlddzfnXhHXzKMiO2ZiAHaEe&pid=Api&P=0&w=351&h=212">
       <h3> Darjeeling Honeymoon Packages</h3> -->
       
     <div class="cards">
      <a href="kerla1.php" > <img src="data:image/jpeg;base64,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" alt="Avatar"></a>
      <div class="text">
      <h4><b>Kerala Beach Tour</b></h4> 
      <a href="kerla1.php" class="btn"> More Info </a>
    
      </div>
      </div>
       <div class="cards-1">
      <a href="kerala2.php"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsVmtW5G_6-_-YU1TdRWxqZpHl2rNAXi1VNA&usqp=CAU" alt="Avatar"> </a>
      <div class="text">
      <h4><b>Kerala Tour Package</b></h4> 
      <a href="kerala2.php" class="btn"> More Info </a>&nbsp

    
      </div>
      </div>
       <div class="cards-2">
     <a href="kerala3.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXEQYUtaQP5dJh7ru4cYK5PaacYysTua50yQ&usqp=CAU" alt="Avatar"></a> 
      <div class="text">
      <h4><b>Kerala Hill Station Tour</b></h4> 
      <a href="kerala3.php" class="btn"> More Info </a>
    
      </div>
      </div> &nbsp

       <div class="cards">
      <a href="kerla4.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWMuAmt6mk27UbMgn4EioEfhuoyFP9lTVx9w&usqp=CAU" alt="Avatar"></a>
      <div class="text">
      <h4><b>Kerala Ayurveda & Backwater Tour</b></h4> 
      <a href="kerla4.php" class="btn"> More Info </a>
    
      </div>
      </div>
    </div>

    <div class="attraction">
    <h3>KERALA TOURIST ATTRACTIONS</h3>
    </div>
    <div class="list">
    <ol>
    <li class="txt"> Kanchenjunga Mountain</li>
    <li class="txt-1"> Padmaja Naidu Himalayan Zoological Park</li>
    <li class="txt-2">Himalayan Mountaineering Institute</li>
    </ol>
    <ul>
    <li>Batasia Loop </li>
    <li>Ghoom Monastery </li>
    <li> Barbotey Rock Garden</li>
    <li>Everest Museum </li>
    <li>Tiger Hill </li>
    </ul>
    </div>

    <div class="climate">
    <h2> DARJEELING CLIMATE </h2>
    </div>
    <div class="name">

     <div class="cards">
     <div class="text">
      <h4><b>???? SUMMER</b></h4> 
      <p>Summer, from April till June, remains hot enough with the average high ??C. However, the city receives a moderate level of rainfall that makes the climate more enjoyable. April gets more than 100mm of precipitation. It is one of the best seasons to visit Darjeeling. <p>
     
    
      </div>
      </div>
       <div class="cards-1">
      <div class="text">
      <h4><b> ??? WINTER</b></h4> 
      <p>Winter, from December till January, remains very much cool in Darjeeling. The temperature drops down dramatically and forces even the natives to migrate to safer places. Tourists who dare the weather during this season have to be really strong. Although Snow is rare, there are chances of landslides affecting your visit. January, the coldest month of the year, sees only 8??C of average high. </p>
      
    
      </div>
      </div>
       <div class="cards-2">
      
      <div class="text">
      <h4><b>???? MONSOON</b></h4> 
      <p>From July till August Darjeeling goes through a monsoon season. July is the rainiest month of the year with more than 790mm of precipitation. During this season the average high stands at high teens while the minimums fluctuate between 14-15??C. </p>

    </div>
    </div>
    </div>

   

    <div class="footer-txt">
     <h3> Pack The Bag Tours </h3>&nbsp
     <p>Pack the bag tours is one of the finest online travel portals in India right now. Managed by a team of dedicated Indians, it is a perfect platform to plan your vacations with. Since we have been in the business of tourism and hospitality for more than 4 successful years now, with us, you can expect to find your entire experience of travelling, staying & sightseeing the best you ever had. </p>
    </div>&nbsp

   

    
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
















<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

    
    
</body>
</html>