<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Apple Fest Vendors Tab</title>
        <link rel="stylesheet" type="text/css" href="styles/styles.css">
        
        <!--vendors style sheet link -->
        <link rel="stylesheet" type="text/css" href="styles/styles_vendor.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <!--add javasript link -->
        
        <script src="js/main.js"></script>
        
    </head>
    
    <body>
        <div id="include_banner">
            <?php include "scripts/banner.php" ;?>
        </div>
       
        <div id="container">
            
            <img id="vendors_big_pic" src="images/apple_fest_booth.jpg" alt="apple fest">
                 <!--picture citation: https://www.flickr.com/photos/hannahmaclean/8381840938-->
            
            <p>Our vendors look forward to Apple Fest every year, excited to share their products with the Ithaca community. With an emphasis on freshness and locally-grown products, Apple Fest has things enjoyable for your whole family!</p>
            
            <p>One highlight of every year's Apple Fest are the apple and festive autumn products sold. You and your family can taste many fresh and delicious fruits, produce, and food. </p>
            
            <p>Here are lists of vendors to stop by! For you and your family's convenience, we have put highlight booths for the kids and for the adults.</p>
            
            <div id="vendor_columns">
            
                <!--start kids column-->
                <div id="kids_column">
 
                    <h2 id="vendor_click_text_kids">Kids, click the image!</h2>

                    <img id="vendors_kids" src="images/face_painting.jpg" alt="face_painting">
                        <!--face painting image citation: http://www.dialanentertainer.com/face-painters/-->
                        
                </div>
 
                
                <!--start parents column-->
                <div id="parents_column">
                    
                    
                    <h2 id= "vendor_click_text_parents">Parents, click the image!</h2>

                    <img id="vendors_parents" src=images/IMG_6118.jpg alt="adults_vendor">
                        <!--maple syrup image citation: taken by Hannah Chow in October, 2015 -->
                </div>
                
            </div>
            
            <div id="vendor_list">
                <p>Vendors will be selling:</p>
                <ul>
                    <li>Apple cider</li>
                    <li>Cider donuts</li>
                    <li>Pumpkins</li>
                    <li>Hard cider</li>
                    <li>Handcrafted artisan goods</li>
                    <li>Apples, apples, and more apples!</li>
                </ul>
            </div>
        </div>
        

        
        <div id="include_footer">
            <?php include "scripts/footer.php" ;?>
        </div>
        
    </body>


</html>