$('#new-album-form').on('submit', function(event) {
  // führe nicht die Standardfunktion aus
  event.preventDefault();
  $.ajax({
    type: 'POST',
    url: 'Album-newAlbum',
    data: $(this).serialize(),
  })
  .done(function(data) {
    $('#rel-album').html(data)
  })
  .fail(function() {
    console.log("Cannot create new Album");
  })
})