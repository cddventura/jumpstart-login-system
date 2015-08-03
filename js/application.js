// main and serious
$(document).ready(function() {
  $('.warning').css('visibility','hidden');

  var course;
  var name;

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
          course = student.course;
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
        data: {'id': try_id , 'name': name, 'course': course},
        async: false,
        success: function(data) { 
            if (data === false) {
              alert("Student has already logged in.");
              location.reload(); 
            } 
            else {        
              alert('Name: ' + name + '\nCourse: ' + course);
              location.reload(); 
            }           
          }        

      });
      evee.preventDefault();
    }
    evee.preventDefault();
  });
});