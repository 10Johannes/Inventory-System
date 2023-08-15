<?php
 require_once "database/dbcon.php";
 
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $delete = mysqli_query($conn,"DELETE FROM requests WHERE id=$id");
  if($delete){
echo "<script>alert('Item deleted successfully');</script>";
  echo "<script>document.location='index.php';</script>";

 
  }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form method="get">

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you you want to delete?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <a href='index.php?id=<?php echo($row['id']);?>' class="btn btn-danger">Confirm</a>
      </div>
    </div>
  </div>
</div>
</form>
</body>
</html>