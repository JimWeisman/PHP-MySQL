<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JWeisman Module 2 HTML Refresher Exercise Web212</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<style type="text/css">
    .section-title {
        text-align: center;
        margin-top: 1em;
        background-color: #ecf0f1;
        padding: .5em 0;
        border-radius: .3em;
    }

    .service {
        border-radius: .3em;
        border-style: solid;
        border-color: red;
        background-color: #34495e;
        text-align: center;
        padding: 3em 2em 1em 2em;
        color: white;
    }

    .service .glyphicon {
        font-size: 5em;
    }
    
    div.gallery{
        margin: 15px;
        border: medium solid #ccc;
        float: top;
        width: 210px;
    }  
    div.gallery: hover {
        border: 10px solid #777;
    }
    div.gallery img{
        width: 200px;
        height: 200px;
    }
    div.desc {
        padding: 5px;
        text-align: center;
    }
     a:link{
        color: white;
    }

</style>

<body>
    <div class="container">
        <div class="jumbotron text-center">
            <h3>This is a webpage for JWeisman Module 2 HTML Refresher Exercise</h3>
        </div>
        
         <?php
         // set the time for Chicago
          date_default_timezone_set('America/Chicago');
          echo "Today date is " . date('l,jS \of F Y h:i:s A');
            ?>
    </div>
    <div class="container"> 
        <h2 class="section-title"><strong> Our Servces</strong></h2>
        <div class="row">
            <div class="col-md-4">
                    <div class="service">
                        <h3>Print the number 1-10</h3>
                      <ul style="list-style-type:none;">
                          <li>1</li>
                          <li>2</li>
                          <li>3</li>
                          <li>4</li>
                          <li>5</li>
                          <li>6</li>
                          <li>7</li>
                          <li>8</li>
                          <li>9</li>
                          <li>10</li>
                        </ul>
                    </div>
                </div>                       
            <div class="col-md-4">
                        <div class="service">
                            
                            <h4>Print the text of your choice</h4>
                            <h3>Print the text of your choice</h3>
                            <h2>Print the text of your choice</h2>
                            <h1>Print the text of your choice</h1>
                            <p>Print the text of your choice</p>
                        </div>
                    </div>
            <div class="col-md-4">
                        <div class="service">
        
                            <p style=font-family:cursive;>Never underestimate the market for luxury goods.</p>
                            <p style=font-family:fantasy;> "Expensive" electric trucks and SUVs will sell. </p>
                            <p style=font-family:sans-serif;>For the sake of the environment it will be good when electric "work trucks" are practical and affordable.</p> 
                            <p style=font-family:verdana;>Many (most?) pickup trucks do not cover many miles in a day, so if the current truck builders will make an electric truck that goes 200 miles between charges, that is plenty of range for most pickup truck use.</p>
                            <p style=font-family: courier>All these huge blinged-out SUVs and trucks are just another way for some folks to flaunt their wealth.</p> 
                            <p style=font-family:open sans;> If Ford, GM, Ram will build an electric pickup (or van) that will go 200 miles and cost the same as their base model ICE truck a lot of fleet owners and small business owners will buy them; reduced operating and maintenance costs.</p> 
                            <!--<p> No complicated combustion engine, no transmission, no engine cooling system, no exhaust system, no emissions equipment, brakes last longer, etc.</p>-->
                        </div>
                    </div>
            <div class="col-md-4">
                <div class="service">
                    <h3><u>Description of a book</u></h3>
                    <h3><u>By Tad Burness</u> </h3>
                    <p>This <b><i>one-of-a-kind, massive illustrated </i></b>history of more than 10,000 American automobiles is perfect for the millions of classic car enthusiasts.
