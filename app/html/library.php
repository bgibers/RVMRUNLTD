<?php
include_once "../php/include.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Library">
    <meta name="author" content="Brendan Giberson">

    <title>UNLTD | Library</title>
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
                        <div class="mb-e-30 mb-e-lg-50">
                            <div class="mt-auto mb-3">
                                <div class="tabs tab-style-1 scroll-x ps">
                                    <ul class="nav nav-border js-parent adonis-tabbed-nav moving-border">
                                        <li class="nav-item active">
                                            <a class="nav-link adonis-ajax-load loaded active m-item m-item-block"
                                               href="#" data-target=".library-overview">
                                                <span class="adonis-icon pr-3 icon-3x"><svg version="1.1"
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 16 15"><defs></defs><g
                                                                data-name="Layer 2"><g id="overviews_icon"
                                                                                       data-name="overviews icon"
                                                                                       class="cls-1"><g
                                                                        id="overviews_icon-2"
                                                                        data-name="overviews icon"><path class="cls-2"
                                                                                                         d="M16,1.4A1.43,1.43,0,0,0,14.55,0l-8,.7a1.43,1.43,0,0,0-1.45,1.4v7h0v2.78h0a2,2,0,0,1,0,.38,2.14,2.14,0,0,1-2.19,2.09,2.1,2.1,0,1,1,0-4.19,2.25,2.25,0,0,1,.72.13v-.13h0a.34.34,0,0,0,0-.69h0a.33.33,0,0,0-.18.06,2.75,2.75,0,0,0-.54-.06A2.85,2.85,0,0,0,0,12.22,2.85,2.85,0,0,0,2.91,15a2.85,2.85,0,0,0,2.91-2.78s0,0,0-.06h0V2.09a.71.71,0,0,1,.73-.7l8-.7a.71.71,0,0,1,.73.7v7h0v2.78h0a2,2,0,0,1,0,.36,2.19,2.19,0,1,1-2.19-2.08,2.27,2.27,0,0,1,.72.12V9.44h0a.36.36,0,0,0,.36-.36h0a.36.36,0,0,0-.36-.36h0a.35.35,0,0,0-.18.06,2.72,2.72,0,0,0-.52-.06A2.8,2.8,0,1,0,16,11.52h0Z"></path></g></g></g></svg></span>
                                                <span>Albums</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link adonis-ajax-load m-item m-item-block" href="#"
                                               data-target="#library-songs" data-content="songs.html">
                                                <span class="adonis-icon pr-3 icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                            viewBox="0 0 12.29 16.21"><defs><style>.cls-1 {
                                                                    isolation: isolate
                                                                }

                                                                .cls-2 {
                                                                    fill-rule: evenodd
                                                                }</style></defs><g data-name="Layer 2"><g
                                                                    id="new_music_icon" data-name="new music icon"
                                                                    class="cls-1"><g id="new_music_icon-2"
                                                                                     data-name="new music icon"><path
                                                                            class="cls-2"
                                                                            d="M6.37,16.21l.12,0H6.37ZM6.58.08h0L6.37,0V0h0a.4.4,0,0,0-.4.4V10.5a3.4,3.4,0,1,0,.81,2.91.39.39,0,0,0,.07-.21V1.12a7.6,7.6,0,0,1,3.26,2.74.39.39,0,0,0-.17,0,.4.4,0,1,0,.55.15l0,0,.63-.31A8.51,8.51,0,0,0,6.58.08ZM3.37,15.36a2.56,2.56,0,1,1,2.56-2.56A2.56,2.56,0,0,1,3.37,15.36ZM11.31,4.14V7c0,.23.08.46.09.7h.89A8.41,8.41,0,0,0,11.31,4.14Z"></path></g></g></g></svg></span>
                                                <span>Songs</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link adonis-ajax-load m-item m-item-block" href="#"
                                               data-target="#library-artists" data-content="artists.php">
                                                <span class="adonis-icon pr-3 icon-3x"><svg version="1.1"
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 469.981 469.981"
                                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                            enable-background="new 0 0 469.981 469.981"> <g> <circle
                                                                    cx="425.789" cy="141.268" r="7.5"/> <circle
                                                                    cx="425.789" cy="98.841" r="7.5"/> <path
                                                                    d="m446.337,193.837c15.297-17.693 23.644-40.035 23.644-63.66 0-26.044-10.142-50.528-28.558-68.943-18.415-18.415-42.899-28.557-68.942-28.557-23.621,0-45.959,8.343-63.649,23.634l-2.008-1.978c-2.951-2.907-7.7-2.872-10.606,0.079-2.907,2.95-2.872,7.699 0.079,10.606l1.961,1.932c-15.061,17.623-23.276,39.792-23.276,63.226 0,3.017 0.142,6.011 0.411,8.979l-208.129,232.616c-2.654,2.967-2.529,7.489 0.286,10.305l21.213,21.213-4.265,4.265c-15.878,15.88-41.716,15.879-57.596,0.001-15.879-15.88-15.879-41.718 0-57.597l140.865-140.865c21.728-21.729 21.728-57.082 0-78.811-21.728-21.727-57.082-21.727-78.809,0l-86.781,86.781 10.606,10.607 86.781-86.781c15.88-15.878 41.718-15.879 57.596,0 15.879,15.879 15.879,41.717 0,57.596l-140.864,140.866c-21.728,21.728-21.728,57.081 7.10543e-15,78.81 10.864,10.863 25.134,16.295 39.404,16.295s28.541-5.432 39.405-16.296l4.264-4.265 21.214,21.213c1.46,1.46 3.38,2.196 5.304,2.196 1.785,0 3.573-0.634 5-1.911l199.493-178.493c0.029-0.026 33.12-29.634 33.12-29.634 2.969,0.269 5.964,0.411 8.981,0.411 23.429,0 45.594-8.212 63.216-23.268l1.969,1.979c1.466,1.473 3.39,2.209 5.315,2.209 1.914,0 3.828-0.728 5.291-2.185 2.936-2.922 2.947-7.671 0.024-10.606l-1.959-1.969zm-320.164,225.647l-21.493-21.492c-0.014-0.014-21.506-21.506-21.506-21.506l165.965-185.49c6.617,13.443 15.364,25.656 26.115,36.409 10.753,10.751 22.965,19.498 36.409,26.115l-185.49,165.964zm197.667-176.86c-14.177-6.118-26.939-14.786-37.98-25.826-11.041-11.042-19.709-23.804-25.827-37.98l18.878-21.099c4.534,15.484 12.9,29.674 24.627,41.402 11.727,11.727 25.916,20.092 41.4,24.626l-21.098,18.877zm48.641-29.947c-22.037-0.001-42.754-8.582-58.336-24.164s-24.164-36.3-24.164-58.336c0-19.461 6.702-37.887 18.999-52.662l15.811,15.578c1.461,1.439 3.362,2.157 5.263,2.157 1.938,0 3.875-0.747 5.343-2.236 2.907-2.95 2.872-7.699-0.079-10.606l-15.748-15.517c14.817-12.432 33.339-19.214 52.911-19.214 22.036,0 42.754,8.581 58.336,24.164 15.583,15.581 24.164,36.299 24.164,58.336 0,19.603-6.806,38.152-19.275,52.981l-79.123-79.485c-2.923-2.938-7.671-2.948-10.606-0.024-2.936,2.922-2.947,7.671-0.024,10.606l79.121,79.483c-14.764,12.259-33.163,18.939-52.593,18.939z"/> </g></svg></span>
                                                <span>Artists</span>
                                            </a>
                                        </li>
                                        <!--                                        <li class="nav-item">-->
                                        <!--                                            <a class="nav-link adonis-ajax-load m-item m-item-block" href="#"  data-target="#browse-new-playlist" data-content="playlist.html">-->
                                        <!--                                                <span class="adonis-icon pr-3 icon-3x"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 17.98 17.17"><defs><style>.cls-1{isolation:isolate}.cls-2{fill-rule:evenodd}</style></defs><g data-name="Layer 2"><g id="playlist_icon" data-name="playlist icon" class="cls-1"><g id="playlist_icon-2" data-name="playlist icon"><path class="cls-2" d="M.42.93A.44.44,0,0,0,0,1.38a.44.44,0,0,0,.42.45.44.44,0,0,0,.42-.45A.44.44,0,0,0,.42.93Zm0,5.41a.45.45,0,0,0,0,.91.45.45,0,0,0,0-.91Zm1.31.91H9.39a.45.45,0,0,0,.45-.45h0a.45.45,0,0,0-.45-.45H1.73a.45.45,0,0,0-.45.45h0A.45.45,0,0,0,1.73,7.24Zm0-5.41H9.39a.45.45,0,0,0,.45-.45h0A.45.45,0,0,0,9.39.93H1.73a.45.45,0,0,0-.45.45h0A.45.45,0,0,0,1.73,1.84ZM18,8.13h0Zm-.9-3.54,0,0h0A8.74,8.74,0,0,0,12.25.1.42.42,0,0,0,12.09,0L12,0V0h0a.43.43,0,0,0-.43.43v10.7A3.35,3.35,0,0,0,9,9.93a3.53,3.53,0,0,0-3.44,3.61A3.53,3.53,0,0,0,9,17.15a3.48,3.48,0,0,0,3.37-2.93.42.42,0,0,0,.06-.21V1.16A7.89,7.89,0,0,1,16.31,5h0a.44.44,0,0,0,0,.08.42.42,0,0,0,.59.16A.46.46,0,0,0,17.09,4.6ZM9,16.24a2.64,2.64,0,0,1-2.56-2.7A2.64,2.64,0,0,1,9,10.84a2.64,2.64,0,0,1,2.56,2.7A2.64,2.64,0,0,1,9,16.24Zm-4.73-4.5H1.73a.45.45,0,0,0-.45.45h0a.45.45,0,0,0,.45.45H4.27a.45.45,0,0,0,.45-.45h0A.45.45,0,0,0,4.27,11.74ZM12,17.17l.06,0H12ZM.42,11.74a.45.45,0,0,0,0,.91.45.45,0,0,0,0-.91Z"></path></g></g></g></svg></span>-->
                                        <!--                                                <span>Playlist</span>-->
                                        <!--                                            </a>-->
                                        <!--                                        </li>-->
                                    </ul>
                                    <hr class="border-hr">
                                </div>
                            </div>
                        </div>
                        <div class="tabs-content">
                            <div class="library-overview inactive-hide active fluid-reverse-r fluid-reverse-md-none overflow-h">
                                <section>
                                    <main id="main" class="overflow-h">
                                        <div class="title-box">
                                            <h4 class="title h3">Albums</h4>
                                        </div>
                                        <div class="row auto-fit-columns adonis-animate" data-animation="slideRight"
                                             data-animation-item=".col-auto" data-item-width="230"
                                             data-item-max-width="260">
                                            <?php
                                            $sql = "SELECT Album.album_filename, Album.album_id, Album.album_name, Album.artist_id, Artist.artist_name FROM Album INNER JOIN Artist ON Album.artist_id=Artist.artist_id ORDER BY album_name";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows != 0) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    $albumArt = $row['album_filename'];
                                                    $albumId = $row['album_id'];
                                                    $albumName = $row['album_name'];
                                                    $artistId = $row['artist_id'];
                                                    $artistName = $row['artist_name'];
                                                    echo "<div class='col-auto'>
                                                <div class='music-img-box mb-e-30 mb-e-lg-40'>
                                                    <div class='img-box box-rounded-sm'>
                                                        <img class='retina'
                                                              src='../uploads/" . $albumArt . "'
                                                             alt=''>
                                                        <div class='hover-state'>
                                                            <div class='absolute-bottom-left pl-e-20 pb-e-20'>
                                                    <span class='pointer play-btn-dark round-btn'><i
                                                                class='play-icon'></i></span>
                                                            </div>
                                                            <div class='absolute-top-right pr-e-20 pt-e-20'>
                                                    <span class='pointer dropdown-menu-toggle'><span
                                                                class='adonis-icon icon-4x'><svg
                                                                    xmlns='http://www.w3.org/2000/svg' version='1.1'><use
                                                                        xlink:href='#icon-horizontal-dots'></use></svg></span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                               <form class='form-4' data-name='Email Form 4' id='single-album-form-lib' name='email-form-4'
                                                                  action='../html/single-album.php' method='post' enctype='multipart/form-data'>
                                                               <input type='hidden' name='albumID' value='" . $albumId . "' />
     
                                                            <h6 class='title'><button class=\"btn btn-link\" type='submit''>" . $albumName . "</button></h6>
                                                            <p class='sub-title category'>" . $artistName . "</p>
                                                            </form>
                                                </div>
                                            </div>  ";
                                                }
                                            }
                                            ?>
                                        </div>
                                        <!--                                        <div class="text-center">-->
                                        <!--                                            <button class="btn btn-primary align-content-center mb-5">Load More</button>-->
                                        <!--                                        </div>-->
                                    </main>
                                </section>
                            </div>
                            <div id="library-recently-played" class="inactive-hide overflow-h"></div>
                            <div id="library-songs" class="inactive-hide overflow-h"></div>
                            <div id="browse-new-playlist" class="inactive-hide overflow-h"></div>
                            <div id="library-artists" class="inactive-hide overflow-h"></div>
                            <div id="library-videos" class="inactive-hide overflow-h"></div>
                            <div id="library-purchased" class="inactive-hide overflow-h"></div>
                            <div class="tab-preloader preloader">
                                <div class="preloader-overlay"></div>
                            </div>
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
</body>
</html>

