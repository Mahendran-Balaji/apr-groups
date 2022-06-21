$(document).ready(function(){
    var tearn = 0;
    var basicpay = 0;
    var hra = 0;
    var da = 0;
    var medical = 0;    
    var convey = 0; 
    var music = 0;
    var pf=0;
    var ptax=0;
    var incometax=0;
    var lop=0;
    var salaryadv = 0;
    var otherexp=0;
   var bonus=0;
    var totalearn = (basicpay+hra+da+medical+convey+music);
    var totalded = (pf+ptax+incometax+lop+salaryadv+otherexp);
    $('#tearn').val(totalearn);
    $('#tdeduct').val(totalded);
  
 $('#tearn').on('change',function(){
    var tearn = $(this).val();
    var basicpay = (tearn*40)/100;
    var hra = (tearn*20)/100;
    var da = (tearn*23)/100;
    var medical = (tearn*10)/100;    
    var convey = (tearn*6)/100; 
    var music = (tearn*1)/100;
    var bonus = $('#bonus').val();
    var totearn = Number(bonus)+Number(tearn);
    
    $('#basicpay') .val(basicpay);
    $('#hra') .val(hra);
    $('#da') .val(da);
    $('#medical') .val(medical);
    $('#convey') .val(convey);
    $('#music') .val(music);
    $('#netpay').val(totearn);
      var convertnumbers = convertNumberToWords(totearn);
      var withrupees = convertnumbers;
       $('#netpaywords').val(withrupees+'Only');
 }); 

  $('#pf').on('change',function(){
      var tearn = parseInt($('#tearn').val());
      
      var pf = parseInt($(this).val());
      var ptax = parseInt($('#ptax').val());
      var incometax =  parseInt($('#incometax').val());
      var lop =  parseInt($('#lop').val());
      var salaryadv =  parseInt($('#salaryadv').val());
      var otherexp =  parseInt($('#otherexp').val());
      var bonus = $('#bonus').val();
      var totearn = Number(bonus)+Number(tearn);
    
    
      var totalded = parseInt(pf)+parseInt(ptax)+parseInt(incometax)+parseInt(lop)+parseInt(salaryadv)+parseInt(otherexp);
      var netpay = parseInt(totearn)-parseInt(totalded);
      $('#tdeduct').val(totalded);
  
      $('#netpay').val(parseInt(netpay));
      
      var convertnumbers = convertNumberToWords(netpay);
      var withrupees = convertnumbers;
       $('#netpaywords').val(withrupees+'Only');
   });
  
  
  $('#ptax').on('change',function(){
      var tearn = parseInt($('#tearn').val());
      
      var pf =  parseInt($('#pf').val());
      var ptax = parseInt($(this).val());
      var incometax = parseInt($('#incometax').val());
      var lop =  parseInt($('#lop').val());
      var salaryadv =  parseInt($('#salaryadv').val());
      var otherexp =  parseInt($('#otherexp').val());
        var bonus = $('#bonus').val();
      var totearn = Number(bonus)+Number(tearn);
      
      
      var totalded = parseInt(pf)+parseInt(ptax)+parseInt(incometax)+parseInt(lop)+parseInt(salaryadv)+parseInt(otherexp);
      var netpay = parseInt(totearn)-parseInt(totalded);
      $('#tdeduct').val(totalded);
  
      var convertnumbers = convertNumberToWords(netpay);
      var withrupees = convertnumbers;
       $('#netpaywords').val(withrupees+'Only');
   });
  
  
  
  
  
  $('#incometax').on('change',function(){
      var tearn = parseInt($('#tearn').val());
      
      var pf =  parseInt($('#pf').val());
      var ptax = parseInt($('#ptax').val());
      var incometax = parseInt($(this).val());
      var lop =  parseInt($('#lop').val());
      var salaryadv =  parseInt($('#salaryadv').val());
      var otherexp =  parseInt($('#otherexp').val());
      var bonus = $('#bonus').val();
      var totearn = Number(bonus)+Number(tearn);
      
      var totalded = parseInt(pf)+parseInt(ptax)+parseInt(incometax)+parseInt(lop)+parseInt(salaryadv)+parseInt(otherexp);
      var netpay = parseInt(totearn)-parseInt(totalded);
      $('#tdeduct').val(totalded);
  
      $('#netpay').val(parseInt(netpay));
     var convertnumbers = convertNumberToWords(netpay);
      var withrupees = convertnumbers;
       $('#netpaywords').val(withrupees+'Only');
   });
  
   $('#lop').on('change',function(){
      var tearn = parseInt($('#tearn').val());
      
      var pf =  parseInt($('#pf').val());
      var ptax = parseInt($('#ptax').val());
      var incometax = parseInt($('#incometax').val());
      var lop =  parseInt($(this).val());
      var salaryadv =  parseInt($('#salaryadv').val());
      var otherexp =  parseInt($('#otherexp').val());
      var bonus = $('#bonus').val();
      var totearn = Number(bonus)+Number(tearn);
      
      var totalded = parseInt(pf)+parseInt(ptax)+parseInt(incometax)+parseInt(lop)+parseInt(salaryadv)+parseInt(otherexp);
      var netpay = parseInt(totearn)-parseInt(totalded);
      $('#tdeduct').val(totalded);
  
      $('#netpay').val(parseInt(netpay));
       var convertnumbers = convertNumberToWords(netpay);
      var withrupees = convertnumbers;
       $('#netpaywords').val(withrupees+'Only');
   });   
  
  $('#salaryadv').on('change',function(){
     var tearn = parseInt($('#tearn').val());
      
      var pf =  parseInt($('#pf').val());
      var ptax = parseInt($('#ptax').val());
      var incometax = parseInt($('#incometax').val());
      var lop =  parseInt($('#lop').val());
      var salaryadv =  parseInt($(this).val());
      var otherexp =  parseInt($('#otherexp').val());
      var bonus = $('#bonus').val();
      var totearn = Number(bonus)+Number(tearn);
      
      var totalded = parseInt(pf)+parseInt(ptax)+parseInt(incometax)+parseInt(lop)+parseInt(salaryadv)+parseInt(otherexp);
      var netpay = parseInt(totearn)-parseInt(totalded);
      $('#tdeduct').val(totalded);
  
      $('#netpay').val(parseInt(netpay));
   var convertnumbers = convertNumberToWords(netpay);
      var withrupees = convertnumbers;
       $('#netpaywords').val(withrupees+'Only');
   });   
  
  $('#otherexp').on('change',function(){
     var tearn = parseInt($('#tearn').val());
      
      var pf =  parseInt($('#pf').val());
      var ptax = parseInt($('#ptax').val());
      var incometax = parseInt($('#incometax').val());
      var lop =  parseInt($('#lop').val());
      var salaryadv =  parseInt($(this).val());
      var otherexp =  parseInt($('#otherexp').val());
      var bonus = $('#bonus').val();
      var totearn = Number(bonus)+Number(tearn);
      
      var totalded = parseInt(pf)+parseInt(ptax)+parseInt(incometax)+parseInt(lop)+parseInt(salaryadv)+parseInt(otherexp);
      var netpay = parseInt(totearn)-parseInt(totalded);
      $('#tdeduct').val(totalded);
  
      $('#netpay').val(parseInt(netpay));
      var convertnumbers = convertNumberToWords(netpay);
      var withrupees = convertnumbers;
       $('#netpaywords').val(withrupees+'Only');
   });   
  
  
  $('#tdeduct').on('change',function(){
      var tearn = parseInt($('#tearn').val());
      
      var pf =  parseInt($('#pf').val());
      var ptax = parseInt($('#ptax').val());
      var incometax = parseInt($('#incometax').val());
      var lop =  parseInt($('#lop').val());
      var salaryadv =  parseInt($('#salaryadv').val());
      var otherexp =  parseInt($('#otherexp').val());
       var bonus = $('#bonus').val();
      var totearn = Number(bonus)+Number(tearn);
      
      var totalded = parseInt(pf)+parseInt(ptax)+parseInt(incometax)+parseInt(lop)+parseInt(salaryadv)+parseInt(otherexp);
      var netpay = parseInt(totearn)-parseInt(totalded);
      $('#tdeduct').val(totalded);
  
      $('#netpay').val(parseInt(netpay));
      var convertnumbers = convertNumberToWords(netpay);
      var withrupees = convertnumbers;
       $('#netpaywords').val(withrupees+'Only');
  });
  
  function convertNumberToWords(amount) {
var words = new Array();
words[0] = '';
words[1] = 'One';
words[2] = 'Two';
words[3] = 'Three';
words[4] = 'Four';
words[5] = 'Five';
words[6] = 'Six';
words[7] = 'Seven';
words[8] = 'Eight';
words[9] = 'Nine';
words[10] = 'Ten';
words[11] = 'Eleven';
words[12] = 'Twelve';
words[13] = 'Thirteen';
words[14] = 'Fourteen';
words[15] = 'Fifteen';
words[16] = 'Sixteen';
words[17] = 'Seventeen';
words[18] = 'Eighteen';
words[19] = 'Nineteen';
words[20] = 'Twenty';
words[30] = 'Thirty';
words[40] = 'Forty';
words[50] = 'Fifty';
words[60] = 'Sixty';
words[70] = 'Seventy';
words[80] = 'Eighty';
words[90] = 'Ninety';
amount = amount.toString();
var atemp = amount.split(".");
var number = atemp[0].split(",").join("");
var n_length = number.length;
var words_string = "";
if (n_length <= 9) {
  var n_array = new Array(0, 0, 0, 0, 0, 0, 0, 0, 0);
  var received_n_array = new Array();
  for (var i = 0; i < n_length; i++) {
      received_n_array[i] = number.substr(i, 1);
  }
  for (var i = 9 - n_length, j = 0; i < 9; i++, j++) {
      n_array[i] = received_n_array[j];
  }
  for (var i = 0, j = 1; i < 9; i++, j++) {
      if (i == 0 || i == 2 || i == 4 || i == 7) {
          if (n_array[i] == 1) {
              n_array[j] = 10 + parseInt(n_array[j]);
              n_array[i] = 0;
          }
      }
  }
  value = "";
  for (var i = 0; i < 9; i++) {
      if (i == 0 || i == 2 || i == 4 || i == 7) {
          value = n_array[i] * 10;
      } else {
          value = n_array[i];
      }
      if (value != 0) {
          words_string += words[value] + " ";
      }
      if ((i == 1 && value != 0) || (i == 0 && value != 0 && n_array[i + 1] == 0)) {
          words_string += "Crores ";
      }
      if ((i == 3 && value != 0) || (i == 2 && value != 0 && n_array[i + 1] == 0)) {
          words_string += "Lakhs ";
      }
      if ((i == 5 && value != 0) || (i == 4 && value != 0 && n_array[i + 1] == 0)) {
          words_string += "Thousand ";
      }
      if (i == 6 && value != 0 && (n_array[i + 1] != 0 && n_array[i + 2] != 0)) {
          words_string += "Hundred and ";
      } else if (i == 6 && value != 0) {
          words_string += "Hundred ";
      }
  }
  words_string = words_string.split("  ").join(" ");
}
return words_string;
}
});