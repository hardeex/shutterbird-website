<?php
$title = "Shutterbird"; // Set the title specific to this page
ob_start(); // Start buffering output
?>
<!---- adding the page content -->
<div class="header-height"></div>
        
        <div class="pager-header">
            <div class="container">
                <div class="page-content">
                   <a href="more.php"> <h2>News/Events</h2></a>
                    
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
 <div class="im"> <center> <img class="im" src="img/causes-1.jpg" alt="events"></center></div>
                <br>
<h3>SHUTTERBIRD CHARACTER LAUNCH</h3>
                   <p>On the 27th of November 2021, Award-winning Filmmaker and Sculptor Shutterbird launched her most anticipated African-Nigerian superhero character, "Shutterbird", which is said to have a unique characteristic of a filmmaker. The dynamic figure will appear in comics, games, cartoons, as well as being the face of a fast growing brand based on the character.<br>

The launch took place in the beautiful city of Owerri, Imo state, Nigeria. The event enjoyed a positive reception from the populace as many joined the staff and crew of Afriwood in the rally round the city. The rally saw a lot of acrobatic displays, musical performances, and showcase of items displaying the character. Afriwood members and stakeholders far and near were all part of the grand event as it was streamed live on the company's social media platforms.<br>

According to the creator Miss Shutterbird, the character is created to support and encourage women in film, letting them know that they can be superheroes in all things with God that strengthens them. She further explained the mission of the character as YES YOU CAN! The character possesses  several super powers which will definitely help her fight against crime and uphold dignity.<br>

The launch was indeed successful to say the least, and the character is growing at an increased rate.</p></div>
</div></div>
                        
        </section><!-- /Blog Section -->
        
       

        </section><!-- /Blog Section -->
        

<?php
$content = ob_get_clean(); // Get the buffered content and assign it to $content
include("base.php"); // Include the common layout
?>
