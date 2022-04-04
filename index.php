<?php
      session_start();
        if(!isset( $_SESSION['email'])){
            die('Login required');
        }
      ?>
<!doctype html>
<html lang="en">
    
  <head>
    <!-- Bootstrap CSS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        *{
            font-family: "Poppins",Sans-serif;
        }
        #footer{
            padding: 30px
        }
        
    </style>

    <title>Movie API Kelompok 2</title>
  </head>
  <body>
  <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        
            <a class="navbar-brand" href="#">API Kelompok 2</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"><b>Logout</b></a>
                    </li>
                </ul>
            </div>
        </nav>

            <div class="row mt-3 ">
                <div class="col text-center">
                    <h1>Movie Catalog</h1>
                </div>
            </div>


            <div class="row mt-3">
                <div class="col">
                    <h6 style="color:darkgray;"> Search Movie</h6>
                </div>
            </div>

            <div class="row ">
                <div class="input-group mb-3">
                    <input type="text" id="search-input" class="form-control" placeholder="Movie title.." aria-label="Movie-title" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="search-button">Search</button>
                        </div>
                    </div>
                </div>
                <hr>
                <?php
            if($_SESSION['email']=='admin'){
                echo('<p style="color:gray;"><em>This can only be seen by admin</em></p>');
                echo('<h3>Anggota kelompok</h3>');
                echo('<ul>');
                echo('<li>F55120034 Merryska Christy Mait</li>');
                echo('<li>F55120002 Andi Suhriani</li>');
                echo('<li>F55120016 Imam Zaid</li>');
                echo('</ul>');
                echo('<p>Teknik Informatika UNTAD<br>');
                echo('Kelas A 2022<br>');
                echo('Dibuat untuk tugas mata kuliah <em>API</em></p>');

            }
        ?>
            <div class="row mb-3" id="movie-list">


            </div>
         </div>
            <div class="row">
            <footer style="background-color:lightgray;">
                <center><p id='footer' style='color: gray;'>2022 <br> Kelompok 2 API Kelas A <br>F55120034 | F55120002 | F55120016</p></center>
            </footer>
            </div>
   


            <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
        </button> -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>



    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  </body>
</html>