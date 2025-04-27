<!DOCTYPE html>
<html>
<head>
    <title>Payment Cancelled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" />
</head>
<body class="bg-light">

    <div class="container text-center mt-5">
        <div class="card p-5 shadow">
            <h1 class="text-danger"><i class="glyphicon glyphicon-remove-circle"></i> Payment Cancelled</h1>
            <p class="lead mt-3">Your payment was cancelled or failed. Please try again later or use another method.</p>
            <a href="{{ route('index') }}" class="btn btn-warning mt-4">Try Again</a>
        </div>
    </div>

</body>
</html>
