let loadNote = function (id = null) {
  $.ajax({
    url: 'path/to/file',
    type: 'POST',
    dataType: 'json',
    data: {
      id
    },
    beforeSend: function () {
      console.log("waiting");
    },
    success: function (data) {
      console.log("success");
    }
  });
}

let saveNote = function (nota) {
  $.ajax({
    url: 'path/to/file',
    type: 'POST',
    dataType: 'json',
    data: $('#frmNota').serialize(),
    beforeSend: function () {
      console.log("waiting");
    },
    success: function (data) {
      console.log("success");
    }
  });
}

$(function () {
  $('.open-note').click(function (e) {
    e.preventDefault();
  });

  $('#frmNota').submit(function (e) {
    e.preventDefault();

    saveNote($(this).serializeArray());
  });

  const noteModal = document.getElementById('noteModal');

  noteModal.addEventListener('show.bs.modal', function (e) {
    const id = $(e.relatedTarget).data('id');

    loadNote(id);
  });
});