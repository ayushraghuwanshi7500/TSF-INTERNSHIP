<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>TSF INTERNSHIP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous" />
    <style>
    a:hover{
        text-decoration: none;
    }
    a:hover h5{
        
        font-size: 1.3rem;
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
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/createUser">Create a User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/makeTransaction">Make a Transaction</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/transactionHistory">Transaction History</a>
                </li>
            </ul>

        </div>
    </nav>
    <br>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div style="text-align: center;">
                    <img style="text-align: center;" src="https://media-exp1.licdn.com/dms/image/C560BAQFgHU3sTF4LfQ/company-logo_200_200/0/1519895156650?e=2159024400&v=beta&t=1iqBaESC2l4UUW7JjEjq0R_HQhwRTaaqyQG1k46q4bs" alt="" width="100" height="100">
                    <h1 style="text-align:center;">Welcome, to T.S.F. Bank</h1>

                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-4">
                <a href="/createUser" style="color: black;">
                    <div class="card">
                        <div class="card-body row">
                            <div class="col col-lg-8">
                                <h5 class="card-title">Create User</h5>
                            </div>
                            <div class="col col-lg-4">
                                <i class="fas fa-user  fa-3x"></i>

                            </div>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="/makeTransaction" style="color: black;">
                    <div class="card">
                        <div class="card-body row">
                            <div class="col col-lg-8">
                                <h5 class="card-title">Make a Transaction</h5>
                            </div>
                            <div class="col col-lg-4">
                                <i class="fas fa-money-check-alt fa-3x"></i>

                            </div>


                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="/transactionHistory" style="color: black;">
                    <div class="card">
                        <div class="card-body row">
                            <div class="col col-lg-8">
                                <h5 class="card-title">Transaction History</h5>
                            </div>
                            <div class="col col-lg-4">
                                <i class="fas fa-history fa-3x"></i>
                            </div>


                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
</body>

</html>