<script type="text/javascript">
    alert("Creating new Artist");
</script>
<?php
/**
 * Created by IntelliJ IDEA.
 * User: BrendanGiberson
 * Date: 9/16/18
 * Time: 8:46 PM
 */

include_once "include.php";

$artistName = $_REQUEST['artistName'];

$dirname = "/home/rvmrunlt/public_html/uploads/";
chmod($dirname, 0755);

$filename = basename($_FILES["newData"]["name"]); //this is the song
$target_file = $dirname . $filename;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

if (move_uploaded_file($_FILES["newData"]["tmp_name"], $target_file)) {
    chmod($target_file, 0644);

    $sql = "INSERT INTO Artist (artist_name, artist_filename) VALUES ('$artistName','$filename')";
    if ($conn->query($sql) === TRUE) {
        $artist_id = mysqli_insert_id($conn);
        echo '<script>
                alert("Upload successful!");
                window.location.href="../html/upload-page.php";
                </script>';
    } else {
        dieWithError(17);
    }
}