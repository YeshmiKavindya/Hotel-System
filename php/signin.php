<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="../css/signin.css">
    <title>Signin</title>
</head>
<body>


    
        <div class="login">
            <div class="content text-and text-bg-secondary p-3 bg-opacity-50 bg-body-tertiary">
                <form id="loginForm" action="" method="post" style="color: black;margin:2em;padding:2em;">
                    <center><h3>Login</h3></center>
                    <br>
                    <div >
                        <label for="username">Username</label>
                        <input type="email" class="form-control" name="username" placeholder="Enter your email" required/>
                    </div>
                    <br>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" class="form-control"  name="password" id="pword" placeholder="Enter your password" required/>
                    </div>
                    <div>
                        <input type="checkbox" class="form-check-input" name=""  onclick="show()">
                        <label for="showpassword" style="font-weight:bold;">show password</label>
                    </div>
                    
                    <br>

                    <div class="d-grid gap-2 col-4 mx-auto">
                        <input type="submit" name="submit" value="Sign in" class="form-control">
                    </div>
                    <center><label for="signup"><a href="">Forgot Password | </a><a href="signup.php">create a account</a></label></center>   

                </form>
            </div>
        </div>
    
        <?php

            require_once '../php/functions/dbconf.php';

            try{if(isset($_POST['submit'])){
                $name = $_POST['username'];
                $password = $_POST['password'];

                $sql="SELECT password FROM customers WHERE name='$name'";

                $result = mysqli_query($connect,$sql);

                $row = mysqli_fetch_assoc($result);
                $hash = $row['password'];

                if(password_verify($password,$hash)){
                    echo "<script>
                            document.getElementById('loginForm').reset();
                            window.open('../php/dashboard.php', '_blank');  
                            window.location.href = 'index.php'; 
                        </script>";
                }else{
                    echo "<script>
                            alert('Password is incorrect! Try Again');
                            document.getElementById('loginForm').reset();
                        </script>";
                }
            }
            }catch(Exception $e)
            {}
                
        ?>

        <script type="text/javascript">
            function show(){
                var input = document.getElementById('pword')
                if(input.type == "password"){
                    input.type='text'
                }else{
                    input.type='password'
                }

            }

        </script>
    
        <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>