<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>MAKE A TRANSACTION</title>
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
                <li class="nav-item ">
                    <a class="nav-link" href="/createUser">Create User</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/makeTransaction">Make a Transaction<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/transactionHistory">Transaction History</a>
                </li>
            </ul>

        </div>
    </nav>
    <br>
    <div class="container">
        <div class="jumbotron">
            <h3 style="text-align: center;">Make a Transaction</h3>
            <br>
            <table style="background-color: #e9ecef;" class="table table-hover table-bordered css-serial">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" style="text-align: center;">Sr. No.</th>
                        <th scope="col" style="text-align: center;">Name</th>
                        <th scope="col" style="text-align: center;">Email Address</th>
                        <th scope="col" style="text-align: center;">Balance</th>
                        <th scope="col" style="text-align: center;">Account Created At</th>
                        <th scope="col" style="text-align: center;">Action</th>
                    </tr>
                </thead>
                <tbody >
                    @foreach($users as $user)
                    <tr>

                        <td scope="row" style="text-align: center;"></td>

                        <td style="text-align: center;">{{$user['username']}}</td>
                        <td style="text-align: center;">{{$user['email']}}</td>
                        <td style="text-align: center;">{{$user['balance']}}</td>
                        <td style="text-align: center;">{{$user['created_at']}}</td>
                        <td style="text-align: center;">
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#b{{$user['id']}}">Transact</button>

                            <button type="button" id="{{$user['username']}}" class="btn btn-secondary" data-toggle="modal" data-target="#a{{$user['id']}}"> Remove</button>

                        </td>
                        <div class="modal fade" id="a{{$user['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Remove User</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to remove user ?
                                        <hr>
                                        <p> <strong>Name:</strong> {{$user['username']}} </p>
                                        <p><strong>Email:</strong> {{$user['email']}}</p>
                                        <p><strong>Balance:</strong> {{$user['balance']}} </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <a href="delete/{{$user['id']}}"><button type="button" class="btn btn-primary">Yes, remove</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="b{{$user['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Transaction Details</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="maketransaction" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group row">
                                                <label class="col-lg-2 " for="sender">
                                                    <h6>From:</h6>
                                                </label>
                                                <input type="text" placeholder="Enter the name of the user" class="form-control col-lg-9 text-left" id="name" name="sender" aria-describedby="name" value="{{$user['username']}}" readonly>

                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-2 " for="reciver">
                                                    <h6>To: </h6>
                                                </label>
                                                <select class="form-control col-lg-9 text-left" aria-placeholder="" type="number" oninput="dropdown(this.id)"  name="reciver"  id="a$abc{{$user['balance']}}a{{$user['id']}}" required>
                                                    <option disabled selected>Select to whom who want to send the money</option>
                                                    @foreach($users as $myuser)
                                                    @if($myuser['id']!=$user['id'])
                                                    <option value="{{$myuser['username']}}">{{$myuser['username']}}</option>
                                                    @endif
                                                    @endforeach
                                                </select>

                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-2 " for="amt_transfer">
                                                    <h6>Amount: </h6>
                                                </label>
                                                <input type="number" value=1 placeholder="Enter the amount you want to transfer" class="form-control col-lg-9 text-left" oninput="validate(this.id)" id="{{$user['balance']}}a{{$user['id']}}" name="amt_transfer" aria-describedby="name" required>


                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-2">

                                                </label>
                                                <small id="amount" style="color:red;" class="form-text">You cannot transfer more than {{$user['balance']}} Rs. </small>

                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" value="Submit" class="btn btn-primary" id="abc{{$user['balance']}}a{{$user['id']}}" onclick="myfunc()" disabled>Make Transaction</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </tr>



                    @endforeach

                </tbody>
            </table>

        </div>

    </div>
    <script>
        function myfunc() {
            alert("Transaction Successful!");
        }
        function validate(id){
            var balance=id.split('a');
            var myval=document.getElementById(id).value;
            
            if(parseInt(myval)>parseInt(balance[0])){
                document.getElementById("abc"+id).disabled=true;
            }
            else{
                document.getElementById("abc"+id).disabled=false;
            }
        }
        function dropdown(id){
            var drop=id.split('$');
            if(document.getElementById(id).value!="Select to whom who want to send the money"){
                document.getElementById(drop[1]).disabled=false;
            }
        }
    </script>
</body>