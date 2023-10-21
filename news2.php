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
 <div class="im">  <img class="im" src="img/causes-2.jpg" alt="events"></div>
                
<h3>SHUTTERBIRD CHARACTER EXHIBITION</h3>
                   <p>Exhibitions are an amazing opportunity for a large number of buyers and sellers in an industry to come into direct contact with each other at the same time. Exhibitions and trade shows bring together like-minded individuals either through the same profession or similar industries to exchange contact information and further grow the company's message and brand image. Director Shutterbird earlier this year announced an art exhibition and trade show for the newly launched character brand "Shutterbird".<br>
scheduled to take place later in the year. The exhibition promises to serve eye-catching and jaw dropping artworks of our character and it is definitely one to look out for.<br>
</p>

<br><br>
<h3>HOW IMPORTANT IS THE EXHIBITION TO OUR BRAND?</h3><p>
<h4>1) Showcasing</h4>
The art exhibition offers a unique opportunity for our brand to showcase it's products to a highly targeted audience. Our prominently and well displayed products will attract visitors, buyers, investors, as well as the press. This exposure is invaluable to our brand

<h4>2) Face-to-face interaction</h4>
The upcoming exhibition provides an avenue for face-to-face customer contact, which is the best way to build relationships and form new ones with potential customers. There is no better way to access direct clients than during this exhibition. A good showcase at this exhibition will help build a lot of credibility about the brand and help generate a good buzz about our products.

<h4>3) Networking</h4>
The art exhibition provides a medium to connect to several personalities such as sponsors, partners, investors, etc. These people can help us further establish and consolidate a fulfilling brand. Displaying our character will help us get recognition and develop a broad network.
</p>


<h3>CONCLUSION</h3>
                   <p>An art exhibition is essentially the best way to establish the fundamentals for branding, networking, public awareness, fundraising, breaking ground and so on. A brand on it's own is no good until admirers can actually experience and understand it.</p>


</div>
</div></div>
                        
       

        </section><!-- /Blog Section -->
        

<?php
$content = ob_get_clean(); // Get the buffered content and assign it to $content
include("base.php"); // Include the common layout
?>
