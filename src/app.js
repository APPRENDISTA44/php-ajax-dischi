var $ = require( "jquery" );
var Handlebars = require("handlebars");
$(document).ready(function () {

$.ajax({
  url: "http://localhost:8888/php-ajax-dischi/server.php",
  method: "GET",
  success: function(data){
    console.log(data);
    printAlbum(data);


    // var html = template(context);
  },
  error: function() {
           errore("Si è verificato un errore");
       }

});

function printAlbum(data){
  var source = $('#album-template').html();
  var template = Handlebars.compile(source);
  for (var i = 0; i < data.length; i++) {
    var html = template(data[i]);
    $('#albums').append(html);
  }
}
});
