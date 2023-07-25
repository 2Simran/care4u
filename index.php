<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES ('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive hospital website create by Us</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/648975cacc26a871b0226f53/1h2sf88dt';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</head>
<body>

<!-- header section starts -->
<?php include('header.php'); ?>
<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <!-- <img src="image/home-img.svg" alt=""> -->
        <img src="image/back1.avif" alt="">
        <!-- <img src="image/back2.jpg"> -->
    </div>

    <div class="content">
        <h3>We take care of your healthy life</h3>
        <p> A person who has good physical health is likely to have bodily functions and processes working at their peak.</p>
        <a href="#appointment" class="btn"> Appointment us <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>30+</h3>
        <p>doctors at work</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1030+</h3>
        <p>satisfied patients</p>
    </div>

    <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>20+</h3>
        <p>bed facility</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>20+</h3>
        <p>available hospitals</p>
    </div>

</section>

<!-- icons section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>About</span> us </h1>

    <div class="row">

        <div class="image">
            <!-- <img src="image/about-img.svg" alt=""> -->
            <img src="image/about1.jpeg">
        </div>

        <div class="content">
            <h3>Take the world's best quality treatment</h3>
            <p><b>CARE4U</b> is a web application that allows users to easily store, organize, and access 
their medical records and history in one convenient location. This app is designed 
to help users take control of their health by providing them with a tool to track 
and manage their medical information. With this application, users can keep track 
of their medical records, including information about past and current conditions, 
treatments, and medications. One of the main benefits of using the <b>CARE4U</b> is 
the ability to easily share medical information with healthcare providers.</p>

<p>Web Application can 
be accessed through a web browser or a mobile device, making it convenient and 
easy to use. Whether at home or on the go, users can easily keep track of their 
medical history and records with this user-friendly and powerful web application.</p>
<a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->
<?php include('service.php'); ?>

<!-- services section ends -->


<!-- doctors section starts  -->
<?php include('doctor.php'); ?>

<!-- doctors section ends -->

<!-- Login/Register Section Starts -->

<!-- Login/Register Section Ends -->

<!-- appointmenting section starts   -->

<section class="appointment" id="appointment">

    <h1 class="heading"> <span>Appointment</span> now </h1>    

    <div class="row">

        <div class="image">
            <!-- <img src="image/appointment-img.svg" alt=""> -->
            <img src="image/app1.png">
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <?php
            if(isset($message)) {
                foreach($message as $message) {
                echo'<p class ="message">'.$message.'</p>';
            }
            }
        ?>
      
            <h3>Make Appointment</h3>
            <input type="text"   name="name"   placeholder="your name" class="box">
            <input type="number" name="number" placeholder="your number" class="box">
            <input type="email"  name="email"  placeholder="your email" class="box">
            <input type="date"   name="date"   class="box">
            <input type="submit" name="submit" value="appointment now" class="btn">
        </form>

    </div>

</section>

<!-- appointmenting section ends -->

<!-- review section starts  -->

<section class="review" id="review">
    
    <h1 class="heading"> Client's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/patient1.png" alt="">
            <h3>Patient 1</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Dr. Mishra's professionalism and attention to detail were evident throughout my experience. He was thorough in his examination, leaving no stone unturned. He followed up promptly with the results of my tests and explained the next steps in a clear and organized manner. His commitment to providing comprehensive care was evident, and I felt confident in his abilities as my physician.</p>
        </div>

        <div class="box">
            <img src="image/doctor1.png" alt="">
            <h3>Patient 2</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Throughout the consultation, Dr. Shrithy displayed exceptional knowledge and expertise. She explained my condition in a clear and accessible manner, making sure I understood all the details. She patiently addressed my questions and concerns, and I felt reassured by her explanations. Her ability to translate complex medical concepts into simple terms was commendable.</p>
        </div>

        <div class="box">
            <img src="image/patient 3.jpg" alt="">
            <h3>Patient 3</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">I recently had the opportunity to consult with Dr. Rachana Sharma for a health issue, and I am delighted to share my experience with her.Her Ability To Translate Complex Medical Concepts Into Simple Terms Was Commendable.

From the moment I stepped into her office, I felt welcomed and at ease.</p>
        </div>

    </div>

</section>

<!-- review section ends -->

<?php include('blogs.php');?>
<!-- blogs section ends -->

<!-- ======= Contact Section ======= -->
<?php include('contact.php'); ?>
<!-- End Contact Section -->

<!--  footer section starts  -->

<?php include('footer.php'); ?>

<!-- footer section ends  -->

<!-- js file link  -->
<script src="js/script.js"></script>

</body>
</html>

