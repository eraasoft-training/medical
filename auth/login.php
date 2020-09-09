<?php require_once "../app.php"; ?>

<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="<?php echo URL; ?>assets/css/bootstrap.css">

<title>Login</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-6 mx-auto my-5">
            <div class="card ">
                <div class="card-header">
                    <h3 class="text-center">Login</h3>
                    <?php 
                        if(isset($_POST['submit'])) {
                            // decomposing and preparation
                            foreach ($_POST as $key => $value) {
                                $$key = prepareInput($value);
                            }

                            // validation
                            // email: required, email, max:100
                            if(! isRequired($email)) {
                                $errors['email'] = "required";
                            } elseif(! isEmail($email)) {
                                $errors['email'] = "must be valid email";
                            } elseif(! isNotMoreThan($email, 100)) {
                                $errors['email'] = "must be <= 100";
                            }

                            // password: required, string, max:255
                            if(! isRequired($password)) {
                                $errors['password'] = "required";
                            } elseif(! isString($password)) {
                                $errors['password'] = "must be string";
                            } elseif(! isNotMoreThan($password, 255)) {
                                $errors['password'] = "must be <= 255";
                            }

                            // if validation passes
                            if(empty($errors)) {
                                
                                // get admin row from database
                                $admin = getOne("admins", "admin_email = '$email'");

                                if(! empty($admin)) {
                                    // check that password matches saved in db
                                    $passwordMatches = password_verify($password, $admin['admin_password']);

                                    if($passwordMatches) {
                                        // store admin data in session 
                                        setSession('id', $admin['admin_id']);
                                        setSession('name', $admin['admin_name']);
                                        setSession('email', $admin['admin_email']);
                                        setSession('type', $admin['admin_type']);

                                        // redirect to admin/index.php
                                        redirect("admin/index.php");
                                    } else {
                                        $errors['password'] = "not correct";
                                    }

                                } else {
                                    $errors['email'] = "not correct";
                                }
                            }
                        }
                    ?>

                    <div>
                        <form class="border p-5 my-3 " method="POST" action="">
                            <div class="form-group">
                                <label for="email"  class="text-dark ">Email <?php getError('email');  ?></label>
                                <input type="email" name="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="password"  class="text-dark ">Password <?php getError('password');  ?></label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo URL; ?>assets/js/jquery-3.5.1.slim.min.js"></script>
<script src="<?php echo URL; ?>assets/js/bootstrap.js"></script>
</body>
</html>
