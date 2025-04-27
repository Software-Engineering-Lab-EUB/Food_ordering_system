<!DOCTYPE html>
<html>
<head>
    <title>Payment Successful</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" />
</head>
<body class="bg-light">

    <div class="container text-center mt-5">
        <div class="card p-5 shadow">
            <h1 class="text-success"><i class="glyphicon glyphicon-ok-circle"></i> Payment Successful!</h1>
            <p class="lead mt-3">Thank you for your payment. Your transaction was completed successfully.</p>
            <a href="{{ route('index') }}" class="btn btn-primary mt-4">Back to Home</a>
        </div>
    </div>

</body>
</html>
