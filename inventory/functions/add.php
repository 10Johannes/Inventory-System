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
    <form class="container">
        <label class="form-label" for="">Category:</label>
        <input class="form-control" type="text" name="category">
        <br>
        <label class="form-label" for="">Description:</label>                 
        <input class="form-control"type="text" name="Description">
        <br>
        <label class="form-label" for="">Model:</label>
        <input class="form-control"type="text" name="Model">
        <br>
        <label class="form-label" for="">Brand:</label>
        <input class="form-control"type="text" name="Brand">
        <br>
        <label class="form-label" for="">Serial no./ISBN:</label>
        <input class="form-control"type="text" name="Serial no./ISBN">
        <br>
        <label class="form-label" for="">Location(bldg/flr):</label>
        <input class="form-control"type="text" name="Location(bldg/flr)">
        <br>
        <label class="form-label" for="">Issued to:</label>
        <input class="form-control"type="text" name="Issued to">
        <br>
        <label class="form-label" for="">Date Acquired:</label>
        <input class="form-control"type="text" name="Date Acquired">
        <br>
        <label class="form-label" for="">PO ref no.:</label>
        <input class="form-control"type="text" name="PO ref no">
        <br>
        <label class="form-label" for="">Warranty:</label>
        <input class="form-control"type="text" name="Warranty">
        <br>
        <label class="form-label" for="">Status/Remarks:</label>
        <input class="form-control"type="text" name="Status/Remarks">
        <br>

    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
</form>
</body>
</html>