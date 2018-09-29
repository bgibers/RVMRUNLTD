<?php
include_once "../php/include.php";
?>

<div id="albumModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content" style="background: #23272b">
            <div class="modal-header">
                <h4 class="modal-title" style="color:#7df442">New album</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="form-wrapper-2 w-form">
                <form class="form-4" data-name="Email Form 4" id="email-form-4" name="email-form-4"
                      action="../php/create_new_album.php" method="post" enctype="multipart/form-data">
                    <label for="albumName" id="newDataLbl">album</label>
                    <input class="text-field-8 w-input" data-name="albumName" id="albumName" maxlength="256"
                           name="albumName" placeholder="Enter the songs album" type="text">

                    <?php
                    $sql = "SELECT * FROM Artist ORDER BY artist_name";
                    $result = $conn->query($sql);

                    echo "<select data-name='artist' id='artist' name='artist'>";
                    echo "    <option disabled selected value> -- select an artist -- </option>";
                    if ($result->num_rows != 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='" . $row['artist_id'] . "'>" . $row['artist_name'] . "</option>";
                        }
                    }
                    echo "</select>";
                    ?>
                    <input type="hidden" name="MAX_FILE_SIZE" value="50000000"/>
                    <label for="newData" style="color:#7df442"><em> Add image: </em></label>
                    <input required class="text-field-8 w-input" name="newData" id="newData" type="file"
                           accept="image/*"/><br/>
                    <input class="submit-button-4 w-button" data-wait="Please wait..." id="uploadNewalbum"
                           type="submit" value="Create"/>
                </form>
            </div>
        </div>
    </div>
</div>