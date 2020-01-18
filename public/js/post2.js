$('#client_profile').on('change', function(e) {
    console.log('test');
    let file = e.target.files[0];
    let blobUrl = window.URL.createObjectURL(file);
    $('#client_profile_preview').attr('src', blobUrl);
  });
  