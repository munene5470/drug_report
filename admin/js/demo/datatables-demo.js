// Call the dataTables jQuery plugin
$(document).ready(function() {
    $('#dataTable').DataTable( {
      "bInfo": true, //Dont display info e.g. "Showing 1 to 4 of 4 entries"
      "paging": false,//Dont want paging
      "bPaginate": false,//Dont want paging
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
