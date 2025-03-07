<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Verification</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="p-3 mb-2 bg-primary text-white">
<div class="text-center">
  <h1>User Varification</h1>
</div>

<form id="myForm">
<div class="d-flex justify-content-center align-items-center">
<div>
    <div class="container mt-5">
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
            <div id="result" class="text-center mt-3"></div>
        </div>
    </div>
  </div>
</div>
</form>
    <div class="text-center mt-5">
      <button onclick="location.href='sql.php'" class="btn btn-success" >Click me to manage data</button>
    </div>   
</div>
<script src="verify_ajax.js"></script>
</body>
</html>


