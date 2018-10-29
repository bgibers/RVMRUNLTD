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
                                    <div class='mb-4'>
                                        <span class='adonis-icon icon-1x'><svg class='mr-2' version='1.1' xmlns='http://www.w3.org/2000/svg' height='15' viewBox='0 0 32 32'><path d='M14.496 22c4.136 0 7.504-4.096 7.504-9.128s-3.368-9.12-7.504-9.12c-2.195 0.041-4.134 1.105-5.363 2.735l-0.013 0.017c-1.323 1.704-2.121 3.874-2.121 6.23 0 0.060 0 0.12 0.002 0.179l-0-0.009c0 5 3.4 9.096 7.496 9.096zM14.496 5.752c3.040 0 5.504 3.2 5.504 7.12s-2.464 7.128-5.504 7.128-5.496-3.2-5.496-7.128 2.464-7.12 5.496-7.12zM20.8 21c-0.552 0-1 0.448-1 1s0.448 1 1 1v0c3.422 0.005 6.195 2.778 6.2 6.2v0c0 0.442-0.358 0.8-0.8 0.8v0h-23.4c-0.442 0-0.8-0.358-0.8-0.8v0c0.005-3.422 2.778-6.195 6.2-6.2h0c0.552 0 1-0.448 1-1s-0.448-1-1-1v0c-4.527 0.005-8.195 3.673-8.2 8.2v0c0 1.546 1.254 2.8 2.8 2.8v0h23.4c1.546 0 2.8-1.254 2.8-2.8v0c-0.005-4.527-3.673-8.195-8.2-8.2h-0zM15.2 2.64c0.647-0.4 1.432-0.637 2.271-0.64h0.001c3.032 0 5.496 3.2 5.496 7.128 0.001 0.047 0.001 0.102 0.001 0.158 0 0.678-0.073 1.339-0.213 1.975l0.011-0.061c-0.017 0.068-0.026 0.146-0.026 0.227 0 0.471 0.325 0.865 0.763 0.972l0.007 0.001c0.035 0.004 0.075 0.006 0.116 0.006s0.081-0.002 0.121-0.006l-0.005 0c0.477-0.006 0.873-0.344 0.967-0.793l0.001-0.007c0.183-0.749 0.288-1.61 0.288-2.494 0-0.006 0-0.012-0-0.019v0.001c0-4.992-3.4-9.088-7.496-9.088-1.215 0.004-2.35 0.345-3.316 0.936l0.028-0.016c-0.37 0.152-0.626 0.51-0.626 0.927 0 0.552 0.448 1 1 1 0.23 0 0.443-0.078 0.612-0.209l-0.002 0.002zM24 17.040c-0.552 0-1 0.448-1 1s0.448 1 1 1v0c3.326 0.053 6.002 2.761 6.002 6.095 0 0.059-0.001 0.118-0.003 0.177l0-0.009c-0.001 0.119-0.027 0.232-0.074 0.333l0.002-0.005c-0.052 0.118-0.083 0.256-0.083 0.401 0 0.407 0.241 0.758 0.589 0.917l0.006 0.003c0.114 0.056 0.249 0.088 0.391 0.088 0.006 0 0.012-0 0.018-0h-0.001c0.414-0.011 0.764-0.27 0.91-0.633l0.002-0.007c0.152-0.333 0.24-0.723 0.24-1.133 0-0.004 0-0.008-0-0.012v0.001c0.001-0.048 0.002-0.104 0.002-0.161 0-4.438-3.571-8.042-7.997-8.095l-0.005-0z'></path></svg>459</span>
                                        <span class='adonis-icon ml-3 icon-1x'><svg class='mr-2' version='1.1' xmlns='http://www.w3.org/2000/svg' height='15' viewBox='0 0 32 32'><path d='M31.286 0.469c-0.363-0.305-0.818-0.469-1.285-0.469-0.115 0-0.232 0.010-0.348 0.031l-17.002 3c-0.956 0.168-1.652 0.998-1.652 1.969v17.17c-1.015-0.736-2.332-1.17-3.794-1.17-0.85 0-1.7 0.141-2.529 0.416-1.898 0.633-3.42 1.902-4.176 3.484-0.584 1.223-0.659 2.553-0.214 3.746 0.761 2.038 2.923 3.354 5.508 3.354 0.85 0 1.7-0.139 2.528-0.416 1.897-0.631 3.419-1.9 4.175-3.48 0.325-0.682 0.477-1.396 0.483-2.104h0.018v-16c0.115 0 0.232-0.010 0.348-0.029l16.655-2.939v12.138c-1.016-0.736-2.332-1.17-3.795-1.17-0.85 0-1.701 0.141-2.529 0.416-1.898 0.633-3.42 1.902-4.174 3.484-0.584 1.223-0.66 2.553-0.215 3.746 0.762 2.038 2.922 3.354 5.508 3.354 0.85 0 1.701-0.139 2.529-0.416 1.896-0.631 3.418-1.9 4.174-3.48 0.326-0.682 0.477-1.396 0.484-2.104h0.018v-21c0-0.59-0.262-1.152-0.715-1.531zM7.688 29.688c-2.396 0.799-4.873 0.018-5.529-1.74-0.658-1.76 0.751-3.834 3.146-4.633 2.396-0.799 4.873-0.020 5.529 1.74 0.659 1.759-0.75 3.834-3.146 4.633zM26.653 26.688c-2.398 0.799-4.875 0.018-5.531-1.74-0.658-1.76 0.752-3.834 3.146-4.633 2.398-0.799 4.875-0.020 5.531 1.74 0.659 1.759-0.749 3.834-3.146 4.633zM29.96 5l-17.002 3v-3l17.002-3v3z'></path></svg>459</span>
                                    </div>
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