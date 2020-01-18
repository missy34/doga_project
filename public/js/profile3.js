// ユーザープロフィールと企業プロフィールで同じやつ使ってます注意

$('#user_profile').on('change', function(e) {
    console.log('test');
    let file = e.target.files[0];
    let blobUrl = window.URL.createObjectURL(file);
    $('#user_profile_preview').attr('src', blobUrl);
  });
  