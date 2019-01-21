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
        <div class="accent section">
            <div class="w-container">
                <div class="section-title-group">
                    <h2 class="centered section-heading">Contact Us</h2>
                    <div class="center section-subheading">Send us an email or reach us on social media!</div>
                </div>
                <div class="form-wrapper-2 w-form">

                    <form class="form-4" method="post" action="../php/emailform.php" data-name="Email Form" id="email-form" name="email-form">
                        <label class="form-label" for="name">Name:</label>
                        <input class="text-field-8 w-input" data-name="Name" id="name" maxlength="256" name="name" placeholder="First name Last name" type="text">
                        <label class="form-label" for="email">Email Address:</label>
                        <input class="text-field-8 w-input" data-name="Email" id="email" maxlength="256" name="email" placeholder="example@example.com" required="required" type="email">
                        <label class="form-label" for="field">MESSAGE:</label>
                        <textarea class="form-field text-area w-input" style="width: 400px" id="field" maxlength="5000" name="field"></textarea>
                        <input class="submit-button-4 w-button" data-wait="Please wait..." id="uploadBtn"
                                   type="submit" value="Upload">
                    </form>
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

