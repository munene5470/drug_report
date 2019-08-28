// Call the dataTables jQuery plugin
$(document).ready(function() {
    $('#dataTable').DataTable( {
      dom: 'Bfrtip',
      buttons: [
        'copy', 'excel', 'pdf', 'print'
      ],initComplete: function () {
        $('.buttons-pdf').addClass('btn btn-outline-success');
        $('.buttons-copy').addClass('btn btn-outline-success');
        $('.buttons-print').addClass('btn btn-outline-success');
        $('.buttons-excel').addClass('btn btn-outline-success');
      }
    } );


});
