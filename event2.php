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
                
<h3>See Through The Walls
</h3>
                   <p>
In life comes obstacles. Unavoidable, life and struggles go hand in hand, thus the saying nothing good comes easy. And because you want something good, you begin to see through the walls. I have learnt to do this, I have learnt that disappointments can be blessings in disguise and that behind obstacles lies something great, something rewarding.
Never backing down or sitting things out is an important life survival skills one must learn. Having to push despite many falls is an important life hack because in life that is what everyone does-push till your walls fall, push till your obstacle bow. You never know what comes, you never know what's on the other side.
I do not bow to my walls, I come for these obstacles one after the other because I believe that behind every obstacles lies a reward, you should do the same. <br>
Growing a shell at each obstacle or giving up at each obstacle ends up putting you in a bad place. Running off because it did not go as planned isn't advisable. I have had projects that didn't end up as planned but because I see through my walls, I pushed on until it landed me something rewarding.
<br>
In all, never give up, never back down, never sit out, keep pushing.
</p></div>
</div></div>
                        
      

        </section><!-- /Blog Section -->
        

<?php
$content = ob_get_clean(); // Get the buffered content and assign it to $content
include("base.php"); // Include the common layout
?>
