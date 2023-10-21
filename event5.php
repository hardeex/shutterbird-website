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
 <div class="im">  <img class="im" src="img/events-5.jpg" alt="events"></div>
                
<h3>Relaxation And Engagements</h3>
                   <p> As an important part of living; relaxation is a quite interesting thing to do. After all stress and bustle, your body deserves a break, a time off to avoid a breakdown.<br>

Talking of a breakdown; it is important to note that taking care of yourself, is priority. And here includes both mentally, emotionally and healthwise. Take some time off, groom yourself and reactivate for the next big step.<br>

For me, meditations and soft songs does it. I keep time for myself, and myself alone. I take up mind exercises and relax my whole system, I try yoga and inhale/exhale exercises, I meditate, and go over scenes in my mind, I listen to music and it releases me alot.<br>

Engagements; during my relaxation time, I engage in some easy games, and physical beneficial acts like networking with like minds. It helps, places you on better grounds and good opportunities.<br>

Always take care of yourself on all ramifications and while at it, still make something tangible out of it.
</p></div>
</div></div>       
      

        </section><!-- /Blog Section -->
        

<?php
$content = ob_get_clean(); // Get the buffered content and assign it to $content
include("base.php"); // Include the common layout
?>
