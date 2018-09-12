<?php
/**
 * Created by IntelliJ IDEA.
 * User: BrendanGiberson
 * Date: 9/9/18
 * Time: 10:58 PM
 */

include_once "include.php";

//if (!isset($_SESSION['glbl_user']) || empty($_SESSION['glbl_user'])) {
//    echo '<script language="javascript">';
//    echo 'alert("User not logged in!")';
//    exit();
//} else {


$title = $_REQUEST['title'];
$artist = $_REQUEST['artist'];
$album = $_REQUEST['album'];
$taglist = $_REQUEST['taglist'];
// $u_id = $_SESSION['glbl_user']->user_id;

$dirname = "/home/rvmrunlt/public_html/uploads/";
chmod($dirname, 0755);

$filename = basename($_FILES["audioname"]["name"]); //this is the song
$target_file = $dirname . $filename;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

if (file_exists($target_file)) {
    dieWithError(10);
    exit();
}

// Check file size
if ($_FILES["flname"]["size"] > 50000000) {
    dieWithError(11);
    exit();
}


if (move_uploaded_file($_FILES["audioname"]["tmp_name"], $target_file)) {
    chmod($target_file, 0644);

    //check if artist exists if not create
    //$artist_id = mysqli_query($conn,"SELECT artist_id FROM Artist WHERE artist_name='".$artist."'");
    $sql = "SELECT artist_id FROM Artist WHERE artist_name= '$artist'";
    $result = $conn->query($sql);

    if ($rowcount = mysqli_num_rows($result) == 0) {
        ?>
        <script type="text/javascript">
            alert("Creating new Artist");
        </script>
        <?php

        $sql = "INSERT INTO Artist (artist_name, artist_filename) VALUES ('$artist','test')";
        if ($conn->query($sql) === TRUE) {
            $artist_id = mysqli_insert_id($conn);
        } else {
            dieWithError(17);
        }
    } else {
        $artist_id = mysqli_fetch_object($result)->artist_id;
    }                           //todo update artist art

    //check if album exists if not create it
    //$album_id = mysqli_query($conn,"SELECT album_id FROM Album WHERE album_name='".$album."'");
    $sql = "SELECT album_id FROM Album WHERE album_name= '$album'";
    $result = $conn->query($sql);

    if ($rowcount = mysqli_num_rows($result) == 0) {
        ?>
        <script type="text/javascript">
            alert("Creating new Album");
        </script>
        <?php

        $sql = "INSERT INTO Album (album_name, album_filename, artist_id) VALUES ('$album','test','$artist_id')";
        if ($conn->query($sql) === TRUE) {
            $album_id = mysqli_insert_id($conn);
        } else {
            dieWithError(18);
        }
    } else {
        $album_id = mysqli_fetch_object($result)->album_id;
    }

    /* Insert data */
    $sql = "INSERT INTO Data (filename,title, user_id, artist_id, album_id) VALUES ('$filename','$title','3','$artist_id','$album_id')";


    if ($conn->query($sql) === TRUE) {
        $lastdtID = mysqli_insert_id($conn);
        echo 'Data id created: ' . $lastdtID . '<br>';

        //Link each tag thats in the taglist (will be separated by commas)
        //todo make sure the front end validates that each tag in taglist is different or this will become a clusterfuck
        $tag_array = explode(',', $taglist);
        foreach ($tag_array as $tag) {
            $sql = "SELECT tag_id FROM Tag WHERE keyword = '$tag'";
            $result = $conn->query($sql);
            echo $tag . '<br>';
            $tgint = null;
            if ($result = mysqli_query($conn, $sql)) {

                //If tag does not exist insert it
                if ($result->num_rows == 0) {
                    $sql = "INSERT INTO Tag (keyword) VALUES ('$tag')";
                    if ($result = mysqli_query($conn, $sql)) {
                        $lastID = mysqli_insert_id($conn);
                        echo 'New tag created: ' . $lastID . '<br>';
                        $tgint = $lastID;
                    }
                } //the tag already exists
                else {
                    $tgint = mysqli_fetch_object($result)->tag_id;
                }
            } else {
                dieWithError(17);

            }

            //insert a link between the tag and the data
            $sql = "INSERT INTO Data_tag (data_id, tag_id) VALUES ('$lastdtID','$tgint')";
            if ($result = mysqli_query($conn, $sql)) {
                $lastID = mysqli_insert_id($conn);
            } else {
                dieWithError(18);

            }
        }
    echo '<script>
                alert("Upload successful!");
                window.location.href="../html/library.php";
                </script>';

    } else {
        echo 'Error: ', $conn->error;

//            dieWithError(12);

    }
} else {
    dieWithError(19);

}
?>