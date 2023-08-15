<?php 
    require_once "database/dbcon.php";
    session_start();

    if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect to the login page if not logged in
    exit();
}

$username = $_SESSION['username'];
$id = $_SESSION['id'];
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
 
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">➤</button>
    <div class="container">
     <button type="button" data-bs-toggle="modal"  class="btn btn-success"data-bs-target="#staticBackdrop" class="fa fa-pencil-square-o" aria-hidden="true">Add +</button>
     <?php include("functions/add.php"); ?>
               <div class="table-responsive">
               <Table class="table table-bordered">
        <thead class="table-dark">
          <tr>
             <th>#</th>
             <th>Category</th>
             <th>Description</th>
             <th>Model</th>
             <th>Brand</th>
             <th>Serial No./ISBN</th>
             <th>Location(Bldg/Flr)</th>
             <th>Issued To</th>
             <th>Date Acquired</th>
             <th>Purchased Value</th>
             <th>PO Ref No.</th>
             <th>Warranty</th>
             <th>Status/Remarks</th>
             <th>Operation</th>
          </tr>
        </tdead>     
        <tbody>
          <?php  
          $sql = "SELECT  *  FROM  requests";
          
          $result = $conn->query($sql);
          if(!$result){
            die("Invalid query" .$connection_error);
          }else{
            while ($row = $result->fetch_assoc()) {
          
          
          ?>
          <tr>
          <?php if($row['auditor']==$_SESSION['id']){ ?>
          <?php echo "<td>".$row['id']."</td>"; ?>
          <?php echo "<td>".$row['category']."</td>"; ?>
          <?php echo "<td>".$row['description']."</td>"; ?>
          <?php echo "<td>".$row['model']."</td>"; ?>
          <?php echo "<td>".$row['brand']."</td>"; ?>
          <?php echo "<td>".$row['ISBN']."</td>"; ?>
          <?php echo "<td>".$row['location']."</td>"; ?>
          <?php echo "<td>".$row['issued_to']."</td>"; ?>
          <?php echo "<td>".$row['date_acquired']."</td>"; ?>
          <?php echo "<td>".$row['purchased_value']."</td>"; ?>
          <?php echo "<td>".$row['PO_ref_no']."</td>"; ?>
          <?php echo "<td>".$row['warranty']."</td>"; ?>
          <?php echo "<td>".$row['remarks']."</td>"; ?>
             <td>
               
               <button  class="btn btn-danger btn-sm" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#exampleModal1">DELETE</button>
               <button  class="btn btn-primary btn-sm" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">EDIT</button>
               <?php include("functions/delete.php");
                     include("functions/edit.php");
               ?>
            </td>
          </tr>
            <?php
}}}
?>
        </tbody>
    </Table>  
    </div>
   <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h2 class="offcanvas-title" id="offcanvasWithBothOptionsLabel" style="background-color: #0C293A; color:aliceblue;">Welcome, <?php echo ''.$_SESSION['username'].''; ?></h2>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
     <?php 
    if(isset($_SESSION['username'])){
      echo'<a href="logout.php" class="btn btn-danger">Log Out</a>';
    }
  ?>
  </div>
</div>
</div>
</body>
</html>