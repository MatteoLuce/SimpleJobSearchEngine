	$(document).ready(function() {
     $('button[type="submit"]').prop('disabled', true);
     $('input[type="text"]').keyup(function() {
        if($(this).val().length >= 3) {
           $('button[type="submit"]').prop('disabled', false);
        }
     });
 });


    function show_cont(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
