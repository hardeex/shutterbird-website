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
                    <p>Life Is Contextual</p>
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
 <div class="im">  <img class="im" src="img/events-1.jpg" alt="events"></div>
                
<h3>Life is Contextual</h3>
                   <p>When you ignore context, you end up applying one method to every situation you encounter.
Life is very contextual and it is a very important thing, you begin to see this and understand it too.<br>
The way to fully understand life is through the lens of context; life has way too many grey areas for you to choose to see only the whites and blacks.
It is also, the willingness and state of open-mind that allows you absorb and process things.<br>
For me, I do not stick to one method of getting things done, neither do I refuse to avail myself the opportunity to learn new skills and access new informations for my betterment.
 I try many other ways and they yield positive results.<br>
 Most things are not often what they seem to be the surface;<br> 
Reasons why you must embrace context: the ability to see possibilities in any situation.
I have had to solve problems, sometimes, tasking ones, by apply context: approaching them from different angles and also being well equipped with the right information.
I can gladly say; context is everything. If you embrace context, you not only begin to see possibilities but also begin to understand that life, through it's struggles, demands more than one method of approach. With context, in other words availability to information and open-mindedness, you become a more useful person.
</p></div>
</div></div>
                        
       

        </section><!-- /Blog Section -->
       


<?php
$content = ob_get_clean(); // Get the buffered content and assign it to $content
include("base.php"); // Include the common layout
?>
