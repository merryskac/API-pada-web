<?php
    session_start();
    
    if(isset($_POST['email'])&& isset($_POST['pass'])){
        unset($_SESSION['email']);
            if($_POST['pass']=='admin'||$_POST['email']=='admin'){
                $_SESSION['email']=$_POST['email'];
                print_r($_SESSION);
                header('Location:index.php');
                return;
                }
            elseif($_POST['pass']=='user'||$_POST['email']=='user'){
                $_SESSION['email']=$_POST['email'];
                print_r($_SESSION);
                header('Location:index.php');
                return;
            }
            else{
                $_SESSION['fail']="Login gagal";
                header('Location:login.php');
                return;
            }
        }
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

    <title>Login to API kel 2</title>
    <style>
        *{
            font-family:'Poppins',Sans-serif;
        }
        form {
            display:flex;
            align-items:center;
            justify-content:center;
            
        }
        table {
            font-family:'Poppins',Sans-serif;
            margin:auto;
        }
        .inputan {
            margin-bottom:10px;
        }
        .isilogin {
            width:300px;
            margin-top:10%;
            border:2px solid black;
            border-radius:10px;
        }
        #submit{
            margin: 50px;
        }
    </style>
    </head>
    <body>

    <!-- <div class="container d-flex">
        <div class="row d-flex">
        <div class="col d-flex" > -->

        <!-- <?php
            if(isset($_SESSION['fail'])){
                echo('<p style="color:red;">Login gagal</p>');
                print_r($_SESSION);
                unset($_SESSION['fail']);
            }
        ?> -->
        <form action="" method="post">
            <div class="isilogin">
            <center><h2>API Kelompok 2</h2></center>
                <table>
                    <tr>
                        <td align="center">
                            <h1>LOGIN</h1>
                            <?php
                                if(isset($_SESSION['fail'])){
                                    echo('<p>'.$_SESSION['fail'].'</p>');
                                    unset($_SESSION['fail']);
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="email" placeholder="Username" class="inputan">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="password" name="pass" placeholder="Password"class="inputan">
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <input type="submit" value="SUBMIT" class="button">
                        </td>
                    </tr>
                    <tr>
                    <td align="center">
                            <p style="color:red;">Login required</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <center><font size=2 color="gray">
                                username: admin, <br> pass: admin <br>(untuk login sebagai admin) <br>
                                username: user, <br> pass: user <br>(untuk login sebagai user)
                            </font></center>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
<!-- </div>
</div>
</div> -->

    

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

  </body>
</html>

