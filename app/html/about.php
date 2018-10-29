<?php
include_once "../php/include.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="About page">
    <meta name="author" content="Brendan Giberson">

    <title>UNLTD | About</title>
    <?php
    include "meta.php";
    ?>
</head>
<body>
<?php
include "music-player.php";
?>

<?php
include "header.php";
?>

<div id="site-content">
    <div id="site-content-inner">
        <div class="section" id="about">
            <div class="w-container">
                <div class="w-row">
                    <div class="w-col w-col-6 waterfall-content-column">
                        <h2 class="section">About</h2>
                        <div class="section-subheading"><p>.UNLTD is an online social streaming service created and
                                launched by Damian Bennett and Brendan Giberson. The company is headquartered in
                                Charleston, SC. </p>
                            <p>.UNLTD was founded by Damian in 2017 as a solution for independent artists to take
                                control of their career from music distributors/record labels and eliminate the low
                                royalties they currently receive. As time went on, we figured out a way to incorporate
                                the fan into the equation also— giving them the ability to directly endorse an artist
                                they enjoy through a direct tipping system. Through this system, we give both artists
                                and fans the ability to <strong>#BeUNLTD!</strong></p>


                        </div>
                    </div>
                    <div class="w-col w-col-6 waterfall-image-column" style="padding-bottom: 30px">
                    <span>
                    <img src=../assets/images/dame.png style=" margin-right: 250px">
                    </span>
                        <span>
                        <label>Damian Bennett Captain of Vision/founder</label>
                        <label>Brendan Giberson Co-founder/Developer </label>
                    </span>
                        <span>
                    <img src=../assets/images/me.png style=" margin-left: 250px">
                    </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/#site-cont-->

<?php
include "preloader.php";
?>

<?php
include "search.php";
?>

<?php
include "footer-scripts.php";
?>
</body>
</html>

