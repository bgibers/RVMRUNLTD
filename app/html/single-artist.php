<?php
include_once "../php/include.php";

$artistId = $_REQUEST["artistId"];


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="single-artist">
    <meta name="author" content="Brendan Giberson">

    <title>UNLTD | Artists</title>
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

<?php
$sql = "Select * FROM Artist WHERE Artist.artist_id ='$artistId'";
$result = $conn->query($sql);
$result = mysqli_fetch_assoc($result);
$artistName = $result["artist_name"];
$artistArt = $result["artist_filename"];
echo "
<div id='site-content'>
    <div id='site-content-inner'>
        <div class='master-container-fluid pr-0'>
            <div class='row'>
                <div class='col-md-9 order-md-2 flex-column-content-md'>
                    <main id='main'>
                        <div class='album-cover-bg blur-bottom artist-bg-1'></div>
                        <div class='master-container-fluid'>
                            <div class='album-spacer'></div>
                            <div class='row justify-content-between'>
                                <div class='col-xl-7 text-center text-md-left'>
                                    <h6 class='inactive-color'></h6>
                                    <h1 class='fs-md-13 h1'>" . $artistName . "</h1>
                               
                                    <div class='row'>
                                        <div class='col-md-5'>
                                            <div class='music-image-box'>
                                               <div class='img-box mb-3'><img class='retina box-rounded-md'
                                                                               src='../uploads/" . $artistArt . "'
                                                                               alt=''></div>
                                            </div>
                                        </div>
                                 <!--       <div class='col-md-7 pt-3 pt-md-0'>
                                            <h3 class='mb-4'>About</h3>
                                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse faucibus sed dolor eget posuere.Sed id interdum urna. Nam ac elit a ante commodo tristique. Duis lacus urna, condimentum a vehicula a, hendrerit ac nisi Lorem ipsum dolor sit amet
                                                Vestibulum imperdiet nibh vel magna lacinia ultrices. Sed id interdum urna. Nam ac elit a ante commodo tristique. </p>
                                        </div>-->
                                    </div>
                                </div>
                                <div class='col-xl-5 text-center text-md-right mt-auto'>
<form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\"
                                                      target=\"_top\">
                                                    <input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">
                                                    <input type=\"hidden\" name=\"hosted_button_id\" value=\"2XZ9XEJUCXGK4\">
                                                    <input type=\"image\"
                                                           src=\"https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif\"
                                                           border=\"0\" name=\"submit\"
                                                           alt=\"PayPal - The safer, easier way to pay online!\">
                                                    <img alt=\"\" border=\"0\" src=\"https://www.paypalobjects.com/en_US/i/scr/pixel.gif
https://www.paypalobjects.com/en_US/i/scr/pixel.gif
\" width=\"1\" height=\"1\">
                                                </form>                             
                                </div>
                            </div>";
echo "
                            <div class='fluid-reverse-r'>
                                <section>
                                    <div class='pt-e-50 pt-e-lg-70'></div>
                                    <div class='d-flex'>
                                        <div class='title-box'>
                                            <h2 class='title h3-md'>Top Songs</h2>
                                        </div>
                                        <div class='button-right ml-auto ml-auto d-flex align-items-end mb-4'>
                                            <a href='#' class='inactive-color mr-4'>See all <span class='adonis-icon pl-1 icon-arrow icon-1x'><svg xmlns='http://www.w3.org/2000/svg' version='1.1'><use xlink:href='#icon-see-all-arrow-right' /></svg></span></a>
                                        </div>
                                    </div>
                                    <div class='adonis-carousel viewport-animate' data-animation='slideRight' data-animation-item='.item' data-auto-width='yes' data-loop='no' data-dots='yes' data-responsive-width='0:100%|600:50%|900:33.33%|1200:20%'>
                                        <div class='gutter-30'>
                                            <div class='owl-carousel owl-theme-adonis'>";

