$(document).ready(function() {
  var tabla = $('#peliculas').DataTable({
    ajax: 'Peliculas/json',
    responsive: true,
    dom: 'Bfrtip',
    columns: [
      {data: 'nombre', title: 'Nombre'},
      {data: 'sinopsis', title: 'Sinópsis'},
      {data: 'estreno', title: 'Fecha de Estreno'},
      {data: 'genero', title: 'Género'},
    ]
  });

});