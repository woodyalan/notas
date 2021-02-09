let loadNotes = function () {
  $.ajax({
    url: 'view/list.php',
    type: 'POST',
    dataType: 'html',
    success: function (data) {
      $('#noteBoard').html(data);
    }
  });
}

let saveNote = function () {
  $.ajax({
    url: 'controller/save.php',
    type: 'POST',
    dataType: 'html',
    data: $('#frmNota').serialize(),
    success: function (data) {
      // loadNotes();
    }
  });
}

$(function () {
  $('#frmNota').submit(function (e) {
    e.preventDefault();

    // saveNote();
  });
});