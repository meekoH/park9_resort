<?php require_once('components/instagram-feed.php'); ?>
<!DOCTYPE HTML>

<html>
    <head>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <?php require_once('components/head.html'); ?>
        <style>
            .main-container span.bold {
                text-transform: uppercase;
            }
        </style>
    </head>
    <body>
    	<div class="wrapper">
    		<div class="content-wrapper" id="main">
                <?php require_once('components/header.html'); ?>
                <?php require_once('components/banner.html'); ?>
                <div class="content">
                    <div class="main-wrapper our-facilities">
                        <div class="main-container">
                            <h2 style="text-align:center;">Our Facility</h2>

                            <p>Our facility was custom designed and built to meet the many differing wants and needs of cats and dogs.</p>

                            <p>No expense was spared to make sure our accommodations offer a variety of choices to make your cat or dog’s stay with us as comfortable as possible.</p>

                            <p><span class="bold orange">Some of our luxury features include:</span></p>

                            <p><i class="fa fa-circle bullet-point"></i> Day lounges for dogs that require down time during the day away from the play.</p>

                            <p><i class="fa fa-circle bullet-point"></i> Separate senior dog wing that offers heated floors and accommodations in a quieter location in the building close to the watchful eye of reception staff.</p>

                            <p><i class="fa fa-circle bullet-point"></i> A variety of accommodation options ranging from socially oriented slumber rooms to multiple different options in private suites.</p>

                            <p><span class="bold orange">Ask us to help you select the best fit for your dog or cat</span></p>

                            <p>In addition, we have implemented a number of "green" initiatives into our building to help keep everyone healthy, including the environment.</p>

                            <p><i class="fa fa-circle bullet-point"></i> A custom built hospital grade UV air filtration system including a separate air exchange for our cat wing.</p>

                            <p><i class="fa fa-circle bullet-point"></i> A custom designed daylighting system - this system is electricity-free, operating instead by focusing natural sunlight through reflective tubing into the playground and pool and dispersing the light using a diffuser.</p>

                            <p><i class="fa fa-circle bullet-point"></i> Low voltage and LED lighting throughout.</p>

                            <p><i class="fa fa-circle bullet-point"></i> UV technology filters the pool so no harmful chemicals or salt is used that can dry out sensitive skin and coats.</p>

                            <p><i class="fa fa-circle bullet-point"></i> Woven K9 Grass around the pool is specifically made for dogs and features a flushing system under the raised grass that removes all waste and water from around the pool.</p>

                            <p><i class="fa fa-circle bullet-point"></i> Filtered watering system for dogs and cats.</p>

                            <p><i class="fa fa-circle bullet-point"></i> Chemical free room cleaning using hot water steam.</p>

                            <p class="bold orange">You can feel good about choosing Park9.</p>
                        </div>
                    </div>
                    <div class="social-section quote">
                        <h3>"A day at the pool isn't complete until your dog shakes themselves off right next to you."</h3>
                        <h3 style="text-align:right;font-weight:400;color:#ff6600;">- Unknown</h3>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <?php require_once('components/ig-feed.php'); ?>
            <?php require_once('components/footer.html'); ?>
    	</div>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('.about').addClass('selected');
        $('.pool').addClass('selected');
        $('.pool-banner').removeClass('banner-hidden');
    </script>
</html>