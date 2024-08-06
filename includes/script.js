$('#loginForm').submit(function () {


    if ($('#email').val().length == 0)
        return false;
    else
        return true;
});