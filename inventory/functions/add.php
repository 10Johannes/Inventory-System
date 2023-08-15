<?php
    require_once "database/dbcon.php";
    //if (!empty($_POST)){}
        if (isset($_POST['submit'])){
           $category = $_POST['category'];
           $description = $_POST['description'];
           $model = $_POST['model'];
           $brand = $_POST['brand'];
           $ISBN = $_POST['ISBN'];
           $location = $_POST['location'];
           $issued_to = $_POST['issued_to'];
           $date_acquired = $_POST['date_acquired'];
           $purchased_value = $_POST['purchased_value'];
           $PO_ref_no = $_POST['PO_ref_no'];
           $warranty = $_POST['warranty'];
           $remarks = $_POST['remarks'];
            $id = $_SESSION['id'];

            $sql="INSERT INTO requests(category,description,model,brand,ISBN,location,issued_to,date_acquired,purchased_value,PO_ref_no,warranty,remarks,auditor) 
                  VALUES ('$category','$description','$model','$brand','$ISBN','$location','$issued_to','$date_acquired','$purchased_value','$PO_ref_no','$warranty', '$remarks', '$id')";
//if($conn->query($sql) )
//{echo "yes";}
do{
   if(empty($category) || empty(  $description) || empty($model) || empty($brand) ||empty( $ISBN ) || empty( $location) || empty($issued_to) || empty($date_acquired) || empty($purchased_value) || empty( $PO_ref_no ) || empty( $warranty) || empty($remarks)){
    echo "<script>alert('All Fields Are REquired!!')</script>";
    break;
   }elseif($conn->query($sql) === TRUE){
    echo "<script>alert('Item added successfully');</script>";
   echo "<script>document.location='index.php';</script>";
   break;
   }else{
    echo "<script>alert('Something Went Wrong!!');</script>";
   break;
   }
} while(false);
           
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
    <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">ADD ITEM</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
    <form class="container" method="Post">
        <label class="form-label" for="">Category:</label>
        <input class="form-control" type="text" name="category">
        <br>
        <label class="form-label" for="">Description:</label>                 
        <input class="form-control"type="text" name="description">
        <br>
        <label class="form-label" for="">Model:</label>
        <input class="form-control"type="text" name="model">
        <br>
        <label class="form-label" for="">Brand:</label>
        <input class="form-control"type="text" name="brand">
        <br>
        <label class="form-label" for="">Serial no./ISBN:</label>
        <input class="form-control"type="text" name="ISBN">
        <br>
        <label class="form-label" for="">Location(bldg/flr):</label>
        <input class="form-control"type="text" name="location">
        <br>
        <label class="form-label" for="">Issued to:</label>
        <input class="form-control"type="text" name="issued_to">
        <br>
        <label class="form-label" for="">Date Acquired:</label>
        <input class="form-control"type="datetime-local" name="date_acquired">
        <br>
        <label class="form-label" for="">Purchase Value:</label>
        <input class="form-control"type="text" name="purchased_value">
        <br>
        <label class="form-label" for="">PO ref no.:</label>
        <input class="form-control"type="text" name="PO_ref_no">
        <br>
        <label class="form-label" for="">Warranty:</label>
        <input class="form-control"type="text" name="warranty">
        <br>
        <label class="form-label" for="">Status/Remarks:</label>
        <input class="form-control"type="text" name="remarks">
        <br>

    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </div>
    </div>
  </div>
</div>
</form>
</body>
</html>