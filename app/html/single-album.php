<?php
include_once "../php/include.php";

$albumArt = $row['album_filename'];
$albumId = $row['album_id'];
$albumName = $row['album_name'];
$artistId = $row['artist_id'];
$artistName = $row['artist_name'];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="single-album">
    <meta name="author" content="Brendan Giberson">

    <title>UNLTD | Albums</title>
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
echo "
<div id='site-content'>
    <div id='site-content-inner'>
        <div class='pt-4 pt-lg-5'></div>
        <div class='master-container-fluid'>
            <div class='row'>
                <div class='col-md-9 flex-column-content-md'>
                    <div class='row justify-content-between'>
                        <div class='col-lg-5 flex-column-lg-album-poster text-center text-lg-left'>
                            <div class='album-image'>
                                <div class='music-img-box d-inline-block'>
                                    <div class='img-box'>
                                        
                                        <img class='retina box-rounded-md'
                                             src='../uploads/" . $albumArt . "' alt=''>
                                    </div>
                                    <div class='absolute-info'>
                                        <a class='btn btn-60-60 btn-primary absolute-center adonis-album-button round-btn text-light'
                                           data-album-id='1' role='button' tabindex='0'>
                                            <span class='adonis-icon icon-play icon-2x'><svg
                                                        xmlns='http://www.w3.org/2000/svg' version='1.1'><use
                                                            xlink:href='#icon-brand-play'></use></svg></span>
                                            <span class='adonis-icon icon-pause icon-2x'><svg version='1.1'
                                                                                              xmlns='http://www.w3.org/2000/svg'
                                                                                              height='20'
                                                                                              viewBox='0 0 29 32'><path
                                                            d='M19.2 0h8c0.884 0 1.6 0.716 1.6 1.6v28.8c0 0.884-0.716 1.6-1.6 1.6h-8c-0.884 0-1.6-0.716-1.6-1.6v-28.8c0-0.884 0.716-1.6 1.6-1.6z'></path><path
                                                            d='M1.6 0h8c0.884 0 1.6 0.716 1.6 1.6v28.8c0 0.884-0.716 1.6-1.6 1.6h-8c-0.884 0-1.6-0.716-1.6-1.6v-28.8c0-0.884 0.716-1.6 1.6-1.6z'></path></svg></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class='pb-4 d-inline-block album-likes'>
                                <span class='adonis-icon pr-2 icon-2x'><svg xmlns='http://www.w3.org/2000/svg'
                                                                            version='1.1'><use
                                                xlink:href='#icon-heart-blank'></use></svg></span>
                                <span class='pr-2'>1256</span>
                                <span class='adonis-icon pr-2 icon-1x'><svg xmlns='http://www.w3.org/2000/svg'
                                                                            version='1.1'><use
                                                xlink:href='#icon-brand-play'></use></svg></span>
                                <span>125K</span>
                            </div>
                        </div>
                        <div class='pl-e-xl-40 col-lg-7 flex-column-lg-album-content text-center text-lg-left'>
                            <div class='album-top-box mb-4'>
                                <h6 class='inactive-color'>ALBUM</h6>
                                <h1 class='album-title'>The Ones That Like Me</h1>
                                <p class='mb-2'>By: <a href='#'>Danielle Bradberry</a></p>
                                <div class='separator mb-4 mt-4'>
                                    <span class='separator-md'></span>
                                </div>
                                <p class='mb-2'>14 Songs - 30 minutes</p>
                                <p class='mb-2'>Released on November 12, 2017</p>
                            </div>
