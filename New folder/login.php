<?php
    require_once './lib/config.php';

    if(isset($_POST['login']))
    {
        $nameTo = $_POST['password'];
        $email = $_POST['email'];
        $sql="select id from user where email='$email' and password='$password'";
        $res=$conn->query($sql);
        if($res->num_rows > 0)
        {
            $row=$res->fetch_assoc();                   
            $id=$row['id'];
                        
                    $_SESSION['admin_signed_in']=$email;
                    $_SESSION['id']=$id;
        }
        else{
            $error="Your password and email does not match !!";
        }
    }
?>

    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./style.css">
    <style>
        .inputBox{
        width:100%;
    }
    </style>
    

</head>

<body>
<section class="contact" id="contact">
    
    <h1 class="heading">
        <span>L</span>
        <span>o</span>
        <span>g</span>
        <span>i</span>
        <span>n</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="images/contact-img.svg" alt="">
        </div>

        <form method="post">
            <?php
            if( isset($error)){
                ?>
                <div class="alert alert-danger" role="alert">
                Your password and email does not match !!
                </div>
                <?php
            }
            ?>
            <div class="inputBox">
                <input style="width:100%" type="email" placeholder="email" name="email">
            </div>
            <div class="inputBox">
                <input style="width:100%" type="text" placeholder="password" name="password">
            </div>
            <!-- <input type="submit" class="btn" value="LOGIN" name="submitFeedBack"> -->
            <button name="login" type="button" class="btn btn-warning">LOGIN</button>
        </form>

    </div>
    
</section>
</body>
</html>
    <?php
?>