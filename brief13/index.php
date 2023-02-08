<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Item - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <!-- my-css> -->
    <link href="interface.css" rel="stylesheet" />
    <!-- kitt -->
    <script src="https://kit.fontawesome.com/2ff52a64bf.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!"><img src="pic/logo.png" alt="logo" class="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">All Products</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                            <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Product section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="pic/villawood.jpg" alt="villawood" />
                </div>
                <div class="col-md-6">
                    <div class="small mb-1"></div>
                    <h1 class="display-5 fw-bolder">Villa Wood</h1>
                    <div class="fs-5 mb-5">
                        <span class="text-decoration-line-through">$45.00</span>
                        <span>$40.00</span>
                    </div>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium at dolorem
                        quidem modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius blanditiis
                        delectus ipsam minima ea iste laborum vero?</p>
                    <div class="d-flex">
                        <button class="btn btn-outline-dark flex-shrink-0" type="button">
                            <i class="bi-cart-fill me-1"></i>
                            Add to cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related items section-->
    <section class="py-5 bg-light">
        <div class="container px-4 px-lg-5 mt-5">
            <form action="" method="POST">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Search</span>

                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" name="search">
                    <button name="">
                        <i class="fa-solid fa-magnifying-glass" id="searchicon"></i>
                    </button>
                </div>
                <div class="options">
                    <button class="rounded-pill"><a href="add.php" class="text-decoration-none">Add</a></button><br>
                    <span>min :</span>
                    <input type="number" name="min" placeholder="min prix" id="" class="data-insert"><br>
                    <span>max :</span>
                    <input type="number" name="max" placeholder="max prix" id="" class="data-insert"><br>
                    <select name="Type" id="select">
                        <option selected></option>
                        <option value="Location">Location</option>
                        <option value="Vente">Vente</option>
                    </select>
                </div>
                <input type="submit" name="Search" value="search">
            </form>
            <h2 class="fw-bolder mb-4">Related products</h2>
            <div class=" row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 d-flex">
                <?php
                    $server = 'localhost';
                    $username = 'root';
                    $password = '';
                    $basededonné = 'db';
        
                    $conenection = new mysqli ($server, $username, $password, $basededonné );
        
                    if($conenection->connect_error) {
                        die('Connection failed: '. $conenection->connect_error);
                        }
        
                        //select ALL
                        if(isset($_POST["Search"]))
                        {
                            $Min = $_POST["min"];
                            $Max = $_POST["max"];
                            $Type = $_POST["Type"];

                            $Search = "SELECT * FROM annonce";
                            $response = $conenection->query($Search);
                            while ($champ = $response->fetch_assoc())
                    {
                        echo "
                        <div class='card h-100'>
                        <!-- Product image-->
                        <img class='card-img-top' src='pic/".$champ["image"]."' alt='...' />
                        <!-- Product details-->
                        <div class='card-body p-4'>
                            <div class='text-center'>
                                <!-- Product name-->
                                <h5 class='fw-bolder'>".$champ["titre"]."</h5>
                                <h5 class='fw-bolder'>".$champ["adresse"]."</h5>
                                <h5 class='fw-bolder'>".$champ["description"]."</h5>
                                <h5 class='fw-bolder'></h5>
                                <h5 class='fw-bolder'></h5>
                                <!-- Product price-->
                                <h5 class='fw-bolder'>".$champ["montant"]."</h5>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class='card-footer p-4 pt-0 border-top-0 bg-transparent'>
                            <div class='text-center'>
                                <a class='btn btn-outline-dark mt-auto' href='Edit.php'>Edit</a>
                                <form action='' method='POST'>
                                <input type='submit' name='delete' value='Clear Data'>
                                <input type='hidden'  id=".$champ["id"].">
                            </form>
                            </div>
                        </div>

                        ";
                    }}
                        //select montant and type
                                if(isset($_POST["Search"]))
                                {
                                    $Min = $_POST["min"];
                                    $Max = $_POST["max"];
                                    $Type = $_POST["Type"];

                                    $Search = "SELECT * FROM annonce WHERE Montant BETWEEN '$Min' AND '$Max' AND type_annonce = '$Type'";
                                    $response = $conenection->query($Search);
                                    while ($champ = $response->fetch_assoc())
                            {
                                echo "
                                <div class='card h-100'>
                                <!-- Product image-->
                                <img class='card-img-top' src='pic/".$champ["image"]."' alt='...' />
                                <!-- Product details-->
                                <div class='card-body p-4'>
                                    <div class='text-center'>
                                        <!-- Product name-->
                                        <h5 class='fw-bolder'>".$champ["titre"]."</h5>
                                        <h5 class='fw-bolder'>".$champ["adresse"]."</h5>
                                        <h5 class='fw-bolder'>".$champ["description"]."</h5>
                                        <h5 class='fw-bolder'></h5>
                                        <h5 class='fw-bolder'></h5>
                                        <!-- Product price-->
                                        <h5 class='fw-bolder'>".$champ["montant"]."</h5>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class='card-footer p-4 pt-0 border-top-0 bg-transparent'>
                                    <div class='text-center'>
                                        <a class='btn btn-outline-dark mt-auto' href='Edit.php'>Edit</a>
                                        <form action='' method='POST'>
                                    <input type='submit' name='delete' value='Clear Data'>
                                    <input type='hidden'  id=".$champ["id"].">
                                </form>
                                    </div>
                                </div>

                                ";
                            }
                            //select type
                                }if(isset($_POST["Search"])){
                                    $Type = $_POST["Type"];
                                    $Search = "SELECT * FROM annonce WHERE type_annonce = '$Type'";
                                        $response = $conenection->query($Search);
                                        while ($champ = $response->fetch_assoc()){
    
                                
                                
                                    echo "
                                    <div class='card h-100'>
                                    <!-- Product image-->
                                    <img class='card-img-top' src='pic/".$champ["image"]."' alt='...' />
                                    <!-- Product details-->
                                    <div class='card-body p-4'>
                                        <div class='text-center'>
                                            <!-- Product name-->
                                            <h5 class='fw-bolder'>".$champ["titre"]."</h5>
                                            <h5 class='fw-bolder'>".$champ["adresse"]."</h5>
                                            <h5 class='fw-bolder'>".$champ["description"]."</h5>
                                            <h5 class='fw-bolder'></h5>
                                            <h5 class='fw-bolder'></h5>
                                            <!-- Product price-->
                                            <h5 class='fw-bolder'>".$champ["montant"]."</h5>
                                        </div>
                                    </div>
                                    <!-- Product actions-->
                                    <div class='card-footer p-4 pt-0 border-top-0 bg-transparent'>
                                        <div class='text-center'>
                                            <a class='btn btn-outline-dark mt-auto' href='Edit.php'>Edit</a>
                                            <form action='' method='POST'>
                                    <input type='submit' name='delete' value='Clear Data'>
                                    <input type='hidden'  id=".$champ["id"].">
                                </form>
                                        </div>
                                    </div>
    
                                    ";}
                                }
                                //select montant
                                if(isset($_POST["Search"])){
                                    $Min = $_POST["min"];
                                    $Max = $_POST["max"];
                                    $Search = "SELECT * FROM annonce WHERE Montant BETWEEN '$Min' AND '$Max'";
                                    $response = $conenection->query($Search);
                                    while ($champ = $response->fetch_assoc())
                            {
                                echo "
                                <div class='card h-100'>
                                <!-- Product image-->
                                <img class='card-img-top' src='pic/".$champ["image"]."' alt='...' />
                                <!-- Product details-->
                                <div class='card-body p-4'>
                                    <div class='text-center'>
                                        <!-- Product name-->
                                        <h5 class='fw-bolder'>".$champ["titre"]."</h5>
                                        <h5 class='fw-bolder'>".$champ["adresse"]."</h5>
                                        <h5 class='fw-bolder'>".$champ["description"]."</h5>
                                        <h5 class='fw-bolder'></h5>
                                        <h5 class='fw-bolder'></h5>
                                        <!-- Product price-->
                                        <h5 class='fw-bolder'>".$champ["montant"]."</h5>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class='card-footer p-4 pt-0 border-top-0 bg-transparent'>
                                    <div class='text-center'>
                                        <a class='btn btn-outline-dark mt-auto' href='Edit.php'>Edit</a>
                                        <form action='' method='POST'>
                                    <input type='submit' name='delete' value='Clear Data'>
                                    <input type='hidden'  id=".$champ["id"].">
                                </form>
                                    </div>
                                </div>

                                ";
                            }

                                }

                                else
                                {
                                    $sql = "SELECT * FROM annonce";
                                $result = $conenection->query($sql);
                                while ($row = $result->fetch_assoc())
                    {
                        echo "<form action='' method='POST'>
                        <div class='card h-100 '>
                        <!-- Product image-->
                        <img class='card-img-top' src='pic/".$row["image"]."' alt='...' />
                        <!-- Product details-->
                        <div class='card-body p-4'>
                            <div class='text-center'>
                                <!-- Product name-->
                                <h5 class='fw-bolder'>Titre : ".$row["titre"]."</h5>
                                <h5 class='fw-bolder'>adresse : ".$row["adresse"]."</h5>
                                <h5 class='fw-bolder'>description : ".$row["description"]."</h5>
                                
                                <!-- Product price-->
                                <h5 class='fw-bolder'>montant : ".$row["montant"]."</h5>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class='card-footer p-4 pt-0 border-top-0 bg-transparent'>
                            <div class='text-center'>
                                <a class='btn btn-outline-dark mt-auto' href='Edit.php'>Edit</a>
                                <form action='' method='POST'>
                                    <input type='submit' name='delete' value='Clear Data'>
                                    <input type='hidden' name='id' id=".$row["id"].">
                                </form>
                            </div>
                        </div>
                        
                            </div>
                            </form>
                        ";
                    }
                    
                                }
                               
                ?>
                <?php
                    //////insert(add) ///////////
                    if(isset($_POST['insert']))
                    {
                        $hostname = "localhost";
                        $username = "root";
                        $password = "";
                        $databaseName = "db";
                    
                        // obtenir des valeurs sous forme de texte et de nombre .....
                    
                        $Titre = $_POST['titre'];
                        $Image = $_POST['image'];
                        $Description = $_POST['description'];
                        $Superficie = $_POST['superficie'];
                        $Adresse = $_POST['adress'];
                        $Montant = $_POST['montant'];
                        $Annone_Date = $_POST['date_dannonce'];
                        $Type_Annonce = $_POST['type_dannonce'];
                    
                        // connect mysql data
                    
                        $connect = mysqli_connect($hostname, $username, $password, $databaseName);
                    
                        // mysql pour insérer des données
                    
                        $query = "INSERT INTO `annonce`(`titre`, `image`, `description`, `superficie`,  `adress`,  `montant`, `date_dannonce`, `type_dannonce`) VALUES ('$Titre','$Image','$Description' ,'$Superficie' ,'$Adresse' ,'$Montant' ,'$Annone_Date' ,'$Type_Annonce')";
                    
                        $result = mysqli_query($connect,$query);
                    
                        // vérifier 
                    
                        if($result)
                        {
                            echo 'Données insérées';
                        }
                    
                        else{
                            echo 'Données non insérées';
                        }
                        mysqli_free_result($result);
                        mysqli_close($connect);
                       
                    }

                    

                    
                ?>
                <?php
                // if (isset($_POST['delete'])) {
                //     $hostname = "localhost";
                //     $username = "root";
                //     $password = "";
                //     $databaseName = "db";
                //     $connect = mysqli_connect($hostname, $username, $password, $databaseName);
                    
                //     $id = $_POST['id'];
                //     $sql = "DELETE FROM annonce WHERE id=$id";

                //     if (mysqli_query($connect, $sql)) {
                //         header("Refresh:0");
                //     } else {
                //         echo "Error deleting record";
                //     }
                //     mysqli_close($connect);
                //     }
                
                
                
                
                
                ?>
                <?php
  if(isset($_POST['update']))
  {
      $hostname = "localhost";
      $username = "root";
      $password = "";
      $databaseName = "db";
  
      // obtenir des valeurs sous forme de texte et de nombre .....
  
      $Titre = $_POST['titre'];
      $Image = $_POST['image'];
      $Description = $_POST['description'];
      $Superficie = $_POST['superficie'];
      $Adresse = $_POST['adress'];
      $Montant = $_POST['montant'];
      $Annone_Date = $_POST['date_dannonce'];
      $Type_Annonce = $_POST['type_dannonce'];
  
      // connect mysql data
                
      $connect = mysqli_connect($hostname, $username, $password, $databaseName);
  
      // mysql pour insérer des données
  
      $query = "UPDATE `annonce` SET `titre`='[$Titre]',`image`='[$Image]',`description`='[$Description]',`superficie`='[$Superficie]',`adress`='[$Adresse]',`montant`='[$Montant]',`date_dannonce`='[$Annone_Date]',`type_dannonce`='[$Type_Annonce]'";
      $result = mysqli_query($connect,$query);
  
      // vérifier 
  
      if($result)
      {
          echo 'Données insérées';
      }
  
      else{
          echo 'Données non insérées';
      }
      mysqli_free_result($result);
      mysqli_close($connect);
    }
                ?>
            </div>
    </section>

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>