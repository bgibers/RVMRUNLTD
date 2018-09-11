<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Library">
    <meta name="author" content="Brendan Giberson">

    <title>UNLTD | Upload</title>
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
        <div class="pt-4 pt-lg-5"></div>
        <div class="master-container-fluid">
            <div class="row">
                <div class="col-md-9 flex-column-content-md">
                    <main id="main">
                        <div class="form-wrapper-2 w-form">
                            <form class="form-4" data-name="Email Form 3" id="email-form-3" name="email-form-3"
                                  action="../php/upload_data.php" method="post" enctype="multipart/form-data">
                                <label for="titleTxt" id="titleLbl">Title</label>
                                <input class="text-field-8 w-input" data-name="titleTxt" id="title" maxlength="256"
                                       name="title" placeholder="Enter the title of the song" type="text" required>
                                <label for="artistTxt" id="artistLbl">Artist</label>
                                <input class="text-field-8 w-input" data-name="artistTxt" id="artist" maxlength="256"
                                       name="artist" placeholder="Enter the songs Artist" type="text" required>
                                <label for="albumTxt" id="albumLbl">Album</label>
                                <input class="text-field-8 w-input" data-name="albumTxt" id="album" maxlength="256"
                                       name="album" placeholder="Enter the album that the song belongs to" type="text"
                                       required>
                                <label for="taglist" id="typeLbl">Tags</label>
                                <input class="text-field-8 w-input" data-name="taglist" id="taglist" maxlength="1000"
                                       name="taglist" placeholder="Enter the keywords, separated by commas"
                                       required="required" type="text"><br/>
                                <input type="hidden" name="MAX_FILE_SIZE" value="50000000"/>
                                <label for="audioname" style="color:#7df442"><em> Add audio:</em></label>
                                <input required class="text-field-8 w-input" name="audioname" id="audioname" type="file"
                                       accept="audio/*"/><br/>
                                <label for="imagename" style="color:#7df442"><em> Add album art: </em></label>
                                <!--                                <input required class="text-field-8 w-input" name="imagename" id="imagename" type="file"-->
                                <!--                                       accept="image/*"/>-->
                                <!--                                <input class="submit-button-4 w-button" data-wait="Please wait..." id="uploadBtn"-->
                                <!--                                       type="submit" value="Upload">-->
                            </form>
                        </div>
                    </main>
                </div>
            </div>
        </div>
        <div class="tab-preloader preloader">
            <div class="preloader-overlay"></div>
        </div>
    </div><!--/#site-content-inner-->
</div><!--/#site-content-->

<?php
include "preloader.php";
?>

<?php
include "search.php";
?>

<?php
include "footer-scripts.php";
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
<script src="../js/webflow.js" type="text/javascript"></script>
<!-- [if lte IE 9]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>