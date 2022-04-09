<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Searching Sorting Pagination</title>
  <!-- Datatable CSS -->
  <link href='assets/New folder/DataTables/datatables.min.css' rel='stylesheet' type='text/css'>

</head>
<body>
  <h1 style="text-align: center;">Searching Sorting Pagination</h1>
    <table id='medTable' class='display'>
      <thead>
        <tr> 
          <!-- Add header row -->
          <th>Medicine Name</th>
          <th>Group</th>
          <th>Category</th>
          <th>Benefit</th>
        </tr>
      </thead>
    </table>



    <!-- jQuery Library -->
    <script src="assets/New folder/jquery-3.3.1.min.js"></script>
        
    <!-- Datatable JS -->
    <script src="assets/New folder/DataTables/datatables.min.js"></script>
    <!-- 
      Write script to initialize dataTables on the <table id="">
     -->
    <script type="text/javascript">
    $(document).ready(function(){
      // call DataTable() method on #medTable
      $('#medTable').DataTable({
        'processing': true,
        'serverSide': true,
        'serverMethod': 'post',
        // 'dataSrc': '',
        'ajax': {
           'url':'ssp_ajax.php',
           //"type": "GET"
            // From ssp_ajax.php file return paginated data in defined format
        },
        // Specify column names in the columns option. Only these fields get read from AJAX response.
        'columns': [
          { data: 'med_name' },
          { data: 'group_' },
          { data: 'category_' },
          { data: 'benefit_' },
        ]
      });
    });
    </script>
</body>
</html>