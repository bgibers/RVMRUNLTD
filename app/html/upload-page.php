<?php
include_once "include.php";
?>
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
    <!-- Modal -->
    <?php
    include "newArtistModal.php";
    ?>

    <?php
    include "newAlbumModal.php";
    ?>

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
                                <label for="artist" id="artistLbl">Artist</label>
                                <?php
                                $sql = "SELECT * FROM Artist";
                                $result = $conn->query($sql);

                                echo "<select data-name='artist' id='artist' name='artist'>";
                                echo "    <option disabled selected value> -- select an artist -- </option>";
                                if ($result->num_rows != 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<option value='" . $row['artist_id'] . "'>" . $row['artist_name'] . "</option>";
                                    }
                                }
                                echo "</select>";
                                ?>
                                <label for="album" id="albumLbl">Album</label>
                                <?php
                                $sql = "SELECT * FROM Album";
                                $result = $conn->query($sql);

                                echo "<select data-name='album' id='album' name='album'>";
                                echo "    <option disabled selected value> -- select an album -- </option>";
                                if ($result->num_rows != 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<option value='" . $row['album_id'] . "'>" . $row['album_name'] . "</option>";
                                    }
                                }
                                echo "</select>";
                                ?>
                                <label for="taglist" id="typeLbl">Tags</label>
                                <input class="text-field-8 w-input" data-name="taglist" id="taglist" maxlength="1000"
                                       name="taglist" placeholder="Enter keywords, separated by commas"
                                       required="required" type="text"><br/>
                                <input type="hidden" name="MAX_FILE_SIZE" value="50000000"/>
                                <label for="audioname" style="color:#7df442"><em> Add audio: (50 MB limit per song)</em></label>
                                <input required class="text-field-8 w-input" name="audioname" id="audioname" type="file"
                                       accept="audio/*"/><br/>
                                <!--                                <label for="imagename" style="color:#7df442"><em> Add album art: </em></label>-->
                                <!--                                <input required class="text-field-8 w-input" name="imagename" id="imagename" type="file"-->
                                <!--                                       accept="image/*"/>-->
                                <button type="button" data-toggle="modal" data-target="#artistModal"
                                        class="submit-button-4 w-button" id="newArtistBtn">New Artist
                                </button>
                                <button type="button" data-toggle="modal" data-target="#albumModal"
                                        class="submit-button-4 w-button" id="newAlbumBtn">New Album
                                </button>
                                <input class="submit-button-4 w-button" data-wait="Please wait..." id="uploadBtn"
                                       type="submit" value="Upload">
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