<?php
include_once "../php/include.php";
?>

<div class="adonis-carousel adonis-animate" data-animation="slideRight" data-animation-item=".item"
     data-mousewheel="yes" data-slideby="1" data-auto-width="yes" data-loop="no" data-dots="yes"
     data-responsive-width="400:220px">
    <div class="gutter-30">
        <div class="owl-carousel owl-theme-adonis">
            <?php

            $sql = "SELECT * FROM Artist ORDER BY artist_name";
            $result = $conn->query($sql);

            if ($result->num_rows != 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $artistArt = $row['artist_filename'];
                    $artistId = $row['artist_id'];
                    $artistName = $row['artist_name'];

                    echo " <div class='item'>
                <div class=''>
                    <div class='music-img-box'>
                        <div class='img-box rounded-circle'>
                            <img height='190' width='190' class='retina'  src='../uploads/" . $artistArt . "'  alt=''>
                        </div>
                        <div class='desc top-sm text-center'>
                           <form class='form-4' data-name='Email Form 4' id='single-artist-form-lib' name='email-form-4'
                                                                  action='single-artist.php' method='post' enctype='multipart/form-data'>
                            <input type='hidden' name='artistId' value='" . $artistId . "' />
     
                            <h5 class='title fs-3'><button class=\"btn btn-link\" type='submit''>" . $artistName . "</button></h5>
                            <h6 class='f-w-400'><a href='#'>FOLLOWING</a></h6>
                            </form>
                            <!--<p class='sub-title'><a href='#'>3 Songs</a></p>   SELECT Artist.artist_name, Artist.artist_id, Artist.artist_name, COUNT(Data.artist_id) FROM Artist INNER JOIN Data ON Artist.artist_id=Data.artist_id ORDER BY Artist.artist_name-->

                        </div>
                    </div>
                </div>
            </div>";
                }
            }
            ?>
        </div>
    </div>
</div>
<div class="pt-e-20 pt-e-lg-40"></div>