<!--                            <div class='mb-4 ml-md-0 mr-md-0'>-->
<!--                                <button class='btn btn-outline active-border rounded-btn btn-lg mr-2 mr-md-3'>SAVE TO MY-->
<!--                                    LIBRARY-->
<!--                                </button>-->
<!--                                <button class='btn btn-45-45 btn-primary p-0 rounded-circle dropdown-menu-toggle'>-->
<!--                                            <span class='pointer text-light'>-->
<!--                                                <span class='adonis-icon icon-4x'><svg-->
<!--                                                            xmlns='http://www.w3.org/2000/svg' version='1.1'><use-->
<!--                                                                xlink:href='#icon-horizontal-dots'></use></svg></span>-->
<!--                                            </span>-->
<!--                                </button>-->
<!--                            </div>-->
                        </div>
                        <div class='col-xl-12 col-xxl-3 text-center text-lg-left'>
                            <div class='about'>
                                <h4>About this album</h4>
                                <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                                    himenaeos.
                                    Suspendisse faucibus sed dolor eget posuere.Sed id interdum urna. Nam ac elit a ante
                                    commodo tristique. Duis lacus urna, condimentum a vehicula a, hendrerit ac nisi
                                    Lorem ipsum dolor sit amet
                                    Vestibulum imperdiet nibh vel magna lacinia ultrices. Sed id interdum urna. Nam ac
                                    elit a ante commodo tristique. </p>  <!--TODO-->
                            </div>
                        </div>
                    </div>
                    <ul class='adonis-album-list pb-5 pt-e-30'>
                        <li>
                            <div class='item-number h6 inactive-color'>#</div>
                            <div class='item-title h6 inactive-color'>Song</div>
                            <div class='item-duration h6 inactive-color'>Time</div>  <!--TODO-->
                            <div class='item-tools'>
                                <span class='adonis-icon h6 inactive-color icon-1x'><svg
                                            xmlns='http://www.w3.org/2000/svg' version='1.1'><use
                                                xlink:href='#icon-heart-blank'></use></svg></span>
                            </div>
                        </li>
                        <!--TODO-->
                        <li class='item hover-bg-item'>
                            <div class='item-number'>
                                <span class='hover-hide'>01</span>
                                <span class='hover-show adonis-icon icon-1x'><svg xmlns='http://www.w3.org/2000/svg'
                                                                                  version='1.1'><use
                                                xlink:href='#icon-brand-play'></use></svg> </span>
                            </div>
                            <div class='item-title'>Begining To See The Light</div>
                            <div class='item-duration'><span class='hover-hide'>14:13</span></div>
                            <div class='item-tools'>
                                <span class='hover-hide'>1245</span>
                                <div class='hover-show d-flex flex-nowrap hover-tools'>
                                    <span class='adonis-icon icon-1x'><svg xmlns='http://www.w3.org/2000/svg'
                                                                           version='1.1'><use
                                                    xlink:href='#icon-heart-blank'></use></svg></span>
                                    <span class='ml-3 adonis-icon icon-3x'><svg xmlns='http://www.w3.org/2000/svg'
                                                                                version='1.1'><use
                                                    xlink:href='#icon-plus'></use></svg> </span>
                                    <span class='ml-3 adonis-icon pointer dropdown-menu-toggle'> <span
                                                class='adonis-icon icon-4x'><svg xmlns='http://www.w3.org/2000/svg'
                                                                                 version='1.1'><use
                                                        xlink:href='#icon-horizontal-dots'></use></svg></span></span>
                                </div>
                            </div>
                            <div class='hover-bg gradient-adonis'></div>
                        </li>
                    </ul>
                    <div class='pt-e-20 pt-e-lg-40'></div>
                    <section>
                        <div class='title-box'>
                            <h2 class='title h3-md'>More By Danielle Bradbery</h2>
                        </div>

                        <div class='adonis-carousel fluid-reverse-r fluid-reverse-md-none viewport-animate'
                             data-animation='slideRight' data-animation-item='.item' data-auto-width='yes'
                             data-loop='no' data-dots='yes' data-responsive-width='0:230px'>
                            <div class='gutter-30'>
                                <div class='owl-carousel owl-theme-adonis'>
                                    <div class='item'>
                                        <div class='music-img-box'>
                                            <div class='img-box box-rounded-sm'>
                                                <img class='retina'
                                                     src='../assets/images/new-releases/new-releases-1.jpg'
                                                     data-2x='assets/images/new-releases/new-releases-1@2x.jpg'
                                                     alt=''>
                                                <div class='hover-state'>
                                                    <div class='absolute-bottom-left pl-e-20 pb-e-20'>
                                                        <span class='pointer play-btn-dark round-btn'><i
                                                                    class='play-icon'></i></span>
                                                    </div>
                                                    <div class='absolute-top-right pr-e-20 pt-e-20'>
                                                        <span class='pointer dropdown-menu-toggle'><span
                                                                    class='adonis-icon icon-4x'><svg
                                                                        xmlns='http://www.w3.org/2000/svg'
                                                                        version='1.1'><use
                                                                            xlink:href='#icon-horizontal-dots'></use></svg></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class='title'><a href='#'>Vestibulum nibh lorem ipsum</a></h6>
                                            <p class='sub-title category'><a href='#'>UNLTD Music Pop</a></p>
                                        </div>
                                    </div> <!--TODO-->

                                </div>
                            </div>
                        </div>
                        <div class='pt-e-20 pt-e-lg-40'></div>
                    </section>
                </div>
            </div>
        </div>
        <div class='master-container-fluid'>
            <div class='p-2'></div>
            <hr>
        </div>
    </div><!--/#site-content-inner-->
</div><!--/#site-content-->"
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