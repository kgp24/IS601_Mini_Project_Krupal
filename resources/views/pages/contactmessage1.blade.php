

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Contact Message</h2>
       <div class="card" style="width:400px">

        <div class="card-body">
            <h4 class="subject">Hi Krupal</h4>
            <p class="body">Some example text some example text. John Doe is an architect and engineer</p>
            <h5 class="email">From: Krupal@email.com</h5>
            <a href="{{route('index')}}" class="btn btn-primary">Back to Home</a>
        </div>
    </div>
    <br>


</body>
</html>
