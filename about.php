<?php
$title = "About Shutterbird"; // Set the title specific to this page
ob_start(); // Start buffering output
?>

<!-- Page-specific content goes here -->
<div class="header-height"></div>
        
        <div class="pager-header">
            <div class="container">
                <div class="page-content">
                    <h2>About Us</h2>
                    <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">About Us</li>
                    </ol>
                </div>
            </div>
 <section class="about-section bg-grey bd-bottom padding">
        </div><!-- /Page Header -->
      
<style>
p{color:#888;}
h2{color: #cfa670 ;}
h3{color:#cfa670;}

.head{
width:100%;
}

.body{
    width:70%;
    margin: 5% auto 15% auto;
    border: 0px solid #888;   
}


</style>
       
        <div class="body"><center><h2> BIO ABOUT OUR CHARACTER</h2><br></center>
<center><h3>THE FIRST SUPER HERO CHARACTER IN AFRICA</h3></center>
<p>Urenna Amadi, officially launches her superhero character and this embodies in reality a real life person.
 Being of such build and with matters of inspiration at heart, the character portrays Urenna Amadi and fully
 charges her into simply being, effortlessly. The character Urenna Amadi is the first African superhero character 
coming as a movie in cinemas. She is a superhero with her superpowers in her golden camera which possesses super abilities; 
super strength, speed, super reflexes, durability, healing factor, night vision, aperture and heightened senses alert,
 acrobatics, stamina and agility, camera freezing and shooting capabilities. Urenna helps us find our strength, stand
 our grounds and uphold our dignity, she helps us aid one another, eases relationship between people and helps us use our
 will power efficiently.</p>

<center><h3>ABOUT THE PRODUCER</h3></center>
<p>Urenna Amadi is a writer, editor, producer and a director, born in Nigeria, she is a graduate 
of Imo State University where she obtained a BScs Degree in Fine And Applied Arts. Her journey into filmmaking
 started while in school, she directed a student short movie project in the Theatre Arts Department and since
 then she has directed seven short movies and two feature movies including ‘’Not A Slave’’. Officially unveiling 
Urenna as the being behind the character in real life is not only the good news; as an essence, a huge personality 
and a force not to be e reckoned with, Urenna gives us a daily dose of inspiration, dignity and right approach to
 matters. At the end, it going to be an essential and educative experience for everyone, be here.</p>


<?php
$content = ob_get_clean(); // Get the buffered content and assign it to $content
include("base.php"); // Include the common layout
?>
