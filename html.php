<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Verification</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
        color: white;
    }
    </style>

</head>
<body class="d-flex justify-content-center align-items-center vh-100 text-white">
<div class="text-center">
<img src="verification.png" alt="Verification Image" width="400" class="img-fluid mb-3">
<div>
<form id="myForm">
<div class="text-center">
  <h1>User Varification</h1><br>
    <div class="container mt-2">
        <div class="card p-4 shadow-sm" style="max-width: 400px;">
            <div class="row g-3">
                <label for="username" class="col-sm-3 col-form-label">Username:</label>
                <div class="col">
                    <input id="username" type="text" class="form-control ">
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-success" >Submit</button>
                </div>            
            </div>
            <strong><div id="result" class="text-center mt-3" style="font-size:35px"></div></strong>
        </div>
    </div>
  </div>
</form>  
<script src="verify_ajax.js"></script>  
</body>
</html>
