$(document).ready(function () {
  $('#lista').DataTable({
    paging: false,
    ajax: 'ajax/data/productos.json',
    columns: [
      {
        data: 'articulo'
      },
      {
        data: 'descripcion'
      },
      {
        data: 'foto'
      },
      {
        data: 'incidencia',
        render: function (data, type, row, meta) {
          return type === 'display'
          ? '<progress value="' + data + '" max="9999"></progress>': data;
        },
      },
      {
        data: 'precio',
        render: function (data, type) {
          var number = $.fn.dataTable.render
          .number(',', '.', 2, '$')
          .display(data);

          if (type === 'display') {
            let color = 'green';
            if (data < 1000) {
                color = 'blue';
            } else if (data < 2000) { 
                color = 'orange';
            }

            return '<span style="color:' + color + '">' + number + '</span>';
          }
          return number;
        },
      }
    ],
  });
})
  
    