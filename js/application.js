// main and serious
$(document).ready(function() {
  $('.warning').css('visibility','hidden');

  var name;
  var id_number;
  var group;
  $('#id_number').keyup(function() {
    var textbox = $(this);
    var value = textbox.val();
    var min = textbox.attr('min'); // automatically changes based on the 'min' and 'max'
    var max = textbox.attr('max'); // attribute value of <input name="id_number">
    var length = value.toString().length;



    if(length === 6 && value >= min && value <= max) {
      $.ajax({
        method: 'GET',
        url: 'retriever.php',
        data: { id: value },
        dataType: 'json',
        success: function(student) {
          name = student.full_name;
          id_number = student.id;
          group = student.group;
        }
      });

    } else {
      $('#full_name').val("");
      $('#cellphone_number').val("");
    }
  });

  $('#submit').click(function(evee) {
    var form = $('#form');

    var try_id = parseInt($("#id_number").val(), 10);
    if (try_id >= 100000 && try_id < 160000) {
      var a = true;
      $('#idnumber_warning').css('visibility','hidden');
    }
    else {
      var a = false;
      $('#idnumber_warning').css('visibility','visible');
    }

    if (a) {
      $.ajax({
        method: form.attr('method'),
        url: form.attr('action'),
        data: {'id': id_number, 'name': name, 'course': course, 'group': group},
        //dataType: 'json',
        async: false,
        success: function(student) {
            if (name === undefined) {
              alert("Student does not exist.");
              location.reload();
            }
            else {
              alert('Name: ' + name + '\nCourse: ' + course + '\nGroup' + group);
              location.reload();
            }
          }

      });
      evee.preventDefault();
    }
    evee.preventDefault();
  });
});
