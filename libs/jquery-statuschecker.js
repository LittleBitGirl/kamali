(function( $ ){
/*
  var methods = {
     init : function( options ) {
       return this.each(function(){
         var $this = $(this)
         site_response = {      "Apache2" : 200,       "CELERY" :404};
*/
         $.ajax({
           url: 'http://api.randomuser.me/',
           dataType: 'json',
           success: function(data){
             console.log(data);
           }
         });
        /*
        var table = $('<table class=" table table-bordered"></table>');
        var head = $('<thead><tr><th>Сервис</th><th>Статус</th></tr></thead>');
        head.appendTo(table);

        $.each( site_response, function( service, status ) {
          var text = status==200?"OK":"Fail";
          var tr = $('<tr><td>'+service+'</td><td class="a'+status+'">'+text+'</td></tr>');
          tr.appendTo(table);
          });
         table.appendTo($this);
         $.each( site_response, function( service, status ) {

         var mes=$('<div class="alert alert-danger" role="alert">Ooops! '+service+' has an eror</div>');
         if (status==404)
          {
            mes.appendTo($this);
          }

          });
       });
     },

  };

  $.fn.statuschecker = function( method ) {

    if ( methods[method] ) {
      return methods[method].apply( this, Array.prototype.slice.call( arguments, 1 ));
    } else if ( typeof method === 'object' || ! method ) {
      return methods.init.apply( this, arguments );
    } else {
      $.error( " wrong initializing " );
    }

  };
  */

  results: [{
    user: {
      gender: "female",
      name: {
        title: "ms",
        first: "manuela",
        last: "velasco"
      },
      location: {
        street: "1969 calle de alberto aguilera",
        city: "la coruña",
        state: "asturias",
        zip: "56298"
      },
      email: "manuela.velasco50@example.com",
      username: "heavybutterfly920",
      password: "enterprise",
      salt: ">egEn6YsO",
      md5: "2dd1894ea9d19bf5479992da95713a3a",
      sha1: "ba230bc400723f470b68e9609ab7d0e6cf123b59",
      sha256: "f4f52bf8c5ad7fc759d1d4156b25a4c7b3d1e2eec6c92d80e508aa0b7946d4ba",
      registered: "1303647245",
      dob: "415458547",
      phone: "994-131-106",
      cell: "626-695-164",
      DNI: "52434048-I",
      version: "0.6",
      nationality: "ES",
      picture: {
        large: "http://api.randomuser.me/portraits/women/39.jpg",
        medium: "http://api.randomuser.me/portraits/med/women/39.jpg",
        thumbnail: "http://api.randomuser.me/portraits/thumb/women/39.jpg",
      },
    },
    seed: "graywolf"
  }]

})( jQuery );
