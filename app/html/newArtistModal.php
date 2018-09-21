<div id="artistModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content" style="background: #23272b">
            <div class="modal-header">
                <h4 class="modal-title" style="color:#7df442">New Artist</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="form-wrapper-2 w-form">
                <form class="form-4" data-name="Email Form 4" id="email-form-4" name="email-form-4"
                      action="../php/create_new_artist.php" method="post" enctype="multipart/form-data">
                    <label for="artistName" id="newDataLbl">Artist</label>
                    <input class="text-field-8 w-input" data-name="artistName" id="artistName" maxlength="256"
                           name="artistName" placeholder="Enter the songs Artist" type="text">
                    <input type="hidden" name="MAX_FILE_SIZE" value="50000000"/>
                    <label for="newData" style="color:#7df442"><em> Add image: </em></label>
                    <input required class="text-field-8 w-input" name="newData" id="newData" type="file"
                           accept="image/*"/><br/>
                    <input class="submit-button-4 w-button" data-wait="Please wait..." id="uploadNewArtist"
                           type="submit" value="Create"/>
                </form>
            </div>
        </div>
    </div>
</div>