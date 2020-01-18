$('#job_profile').on('change', function(e) {
    console.log('test');
    let file = e.target.files[0];
    let blobUrl = window.URL.createObjectURL(file);
    $('#job_profile_preview').attr('src', blobUrl);
);