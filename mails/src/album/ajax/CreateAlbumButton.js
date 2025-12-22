$('.new-album-button').on('click', function(event) {
  event.preventDefault();
  $.ajax({
    type: 'POST',
    url: 'Album-newAlbum',
    data: {
      userid: $(this).data('userid'),
      name: $(this).data('name'),
      descr: $(this).data('descr'),
    }
  })
  .done(function(data) {
    $('#rel-album').html(data)
  })
  .fail(function() {
    console.log("Cannot create new Album");
  })
})