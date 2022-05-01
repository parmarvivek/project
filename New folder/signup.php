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

    if(isset($_POST['signup']))
    {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $number = $_POST['mobile'];
            $password = md5($_POST['password']);
            $confirmPass = md5($_POST['confirm']);
            if($password==$confirmPass){
                $sql = "insert into user (name,email,mobile_no,password) values('$name','$email','$number','$password')";
                if($conn->query($sql))
                {
                    echo "bingoooooo";
                }
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
        <span>S</span>
        <span>I</span>
        <span>G</span>
        <span>N</span>
        <span>U</span>
        <span>P</span>
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
                <input  type="text" placeholder="name" name="name" required>
                <input  type="email" placeholder="email" name="email" required>
            </div>
            <div class="inputBox">
                <input type="password" placeholder="password" name="password" required>
                <input type="password" placeholder="confirm password" name="confirm" required>
            </div>
            <div class="inputBox">
                <input  type="text" placeholder="mobile no" name="mobile" required>
            </div>
            
            <!-- <input type="submit" class="btn" value="LOGIN" name="submitFeedBack"> -->
            <button type="submit" name="signup"  class="btn btn-warning" >SIGN UP</button>
        </form>

    </div>
    
</section>
</body>
</html>
    <?php
?>