<?php
/**
 * Created by IntelliJ IDEA.
 * User: BrendanGiberson
 * Date: 10/4/18
 * Time: 10:11 PM
 */
include_once "include.php";

$sql = "SELECT Data.*, Artist.artist_name, Artist.artist_filename, Album.album_name, Album.album_filename 
FROM Data INNER JOIN Artist ON Data.artist_id=Artist.artist_id INNER JOIN Album ON Data.album_id=Album.album_id";

$result = $conn->query($sql);

if ($result->num_rows != 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo json_encode($row);
    }
}
