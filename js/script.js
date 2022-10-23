(function ($) {
  'use strict';

  /* ========================================================================= */
  /*	Page Preloader
  /* ========================================================================= */
  $(window).on('load', function () {
    $('#preloader').fadeOut('slow', function () {
      $(this).remove();
      name = $(this).val();
      $.ajax({
         type:"GET",
         dataType: "json",
         data:{name: name},
         url:"http://api.dro.nazwa.pl/",
         success:function(data)
         {
          var i = 1,
         
          select = document.getElementById('voivodeship');
      
          for (var key in data) {
          var opt = document.createElement('option');
          opt.value = i;
          opt.innerHTML = data[key];
          select.appendChild(opt);
          i++;
      }
             console.log(data);
         }
      });
    });
  });

 
  let text = document.getElementById("demo").innerHTML; 
  let result = text.replace(/blue/gi, "red");
  document.getElementById("demo").innerHTML = result;

  /* ========================================================================= */
  /*   Contact Form Validating
  /* ========================================================================= */


  // $('#form-submit').on('click', function (e) {
  //   e.preventDefault();
  //   var error = false;
  //   var name = $('#name').val();
  //   var email = $('#email').val();
  //   var subject = $('#subject').val();
  //   var message = $('#message').val();

  //   if (name.length === 0) {
  //     (error = true);
  //     $('#name').css('border-color', '#D8000C');
  //   } else {
  //     $('#name').css('border-color', '#666');
  //   }
  //   if (email.length === 0 || email.indexOf('@') === '-1') {
  //     (error = true);
  //     $('#email').css('border-color', '#D8000C');
  //   } else {
  //     $('#email').css('border-color', '#666');
  //   }
  //   if (subject.length === 0) {
  //     (error = true);
  //     $('#subject').css('border-color', '#D8000C');
  //   } else {
  //     $('#subject').css('border-color', '#666');
  //   }
  //   if (message.length === 0) {
  //     (error = true);
  //     $('#message').css('border-color', '#D8000C');
  //   } else {
  //     $('#message').css('border-color', '#666');
  //   }

  //   //now when the validation is done we check if the error variable is false (no errors)
  //   if (error === false) {
  //     //disable the submit button to avoid spamming
  //     //and change the button text to Sending...
  //     $('#contact-submit').attr({
  //       'disabled': 'false',
  //       'value': 'Sending...'
  //     });

  //     /* using the jquery's post(ajax) function and a lifesaver
  //     function serialize() which gets all the data from the form
  //     we submit it to send_email.php */
  //     $.post('sendmail.php', $('#contact-form').serialize(), function (result) {
  //       //and after the ajax request ends we check the text returned
  //       if (result === 'sent') {
  //         //if the mail is sent remove the submit paragraph
  //         $('#cf-submit').remove();
  //         //and show the mail success div with fadeIn
  //         $('#mail-success').fadeIn(500);
  //       } else {
  //         //show the mail failed div
  //         $('#mail-fail').fadeIn(500);
  //         //re enable the submit button by removing attribute disabled and change the text back to Send The Message
  //         $('#contact-submit').removeAttr('disabled').attr('value', 'Send The Message');
  //       }
  //     });
  //   }
  // });

})(jQuery);