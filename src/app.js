var $ = require( "jquery" );
var Handlebars = require("handlebars");
$(document).ready(function () {

$.ajax({
  url: "http://localhost:8888/php-ajax-dischi/server.php",
  method: "GET",
  success: function(data){
    console.log(data);
    printAlbum(data);
    buildOptions(data);

    // var html = template(context);
  },
  error: function() {
           errore("Si è verificato un errore");
       }
});

//evento al cambiare della select
$('select').change( function () {
  var value = $(this).val();
  $.ajax({
    url: "http://localhost:8888/php-ajax-dischi/server.php",
    method: "GET",
    data: {
      name : value
    },
    success: function(data){
      console.log(data);
      $('#albums').html('');
      printAlbum(data);
    },
    error: function() {
             errore("Si è verificato un errore");
         }
  });
});

//funzione che stampa tutti gli album
//PARAMETRO:array tornato da database
function printAlbum(data){
  var source = $('#album-template').html();
  var template = Handlebars.compile(source);
  for (var i = 0; i < data.length; i++) {
   var html = template(data[i]);
    $('#albums').append(html);
  }

}

//costruisco le opzioni della select con gli autori disponibili
//PARAMETRO:array tornato da database
function buildOptions(data) {
  $('select').html('');
  $('select').append('<option value="all">All genres</option>');
  for (var i = 0; i < data.length; i++) {
    $('select').append('<option value="' + data[i].author +'">'+ data[i].author + '</option>');
  }
}
});
