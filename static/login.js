let login = function () {
  $.ajax({
    url: 'controller/login.php',
    type: 'POST',
    dataType: 'html',
    data: $('#frmLogin').serialize(),
    success: function (data) {
      if(data != '') {
        $('#loginResponse').html(data);
      } else {
        window.location = '/';
      }
    }
  });
}

$(function () {
  $('#frmLogin').submit(function (e) {
    e.preventDefault();

    login();
  });
});