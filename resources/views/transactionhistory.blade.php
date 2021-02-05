<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>TRANSACTION HISTORY</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        /* Automatic Serial Number Row */
        .css-serial {
            counter-reset: serial-number;
            /* Set the serial number counter to 0 */
        }

        .css-serial td:first-child:before {
            counter-increment: serial-number;
            /* Increment the serial number counter */
            content: counter(serial-number);
            /* Display the counter */
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <h2>T.S.F. BANK</h2>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/createUser">Create User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/makeTransaction">Make a Transaction</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/transactionHistory">Transaction History<span class="sr-only">(current)</span></a>
                </li>
            </ul>

        </div>
    </nav>
    <br>
    <div class="container">
        <div class="jumbotron">
            <h3 style="text-align: center;">Transaction History</h3>
            <br>
            <table style="background-color: #e9ecef;" class="table table-hover table-bordered css-serial">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" style="text-align: center;">Sr. No.</th>
                        <th scope="col" style="text-align: center;">Sender</th>
                        <th scope="col" style="text-align: center;">Reciever</th>
                        <th scope="col" style="text-align: center;">Amount</th>
                        <th scope="col" style="text-align: center;">Date and Time of Transaction</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($transactions as $transaction)
                    <tr>
                        <td scope="row" style="text-align: center;"></td>
                        <td style="text-align: center;">{{$transaction['sender']}}</td>
                        <td style="text-align: center;">{{$transaction['reciver']}}</td>
                        <td style="text-align: center;">{{$transaction['amt_transfer']}}</td>
                        <td style="text-align: center;">{{$transaction['created_at']}}</td>
                    </tr>
                    
                    @endforeach
                </tbody>
            </table>

        </div>

    </div>
</body>