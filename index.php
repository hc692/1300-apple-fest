<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Apple Fest Website</title>
        <link rel="stylesheet" type="text/css" href="styles/styles.css">
        
        <!--add link to jQuery library-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <!--add javasript link -->
        
        <script src="js/main.js"></script>
        
        <!--reference header font -->
        <link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet">
        
    </head>
    
    <body>
        <div id="include_banner">
            <?php include "scripts/banner.php" ;?>
        </div>
        
        <p class="welcome"> 
                Welcome to the Ithaca Apple Fest Website
            </p>
        <div id="container">

            <img id="home_pic" src="images/apples_home2.jpg" alt="apples" class="home">
                <!--picture citation: https://guiltlesssplurge.files.wordpress.com/2010/10/dscn0815.jpg-->
            
            <p>
                This year marks the <span id="annual"> 35th Annual Ithaca Apple Harvest Festival </span> presented by the Tompkins Trust Company. Apple Festival hosts a variety of locally grown apples as well as other produce, fresh baked goods, games, live entertainment and more!
            </p>
            
            <p>Spend a family weekend at Apple Fest and participate in the fun! Apple Fest has a large variety of activities you and your family can participate in. There are friendly-family activities for both the parents and children as well as  vendor booths for the adults. 
            </p>
            
            <p>Some activities that your kids will love are face painting, apple tasting, coloring apple-related pages, etc. For a comprehensive list of activities and events, please refer to the Schedule page.
            </p>
            
            
            <p class="food">
                Along with activities for the whole family, Apple Fest will have a variety of vendors that cater to all different tastes. There will be delicious fresh fruit, apple pies, kettlecorn, caramel apples, and everyone's all-time favorite: hot apple cider donuts!</p>
            
            <div id="memo">
                
                <img id="caramel_pic" src="images/caramel_apples.jpeg" alt="caramel" class="caramel">
                <!--picture citation: http://www.hercampus.com/school/ithaca/best-apple-fest-->
                
                <div id ="date">
                <p class="save">
                    Save the Date!

                </p>
                <p> 
                    <span id="when">When: </span> October 2017 

                </p>
                <p> 
                   <span id="where">Where:</span> Ithaca Commons, 171 E M.L.K. Jr. St, Ithaca, NY 14850 
                </p>
                <p> 
                    <span id="cost">Cost:</span> FREE</p>
                </div>
            </div>
            
        </div>
            
        <div id="include_footer">
            <?php include "scripts/footer.php" ;?>
        </div>
    </body>
    
</html>