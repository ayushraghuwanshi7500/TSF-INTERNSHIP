<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>CREATE USER</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>

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
                <li class="nav-item  active">
                    <a class="nav-link" href="/createUser">Create User<span class="sr-only">(current)</span></a>
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
    
    @include('inc.messages')
    
    <div class="container">
        <div class="jumbotron">
            <h3 style="text-align: center;">Create User</h3>
            <br>
            <form action="submit" method="POST">
                @csrf
                <div class="form-group row">
                    <label class="col-lg-4 text-center" for="name">
                        <h6>Name</h6>
                    </label>
                    <input type="text" placeholder="Enter the name of the user" class="form-control col-lg-6 text-left validate" id="name" name="username" aria-describedby="name" oninput="validate()" required>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 text-center" for="emailid">
                        <h6>Email address</h6>
                    </label>
                    <input type="email" placeholder="Enter the email address of the user" class="form-control col-lg-6 text-left validate" id="emailid" name="email" aria-describedby="emailHelp" oninput="validate()"  required>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 text-center" for="balance">
                        <h6>Balance in Account</h6>
                    </label>
                    <input type="number" placeholder="Enter the balance in the account of the user" class="form-control col-lg-6 text-left validate" id="balance" name="balance" aria-describedby="balance" oninput="validate()"  required>
                </div>
                <br>
                <div class="form-group row">
                    <div class="col col-lg-12 text-center">
                        <button type="submit" value="Submit" id="create" class="btn btn-success" onclick="myfunc()" disabled>Create User</button>
                        <button type="button" class="btn btn-danger" onclick="resetinfo()">Reset Info</button>
                    </div>
                </div>


            </form>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    </div>
    <script>
        function myfunc(){
            alert("User Created Successfully!");
        }
        function resetinfo(){
            $('#create').attr('disabled' , true);
            document.getElementById('name').value="";
            document.getElementById('emailid').value="";
            document.getElementById('balance').value="";
        }
        function validate(){
            check=false;
            var validateList=document.getElementsByClassName('validate');
            for(var i=0;i<validateList.length;i++){
                if(validateList[i].value==""){
                    check=true;
                    break
                }
                check=false;
            }
            document.getElementById('create').disabled=check;
        }
    </script>

</body>