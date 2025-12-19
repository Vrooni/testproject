 <div class="form-group mb-3">
   <label for="exampleAlbumName">Albumname</label>
   <input name="name" type="text" class="form-control" id="exampleAlbumName" placeholder="Wie soll das Album heißen?" value="<?php echo $album->name ?>">
 </div>
 <div class="form-group mb-3">
   <label for="exampleDescr">Beschreibung</label>
   <textarea name="descr" class="form-control" id="exampleDescr" placeholder="Beschreibung"><?php echo $album->descr ?></textarea>
 </div>
 <input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">
 <button type="submit" class="btn btn-secondary">Speichern</button>