$sql = "SELECT * FROM Data WHERE Data.artist_id = '$artistId' ORDER BY Data.title";
$result = $conn->query($sql);
$counter = 5;
while ($row = mysqli_fetch_assoc($result)) {
    $title = $row["title"];
    $albumId = $row["album_id"];
    $dataId = $row["data_id"];
    $dataId = (string)$dataId;

    $innerSql = "Select Album.album_filename FROM Album WHERE Album.album_id ='$albumId'";
    $innerResult = $conn->query($innerSql);
    $songArt = mysqli_fetch_assoc($innerResult);
    $art = $songArt['album_filename'];

    if ($counter === 5) {
        $counter = 0;
        echo " <div class='item'>";

    }
    echo " <div class='img-box-horizontal music-img-box h-g-bg h-d-shadow'>
                                                        <div class='img-box img-box-sm box-rounded-sm'>
                                                            <img src='../uploads/" . $art . "' alt=''>
                                                        </div>
                                                        <div class='des'>
                                                            <h6 class='title'><a href='#'>" . $title . "</a></h6>
                                                        </div>
                                                        <div class='hover-state d-flex justify-content-between align-items-center'>
                                                            <span class='pointer play-btn-dark box-rounded-sm' onclick=playSelected('$dataId')><i class='play-icon'></i></span>
                                                            <div class='d-flex align-items-center'>
                                                                <span class='adonis-icon text-light pointer mr-2 icon-2x'><svg xmlns='http://www.w3.org/2000/svg' version='1.1'><use xlink:href='#icon-heart-blank' /></svg></span>
                                                                <span class='pointer dropdown-menu-toggle'><span class='icon-dot-nav-horizontal text-light'></span></span>
                                                            </div>
                                                        </div>
                                                    </div>";
    $counter++;
    if ($counter === 5) {
        echo "</div>";
    }
}

echo "                                        </div>
                                        </div>
                                    </div>
                                    <div class='pt-e-20 pt-e-lg-40'></div>
                                </section>";

$sql = "Select * FROM Album WHERE Album.artist_id ='$artistId'";
$result = $conn->query($sql);
$result = mysqli_fetch_assoc($result);
$albumName = $result["album_name"];
$albumArt = $result["album_filename"];
$albumId = $result["album_id"];
echo "
                                <section>
                                    <div class='d-flex'>
                                        <div class='title-box'>
                                            <h2 class='title h3-md'>Albums</h2>
                                        </div>
                                        <div class='button-right ml-auto ml-auto d-flex align-items-end mb-4'>
                                            <a href='#' class='inactive-color mr-4'>See all <span class='adonis-icon pl-1 icon-arrow icon-1x'><svg xmlns='http://www.w3.org/2000/svg' version='1.1'><use xlink:href='#icon-see-all-arrow-right' /></svg></span></a>
                                        </div>
                                    </div>
                                    <div class='adonis-carousel' data-auto-width='yes' data-loop='no' data-dots='yes' data-responsive-width='0:230px'>
                                        <div class='gutter-30'>
                                            <div class='owl-carousel owl-theme-adonis'>
                                                <div class='item'>
                                                    <div class='music-img-box'>
                                                        <div class='img-box box-rounded-sm'>
                                                            <img class='retina'
                                                                 src='../uploads/" . $albumArt . "'
                                                                 alt=''>
                                                            <div class='hover-state'>
                                                                <div class='absolute-bottom-left pl-e-20 pb-e-20'>
                                                                    <span class='pointer play-btn-dark round-btn'><i class='play-icon'></i></span>
                                                                </div>
                                                                <div class='absolute-top-right pr-e-20 pt-e-20'>
                                                                    <span class='pointer dropdown-menu-toggle'><span class='adonis-icon icon-4x'><svg xmlns='http://www.w3.org/2000/svg' version='1.1'><use xlink:href='#icon-horizontal-dots'></use></svg></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
<form data-name='Email Form 4' id='single-album-form-lib' name='email-form-4'
                                                                  action='single-album.php' method='post' enctype='multipart/form-data'>
                                                                <input type='hidden' name='albumId' data-name='albumId' id='albumId' value='" . $albumId . "' />
                                                               <input type='hidden' name='albumArt' data-name='albumArt' id='albumArt'value='" . $albumArt . "' />
                                                               <input type='hidden' name='albumName' data-name='albumName' id='albumName'value='" . $albumName . "' /> 
                                                               <input type='hidden' name='artistName' data-name='artistName' id='artistName'value='" . $artistName . "' />
                                                               <input type='hidden' name='artistId' data-name='artistId' id='artistId'value='" . $artistId . "' />
     
                            <h6 class='title'><button class=\"btn btn-link\" type='submit''>" . $albumName . "</button></h6>
                            </form>
                                                        
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class='pt-e-20 pt-e-lg-40'></div>
                                </section>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div><!--/#site-content-inner-->
</div><!--/#site-content-->";

?>
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