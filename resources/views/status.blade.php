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
                    <div class="card-header">Transaction Status Check</div>
                    <div class="card-body">
                        <div id="c2b_response"></div>
                        <form action="">
                            @csrf

                            <div class="form-group">
                                <label for="transactionid">Transaction ID</label>
                                <input type="text" name="transactionid" class="form-control" id="transactionid">
                            </div>
                            <button id="status" class="btn btn-primary">Check Transaction</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>