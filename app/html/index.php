<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Home page">
    <meta name="author" content="Brendan Giberson">

    <title>UNLTD | Home</title>
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
            <div class="mb-e-30 mb-e-lg-50">
                <div class="mt-auto mb-3">
                    <div class="tabs tab-style-1 scroll-x">
                        <ul class="nav nav-border js-parent adonis-tabbed-nav moving-border">
                            <li class="menu-item active">
                                <a class="nav-link adonis-ajax-load loaded active m-item m-item-block" href="#"
                                   data-target=".browse-content-overview">
                                    <span class="adonis-icon pr-3 icon-4x"><svg version="1.1"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 455.005 455.005"><g><path
                                                        d="M446.158,267.615c-5.622-3.103-12.756-2.421-19.574,1.871l-125.947,79.309c-3.505,2.208-4.557,6.838-2.35,10.343 c2.208,3.505,6.838,4.557,10.343,2.35l125.947-79.309c2.66-1.675,4.116-1.552,4.331-1.432c0.218,0.12,1.096,1.285,1.096,4.428 c0,8.449-6.271,19.809-13.42,24.311l-122.099,76.885c-6.492,4.088-12.427,5.212-16.284,3.084c-3.856-2.129-6.067-7.75-6.067-15.423 c0-19.438,13.896-44.61,30.345-54.967l139.023-87.542c2.181-1.373,3.503-3.77,3.503-6.347s-1.323-4.974-3.503-6.347L184.368,50.615 c-2.442-1.538-5.551-1.538-7.993,0L35.66,139.223C15.664,151.815,0,180.188,0,203.818v4c0,23.63,15.664,52.004,35.66,64.595 l209.292,131.791c3.505,2.207,8.136,1.154,10.343-2.35c2.207-3.505,1.155-8.136-2.35-10.343L43.653,259.72 C28.121,249.941,15,226.172,15,207.818v-4c0-18.354,13.121-42.122,28.653-51.902l136.718-86.091l253.059,159.35l-128.944,81.196 c-20.945,13.189-37.352,42.909-37.352,67.661c0,13.495,4.907,23.636,13.818,28.555c3.579,1.976,7.526,2.956,11.709,2.956 c6.231,0,12.985-2.176,19.817-6.479l122.099-76.885c11.455-7.213,20.427-23.467,20.427-37.004 C455.004,277.119,451.78,270.719,446.158,267.615z"></path><path
                                                        d="M353.664,232.676c2.492,0,4.928-1.241,6.354-3.504c2.207-3.505,1.155-8.136-2.35-10.343l-173.3-109.126 c-3.506-2.207-8.136-1.154-10.343,2.35c-2.207,3.505-1.155,8.136,2.35,10.343l173.3,109.126 C350.916,232.303,352.298,232.676,353.664,232.676z"></path><path
                                                        d="M323.68,252.58c2.497,0,4.938-1.246,6.361-3.517c2.201-3.509,1.14-8.138-2.37-10.338L254.46,192.82 c-3.511-2.202-8.139-1.139-10.338,2.37c-2.201,3.51-1.14,8.138,2.37,10.338l73.211,45.905 C320.941,252.21,322.318,252.58,323.68,252.58z"></path><path
                                                        d="M223.903,212.559c-3.513-2.194-8.14-1.124-10.334,2.39c-2.194,3.514-1.124,8.14,2.39,10.334l73.773,46.062 c1.236,0.771,2.608,1.139,3.965,1.139c2.501,0,4.947-1.251,6.369-3.529c2.194-3.514,1.124-8.14-2.39-10.334L223.903,212.559z"></path><path
                                                        d="M145.209,129.33l-62.33,39.254c-2.187,1.377-3.511,3.783-3.503,6.368s1.345,4.983,3.54,6.348l74.335,46.219 c1.213,0.754,2.586,1.131,3.96,1.131c1.417,0,2.833-0.401,4.071-1.201l16.556-10.7c3.479-2.249,4.476-6.891,2.228-10.37 c-2.248-3.479-6.891-4.475-10.37-2.228l-12.562,8.119l-60.119-37.38l48.2-30.355l59.244,37.147l-6.907,4.464 c-3.479,2.249-4.476,6.891-2.228,10.37c2.249,3.479,6.894,4.476,10.37,2.228l16.8-10.859c2.153-1.392,3.446-3.787,3.429-6.351 c-0.018-2.563-1.344-4.94-3.516-6.302l-73.218-45.909C150.749,127.792,147.647,127.795,145.209,129.33z"></path><path
                                                        d="M270.089,288.846c2.187-3.518,1.109-8.142-2.409-10.329l-74.337-46.221c-3.518-2.188-8.143-1.109-10.329,2.409 c-2.187,3.518-1.109,8.142,2.409,10.329l74.337,46.221c1.232,0.767,2.601,1.132,3.953,1.132 C266.219,292.387,268.669,291.131,270.089,288.846z"></path><path
                                                        d="M53.527,192.864c-2.187,3.518-1.109,8.142,2.409,10.329l183.478,114.081c1.232,0.767,2.601,1.132,3.953,1.132 c2.506,0,4.956-1.256,6.376-3.541c2.187-3.518,1.109-8.142-2.409-10.329L63.856,190.455 C60.338,188.266,55.714,189.346,53.527,192.864z"></path></g></svg></span>
                                    <span>Timeline</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="nav-link adonis-ajax-load m-item m-item-block" href="library.php">
                                    <span class="adonis-icon pr-3 icon-3x"><svg version="1.1"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 16 15"><defs></defs><g
                                                    data-name="Layer 2"><g id="overviews_icon"
                                                                           data-name="overviews icon" class="cls-1"><g
                                                            id="overviews_icon-2" data-name="overviews icon"><path
                                                                class="cls-2"
                                                                d="M16,1.4A1.43,1.43,0,0,0,14.55,0l-8,.7a1.43,1.43,0,0,0-1.45,1.4v7h0v2.78h0a2,2,0,0,1,0,.38,2.14,2.14,0,0,1-2.19,2.09,2.1,2.1,0,1,1,0-4.19,2.25,2.25,0,0,1,.72.13v-.13h0a.34.34,0,0,0,0-.69h0a.33.33,0,0,0-.18.06,2.75,2.75,0,0,0-.54-.06A2.85,2.85,0,0,0,0,12.22,2.85,2.85,0,0,0,2.91,15a2.85,2.85,0,0,0,2.91-2.78s0,0,0-.06h0V2.09a.71.71,0,0,1,.73-.7l8-.7a.71.71,0,0,1,.73.7v7h0v2.78h0a2,2,0,0,1,0,.36,2.19,2.19,0,1,1-2.19-2.08,2.27,2.27,0,0,1,.72.12V9.44h0a.36.36,0,0,0,.36-.36h0a.36.36,0,0,0-.36-.36h0a.35.35,0,0,0-.18.06,2.72,2.72,0,0,0-.52-.06A2.8,2.8,0,1,0,16,11.52h0Z"></path></g></g></g></svg></span>
                                    <span>Library</span>
                                </a>
                            </li>
                        </ul>
                        <hr class="border-hr">
                    </div>
                </div>
            </div>
        </div>
        <div class="tabs-content">
            <div class="master-container-fluid pr-0 tabs-content">
                <div class="browse-content-overview inactive-hide active">
                    <div class="adonis-carousel music-img-box-cont-lg adonis-animate" data-animation="slideRightSkew"
                         data-animation-item=".owl-item.active" data-scrollbar="yes" data-auto-height="yes"
                         data-auto-width="yes" data-loop="no" data-dots="yes">
                        <div class="gutter-30 gutter-xl-40">
                            <div class="carousel-wrapper-30">
                                <div class="owl-carousel owl-theme-adonis stage-margin-0">
                                    <div class="item" data-responsive-width="0:80%|768:60%|1200:42%">
                                        <div class="music-img-box mb-e-30 mb-e-xl-40">
                                            <div class="img-box box-rounded-lg img-box-lg">
                                                <img class="retina" src="../assets/images/browse/browse-overview-15.jpg"
                                                     data-2x="assets/images/playlists/browse-overview-15@2x.jpg" alt="">
                                                <div class="hover-state show">
                                                    <div class="absolute-top d-flex justify-content-between pt-e-percent-5 pl-e-percent-8 pr-e-percent-8">
                                                        <span class="pointer dropdown-menu-toggle"
                                                              data-direction="right"><span
                                                                    class="adonis-icon icon-4x color-active hover-show"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        version="1.1"><use
                                                                            xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                        <span class="title color-dark h4 fs-1">NEW ARTIST</span>
                                                    </div>
                                                    <div class="absolute-center hover-show">
                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                    class="play-icon"></i></span>
                                                    </div>
                                                    <div class="absolute-bottom pl-e-percent-8 pb-e-percent-7">
                                                        <h2 class="title h3-md color-dark">Tailor Lachini</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item" data-responsive-width="0:80%|768:60%|1200:42%">
                                        <div class="music-img-box mb-e-30 mb-e-xl-40">
                                            <div class="img-box box-rounded-lg img-box-lg">
                                                <img class="retina" src="../assets/images/browse/browse-overview-16.jpg"
                                                     data-2x="assets/images/playlists/browse-overview-16@2x.jpg" alt="">
                                                <div class="hover-state show">
                                                    <div class="absolute-top d-flex justify-content-between pt-e-percent-5 pl-e-percent-8 pr-e-percent-8">
                                                        <span class="pointer dropdown-menu-toggle"
                                                              data-direction="right"><span
                                                                    class="adonis-icon icon-4x color-active hover-show"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        version="1.1"><use
                                                                            xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                        <span class="title color-dark h4 fs-1">LISTEN NOW</span>
                                                    </div>
                                                    <div class="absolute-center hover-show">
                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                    class="play-icon"></i></span>
                                                    </div>
                                                    <div class="absolute-bottom pl-e-percent-8 pb-e-percent-4">
                                                        <h2 class="title color-dark h3-md">UNLTD Radio Today</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row gutter-xl-40">
                                            <div class="col-6">
                                                <div class="music-img-box mb-e-30 mb-e-xl-40">
                                                    <div class="img-box box-rounded-lg img-box-lg">
                                                        <img class="retina"
                                                             src="../assets/images/browse/browse-overview-17.jpg"
                                                             data-2x="assets/images/playlists/browse-overview-17@2x.jpg"
                                                             alt="">
                                                        <div class="hover-state show">
                                                            <div class="absolute-top d-flex justify-content-between pl-e-percent-10 pr-e-percent-10 pt-e-percent-10">
                                                                <span class="pointer dropdown-menu-toggle"
                                                                      data-direction="right"><span
                                                                            class="adonis-icon icon-4x color-active hover-show"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                                <span class="title color-dark h4 fs-1">FEATURED ALBUM</span>
                                                            </div>
                                                            <div class="absolute-center hover-show">
                                                                <span class="pointer play-btn-dark round-btn"><i
                                                                            class="play-icon"></i></span>
                                                            </div>
                                                            <div class="absolute-bottom pl-e-percent-10 pb-e-percent-8">
                                                                <h4 class="title color-dark">This One's for You</h4>
                                                                <span class="title color-dark">Rachel Platten</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="music-img-box mb-e-30 mb-e-xl-40">
                                                    <div class="img-box box-rounded-lg img-box-lg">
                                                        <img class="retina"
                                                             src="../assets/images/browse/browse-overview-6.jpg"
                                                             data-2x="assets/images/playlists/browse-overview-6@2x.jpg"
                                                             alt="">
                                                        <div class="hover-state show">
                                                            <div class="absolute-top d-flex justify-content-between pl-e-percent-10 pr-e-percent-10 pt-e-percent-10">
                                                                <span class="pointer dropdown-menu-toggle"
                                                                      data-direction="right"><span
                                                                            class="adonis-icon icon-4x color-active hover-show"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                                <span class="title color-dark h4 fs-1">NEW ALBUM</span>
                                                            </div>
                                                            <div class="absolute-center hover-show">
                                                                <span class="pointer play-btn-dark round-btn"><i
                                                                            class="play-icon"></i></span>
                                                            </div>
                                                            <div class="absolute-bottom pl-e-percent-10 pb-e-percent-8">
                                                                <h4 class="title color-dark">Home For The Holidays</h4>
                                                                <span class="title color-dark">David Jame</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item" data-responsive-width="0:80%|768:60%|1200:42%">
                                        <div class="row gutter-30 gutter-xl-40">
                                            <div class="col-6">
                                                <div class="music-img-box mb-e-30 mb-e-xl-40">
                                                    <div class="img-box box-rounded-lg img-box-lg">
                                                        <img class="retina"
                                                             src="../assets/images/browse/browse-overview-18.jpg"
                                                             data-2x="assets/images/playlists/browse-overview-18@2x.jpg"
                                                             alt="">
                                                        <div class="hover-state show">
                                                            <div class="absolute-top d-flex justify-content-between pl-e-percent-10 pr-e-percent-10 pt-e-percent-10">
                                                                <span class="pointer dropdown-menu-toggle"
                                                                      data-direction="right"><span
                                                                            class="adonis-icon icon-4x color-active hover-show"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                                <span class="title color-dark h4 fs-1">FEATURED ALBUM</span>
                                                            </div>
                                                            <div class="absolute-center hover-show">
                                                                <span class="pointer play-btn-dark round-btn"><i
                                                                            class="play-icon"></i></span>
                                                            </div>
                                                            <div class="absolute-bottom pl-e-percent-10 pb-e-percent-8">
                                                                <h4 class="title color-dark">Hopeless fountain
                                                                    kingdom</h4>
                                                                <span class="title color-dark">David Jame</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="music-img-box mb-e-30 mb-e-xl-40">
                                                    <div class="img-box box-rounded-lg img-box-lg">
                                                        <img class="retina"
                                                             src="../assets/images/browse/browse-overview-15.jpg"
                                                             data-2x="assets/images/playlists/browse-overview-15@2x.jpg"
                                                             alt="">
                                                        <div class="hover-state show">
                                                            <div class="absolute-top d-flex justify-content-between pl-e-percent-10 pr-e-percent-10 pt-e-percent-10">
                                                                <span class="pointer dropdown-menu-toggle"
                                                                      data-direction="right"><span
                                                                            class="adonis-icon icon-4x color-active hover-show"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                                <span class="title color-dark h4 fs-1">FEATURED ALBUM</span>
                                                            </div>
                                                            <div class="absolute-center hover-show">
                                                                <span class="pointer play-btn-dark round-btn"><i
                                                                            class="play-icon"></i></span>
                                                            </div>
                                                            <div class="absolute-bottom pl-e-percent-10 pb-e-percent-8">
                                                                <h4 class="title color-dark">Hopeless fountain
                                                                    kingdom</h4>
                                                                <span class="title color-dark">David Jame</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="music-img-box mb-e-30 mb-e-xl-40">
                                                    <div class="img-box box-rounded-lg img-box-lg">
                                                        <img class="retina"
                                                             src="../assets/images/browse/browse-overview-11.jpg"
                                                             data-2x="assets/images/playlists/browse-overview-11@2x.jpg"
                                                             alt="">
                                                        <div class="hover-state show">
                                                            <div class="absolute-top d-flex justify-content-between pl-e-percent-10 pr-e-percent-10 pt-e-percent-10">
                                                                <span class="pointer dropdown-menu-toggle"
                                                                      data-direction="right"><span
                                                                            class="adonis-icon icon-4x color-active hover-show"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                                <span class="title color-dark h4 fs-1">NEW ALBUM</span>
                                                            </div>
                                                            <div class="absolute-center hover-show">
                                                                <span class="pointer play-btn-dark round-btn"><i
                                                                            class="play-icon"></i></span>
                                                            </div>
                                                            <div class="absolute-bottom pl-e-percent-10 pb-e-percent-8">
                                                                <h4 class="title color-dark">What Makes You Country</h4>
                                                                <span class="title color-dark">David Jame</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="music-img-box mb-e-30 mb-e-xl-40">
                                                    <div class="img-box box-rounded-lg img-box-lg">
                                                        <img class="retina"
                                                             src="../assets/images/browse/browse-overview-19.jpg"
                                                             data-2x="assets/images/playlists/browse-overview-19@2x.jpg"
                                                             alt="">
                                                        <div class="hover-state show">
                                                            <div class="absolute-top d-flex justify-content-between pl-e-percent-10 pr-e-percent-10 pt-e-percent-10">
                                                                <span class="pointer dropdown-menu-toggle"
                                                                      data-direction="right"><span
                                                                            class="adonis-icon icon-4x color-active hover-show"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                                <span class="title color-dark h4 fs-1">NEW ALBUM</span>
                                                            </div>
                                                            <div class="absolute-center hover-show">
                                                                <span class="pointer play-btn-dark round-btn"><i
                                                                            class="play-icon"></i></span>
                                                            </div>
                                                            <div class="absolute-bottom pl-e-percent-10 pb-e-percent-8">
                                                                <h4 class="title color-dark">What Makes You Country</h4>
                                                                <span class="title color-dark">David Jame</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pb-2"></div>
                    <hr class="m-0">
                    <div class="pt-e-40 pt-e-xl-50"></div>
                </div>
            </div>
            <div class="master-container-fluid">
                <div class="row">
                    <div class="col-md-9 flex-column-content-md">
                        <main id="main">
                            <div class="tabs-content">
                                <div class="browse-content-overview inactive-hide active fluid-reverse-r fluid-reverse-md-none">
                                    <section>
                                        <div class="d-flex flex-row">
                                            <div class="title-box">
                                                <h6 class="title inactive-color">New Music</h6>
                                                <h2 class="title h3-md">New Singles</h2>
                                            </div>
                                            <div class="button-right ml-auto ml-auto d-flex align-items-end mb-4">
                                                <a href="#" class="inactive-color mr-4 mr-md-0">See all <span
                                                            class="adonis-icon pl-1 icon-arrow icon-1x"><svg
                                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                    xlink:href="#icon-see-all-arrow-right"/></svg></span></a>
                                            </div>
                                        </div>
                                        <div class="adonis-carousel" data-auto-width="yes" data-loop="no"
                                             data-dots="yes" data-responsive-width="0:85%|400:355px">
                                            <div class="gutter-30">
                                                <div class="owl-carousel owl-theme-adonis">
                                                    <div class="item">
                                                        <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                                            <div class="img-box img-box-sm box-rounded-sm">
                                                                <img src="../assets/images/hot-song/hot-1.jpg" alt="">
                                                            </div>
                                                            <div class="des">
                                                                <h6 class="title fs-2"><a href="#">The Separation</a>
                                                                </h6>
                                                                <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                                            </div>
                                                            <div class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                            class="play-icon"></i></span>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-heart-blank"/></svg></span>
                                                                    <span class="pointer dropdown-menu-toggle"><span
                                                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                                            <div class="img-box img-box-sm box-rounded-sm">
                                                                <img src="../assets/images/hot-song/hot-2.jpg" alt="">
                                                            </div>
                                                            <div class="des">
                                                                <h6 class="title fs-2"><a href="#">Country girl shake it
                                                                        for me</a></h6>
                                                                <p class="sub-title"><a href="#">Bing Crosby</a></p>
                                                            </div>
                                                            <div class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                            class="play-icon"></i></span>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-heart-blank"/></svg></span>
                                                                    <span class="pointer dropdown-menu-toggle"><span
                                                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                                            <div class="img-box img-box-sm box-rounded-sm">
                                                                <img src="../assets/images/hot-song/hot-3.jpg" alt="">
                                                            </div>
                                                            <div class="des">
                                                                <h6 class="title fs-2"><a href="#">Stirring of a
                                                                        fool</a></h6>
                                                                <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                                            </div>
                                                            <div class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                            class="play-icon"></i></span>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-heart-blank"/></svg></span>
                                                                    <span class="pointer dropdown-menu-toggle"><span
                                                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                                            <div class="img-box img-box-sm box-rounded-sm">
                                                                <img src="../assets/images/hot-song/hot-4.jpg" alt="">
                                                            </div>
                                                            <div class="des">
                                                                <h6 class="title fs-2"><a href="#">Nothings into
                                                                        Somethings</a></h6>
                                                                <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                                            </div>
                                                            <div class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                            class="play-icon"></i></span>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-heart-blank"/></svg></span>
                                                                    <span class="pointer dropdown-menu-toggle"><span
                                                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                                            <div class="img-box img-box-sm box-rounded-sm">
                                                                <img src="../assets/images/hot-song/hot-5.jpg" alt="">
                                                            </div>
                                                            <div class="des">
                                                                <h6 class="title fs-2"><a href="#">Let You Down</a></h6>
                                                                <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                                            </div>
                                                            <div class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                            class="play-icon"></i></span>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-heart-blank"/></svg></span>
                                                                    <span class="pointer dropdown-menu-toggle"><span
                                                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                                            <div class="img-box img-box-sm box-rounded-sm">
                                                                <img src="../assets/images/hot-song/hot-6.jpg" alt="">
                                                            </div>
                                                            <div class="des">
                                                                <h6 class="title fs-2"><a href="#">Nothings into
                                                                        Somethings</a></h6>
                                                                <p class="sub-title"><a href="#">Sam Hunt</a></p>
                                                            </div>
                                                            <div class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                            class="play-icon"></i></span>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-heart-blank"/></svg></span>
                                                                    <span class="pointer dropdown-menu-toggle"><span
                                                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                                            <div class="img-box img-box-sm box-rounded-sm">
                                                                <img src="../assets/images/hot-song/hot-7.jpg" alt="">
                                                            </div>
                                                            <div class="des">
                                                                <h6 class="title fs-2"><a href="#">O Come, All Ye
                                                                        Faithful</a></h6>
                                                                <p class="sub-title"><a href="#">Kesha</a></p>
                                                            </div>
                                                            <div class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                            class="play-icon"></i></span>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-heart-blank"/></svg></span>
                                                                    <span class="pointer dropdown-menu-toggle"><span
                                                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                                            <div class="img-box img-box-sm box-rounded-sm">
                                                                <img src="../assets/images/hot-song/hot-8.jpg" alt="">
                                                            </div>
                                                            <div class="des">
                                                                <h6 class="title fs-2"><a href="#">Fetty Wap Ft
                                                                        Monty</a></h6>
                                                                <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                                            </div>
                                                            <div class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                            class="play-icon"></i></span>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-heart-blank"/></svg></span>
                                                                    <span class="pointer dropdown-menu-toggle"><span
                                                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                                            <div class="img-box img-box-sm box-rounded-sm">
                                                                <img src="../assets/images/hot-song/hot-9.jpg" alt="">
                                                            </div>
                                                            <div class="des">
                                                                <h6 class="title fs-2"><a href="#">Do You Hear What I
                                                                        Hear</a></h6>
                                                                <p class="sub-title"><a href="#">Band Aid</a></p>
                                                            </div>
                                                            <div class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                            class="play-icon"></i></span>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-heart-blank"/></svg></span>
                                                                    <span class="pointer dropdown-menu-toggle"><span
                                                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                                            <div class="img-box img-box-sm box-rounded-sm">
                                                                <img src="../assets/images/hot-song/hot-10.jpg" alt="">
                                                            </div>
                                                            <div class="hover-state d-flex  align-items-center">

                                                            </div>
                                                            <div class="des">
                                                                <h6 class="title fs-2"><a href="#">Look What You Made Me
                                                                        Do</a></h6>
                                                                <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                                            </div>
                                                            <div class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                            class="play-icon"></i></span>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-heart-blank"/></svg></span>
                                                                    <span class="pointer dropdown-menu-toggle"><span
                                                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                                            <div class="img-box img-box-sm box-rounded-sm">
                                                                <img src="../assets/images/hot-song/hot-11.jpg" alt="">
                                                            </div>
                                                            <div class="des">
                                                                <h6 class="title fs-2"><a href="#">Carol of the
                                                                        Bells</a></h6>
                                                                <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                                            </div>
                                                            <div class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                            class="play-icon"></i></span>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-heart-blank"/></svg></span>
                                                                    <span class="pointer dropdown-menu-toggle"><span
                                                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                                            <div class="img-box img-box-sm box-rounded-sm">
                                                                <img src="../assets/images/hot-song/hot-12.jpg" alt="">
                                                            </div>
                                                            <div class="des">
                                                                <h6 class="title fs-2"><a href="#">Carol of the
                                                                        Bells</a></h6>
                                                                <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                                            </div>
                                                            <div class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                            class="play-icon"></i></span>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-heart-blank"/></svg></span>
                                                                    <span class="pointer dropdown-menu-toggle"><span
                                                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                                            <div class="img-box img-box-sm box-rounded-sm">
                                                                <img src="../assets/images/hot-song/hot-13.jpg" alt="">
                                                            </div>
                                                            <div class="des">
                                                                <h6 class="title fs-2"><a href="#">You're A Mean One,
                                                                        Mr. Grinch</a></h6>
                                                                <p class="sub-title"><a href="#">Darius Rucker</a></p>
                                                            </div>
                                                            <div class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                            class="play-icon"></i></span>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-heart-blank"/></svg></span>
                                                                    <span class="pointer dropdown-menu-toggle"><span
                                                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                                            <div class="img-box img-box-sm box-rounded-sm">
                                                                <img src="../assets/images/hot-song/hot-14.jpg" alt="">
                                                            </div>
                                                            <div class="des">
                                                                <h6 class="title fs-2"><a href="#">Joy To The World</a>
                                                                </h6>
                                                                <p class="sub-title"><a href="#">Pentatonix</a></p>
                                                            </div>
                                                            <div class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                            class="play-icon"></i></span>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-heart-blank"/></svg></span>
                                                                    <span class="pointer dropdown-menu-toggle"><span
                                                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                                            <div class="img-box img-box-sm box-rounded-sm">
                                                                <img src="../assets/images/hot-song/hot-15.jpg" alt="">
                                                            </div>
                                                            <div class="des">
                                                                <h6 class="title fs-2"><a href="#">Something Just Like
                                                                        This</a></h6>
                                                                <p class="sub-title"><a href="#">Demi Lovato</a></p>
                                                            </div>
                                                            <div class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                            class="play-icon"></i></span>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-heart-blank"/></svg></span>
                                                                    <span class="pointer dropdown-menu-toggle"><span
                                                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                                            <div class="img-box img-box-sm box-rounded-sm">
                                                                <img src="../assets/images/hot-song/hot-1.jpg" alt="">
                                                            </div>
                                                            <div class="des">
                                                                <h6 class="title fs-2"><a href="#">The Separation</a>
                                                                </h6>
                                                                <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                                            </div>
                                                            <div class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                            class="play-icon"></i></span>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-heart-blank"/></svg></span>
                                                                    <span class="pointer dropdown-menu-toggle"><span
                                                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                                            <div class="img-box img-box-sm box-rounded-sm">
                                                                <img src="../assets/images/hot-song/hot-2.jpg" alt="">
                                                            </div>
                                                            <div class="des">
                                                                <h6 class="title fs-2"><a href="#">Country girl shake it
                                                                        for me</a></h6>
                                                                <p class="sub-title"><a href="#">Bing Crosby</a></p>
                                                            </div>
                                                            <div class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                            class="play-icon"></i></span>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-heart-blank"/></svg></span>
                                                                    <span class="pointer dropdown-menu-toggle"><span
                                                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                                            <div class="img-box img-box-sm box-rounded-sm">
                                                                <img src="../assets/images/hot-song/hot-3.jpg" alt="">
                                                            </div>
                                                            <div class="des">
                                                                <h6 class="title fs-2"><a href="#">Stirring of a
                                                                        fool</a></h6>
                                                                <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                                            </div>
                                                            <div class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                            class="play-icon"></i></span>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-heart-blank"/></svg></span>
                                                                    <span class="pointer dropdown-menu-toggle"><span
                                                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                                            <div class="img-box img-box-sm box-rounded-sm">
                                                                <img src="../assets/images/hot-song/hot-4.jpg" alt="">
                                                            </div>
                                                            <div class="des">
                                                                <h6 class="title fs-2"><a href="#">Nothings into
                                                                        Somethings</a></h6>
                                                                <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                                            </div>
                                                            <div class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                            class="play-icon"></i></span>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-heart-blank"/></svg></span>
                                                                    <span class="pointer dropdown-menu-toggle"><span
                                                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                                            <div class="img-box img-box-sm box-rounded-sm">
                                                                <img src="../assets/images/hot-song/hot-5.jpg" alt="">
                                                            </div>
                                                            <div class="des">
                                                                <h6 class="title fs-2"><a href="#">Let You Down</a></h6>
                                                                <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                                            </div>
                                                            <div class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                            class="play-icon"></i></span>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-heart-blank"/></svg></span>
                                                                    <span class="pointer dropdown-menu-toggle"><span
                                                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                                            <div class="img-box img-box-sm box-rounded-sm">
                                                                <img src="../assets/images/hot-song/hot-1.jpg" alt="">
                                                            </div>
                                                            <div class="des">
                                                                <h6 class="title fs-2"><a href="#">The Separation</a>
                                                                </h6>
                                                                <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                                            </div>
                                                            <div class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                            class="play-icon"></i></span>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-heart-blank"/></svg></span>
                                                                    <span class="pointer dropdown-menu-toggle"><span
                                                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                                            <div class="img-box img-box-sm box-rounded-sm">
                                                                <img src="../assets/images/hot-song/hot-2.jpg" alt="">
                                                            </div>
                                                            <div class="des">
                                                                <h6 class="title fs-2"><a href="#">Country girl shake it
                                                                        for me</a></h6>
                                                                <p class="sub-title"><a href="#">Bing Crosby</a></p>
                                                            </div>
                                                            <div class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                            class="play-icon"></i></span>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-heart-blank"/></svg></span>
                                                                    <span class="pointer dropdown-menu-toggle"><span
                                                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                                            <div class="img-box img-box-sm box-rounded-sm">
                                                                <img src="../assets/images/hot-song/hot-3.jpg" alt="">
                                                            </div>
                                                            <div class="des">
                                                                <h6 class="title fs-2"><a href="#">Stirring of a
                                                                        fool</a></h6>
                                                                <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                                            </div>
                                                            <div class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                            class="play-icon"></i></span>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-heart-blank"/></svg></span>
                                                                    <span class="pointer dropdown-menu-toggle"><span
                                                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                                            <div class="img-box img-box-sm box-rounded-sm">
                                                                <img src="../assets/images/hot-song/hot-4.jpg" alt="">
                                                            </div>
                                                            <div class="des">
                                                                <h6 class="title fs-2"><a href="#">Nothings into
                                                                        Somethings</a></h6>
                                                                <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                                            </div>
                                                            <div class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                            class="play-icon"></i></span>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-heart-blank"/></svg></span>
                                                                    <span class="pointer dropdown-menu-toggle"><span
                                                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                                            <div class="img-box img-box-sm box-rounded-sm">
                                                                <img src="../assets/images/hot-song/hot-5.jpg" alt="">
                                                            </div>
                                                            <div class="des">
                                                                <h6 class="title fs-2"><a href="#">Let You Down</a></h6>
                                                                <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                                            </div>
                                                            <div class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                            class="play-icon"></i></span>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-heart-blank"/></svg></span>
                                                                    <span class="pointer dropdown-menu-toggle"><span
                                                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-e-20 pt-e-lg-40"></div>
                                    </section>
                                    <section>
                                        <div class="d-flex">
                                            <div class="title-box">
                                                <h6 class="sub-title inactive-color">New</h6>
                                                <h2 class="title h3-md">Albums</h2>
                                            </div>
                                            <div class="button-right ml-auto ml-auto d-flex align-items-end">
                                                <a href="#" class="inactive-color mr-4 mr-md-0 mb-4">See all <span
                                                            class="adonis-icon pl-1 icon-arrow icon-1x"><svg
                                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                    xlink:href="#icon-see-all-arrow-right"/></svg></span></a>
                                            </div>
                                        </div>
                                        <div class="adonis-carousel" data-dots="yes" data-auto-width="yes"
                                             data-responsive-width="0:100%|300:50%|560:33%|820:25%|980:20%|1240:18%">
                                            <div class="gutter-30">
                                                <div class="owl-carousel owl-theme-adonis">
                                                    <div class="item">
                                                        <div class="music-img-box">
                                                            <div class="img-box box-rounded-md">
                                                                <img class="retina"
                                                                     src="../assets/images/new-releases/new-releases-1.jpg"
                                                                     data-2x="..assets/images/new-releases/new-releases-1@2x.jpg"
                                                                     alt="">
                                                                <div class="hover-state">
                                                                    <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                                    class="play-icon"></i></span>
                                                                    </div>
                                                                    <div class="absolute-top-right pr-e-20 pt-e-20">
                                                                        <span class="pointer dropdown-menu-toggle"><span
                                                                                    class="adonis-icon icon-4x"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        version="1.1"><use
                                                                                            xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h6 class="title"><a href="#">Vestibulum nibh lorem
                                                                    ipsum</a></h6>
                                                            <p class="sub-title category"><a href="#">UNLTD Music
                                                                    Pop</a></p>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="music-img-box">
                                                            <div class="img-box box-rounded-md">
                                                                <img class="retina"
                                                                     src="../assets/images/new-releases/new-releases-2.jpg"
                                                                     data-2x="..assets/images/new-releases/new-releases-2@2x.jpg"
                                                                     alt="">
                                                                <div class="hover-state">
                                                                    <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                                    class="play-icon"></i></span>
                                                                    </div>
                                                                    <div class="absolute-top-right pr-e-20 pt-e-20">
                                                                        <span class="pointer dropdown-menu-toggle"><span
                                                                                    class="adonis-icon icon-4x"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        version="1.1"><use
                                                                                            xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h6 class="title"><a href="#">Vestibulum nibh lorem
                                                                    ipsum</a></h6>
                                                            <p class="sub-title category"><a href="#">UNLTD Music
                                                                    Pop</a></p>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="music-img-box">
                                                            <div class="img-box box-rounded-md">
                                                                <img class="retina"
                                                                     src="../assets/images/new-releases/new-releases-3.jpg"
                                                                     data-2x="..assets/images/new-releases/new-releases-3@2x.jpg"
                                                                     alt="">
                                                                <div class="hover-state">
                                                                    <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                                    class="play-icon"></i></span>
                                                                    </div>
                                                                    <div class="absolute-top-right pr-e-20 pt-e-20">
                                                                        <span class="pointer dropdown-menu-toggle"><span
                                                                                    class="adonis-icon icon-4x"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        version="1.1"><use
                                                                                            xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h6 class="title"><a href="#">Vestibulum nibh lorem
                                                                    ipsum</a></h6>
                                                            <p class="sub-title category"><a href="#">UNLTD Music
                                                                    Pop</a></p>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="music-img-box">
                                                            <div class="img-box box-rounded-md">
                                                                <img class="retina"
                                                                     src="../assets/images/new-releases/new-releases-4.jpg"
                                                                     data-2x="..assets/images/new-releases/new-releases-4@2x.jpg"
                                                                     alt="">
                                                                <div class="hover-state">
                                                                    <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                                    class="play-icon"></i></span>
                                                                    </div>
                                                                    <div class="absolute-top-right pr-e-20 pt-e-20">
                                                                        <span class="pointer dropdown-menu-toggle"><span
                                                                                    class="adonis-icon icon-4x"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        version="1.1"><use
                                                                                            xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h6 class="title"><a href="#">Vestibulum nibh lorem
                                                                    ipsum</a></h6>
                                                            <p class="sub-title category"><a href="#">UNLTD Music
                                                                    Pop</a></p>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="music-img-box">
                                                            <div class="img-box box-rounded-md">
                                                                <img class="retina"
                                                                     src="../assets/images/new-releases/new-releases-5.jpg"
                                                                     data-2x="..assets/images/new-releases/new-releases-5@2x.jpg"
                                                                     alt="">
                                                                <div class="hover-state">
                                                                    <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                                    class="play-icon"></i></span>
                                                                    </div>
                                                                    <div class="absolute-top-right pr-e-20 pt-e-20">
                                                                        <span class="pointer dropdown-menu-toggle"><span
                                                                                    class="adonis-icon icon-4x"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        version="1.1"><use
                                                                                            xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h6 class="title"><a href="#">Vestibulum nibh lorem
                                                                    ipsum</a></h6>
                                                            <p class="sub-title category"><a href="#">UNLTD Music
                                                                    Pop</a></p>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="music-img-box">
                                                            <div class="img-box box-rounded-md">
                                                                <img class="retina"
                                                                     src="../assets/images/new-releases/new-releases-6.jpg"
                                                                     data-2x="..assets/images/new-releases/new-releases-6@2x.jpg"
                                                                     alt="">
                                                                <div class="hover-state">
                                                                    <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                                    class="play-icon"></i></span>
                                                                    </div>
                                                                    <div class="absolute-top-right pr-e-20 pt-e-20">
                                                                        <span class="pointer dropdown-menu-toggle"><span
                                                                                    class="adonis-icon icon-4x"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        version="1.1"><use
                                                                                            xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h6 class="title"><a href="#">Vestibulum nibh lorem
                                                                    ipsum</a></h6>
                                                            <p class="sub-title category"><a href="#">UNLTD Music
                                                                    Pop</a></p>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="music-img-box">
                                                            <div class="img-box box-rounded-md">
                                                                <img class="retina"
                                                                     src="../assets/images/new-releases/new-releases-7.jpg"
                                                                     data-2x="..assets/images/new-releases/new-releases-7@2x.jpg"
                                                                     alt="">
                                                                <div class="hover-state">
                                                                    <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                                    class="play-icon"></i></span>
                                                                    </div>
                                                                    <div class="absolute-top-right pr-e-20 pt-e-20">
                                                                        <span class="pointer dropdown-menu-toggle"><span
                                                                                    class="adonis-icon icon-4x"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        version="1.1"><use
                                                                                            xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h6 class="title"><a href="#">Vestibulum nibh lorem
                                                                    ipsum</a></h6>
                                                            <p class="sub-title category"><a href="#">UNLTD Music
                                                                    Pop</a></p>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="music-img-box">
                                                            <div class="img-box box-rounded-md">
                                                                <img class="retina"
                                                                     src="../assets/images/new-releases/new-releases-8.jpg"
                                                                     data-2x="..assets/images/new-releases/new-releases-8@2x.jpg"
                                                                     alt="">
                                                                <div class="hover-state">
                                                                    <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                                    class="play-icon"></i></span>
                                                                    </div>
                                                                    <div class="absolute-top-right pr-e-20 pt-e-20">
                                                                        <span class="pointer dropdown-menu-toggle"><span
                                                                                    class="adonis-icon icon-4x"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        version="1.1"><use
                                                                                            xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h6 class="title"><a href="#">Vestibulum nibh lorem
                                                                    ipsum</a></h6>
                                                            <p class="sub-title category"><a href="#">UNLTD Music
                                                                    Pop</a></p>
                                                        </div>

                                                    </div>
                                                    <div class="item">
                                                        <div class="music-img-box">
                                                            <div class="img-box box-rounded-md">
                                                                <img class="retina"
                                                                     src="../assets/images/new-releases/new-releases-9.jpg"
                                                                     data-2x="..assets/images/new-releases/new-releases-9@2x.jpg"
                                                                     alt="">
                                                                <div class="hover-state">
                                                                    <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                                    class="play-icon"></i></span>
                                                                    </div>
                                                                    <div class="absolute-top-right pr-e-20 pt-e-20">
                                                                        <span class="pointer dropdown-menu-toggle"><span
                                                                                    class="adonis-icon icon-4x"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        version="1.1"><use
                                                                                            xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h6 class="title"><a href="#">Vestibulum nibh lorem
                                                                    ipsum</a></h6>
                                                            <p class="sub-title category"><a href="#">UNLTD Music
                                                                    Pop</a></p>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="music-img-box">
                                                            <div class="img-box box-rounded-md">
                                                                <img class="retina"
                                                                     src="../assets/images/new-releases/new-releases-10.jpg"
                                                                     data-2x="..assets/images/new-releases/new-releases-10@2x.jpg"
                                                                     alt="">
                                                                <div class="hover-state">
                                                                    <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                                    class="play-icon"></i></span>
                                                                    </div>
                                                                    <div class="absolute-top-right pr-e-20 pt-e-20">
                                                                        <span class="pointer dropdown-menu-toggle"><span
                                                                                    class="adonis-icon icon-4x"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        version="1.1"><use
                                                                                            xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h6 class="title"><a href="#">Vestibulum nibh lorem
                                                                    ipsum</a></h6>
                                                            <p class="sub-title category"><a href="#">UNLTD Music
                                                                    Pop</a></p>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="music-img-box">
                                                            <div class="img-box box-rounded-md">
                                                                <img class="retina"
                                                                     src="../assets/images/new-releases/new-releases-11.jpg"
                                                                     data-2x="..assets/images/new-releases/new-releases-11@2x.jpg"
                                                                     alt="">
                                                                <div class="hover-state">
                                                                    <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                                    class="play-icon"></i></span>
                                                                    </div>
                                                                    <div class="absolute-top-right pr-e-20 pt-e-20">
                                                                        <span class="pointer dropdown-menu-toggle"><span
                                                                                    class="adonis-icon icon-4x"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        version="1.1"><use
                                                                                            xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h6 class="title"><a href="#">Vestibulum nibh lorem
                                                                    ipsum</a></h6>
                                                            <p class="sub-title category"><a href="#">UNLTD Music
                                                                    Pop</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-e-20 pt-e-lg-40"></div>
                                    </section>
                                    <!--                                    <section>-->
                                    <!--                                        <div class="d-flex flex-row">-->
                                    <!--                                            <div class="title-box">-->
                                    <!--                                                <h6 class="sub-title inactive-color">New</h6>-->
                                    <!--                                                <h2 class="title">Videos</h2>-->
                                    <!--                                            </div>-->
                                    <!--                                            <div class="button-right ml-auto ml-auto d-flex align-items-end mb-4">-->
                                    <!--                                                <a href="#" class="inactive-color mr-4 mr-md-0">See all <span class="adonis-icon pl-1 icon-arrow icon-1x"><svg xmlns="http://www.w3.org/2000/svg" version="1.1"><use xlink:href="#icon-see-all-arrow-right" /></svg></span></a>-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="adonis-carousel" data-auto-width="yes" data-dots="yes" data-responsive-width="0:80%|400:350px">-->
                                    <!--                                            <div class="gutter-30">-->
                                    <!--                                                <div class="owl-carousel owl-theme-adonis">-->
                                    <!--                                                    <div class="item">-->
                                    <!--                                                        <div class="music-img-box">-->
                                    <!--                                                            <div class="img-box box-rounded-sm">-->
                                    <!--                                                                <img class="retina" src="../../assets/images/videos/videos-6.jpg" data-2x="..assets/images/videos/videos-6@2x.jpg" alt="">-->
                                    <!--                                                                <div class="hover-state">-->
                                    <!--                                                                    <div class="absolute-bottom-left pl-e-20 pb-e-20">-->
                                    <!--                                                                        <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>-->
                                    <!--                                                                    </div>-->
                                    <!--                                                                    <div class="absolute-top-right pr-e-20 pt-e-20">-->
                                    <!--                                                                        <span class="pointer dropdown-menu-toggle"><span class="adonis-icon icon-4x"><svg xmlns="http://www.w3.org/2000/svg" version="1.1"><use xlink:href="#icon-horizontal-dots"></use></svg></span></span>-->
                                    <!--                                                                    </div>-->
                                    <!--                                                                </div>-->
                                    <!--                                                            </div>-->
                                    <!--                                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>-->
                                    <!--                                                            <p class="sub-title category"><a href="#">UNLTD Music Pop</a></p>-->
                                    <!--                                                        </div>-->
                                    <!--                                                    </div>-->
                                    <!--                                                    <div class="item">-->
                                    <!--                                                        <div class="music-img-box">-->
                                    <!--                                                            <div class="img-box box-rounded-sm">-->
                                    <!--                                                                <img class="retina" src="../../assets/images/videos/videos-2.jpg" data-2x="..assets/images/videos/videos-2@2x.jpg" alt="">-->
                                    <!--                                                                <div class="hover-state">-->
                                    <!--                                                                    <div class="absolute-bottom-left pl-e-20 pb-e-20">-->
                                    <!--                                                                        <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>-->
                                    <!--                                                                    </div>-->
                                    <!--                                                                    <div class="absolute-top-right pr-e-20 pt-e-20">-->
                                    <!--                                                                        <span class="pointer dropdown-menu-toggle"><span class="adonis-icon icon-4x"><svg xmlns="http://www.w3.org/2000/svg" version="1.1"><use xlink:href="#icon-horizontal-dots"></use></svg></span></span>-->
                                    <!--                                                                    </div>-->
                                    <!--                                                                </div>-->
                                    <!--                                                            </div>-->
                                    <!--                                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>-->
                                    <!--                                                            <p class="sub-title category"><a href="#">UNLTD Music Pop</a></p>-->
                                    <!--                                                        </div>-->
                                    <!--                                                    </div>-->
                                    <!--                                                    <div class="item">-->
                                    <!--                                                        <div class="music-img-box">-->
                                    <!--                                                            <div class="img-box box-rounded-sm">-->
                                    <!--                                                                <img class="retina" src="../../assets/images/videos/videos-3.jpg" data-2x="..assets/images/videos/videos-3@2x.jpg" alt="">-->
                                    <!--                                                                <div class="hover-state">-->
                                    <!--                                                                    <div class="absolute-bottom-left pl-e-20 pb-e-20">-->
                                    <!--                                                                        <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>-->
                                    <!--                                                                    </div>-->
                                    <!--                                                                    <div class="absolute-top-right pr-e-20 pt-e-20">-->
                                    <!--                                                                        <span class="pointer dropdown-menu-toggle"><span class="adonis-icon icon-4x"><svg xmlns="http://www.w3.org/2000/svg" version="1.1"><use xlink:href="#icon-horizontal-dots"></use></svg></span></span>-->
                                    <!--                                                                    </div>-->
                                    <!--                                                                </div>-->
                                    <!--                                                            </div>-->
                                    <!--                                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>-->
                                    <!--                                                            <p class="sub-title category"><a href="#">UNLTD Music Pop</a></p>-->
                                    <!--                                                        </div>-->
                                    <!--                                                    </div>-->
                                    <!--                                                    <div class="item">-->
                                    <!--                                                        <div class="music-img-box">-->
                                    <!--                                                            <div class="img-box box-rounded-sm">-->
                                    <!--                                                                <img class="retina" src="../../assets/images/videos/videos-6.jpg" data-2x="..assets/images/videos/videos-6@2x.jpg" alt="">-->
                                    <!--                                                                <div class="hover-state">-->
                                    <!--                                                                    <div class="absolute-bottom-left pl-e-20 pb-e-20">-->
                                    <!--                                                                        <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>-->
                                    <!--                                                                    </div>-->
                                    <!--                                                                    <div class="absolute-top-right pr-e-20 pt-e-20">-->
                                    <!--                                                                        <span class="pointer dropdown-menu-toggle"><span class="adonis-icon icon-4x"><svg xmlns="http://www.w3.org/2000/svg" version="1.1"><use xlink:href="#icon-horizontal-dots"></use></svg></span></span>-->
                                    <!--                                                                    </div>-->
                                    <!--                                                                </div>-->
                                    <!--                                                            </div>-->
                                    <!--                                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>-->
                                    <!--                                                            <p class="sub-title category"><a href="#">UNLTD Music Pop</a></p>-->
                                    <!--                                                        </div>-->
                                    <!--                                                    </div>-->
                                    <!--                                                    <div class="item">-->
                                    <!--                                                        <div class="music-img-box">-->
                                    <!--                                                            <div class="img-box box-rounded-sm">-->
                                    <!--                                                                <img class="retina" src="../../assets/images/videos/videos-5.jpg" data-2x="..assets/images/videos/videos-5@2x.jpg" alt="">-->
                                    <!--                                                                <div class="hover-state">-->
                                    <!--                                                                    <div class="absolute-bottom-left pl-e-20 pb-e-20">-->
                                    <!--                                                                        <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>-->
                                    <!--                                                                    </div>-->
                                    <!--                                                                    <div class="absolute-top-right pr-e-20 pt-e-20">-->
                                    <!--                                                                        <span class="pointer dropdown-menu-toggle"><span class="adonis-icon icon-4x"><svg xmlns="http://www.w3.org/2000/svg" version="1.1"><use xlink:href="#icon-horizontal-dots"></use></svg></span></span>-->
                                    <!--                                                                    </div>-->
                                    <!--                                                                </div>-->
                                    <!--                                                            </div>-->
                                    <!--                                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>-->
                                    <!--                                                            <p class="sub-title category"><a href="#">UNLTD Music Pop</a></p>-->
                                    <!--                                                        </div>-->
                                    <!--                                                    </div>-->
                                    <!--                                                    <div class="item">-->
                                    <!--                                                        <div class="music-img-box">-->
                                    <!--                                                            <div class="img-box box-rounded-sm">-->
                                    <!--                                                                <img class="retina" src="../../assets/images/videos/videos-6.jpg" data-2x="..assets/images/videos/videos-6@2x.jpg" alt="">-->
                                    <!--                                                                <div class="hover-state">-->
                                    <!--                                                                    <div class="absolute-bottom-left pl-e-20 pb-e-20">-->
                                    <!--                                                                        <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>-->
                                    <!--                                                                    </div>-->
                                    <!--                                                                    <div class="absolute-top-right pr-e-20 pt-e-20">-->
                                    <!--                                                                        <span class="pointer dropdown-menu-toggle"><span class="adonis-icon icon-4x"><svg xmlns="http://www.w3.org/2000/svg" version="1.1"><use xlink:href="#icon-horizontal-dots"></use></svg></span></span>-->
                                    <!--                                                                    </div>-->
                                    <!--                                                                </div>-->
                                    <!--                                                            </div>-->
                                    <!--                                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>-->
                                    <!--                                                            <p class="sub-title category"><a href="#">UNLTD Music Pop</a></p>-->
                                    <!--                                                        </div>-->
                                    <!--                                                    </div>-->
                                    <!--                                                </div>-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->
                                    <!--                                    </section>-->
                                </div>
                                <div id="browse-news" class="inactive-hide"></div>
                                <div id="browse-new-music" class="inactive-hide"></div>
                                <div id="browse-new-playlist" class="inactive-hide"></div>
                                <div id="browse-charts"
                                     class="inactive-hide fluid-reverse-r fluid-reverse-md-none"></div>
                                <div id="browse-genres" class="inactive-hide"></div>
                                <div id="browse-videos" class="inactive-hide"></div>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
            <div class="tab-preloader preloader">
                <div class="preloader-overlay"></div>
            </div>
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
</body>
</html>

