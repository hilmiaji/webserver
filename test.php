<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/flatpickr/dist/flatpickr.min.css">
    <script src="https://unpkg.com/flatpickr"></script> 

</head>
<body>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h6>datetimepicker1</h6>

            <div class="form-group">
            <input class="flatpickr" type="text" placeholder="Select Date..">
            </div>
        </div>
    </div>  
</div>
</body>
</html>

<script>
flatpickr(".flatpickr", {
    enableTime: true
});
</script>