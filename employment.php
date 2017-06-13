<?php require_once('components/instagram-feed.php'); ?>
<!DOCTYPE HTML>

<html>
    <head>
        <meta name="keywords" content="dog jobs, cat jobs, dog supervisor, cat supervisor, dog handler, dog daycare attendant, animal care, career opportunities, pet care professional, career opportunities, veterinary technician, dog groomer, cat groomer, pet bather, receptionist, animal care, animal assistant , day shift, night shift premium" />
        <meta name="description" content="We are always looking for seasoned professionals to join our ever-growing, winning team. We treat every guest as if they were our own." />
        <?php require_once('components/head.html'); ?>
    </head>
    <body>
    	<div class="wrapper">
    		<div class="content-wrapper" id="main">
                <?php require_once('components/header.html'); ?>
                <?php require_once('components/banner.html'); ?>
                <div class="content">
                    <div class="main-wrapper about-employment">
                        <div class="main-container">
                            <h2 style="text-align:center;">Employment</h2>
                            <h2 style="font-weight:400;">Looking for a career with dogs or just an interesting part time job around dogs and cats?</h2>

                            <p>We are a unique one of a kind resort built from the ground up for discerning dogs and cats, located minutes from Pearson International airport. Our team is made up of industry professionals that we consider the best in the industry. We have plans for future growth and are looking for seasoned professionals to join our ever growing team.</p>

                            <p><a href="mailto:hiring@park9dogs.com" title="Email Park9" style="font-weight:700;font-style:italic;margin-right:3px;">Please contact us</a> with your r&eacute;sum&eacute; and a brief cover letter telling us why you would like to join our family.</p>

                            <div class="page-banner" style="margin:10px 0 25px;">
                                Current Available Positions
                            </div>

                            <p><i class="fa fa-circle bullet-point" style="margin:0 5px 0 0;"></i> Full Time and Part Time cat specialists <i class="fa fa-circle bullet-point" style="margin:0 0 0 5px;"></i></p>

                            <p><i class="fa fa-circle bullet-point" style="margin:0 5px 0 0;"></i> Full Time and Part Time dog specialists - both day and night shifts available for our dog and cat specialists (there is a night shift premium) <i class="fa fa-circle bullet-point" style="margin:0 0 0 5px;"></i></p>

                            <p><i class="fa fa-circle bullet-point" style="margin:0 5px 0 0;"></i> Full Time and Part Time reception/retail specialists <i class="fa fa-circle bullet-point" style="margin:0 0 0 5px;"></i></p>

                            <p><i class="fa fa-circle bullet-point" style="margin:0 5px 0 0;"></i> Salaried Manager and Assistant Manager <i class="fa fa-circle bullet-point" style="margin:0 0 0 5px;"></i></p>

                            <p><i class="fa fa-circle bullet-point" style="margin:0 5px 0 0;"></i> Experienced bathers <i class="fa fa-circle bullet-point" style="margin:0 0 0 5px;"></i></p>

                            <p><i class="fa fa-circle bullet-point" style="margin:0 5px 0 0;"></i> Full Time Vet Tech <i class="fa fa-circle bullet-point" style="margin:0 0 0 5px;"></i></p>
                        </div>
                    </div>
                    <div class="social-section quote">
                        <h3>"My goal in life is to be as good of a person my dog already thinks I am."</h3>
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
        $('.employment').addClass('selected');
        $('.employment-banner').removeClass('banner-hidden');
    </script>
</html>