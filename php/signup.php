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
                <form action="" method="post" style="color: black;margin:2em;padding:2em;">
                    <center><h3>Login</h3></center>
                    <br>
                    <div >
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username"required/>
                    </div>
                    <br>
                    <div >
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email"required/>
                    </div>
                    <br>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" class="form-control"  name="password" id="pword" required/>
                    </div>
                    <br>
                    <div>
                        <label for="confirmpassword">Confirm Password</label>
                        <input type="password" class="form-control"  name="password" id="pword" required/>
                    </div>
                    <div>
                        <input type="checkbox" class="form-check-input" name=""  onclick="show()">
                        <label for="showpassword" style="font-weight:bold;">show password</label>
                    </div>
                    
                    <br>

                    <div class="d-grid gap-2 col-4 mx-auto">
                        <input type="submit" name="submit" value="Sign up" class="form-control">
                    </div>

                </form>
            </div>
        </div>
    
    

        <script type="text/javascript">
            function show(){
                var input1 = document.getElementById('pword1')
                var input2 = documnet.getElementById('pword2')
                if(input1.type == "password" && input2.type == "password"){
                    input1.type='text'
                    input2.type = "text"
                }else{
                    input1.type='password'
                    input2.type="password"
                }

            }

        </script>
    
        <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>