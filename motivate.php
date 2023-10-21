<?php
$title = "Motivate"; // Set the title specific to this page
ob_start(); // Start buffering output
?>
<!---- adding the page content -->
<div class="header-height"></div>
        
        <div class="motivate">
            <div class="container">
                <div class="page-content">
                    <h2>Get Motivated</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">GET MOTIVATED</li>
                    </ol>
                </div>
            </div>
        </div><!-- /Page Header -->

<br><br>
           
              
 <div class="section-heading text-center mb-40">
                    <h2>Get Motivated</h2>
                    <span class="heading-border"></span>
                </div><!-- /Section Heading -->
                    <div class="events-item">
                        <div class="event-thumb">
                           <img src="img/events-1.jpg" alt="events">
                        </div>
                        <div class="event-details">
                            <h3>Life is contextual.</h3>
                            <p>When you ignore context, you end up applying one method to every situation you encounter. Life is very contextual and it is a very important thing...
...</p>
                       <a href="event1.php" class="default-btn">Read More</a>  </div>
                    </div><!-- Event-1 --><br><br>
                    <div class="events-item">
                        <div class="event-thumb">
                           <img src="img/events-2.jpg" alt="events">
                        </div>
                        <div class="event-details">
                            <h3>See Through Walls</h3>
                           <p>In life comes obstacles. Unavoidable, life and struggles go hand in hand, thus the saying nothing good comes easy. And because you want something good...</p>
                         <a href="event2.php" class="default-btn">Read More</a></div>
                    </div><!-- Event-2 --><br><br>

                    <div class="events-item">
                        <div class="event-thumb">
                           <img src="img/events-3.jpg" alt="events">
                        </div>
                        <div class="event-details">
                            <h3>Contentment</h3>
                           <p>Satisfaction with what comes. The attribute of not being greedy or wanting more than you can have. Contentment is a beautiful aspect for living...</p>
                           
                         <a href="event3.php" class="default-btn">Read More</a></div>





                    </div><!-- Event-3 --><br><br>
		    <div class="events-item">
                        <div class="event-thumb">
                           <img src="img/events-4.jpg" alt="events">
                        </div>
                        <div class="event-details">
                            <h3>Life and Purpose</h3>
                           <p>You are what you eat. While eating the right meal at the right time remains paramount, i would want to tell you something else.
Good food, good life,...</p>
                         <a href="event4.php" class="default-btn">Read More</a></div>
                    </div><!-- Event-4 --><br><br>
</div>


                    <div class="events-item">
                        <div class="event-thumb">
                           <img src="img/events-5.jpg" alt="events">
                        </div>
                        <div class="event-details">
                            <h3>Relaxation</h3>
                           
                            <p>As an important part of living; relaxation is a quite interesting thing to do. After all stress and bustle, your body deserves a break,a time off to avoid...</p>
                           
                        <a href="event5.php" class="default-btn">Read More</a> </div>
                    </div><!-- Event-5 --><br><br>
			<div class="events-item">
                        <div class="event-thumb">
                           <img src="img/events-6.jpg" alt="events">
                        </div>
			 <div class="event-details">
                            <h3>Happines And Peace</h3>
                        <p>The basic things of life. A very important aspect of living, happiness. Happiness; a state of unmountable joy, the emotion of being happy. A human experience...</p>
                           
                         <a href="event6.php" class="default-btn">Read More</a></div>
                    </div><!-- Event-6 --><br><br><br>



                </div>
           </div>


        
                        
      

        </section><!-- /Blog Section -->
        

<?php
$content = ob_get_clean(); // Get the buffered content and assign it to $content
include("base.php"); // Include the common layout
?>
