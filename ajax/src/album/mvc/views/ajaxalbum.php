<?php foreach ($album as $photo): ?>
  <div class="card col col-3">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><?php echo $photo->name ?></h5>
      <p class="card-text"><?php echo $photo->descr ?></p>
      <a href="#" class="btn btn-primary mt-3">Zum Album</a>
      <a href="/Photo=settings?id=<?php echo $photo->id ?>" class="btn btn-secondary mt-3">Settings</a>
    </div>
  </div>
<?php endforeach ?>
<form id="new-album-form" method="post" class="card col col-3" style="max-width: 100%; min-height: 200px; padding: 0rem;">
  <input type="hidden" name="userid" value="<?php echo $_SESSION["userid"] ?>">
  <input type="hidden" name="name" value="Neues Album">
  <input type="hidden" name="descr" value="Ich bin ein neues Album">
  <button type="submit" name="album" value="new" class="btn btn-secondary" style="height: 100%; width: 100%">New Album</button>
</form>

<script src="´../../../../../testproject/ajax/src/album/ajax/CreateAlbum.js"></script>