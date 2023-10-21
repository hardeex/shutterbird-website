<?php
$title = "Shutterbird"; // Set the title specific to this page
ob_start(); // Start buffering output
?>
<!---- adding the page content -->
<div class="header-height"></div>
        
        <div class="pager-header">
            <div class="container">
                <div class="page-content">
                    <h2>News/Events</h2>
                   
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">News/Events</li>
                    </ol>
                </div>
            </div>
 <section class="about-section bg-grey bd-bottom padding">
        </div><!-- /Page Header -->
      
<style>
p{color:#888;}
h2{color: black;}
h3{color:black;}

.head{
width:100%;
}
.body{
    width:70%;
    margin: 5% auto 15% auto;
    border: 0px solid #888;
    
}


</style>
       

<section class="causes-section bg-grey bd-bottom "><br><br>
            <div class="container">
                <div class="section-heading text-center mb-40">
                    <h2>News/Events</h2>
                    <span class="heading-border"></span>
            
                </div><!-- /Section Heading -->

                <div class="causes-wrap row">
                    <div class="col-md-4 xs-padding">
                        <div class="causes-content">
                           <div class="causes-thumb">
                                <img src="img/causes-1.jpg" alt="causes">
                                
                           </div>
                            <div class="causes-details">
                                <h3>SHUTTERBIRD CHARACTER LAUNCH</h3>
                                <p>On the 27th of November 2021, Award-winning Filmmaker and Sculptor Shutterbird
					 launched her most anticipated African-Nigerian superhero character, "Shutterbird",
					 which is said to have a unique characteristic of a filmmaker. The dynamic figure will 
						appear in comics, games, cartoons, as well as being the face of a fast growing brand based on the character...</p>
                              
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div><!-- /Causes-1 -->

                    <div class="col-md-4 xs-padding">
                        <div class="causes-content">
                           <div class="causes-thumb">
                                <img src="img/causes-2.jpg" alt="causes">
                               
                           </div>
                            <div class="causes-details">
                                <h3>SHUTTERBIRD CHARACTER EXHIBITION</h3>
                                <p>Exhibitions are an amazing opportunity for a large number of buyers and sellers in an industry
			 to come into direct contact with each other at the same time. Exhibitions and trade shows bring together like-minded 
			individuals either through the same profession or similar industries to exchange contact information and further grow the 
				company's message and brand image... </p>
                                
                                <a href="#" class="read-more">Read More</a>
                            </div>
				
                        </div>
                    </div><!-- /Causes-2 -->

                    <div class="col-md-4 xs-padding">
                        <div class="causes-content">
                           <div class="causes-thumb">
                                <img src="img/causes-3.jpg" alt="causes">
                               
                           </div>
                            <div class="causes-details">
                               <h3> SHUTTERBIRD CHARACTER EXHIBITION</h3>
                                <p>Exhibitions are an amazing opportunity for a large number of buyers and sellers in an industry
			 to come into direct contact with each other at the same time. Exhibitions and trade shows bring together like-minded 
			individuals either through the same profession or similar industries to exchange contact information and further grow the 
				company's message and brand image... </p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div><!-- /Causes-3 -->
                </div>
            </div>

     <br>
       

     

        </section><!-- /Blog Section -->
              

<?php
$content = ob_get_clean(); // Get the buffered content and assign it to $content
include("base.php"); // Include the common layout
?>
