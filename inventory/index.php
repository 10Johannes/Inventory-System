<?php 
    require_once "database/dbcon.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="resources/font-awesome-4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Home</title>
</head>
<body>
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">-></button>
    <div class="container">
     <button type="button" data-bs-toggle="modal"  class="btn btn-success"data-bs-target="#staticBackdrop" class="fa fa-pencil-square-o" aria-hidden="true">Add+</button>
               <?php include("functions/add.php"); ?>
               <div class="table-responsive">
               <Table class="table table-bordered">
        <thead class="table-dark">
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
             <th></th>
             <th></th>
             <th>
               
               <button  class="btn btn-danger btn-sm" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#exampleModal1">DELETE</button>
               <button  class="btn btn-primary btn-sm" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">EDIT</button>
               <?php include("functions/delete.php");
                     include("functions/edit.php");
               ?>
            </th>


        </tbody>
    </Table>  
    </div>
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with scrolling</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <p>Try scrolling the rest of the page to see this option in action.</p>
  </div>
</div>
</div>
</body>
</html>