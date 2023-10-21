<?php
$title = "Shutterbird"; // Set the title specific to this page
ob_start(); // Start buffering output
?>
<!---- adding the page content -->
<div class="header-height"></div>
        
        <div class="pager-header">
            <div class="container">
                <div class="page-content">
                   <a href="motivate.php"> <h2>Get Motivated</h2></a>
                    <p>See Through The Walls</p>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">GET MOTIVATED</li>
                    </ol>
                </div>
            </div>
        </div><!-- /Page Header -->










<style>
        p { color: #888; }
        h2 { color: #f8b864; }
        h3 { color: #cfa670; }

        .head {
            width: 100%;
        }

        .body {
            width: 70%;
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            border: 0px solid #888;
        }

        .im {
            text-align: left;
        }
</style>

 <section>

                         
<div class="head">     


<div class="body">
 <div class="im">  <img class="im" src="img/events-6.jpg" alt="events"></div>
                
<h3>Happiness And Peace</h3>
                   <p>The basic things of life. A very important aspect of living, happiness.<br>
Happiness; a state of unmountable joy, the emotion of being happy. A human experience, an just like life, happiness happens.<br>
Be happy, I am always happy despite the challenges. With happiness comes this light, grace to move forward.<br>
Inner peace; a subtle amount of peaceful feeling within oneself, a calmness within oneself, peace of mind.<br>
This attribute leaves you in control of yourself and in control of most of the things that comes for you.<br>
This attribute has added to my growth, both industrially and personally. It has left me entirely in charge of my outputs and reactions to things. <br>
It is a part of life that needs to be cultivated, nurtured and mastered and I urge you to pay attention to doing this. It makes you a master of your own self, a dictator to what happens and how you choose to react to what happens.<br>
Life with happiness and inner peace is a force to reckon with, try this.
</p></div>
</div></div>       
      

        </section><!-- /Blog Section -->
        

<?php
$content = ob_get_clean(); // Get the buffered content and assign it to $content
include("base.php"); // Include the common layout
?>
