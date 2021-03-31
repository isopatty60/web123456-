<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel 5.8 - Join Multiple Table</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
  <div class="container">
     <br />
     <h3 align="center">Laravel 5.8 - Join Multiple Table</h3>
     <br />
   <div class="table-responsive">
    <table class="table table-bordered table-striped">
           <thead>
            <tr>
                <th>Country</th>
                <th>State</th>
            </tr>
           </thead>
           <tbody>
           @foreach($data as $row)
            <tr>
             <td>{{ $row->contacts_id }}</td>
             <td>{{ $row->contact_datas_id }}</td>
            </tr>
           @endforeach
           </tbody>
       </table>
   </div>
  </div>
 </body>
</html>
