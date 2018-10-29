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
//if ($result->num_rows != 0) {
//    $fp = fopen('data.json', 'w+');
//    while ($row = mysqli_fetch_assoc($result)) {
//        fwrite($fp, json_encode($row));
//    }
//    fclose($fp);
//}

$response = array();
$posts = array();
while ($row = mysqli_fetch_array($result)) {
    $title = $row['title'];
    $data_id = $row['data_id'];
    $filename = $row['filename'];
    $user_id = $row['user_id'];
    $artist_id = $row['artist_id'];
    $album_id = $row['album_id'];
    $artist_name = $row['artist_name'];
    $artist_filename = $row['artist_filename'];
    $album_name = $row['album_name'];
    $album_filename = $row['album_filename'];


    $posts[] = array('title' => $title, 'data_id' => $data_id, 'filename' => $filename, 'user_id' => $user_id,
        'artist_id' => $artist_id, 'album_id' => $album_id, 'artist_name' => $artist_name, 'artist_filename' => $artist_filename,
        'album_name' => $album_name, 'album_filename' => $album_filename);
}

$response['posts'] = $posts;

$fp = fopen('data.json', 'w+');
fwrite($fp, json_encode($response));
fclose($fp);

echo '<script>
                window.location.href="../html/index.php";
                </script>';

