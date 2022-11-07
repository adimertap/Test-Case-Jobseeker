<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test Case 1 - ADIM</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    
    <style>
        .btn-pink{
            background-color: #E4017E;
        }
        .btn-pink:hover{
            background-color: #050774;
        }
        .text-pink{
            color: #E4017E;
        }
        .search-bar{
            width: 100%;
            max-width: 1000px;
            background: rgba(255, 255, 255, 0.2);
            align-items: center;
            display: flex;
            border-radius: 100px;
            padding: 10px 20px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            
        }
        .search-bar input{
            background: transparent;
            flex: 1;
            border: 0;
            outline: none;
            padding: 24px 20px;
            font-size: 20px;
            color: black;
        }
        .search-bar button img{
            width: 25px;
        }
        .search-bar button{
            border: 0;
            border-radius: 50%;
            width: 70px;
            height: 70px;
            background: #E4017E;
            cursor: pointer;
        }
        
        
        
    </style>
</head>
<body>
    <main class="main" id="top">
        <div class="" data-layout="container">
            <div class="content">
                @yield('content')
            </div>
        </div>
    </main>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
</body>
</html>
