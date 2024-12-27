<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="../css/signin.css">
    <title>Signup</title>
</head>
<body>


    
        <div class="login">
            <div class="content text-and text-bg-secondary p-3 bg-opacity-50 bg-body-tertiary">
                <form id="loginForm"action="" method="post" style="color: black;margin:2em;padding:2em;">
                    <center><h3>Sign Up</h3></center>
                    <br>
                    <div >
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username"required/>
                    </div>
                    <br>
                    <div >
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" required/>
                    </div>
                    <br>
                    <div >
                        <label for="phone">PhoneNo</label>
                        <input type="text" class="form-control" name="phone" required/>
                    </div>
                    <br>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" class="form-control"  name="password" id="pword" required/>
                    </div>
                    <br>
                    <div>
                        <label for="confirmpassword">Confirm Password</label>
                        <input type="password" class="form-control"  name="confpassword" id="confpword" required/>
                    </div>
                    <div>
                        <input type="checkbox" class="form-check-input" name=""  onclick="show()">
                        <label for="showpassword" style="font-weight:bold;">show password</label>
                    </div>
                    <br>
                    <div>
                        <label for="msg">

                        </label>
                    </div>

                    <div class="d-grid gap-2 col-4 mx-auto">
                        <input type="submit" name="submit" value="Sign up" class="form-control">
                    </div>

                </form>
            </div>
        </div>

        <?php
            require_once '../php/functions/dbconf.php' ;
            try{

                if(isset($_POST['submit'])){
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $password = $_POST['password'];
                    $confpassword = $_POST['confpassword'];
    
                    if($password == $confpassword){
                        $hash = password_hash($password,PASSWORD_DEFAULT);
    
                        $sql = "INSERT INTO customers (name,email,phone,password) VALUES ('$username','$email','$phone','$hash')";
    
                        $result = mysqli_query($connect,$sql);
    
                        echo "<script>
                            alert('Registered Successfully!');
                            document.getElementById('loginForm').reset();
                            
                        </script>";
                    }else{

                        echo "<script>
                            alert('Incorrect Password!Try Again');
                            document.getElementById('loginForm').reset();    
                        </script>";
                    }
                }
                }catch(Exception $e){
                    
                }
                
        ?>
            
            
    
    

        <script type="text/javascript">
            function show(){
                var input = document.getElementById('pword')
                if(input.type == "password"){
                    input.type='text'
                }else{
                    input.type='password'
                }

                var input1=document.getElementById('confpword')
                if(input1.type == "password"){
                    input1.type='text'
                }else{
                    input1.type='password'
                }

            }

        </script>
    
        <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>