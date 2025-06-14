<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forgetStyle.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="icon" href="resource/lunar_arcade_logo_edit.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <title>LA-Reset Password</title>
</head>

<!-- <body>

        <div class="signIn_Box" id="signInBox"> 

            <h2 class="text-center">Reset Password</h2>

            <div class="d-none">
                <input type="hidden" id="vcode"/>
            </div>

            <div class="mt-4 "> 
                <i class="bi bi-person"></i>
                <label for="form-label">password:</label>
                <input type="password" class="form-control" id="np"/>
            </div>

            <div class="mt-4 mb-4 "> 
                <i class="bi bi-person"></i>
                <label for="form-label">Re-enter password:</label>
                <input type="password" class="form-control" id="np2"/>
            </div>

            <div class="d-none alert" id="msgDiv">
                <div class="alert alert-danger" id="msg"></div>
            </div>

            <div class="mt-4">
                <button class="btn btn-secondary col-12">Send email</button>
            </div>


         </div>
    
    </body> -->

<body>
    <div class="animated-bg">
        <div class="floating-shapes">
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
    </div>

    <div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center">
        <div class="row w-100 justify-content-center">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="glass-container">
                    <div class="logo-container">
                        <div class="logo-icon">
                            <i class="fas fa-key text-white fa-2x"></i>
                        </div>
                        <h2 class="text-white mb-1 fw-bold">Reset Password</h2>
                        <p class="text-white-50 mb-0">Create a strong new password</p>
                    </div>

                    <!-- You can show success/error messages here -->


                    
                    <div class="d-none">
                        <input type="hidden" id="vcode" value="<?php echo($_GET["vcode"])?>"/>
                    </div>


                    <div class="form-floating position-relative">
                        <input type="password" class="form-control" id="np" class="form-control" placeholder="New Password" required>
                        <label for="form-label">New Password</label>
                    </div>

                    <!-- <div class="password-strength" id="passwordStrength">
                            <small class="text-white-50">Password strength: <span id="strengthText">Weak</span></small>
                            <div class="strength-bar" id="strengthBar"></div>
                        </div> -->

                    <div class="form-floating position-relative">
                        <input type="password" class="form-control" id="np2" class="form-control" placeholder="Confirm Password" required>
                        <label for="form-label">Confirm Password</label>
                    </div>

                    <div class="d-grid gap-2 mb-4">
                        <button type="submit" class="btn btn-reset text-white" onclick="resetPassword();">
                            Reset Password
                        </button>
                    </div>

                    <div class="text-center">
                        <a href="signin.php" class="back-link">
                            <i class="fas fa-arrow-left me-2"></i>Back to Login
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
    <script src="bootstrap.bundle.js"></script>

</body>

</html>