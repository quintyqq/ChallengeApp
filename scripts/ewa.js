function OnAbout() {
    document.getElementById('divMain').setAttribute('style', 'display:none');
    document.getElementById('divAbout').setAttribute('style', 'display:block');
}

function OnTestLink() {
    $('#testMsg').show();
    $('#testMsg').text('to jest text');
}