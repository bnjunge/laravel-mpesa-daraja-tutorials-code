<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Laravel Daraja</title>
</head>
<body>
    <div class="container">
       
        <div class="row mt-5">
            <div class="col-sm-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Obtain Access Token
                    </div>
                    <div class="card-body">
                        <button class="btn btn-primary">Request Access Token</button>
                    </div>
                </div>

                <div class="card mt-5">
                    <div class="card-header">Register URLs</div>
                    <div class="card-body"> 
                        <button class="btn btn-primary">Register URLs</button>
                    </div>
                </div>

                <div class="card mt-5">
                    <div class="card-header">Simulate Transaction</div>
                    <div class="card-body">
                        <form action="">
                            @csrf
                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input type="number" name="amount" class="form-control" id="amount">
                            </div>
                            <div class="form-group">
                                <label for="account">Account</label>
                                <input type="text" name="account" class="form-control" id="account">
                            </div>
                            <button class="btn btn-primary">Simulate Payment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
</body>
</html>