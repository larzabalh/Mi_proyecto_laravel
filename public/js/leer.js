$(document).ready(function(){

  $('#exito').show();
})

$('#registro').click(function(e){
  e.preventDefault();

  var dato = $('#genero').val();
  var route = 'http://localhost:8000/prueba';
  var token = $('token').val();


  $.ajax({
    url: route,
    headers: {'X-CSRF-TOKEN':token},
    async: false,
    type: 'ajax',
    processData: true,
    contentType: "application/json; charset=utf-8",
    dataType: 'json',
    data: {genero: dato},

    success:function(response){
      console.log('esta ok')
      alert('joya');
      $('#exito').fadeIn();
    },
    error: function() {
                  alert('error');
              }
  });
});
