<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card w-25">
            <div class="card-body">
                <div class="card-title text-center fs-2">LOGIN</div>
                <div class="mb-2">
                    <label for="inputUsernamed5" class="form-label">Username</label>
                    <input type="text" id="inputUsernamed5" class="form-control">
                </div>
                <div class="mb-4">
                    <label for="inputPassword5" class="form-label">Password</label>
                    <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                    <div id="passwordHelpBlock" class="form-text">
                        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="/" class="text-decoration-none">
                        <button type="button" class="btn btn-primary">Login</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- import bootstap javascript -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>