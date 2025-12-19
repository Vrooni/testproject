$('#update-album-form').on('submit', function(event) {
  event.preventDefault();
  $.ajax({
    type: 'POST',
    url: 'Albumsettings-updateAlbum',
    data: $(this).serialize(),
  })
  .done(function(data) {
    $('#rel-settings').html(data)
  })
  .fail(function() {
    console.log("Cannot create new Album");
  })
})