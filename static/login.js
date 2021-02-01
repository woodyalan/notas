let login = function () {
  $.ajax({
    url: 'path/to/file',
    type: 'POST',
    dataType: 'json',
    data: $('#frmLogin').serialize(),
    beforeSend: function () {
      console.log("waiting");
    },
    success: function (data) {
      console.log("success");
    }
  });
}

$(function () {
  $('#frmLogin').submit(function (e) {
    e.preventDefault();

    login();
  });
});