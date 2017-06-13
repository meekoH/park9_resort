<?php require_once('components/instagram-feed.php'); ?>
<!DOCTYPE HTML>

<html>
    <head>
        <meta name="keywords" content="live feed, webcam, dropcam, supervised dog play, dog daycare, dog cameras, dog pool, Urbandog" />
        <meta name="description" content="Never miss a thing. Watch your best friend play with their friends in our playground and pool." />
        <?php require_once('components/head.html'); ?>
    </head>
    <body>
    	<div class="wrapper">
    		<div class="content-wrapper" id="main">
                <?php require_once('components/header.html'); ?>
                <?php require_once('components/banner.html'); ?>
                <div class="content">
                    <div class="main-wrapper service-webcam">
                        <div class="main-container">
                            <h2>Live Webcams</h2>

                            <h2 style="font-weight:400;">You don't have to miss a thing</h2>
                            <p>You can be rest assured that your dog is safe and having fun by logging in to our webcams from your computer or mobile device.<br>
                                Our cameras in our playroom and pool stream live when in use, from 8am until 8pm, 7 days a week.</p>

                            <p>Don't be alarmed if you don't see your dog on camera. They may be having a nap on a comfy bed out of camera and action range, enjoying the sun outside, or having a snack in the lunchroom.</p>

                            <h2 style="font-weight:400;">To watch from your iPhone or Android</h2>
                            <p>From your <span class="bold">Mac</span> or <span class="bold">PC</span>, click the <span class="bold">Orange Link Button</span> below for the camera you wish to watch<br>
                                Click the follow button in the lower left hand corner<br>
                                You'll be prompted to create or log in to your Nest account</p>

                            <p>From your mobile device, go to <a href="https://home.nest.com/" title="Dropcam" target="_blank" style="font-weight:700;font-style:italic;margin-right:3px;">home.nest.com</a>. Download and install the Nest app<br>
                                Using the Nest app, log in to your Nest account. Your "followed" camera feeds should now show up within your app.</p>

                            <div class="main-container" style="padding:0;margin-bottom:15px;">
                                <div class="left-side">
                                    <iframe type="text/html" frameborder="0" width="480" height="394" src="//video.nest.com/embedded/live/sXZ80F?autoplay=1" class="dropcam"></iframe>
                                    <a href="https://video.nest.com/live/sXZ80F" target="_blank">
                                        <div class="cam-link">
                                            Park9 Playground
                                        </div>
                                    </a>
                                </div>
                                <div class="right-side">
                                    <iframe type="text/html" frameborder="0" width="480" height="394" src="//video.nest.com/embedded/live/PNuApB?autoplay=1" class="dropcam"></iframe>
                                    <a href="https://video.nest.com/live/PNuApB" target="_blank">
                                        <div class="cam-link">
                                            Park9 Pool
                                        </div>
                                    </a>
                                </div>
                                <div class="left-side">
                                    <iframe type="text/html" frameborder="0" width="480" height="394" src="//video.nest.com/embedded/live/TzSlCy?autoplay=1" class="dropcam"></iframe>
                                    <a href="https://video.nest.com/live/TzSlCy" target="_blank">
                                        <div class="cam-link">
                                            Park9 Playground #2
                                        </div>
                                    </a>
                                </div>
                                <div class="clear"></div>
                            </div>

                            <p>Boarding clients with private room webcam access will receive instructions at check in.</p>
                        </div>
                    </div>
                    <div class="social-section quote">
                        <h3>"Happiness is when you look at your dog play and forget all your problems."</h3>
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
        $('.services').addClass('selected');
        $('.webcam').addClass('selected');
        $('.webcam-banner').removeClass('banner-hidden');
    </script>
</html>