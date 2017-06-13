<?php require_once('components/instagram-feed.php'); ?>
<!DOCTYPE HTML>

<html>
    <head>
        <meta name="keywords" content="pet news, dog news, cat news, media, press, Toronto news, National Post, Toronto Star, Urbandog, Urbandog Fitness and spa" />
        <meta name="description" content="We’re in the news. See what the press has to say about us." />
        <?php require_once('components/head.html'); ?>
    </head>
    <body>
    	<div class="wrapper">
    		<div class="content-wrapper" id="main">
                <?php require_once('components/header.html'); ?>
                <?php require_once('components/banner.html'); ?>
                <div class="content">
                    <div class="main-wrapper about-media">
                        <div class="main-container">
                            <h2>Testimonials</h2>

                            <hr>

                            <h2 style="font-weight:400;">Jeanette A.</h2>

                            <p>When we got home, Alice literally walked in the front door and collapsed from exhaustion. She was even out of it yesterday. I was wondering if I had come home with the same dog ... LOL. I told my husband that I will just have to send her to the Spa for a couple of days every time she gets too wound up.</p>

                            <p>I am very happy with Park 9. You can expect to see Alice again!!!!</p>

                            <hr>

                            <h2 style="font-weight:400;">Melissa K.</h2>

                            <p>It just warms my heart that he was so loved and happy while Mommy and Daddy were away!!! Truly the best doggie spa and retreat out there!!!... I love all Willy's new friends!!!! You are the greatest!!!... you and your staff have just blown our minds with not only your above and beyond kindness but also your love for dogs. I am so happy!!! Thank you again!!!</p>
                        </div>
                    </div>
                    <div class="social-section quote">
                        <h3>"He is your friend, your partner, your defender, your dog. You are his life, his love, his leader. He will be yours, faithful and true, to the last beat of his heart. You owe it to him to be worthy of such devotion."</h3>
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
        $('.testimonials').addClass('selected');
        $('.media-banner').removeClass('banner-hidden');
    </script>
</html>