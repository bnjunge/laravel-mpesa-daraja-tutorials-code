<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel Daraja</title>
</head>
<body>
    <div class="container">
       
        <div class="row mt-5">
            <div class="col-sm-8 mx-auto">
                <div class="card mt-5">
                    <div class="card-header">Stk Transaction</div>
                    <div class="card-body">
                        <div id="c2b_response"></div>
                        <form action="">
                            @csrf
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="number" name="phone" class="form-control" id="phone">
                            </div>
                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input type="number" name="amount" class="form-control" id="amount">
                            </div>
                            <div class="form-group">
                                <label for="account">Occasion</label>
                                <input type="text" name="occasion" class="form-control" id="occasion">
                            </div>
                            <div class="form-group">
                                <label for="account">Rematks</label>
                                <input type="text" name="remarks" class="form-control" id="remarks">
                            </div>
                            <button id="simulateb2c" class="btn btn-primary">Simulate B2C</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>