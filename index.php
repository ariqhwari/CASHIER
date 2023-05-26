<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>Login</title>
    <!-- 👇 css 👇 -->
    <link rel="stylesheet" href="src/css/bootstrap.min.css" />
</head>

<body class="bg-light">
    <!-- auto responsive navigation bar -->
    <nav id="navbar" class="navibar">
    </nav>

    <!-- 👇 content 👇 -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 offset-md-4 bg-white shadow p-5">
                <h4 class="text-center" style="color:#7D1A1A"><b>$mallCashier</b></h4>
                <div class="text-center"><img src="src/logo.png" width="120"></div>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="">E-mail</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <button class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>

    <!-- 👇 javascript 👇 -->
    <script src="src/js/bootstrap.bundle.min.js"></script>
</body>

</html>