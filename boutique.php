<?php require_once('components/instagram-feed.php'); ?>
<!DOCTYPE HTML>

<html>
    <head>
        <meta name="keywords" content="dog accessories, cat accessories, dog treats, cat treats, dog food,  cat food, poop bags, Orijen, Acana, Stella and Chewys, NOW, Bold raw food, collars, leashes, pet toys, catnip, dog beds, cat beds" />
        <meta name="description" content="Quality accessories and necessities. Tested on our own pets." />
        <?php require_once('components/head.html'); ?>
        <style>
            .main-container span.bold { text-transform:uppercase; }
        </style>
    </head>
    <body>
    	<div class="wrapper">
    		<div class="content-wrapper" id="main">
                <?php require_once('components/header.html'); ?>
                <?php require_once('components/banner.html'); ?>
                <div class="content">
                    <div class="main-wrapper boutique">
                        <div class="main-container">
                            <h2>Boutique</h2>

                            <p>We carry a variety of premium products in our boutique that have been carefully curated to meet our high standards, and have received our dog’s approval too. You can be sure we have an opinion about the best toys, leashes and collars, and treats and food, and we’re ready and happy to share it with you!</p>

                            <p>Choose the best quality food for your best friend from our assortment of dry, dehydrated, grain-free or raw food in our market.</p>

                            <p><a href="#" style="font-weight:700;font-style:italic;margin-right:3px;">Join our Dinner Club</a> for special savings and perks!</p>

                            <div class="sponsors">
                                <ul>
                                    <li><img src="img/sponsors/sponsor1.png" alt="Sponsor - Acana"></li>
                                    <!-- <li><img src="img/sponsors/sponsor2.png"></li>
                                    <li><img src="img/sponsors/sponsor3.png"></li>
                                    <li><img src="img/sponsors/sponsor4.png"></li>
                                    <li><img src="img/sponsors/sponsor5.png"></li> -->
                                    <li><img src="img/sponsors/sponsor6.png" alt="Sponsor - Orijen"></li>
                                    <li><img src="img/sponsors/sponsor7.png" alt="Sponsor - Stella and Chewy's"></li>
                                    <!-- <li><img src="img/sponsors/sponsor8.png"></li> -->
                                    <li><img src="img/sponsors/sponsor9.png" alt="Sponsor - Bold Raw"></li>
                                    <div class="clear"></div>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="social-section quote">
                        <h3>"Some of our greatest treasures are kept in museums, others we take for walks."</h3>
                        <h3 style="text-align:right;font-weight:400;color:#ff6600;">- Roger Caras</h3>
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
        $('.boutique').addClass('selected');
        $('.boutique-banner').removeClass('banner-hidden');
    </script>
</html>