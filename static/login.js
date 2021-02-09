let login = function () {
  $.ajax({
    url: 'path/to/file',
    type: 'POST',
    dataType: 'json',
    data: $('#frmLogin').serialize(),
    success: function (data) {
      window.location = '/';
    }
  });
}

$(function () {
  $('#frmLogin').submit(function (e) {
    e.preventDefault();

    login();
  });
});