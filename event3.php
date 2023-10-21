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
 <div class="im">  <img class="im" src="img/events-2.jpg" alt="events"></div>
                
 <h3>Contentment</h3>
                   <p>Satisfaction with what comes. The attribute of not being greedy or wanting more than you can have. Contentment is a beautiful aspect for living, it is living freely with whatever one gets.<br>
Now in relation to profession and life and growth; contentment has a powerful role to play in every human, it is reasonable to be contented, to be satisfied or filled. It gives you a certain amount of control over what you actually want and what you actually need, contentment gives you the ability to decipher what you want between these two.<br>

Professionally, being of the best kinds and wanting to put out an awe striking performance, I am still contented with what I get, if course there will always be another time, so if now doesn't work out, later will work. And so, I remain contented with what I presently have. <br>
It is a very much needed part of every human life. Contentment. It is a necessary attribute for every human to grow. You should be contented, because with it comes respect and with respect comes success.
</p></div>
</div></div>       
      

        </section><!-- /Blog Section -->
        

<?php
$content = ob_get_clean(); // Get the buffered content and assign it to $content
include("base.php"); // Include the common layout
?>
