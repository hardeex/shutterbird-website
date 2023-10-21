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
 <div class="im"> <center> <img class="im" src="img/causes-3.jpg" alt="events"></div></center>
        <br>        
<h3>SHUTTERBIRD 3-D MODEL</h3>
<p>
3-D modelling is the use of software to create a virtual three-dimensional model of some physical object. Over the past years, this technology has made a
 great impact across industries. It does not only help you visualize but also gives your client a concrete picture of your idea. Afriwood Films has
 expressed it's intentions to develop a 3-D model for it's superhero character Shutterbird. The model will appear in games, cartoons, and many more.
</p>

<h3>BENEFITS OF INTRODUCING A 3-D MODEL TO THE BRAND</h3>
<p><br>
<h4>1) CUSTOMER SATISFACTION</h4>
Since the customers are becoming more demanding as their options continue to grow, we should focus on making our character more
 appealing than our competition. One of the methods to achieve that is by providing the real image of the character, which
 you can do rather easily with 3-D modelling. This seemingly small change can help increase customer satisfaction as clients
 can now view our character from a completely different angle.
<br><br><br>
<h4>2) INVESTOR TRUST</h4>
When you design a new product, you need to show the best image to the investors. A 3-D model of our character will help in 
this aspect, as we can use it to provide a detailed image to the investors, which will help in building the investors' trust 
in the brand. Apart from this, it helps in showing our professionalism and seriousness about the character.
<br><br><br>
<h4>3)BRANDING AND PRESENTATION</h4>
A 3-D representation of our character can and will help with creating a unique identity for the brand. And with so many
 brands available on the market, it is imperative to stand out for good reasons. The 3-D model can be useful as a tactic
 to win consumers' hearts. It not only provides the benefit of having a real time view of the character, but it also provides
 an additional edge to the brand.
</p>

<h3>CONCLUSION</h3><p>
The world is ever changing, and so is the market. With competition on the corporate landscape as large as it is today, 
satisfying customers became more imperative than ever before. And as it happens, 3-D modelling is one of the tactics that our
 brand can use to increase customer satisfaction, as it provides a complete image of the character from multiple perspectives.
</p></div></div>
                        
       

        </section><!-- /Blog Section -->
        

<?php
$content = ob_get_clean(); // Get the buffered content and assign it to $content
include("base.php"); // Include the common layout
?>
