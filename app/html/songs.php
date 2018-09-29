<?php
include_once "../php/include.php";
?>
<div class="row auto-fit-columns" data-item-width="330" data-item-max-width="630">
    <?php
    $sql = "SELECT Data.* , Album.album_filename, Album.album_name , Artist.artist_name FROM Data INNER JOIN Album ON Data.album_id=Album.album_id INNER JOIN Artist ON Data.artist_id=Artist.artist_id ORDER BY Data.title";
    $result = $conn->query($sql);

    if ($result->num_rows != 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $albumArt = $row["album_filename"];
            $albumId = $row["album_id"];
            $albumName = $row["album_name"];
            $artistId = $row["artist_id"];
            $songName = $row["title"];
            $artistName = $row["artist_name"];

            echo "<div class='col-auto'>
        <div class='img-box-horizontal music-img-box h-g-bg h-d-shadow'>
            <div class='img-box img-box-sm box-rounded-sm'>
                <img src='../uploads/" . $albumArt . "' alt=''>
            </div>
            <div class='des'>
                           <form data-name='Email Form 4' id='single-album-form-lib' name='email-form-4'
                                                                  action='../html/single-album.php' method='post' enctype='multipart/form-data'>
                                                               <input type='hidden' name='albumId' data-name='albumId' id='albumId' value='" . $albumId . "' />
                                                               <input type='hidden' name='albumArt' data-name='albumArt' id='albumArt'value='" . $albumArt . "' />
                                                               <input type='hidden' name='albumName' data-name='albumName' id='albumName'value='" . $albumName . "' /> 
                                                               <input type='hidden' name='artistName' data-name='artistName' id='artistName'value='" . $artistName . "' />
                                                               <input type='hidden' name='artistId' data-name='artistId' id='artistId'value='" . $artistId . "' />
   

                                                            <h6 class='title'><button class=\"btn btn-link\" data-wait=\"Please wait...\" type='submit''>" . $songName . "</button></h6>
                                                            <p class='sub-title '>" . $artistName . "</p>
                                                            </form>
            </div>
            <div class='hover-state d-flex justify-content-between align-items-center'>
                <span class='pointer play-btn-dark box-rounded-sm'><i class='play-icon'></i></span>
                <div class='d-flex align-items-center'>
                    <span class='adonis-icon text-light pointer mr-2 icon-2x'><svg xmlns='http://www.w3.org/2000/svg'
                                                                                   version='1.1'><use
                            xlink:href='#icon-heart-blank'></use></svg></span>
                    <span class='pointer dropdown-menu-toggle'><span class='icon-dot-nav-horizontal text-light'></span></span>
                </div>
            </div>
        </div>
    </div>";
        }
    }
    ?>
</div>
<div class="pt-e-20 pt-e-lg-40"></div>