With more than 1,300 pages and 12,500 illustrations covering 70 years, this may be the most complete visual history of the American automobile ever published. Nowhere else are there so many collector, luxury, sporting and every day cars assembled with fascinating information about original prices, engine sizes, horsepower, and other specifications. The pages are packed with genuine, factory-fresh photographs and drawings taken from contemporary advertisements, catalogs, and brochures.
More than 250 manufacturers and hundreds of individual models trace the evolution of the American automobile, from the millions of Model Ts that rolled off Ford's assembly line through the art deco streamliners of the '30s, to the tail-finned land yachts of the '50s and muscle cars of the '60s and '70s up to the early SUVs of the '90s. Throughout author Tad Burness adds handwritten details not found anywhere else, including pointing out unusual options and differences found within a model. Automotive journalist Matt Stone provides a new general introduction and one to each era within the book.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service">
                   <h3>Print 10 Name</h3>
                    <h1>Unalphabetized</h1>
                    <p>Jim <sub>10</sub></p><br>
                    <p>Grayson <sub>7</sub></p><br>
                    <p>Bob <sub>2</sub></p><br>                   
                    <p>David <sub>4</sub></p><br>                    
                    <p>Frank <sub>6</sub></p><br>
                    <p>Cora <sub>3</sub></p><br>
                    <p>Harry <sub>8</sub></p><br>
                    <p>Ava <sub>1</sub></p><br>
                    <p>Isabella <sub>9</sub></p><br>
                    <p>Ethan <sub>5</sub></p><br>
                    
            </div>
            </div>
            <div class="col-md-4">
                <div class="service">
                   <h3>Print 10 Name</h3>
                    <h1>Alphabetized</h1>
                    <p>Ava <sub>1</sub></p><br>
                    <p>Bob <sub>2</sub></p><br>
                    <p>Cora <sub>3</sub></p><br>
                    <p>David <sub>4</sub></p><br>
                    <p>Ethan <sub>5</sub></p><br>
                    <p>Frank <sub>6</sub></p><br>
                    <p>Grayson <sub>7</sub></p><br>
                    <p>Harry <sub>8</sub></p><br>
                    <p>Isabella <sub>9</sub></p><br>
                    <p>Jim <sub>10</sub></p><br>
            </div>
            </div>
            <div class="col-md-4">
                <div class="service">
                 <h3>Links to search engines</h3>
                    <a href="https://www.google.com" target="_blank"><img src="google-favicon.png" alt="google" style="width 50px"; height="50px";> </a>
                   <a href="https://google.com" target="_blank">Google</a> <br><br>
                    
                    <a href="https://www.yahoo.com" target="_blank"><img src="yahoo.png" alt="yahoo" style="width 50px"; height="50px";> </a>
                    <a href="https://yahoo.com" target="_blank">Yahoo</a><br><br>
                    
                     <a href="https://duckduckgo.com" target="_blank"><img src="DuckDuckGo.png" alt="duckduckgo" style="width 50px"; height="50px";> </a>
                    <a href="https://duckduckgo.com" target="_blank">duckduckgo</a><br><br>
                    
                     <a href="https://bing.com" target="_blank"><img src="bing_1.png" alt="bing" style="width 50px"; height="50px";> </a>
                    <a href="https://www.bing.com">Bingo</a><br>
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="service">
                 <h3>links to 5 different Pages</h3>
                   <a href="https://autonews.com/" target="_blank">Automotive News USA</a> <br>
                    <a href="https://www.canada.autonews.com/" target="_blank">Automotive News Canada</a><br>
                    <a href="https://www.europe.autonews.com/" target="_blank">Automotive News Europe</a><br>
                    <a href="https://autonews.com/china">Automotive News China</a><br>
                    <a href="https://mecum.com/" target="_bank">Mecum Auto Auction</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service">
                    <div class="gallery">
                    <a target="_blank" href="19_mecum_chicago.jpg">
                        <img src="19_mecum_chicago.jpg" alt="red Plymoth Daytona" width="200" height="200"> 
                             </a>
                             <div class="desc"> Red Plymoth Daytona </div>
                    </div>
                    <br>
                     <br>
                    <div class="gallery">
                    <a target="_blank" href="Inside.jpg">
                        <img src="Inside.jpg" alt="Dash board view" width="200" height="200">
                        </a>
                        <div class="desc"> Dash board view</div>
                   </div>  
                    <br>
                     <br>
                           <div class="gallery">
                    <a target="_blank" href="vet.jpg">
                        <img src="vet.jpg" alt="Vet and Cuda" width="200" height="200"> 
                             </a>
                             <div class="desc"> Vet and Cuda </div>
                    </div>
                    <br>
                     <br>
                   
                    <div class="gallery">
                    <a target="_blank" href="RAV-side.jpg">
                        <img src="RAV-side.jpg" alt="New RAV" width="200" height="200">
                        </a>
                        <div class="desc"> New RAV</div>
                   </div>  
                    <br>
                     <br>
                    <div class="gallery">
                    <a target="_blank" href="2020-Prius.png">
                        <img src="2020-Prius.png" alt="2020 Prius" width="200" height="200">
                        </a>
                        <div class="desc"> New 2020 Prius</div>
                   </div>  
                           
                   
                </div>
            </div>
            </div>  
        </div>
        
            
    </body>
</html>
