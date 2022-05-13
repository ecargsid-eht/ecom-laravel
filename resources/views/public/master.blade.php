<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Purnea Bazaar</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a href="" class="navbar-brand">Purnea Bazaar</a>

            <form action="" class="d-flex">
                <div class="input-group">
                <input type="text" name="search" id="" class="form-control">
                <input type="submit" value="Find" name="find" class="btn btn-dark">
                </div>
            </form>

            <ul class="navbar-nav">
                <li class="nav-item"><a href="{{ route('homepage') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">SignUp</a></li>
                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="{{ route('cart') }}" class="nav-link">Cart</a></li>
            </ul>
        </div>
    </nav>


    @section('content')
        
    @show
</body>
</html>