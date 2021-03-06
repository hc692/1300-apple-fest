<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Apple Fest Website</title>
        <link rel="stylesheet" type="text/css" href="styles/styles.css">
        <link rel="stylesheet" type="text/css" href="styles/styles_home.css">

        <!--add link to jQuery library-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <!--add javasript link -->

        <script src="js/main.js"></script>
        <script src="js/resp.js"></script>

        <!--reference header font -->
        <link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet">

    </head>

    <body>
        <div id="include_banner">
            <?php include "includes/banner.php" ;?>
        </div>

        <p class="welcome">
                Welcome to the Ithaca Apple Fest Website!
            </p>
        <div id="container">

            <div id="home">
                <img id="home_pic" src="images/apples_home2.jpg" alt="apples" class="home">
                <!--picture citation: https://guiltlesssplurge.files.wordpress.com/2010/10/dscn0815.jpg-->
            </div>

            <div id="description">
            <p>
                This year marks the <span id="annual"> 35th Annual Ithaca Apple Harvest Festival </span> presented by the Tompkins Trust Company. Apple Festival hosts a variety of locally grown apples as well as other produce, fresh baked goods, games, live entertainment and more!
            </p>

            <p>Spend a family weekend at Apple Fest and participate in the fun! Apple Fest has a large variety of activities you and your family can participate in. There are friendly-family activities and vendors for both the parents and children.
            </p>

            <p>Your kids will love the activities! For a comprehensive list of activities and events, please refer to the Schedule page.
            </p>


            <p class="food">
                Along with activities for the whole family, Apple Fest will have a variety of vendors that cater to all different tastes. There will be delicious fresh fruit, apple pies, kettlecorn, caramel apples, and everyone's all-time favorite: hot apple cider donuts!</p>

            </div>

            <div id="memo">

                <img id="caramel_pic" src="images/caramel_apples.jpg" alt="caramel" class="caramel">
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


                <img id="ferris_wheel" src="images/kids.jpg" alt="kids" class="kids">
               <!-- picture citation: https://millneck.org/tag/apple-fest/
                -->

                <div id="partners">
                    <ul>
                       <p class="strategic_partners"> Please see our strategic partners below.</p>
                    </ul>

                    <ul>

                        <a href="https://www.tcatbus.com/">
                    <img src="images/tcat.jpg" alt="partner1" >
                        <!-- picture citation: http://pawprint.cornell.edu/?q=node/2192-->
                        </a>
                    </ul>

                    <ul>
                        <a href="https://www.iloveny.com/">
                        <img src="images/iloveny.jpg" alt="partner2" >
                            <!-- picture citation: http://99percentinvisible.org/episode/episode-87-i-heart-ny-tm/-->
                            </a>
                    </ul>

                     <ul>
                         <a href="http://www.visitithaca.com/">
                        <img src="images/visitithaca.png" alt="partner3" >
                            <!--http://www.visitithaca.com/ -->
                            </a>
                     </ul>


                </div>



            </div>

        </div>

        <div id="include_footer">
            <?php include "includes/footer.php" ;?>
        </div>
    </body>

</html>
