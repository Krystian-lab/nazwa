(function ($) {
  'use strict';
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
         }
      });
    });
  });

  $('input[type=radio][name=firm]').change(function() {
    if (this.value == '1') {
      let text = document.getElementById("name_firm").innerHTML; 
      let result = text.replace(text, "Nazwa Firmy");
      document.getElementById("name_firm").innerHTML = result;
      let text2 = document.getElementById("PESEL_NIP").innerHTML; 
      let result2 = text2.replace(text2, "NIP");
      document.getElementById("PESEL_NIP").innerHTML = result2;
    }
    else if (this.value == '0') {
      let text = document.getElementById("name_firm").innerHTML; 
      let result = text.replace(text, "Imię i Nazwisko");
      document.getElementById("name_firm").innerHTML = result;
      let text2 = document.getElementById("PESEL_NIP").innerHTML; 
      let result2 = text2.replace(text2, "PESEL");
      document.getElementById("PESEL_NIP").innerHTML = result2;
      let PESEL_NIP = document.getElementById('in_PESEL_NIP').value;
      console.log(PESEL_NIP);
    }
});
 
 
  /* ========================================================================= */
  /*   Contact Form Validating
  /* ========================================================================= */


  $('input').change(function() {
  
    console.log('test');
    var error = false;
    var name = document.getElementById('in_name_firm').value;
    var email = document.getElementById('in_Email').value;
    var street = document.getElementById('in_street').value;
    var postCode =document.getElementById('in_postCode').value;
    var localNo = document.getElementById('in_localNo').value;
    var phonePrefix = document.getElementById('in_phonePrefix').value;
    let PESEL_NIP = document.getElementById('in_PESEL_NIP').value;
    console.log(error);
    if (!PESEL_NIP) {
      (error = true);
      console.log(PESEL_NIP);
      $('#PESEL_NIP').css('border-color', '#D8000C');
    } else {
      $('#PESEL_NIP').css('border-color', '#666');
    }
    if (!phonePrefix) {
      (error = true);
      $('#phonePrefix').css('border-color', '#D8000C');
    } else {
      $('#phonePrefix').css('border-color', '#666');
    }
    if (!localNo ) {
      (error = true);
      $('#localNo').css('border-color', '#D8000C');
    } else {
      $('#localNo').css('border-color', '#666');
    }
    if (!name ) {
      (error = true);
      $('#name_firm').css('border-color', '#D8000C');
    } else {
      $('#name_firm').css('border-color', '#666');
    }
    if (!email || email.indexOf('@') === '-1') {
      (error = true);
      $('#Email').css('border-color', '#D8000C');
    } else {
      $('#Email').css('border-color', '#666');
    }
    if (!street ) {
      (error = true);
      $('#street').css('border-color', '#D8000C');
    } else {
      $('#street').css('border-color', '#666');
    }
    if (!postCode ) {
      (error = true);
      $('#postCode').css('border-color', '#D8000C');
    } else {
      $('#postCode').css('border-color', '#666');
    }
  
if(error==true)
{
  $(':input[type="submit"]').prop('disabled', true);
  
}
if(error==false)
{
  $(':input[type="submit"]').prop('disabled', false );
}
  });

 })(jQuery);