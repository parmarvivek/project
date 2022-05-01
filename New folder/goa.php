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
}
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
    <link rel="stylesheet" href="goa.css">
</head>
<body>
    <header>

        <div id="menu-bar" class="fas fa-bars"></div>
    
        <a href="goa.css" class="logo"><span>PACK</span>The Bag Tours</a>
    
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
     
        <img class="img1" src =""images\goa tourism.jpg"">
        <h3><b>Goa Tourism</b></h3> &nbsp
         <p> Goa is a state in western India with coastlines stretching along the Arabian Sea.</p>
         <p> Its long history as a Portuguese colony prior to 1961 is evident in its preserved</p><p> 17th-century churches and the area’s tropical spice plantations.</p>
         <p>City is also known for its beaches, ranging from popular stretches at Baga and Palolem</p><p> to those in laid-back fishing villages such as Agonda</p>
         <p> tourism of Darjeeling has truly much to offer the visitors coming to this land. </p>
         <p>Goa is the state associated most with touristy beaches</p> &nbsp
         
            
        
    </div> &nbsp
    <div class="slide">
    <img src="https://image.shutterstock.com/image-photo/word-goa-on-beach-nature-260nw-604434896.jpg">
    </div>&nbsp

    <div class="card">
    
    
     <!--  <img src="https://tse4.mm.bing.net/th?id=OIP.YkzlddzfnXhHXzKMiO2ZiAHaEe&pid=Api&P=0&w=351&h=212">
       <h3> Darjeeling Honeymoon Packages</h3> -->
       
     <div class="cards">
      <a href="goa1.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfbtVi3cmW_-lhRBxPaqp6MUjmY4oQtee7UQ&usqp=CAU" alt="Avatar"></a>
      <div class="text">
      <h4><b>Goa Holiday Package</b></h4> 
      <a href="goa1.php" class="btn"> More Info </a>
    
      </div>
      </div>
       <div class="cards-1">
      <a href="goa2.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTM8KRBQ4BL_5KdHfrf50zA0ufw7Z1GewzUFQ&usqp=CAU" alt="Avatar"></a>
      <div class="text">
      <h4><b>Goa Honeymoon Package</b></h4> 
      <a href="goa2.php" class="btn"> More Info </a>
    
      </div>
      </div>
      
  
     
    </div>

    <div class="attraction">
    <h3>GOA TOURIST ATTRACTIONS </h3>
    </div>
    <div class="list">
    <ol>
    <li class="txt">Panaji,or Panjim, is the capital of Goa, Located on the banks of the Mandovi River, the city has cobblestone streets lined with colorful villas an buildings from the Portuguese colonial era. Set on a hill overlooking the city is the baroque Our Lady of Immaculate Conception Church, built in 1619. Palm-fringed Miramar Beach sits at the confluence of the river and the Arabian Sea.</li>
    <li class="txt-1">BagaBaga Beach is considered to be the extension of Calangute Beach itself since both of these lie on the same stretch of sand. Baga Beach gives you a chance to live out your perfect beach holiday. In addition to the option of having a laid back holiday here, you can also indulge in activities ranging from intense water sports to some quaint shopping, wild night outs to serene mornings that begin with a session of yoga. For tourists looking for a quiet getaway from the city to adventure seekers, Baga Beach has some thing for every breed of traveller.</li>
    <li class="txt-2">Calangute</li>
    </ol>
   
    </div>

    <div class="climate">
    <h2> GOA CLIMATE </h2>
    </div>
    <div class="name">

     <div class="cards">
     <div class="text">
      <h4><b>🔆 SUMMER</b></h4> 
      <p>The period of April & May comes under hot season with some increase in humidity. During this period day temperature sometimes reaches around 36°C. However tourists can enjoy their days over nice beaches. Normally after 3 PM sea breeze  starts from sea to land, which cools the atmosphere and makes tourist’s experience pleasant.<p>
     
    
      </div>
      </div>
    
       <div class="cards-2">
      
      <div class="text">
      <h4><b>🌧 MONSOON</b></h4> 
      <p>The period of June to September is South West Monsoon Season. This is most rainy season for Goa state. Whole infrastructure of state like agriculture, drinking water and electricity etc. depends upon the monsoon season. Goa experiences an average rainfall of about 330 centimeters annually and about 90% of annual rainfall occurs during this season only. However rainfall is more in the areas which are nearer to the Western Ghats in east parts of Goa. The state receives abundant of precipitation during these monsoon months. July is the wettest month of the year with more than 995 mm of rainfall. The average high stands around 30°C while the low falls to mid-teens. During this time the city receives a reduced level of sunshine as July gets not more than three hours of sunshine per day.</p>

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