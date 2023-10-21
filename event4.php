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
 <div class="im">  <img class="im" src="img/events-4.jpg" alt="events"></div>
                
<h3>Life and Purpose</h3>
                   <p> 
You are what you eat. While eating the right meal at the right time remains paramount, i would want to tell you something else.<br>
Good food, good life, comes from hardwork. How far are you willing to go to achieve success, how willing are you, resilient and determined are you to go far?<br>
Nothing good comes easy, as a filmmaker I know this. You work hard to attain beneficial grounds and recognition from people. I put in the right work, do the needful, pay undivided attention and make sure I grow every inches of myself.<br>
 Are you willing to give this much time to your own growth?<br>
While feeding well is important are you also committed to gaining the skills and informations for bettering yourself.<br>
You do not sit back, waiting for things to happen. You step out and make things begin to happen. You also do not rush things, it is a gradual process, Rome wasn't built in a day, and so success isn't attained in a day. You do what is needed and gradually you will see yourself accelerate.<br>
I hope you draw enough motivation to push harder as in the nearest future you will be responsible for putting food on your own table.

</p></div>
</div></div>       
      

        </section><!-- /Blog Section -->
        

<?php
$content = ob_get_clean(); // Get the buffered content and assign it to $content
include("base.php"); // Include the common layout
?>
