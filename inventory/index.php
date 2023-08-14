<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="resources/font-awesome-4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home</title>
</head>
<body class="container">
    <?php 
        require_once "database/dbcon.php";
    ?>
    <Table class="table table-striped  ">
        <thead>
             <td>#</td>
             <td>category</td>
             <td>description</td>
             <td>model</td>
             <td>brand</td>
             <td>serial no./ISBN</td>
             <td>location(bldg/flr)</td>
             <td>issued to</td>
             <td>date acquired</td>
             <td>purchased value</td>
             <td>PO ref no.</td>
             <td>warranty</td>
             <td>status/remarks</td>
             <td>operation</td>
        </thead>     
        <tbody>
             <th></th>
             <th></th>
             <th></th>
             <th></th>
             <th></th>
             <th></th>
             <th></th>
             <th></th>
             <th></th>
             <th></th>
             <th></th>
             <th>
               <button  class="fa fa-pencil-square-o" aria-hidden="true"></button>
               <button  class="btn btn-danger btn-sm" aria-hidden="true">DELETE</button>


             </th>


        </tbody>
    </Table>  
    
</body>
</html>