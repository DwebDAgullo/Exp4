/*
* @Author: Miguel González Aravena
* @Email: miguel.gonzalez.93@gmail.com
* @Github: https://github.com/MiguelGonzalezAravena
* @Date: 2016-12-05 01:27:53
* @Last Modified by: Miguel GonzÃ¡lez Aravena
* @Last Modified time: 2016-12-06 01:39:41
*/
$(document).ready(function() {
  var tabla = $('#peliculas').DataTable({
    ajax: 'Peliculas/json',
    responsive: true,
    dom: 'Bfrtip',
    buttons: [],
    columns: [
      {data: 'nombre', title: 'Nombre'},
      {data: 'sinopsis', title: 'Sinopsis'},
      {data: 'estreno', title: 'Fecha de Estreno'},
      {data: 'genero', title: 'Género'}
    ],

    order: [[0, 'desc']]
  });
});