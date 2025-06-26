<?php
session_start();
require 'config.php';  // Page php qui se connecte à la base de donnée  

// Vérifier si l'utilisateur est connecté 
if (!isset($_SESSION['user_id'])) {
    die("Accès refusé ! Connexion obligatoire !");
}

$user_id = $_SESSION['user_id'];

$ingre = "SELECT nom,description,prix FROM plat";
$req = $db->prepare($ingre);
$req->execute();
$plats = $req->fetchAll(PDO::FETCH_ASSOC);


$db = null;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Caveat' rel='stylesheet'>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="menu.css">
    <title>Mes Recettes</title>
</head>

<body>
<nav>
        <a  href="index.php">Accueil</a>
        <a class="active" href="menu.php">Mes Recettes</a>
        <a  href="creationrecette.php">Creer Recettes</a>
        <div class="dropdown2">
            <button class="dropbtn2"><a href="#"><img src="https://static.vecteezy.com/system/resources/previews/011/947/163/non_2x/gold-user-icon-free-png.png" alt="icone profil"></a></button>
            <div class="dropdown-content2">
              <a href="info.php">Parametres</a>
              <a href="logout.php">Déconnexion</a>
            </div>
        </div>
    </nav>


    <div class="content">
    <div class="contentbox">
        <div class="order-container">
            <h2>Menu du jour</h2>
            <ul class="order-list">
              <li class="order-item">
                <div class="order-info">
                  <span class="order-id"><?php echo $plats[0]["nom"];;?></span>
                </div>
                <div class="order-actions">
                    <a class="button" href="#popup0"><button class="action-btn">Plus</button></a>
                </div>
              </li>
              <li class="order-item">
                <div class="order-info">
                  <span class="order-id"><?php echo $plats[1]["nom"];;?></span>
                </div>
                <div class="order-actions">
                    <a class="button" href="#popup1"><button class="action-btn">Plus</button></a>
                </div>
              </li>
              <li class="order-item">
                <div class="order-info">
                  <span class="order-id"><?php echo $plats[2]["nom"];;?></span>
                </div>
                <div class="order-actions">
                    <a class="button" href="#popup2"><button class="action-btn">Plus</button></a>
                </div>
              </li>
              <li class="order-item">
                <div class="order-info">
                  <span class="order-id"><?php echo $plats[3]["nom"];;?></span>
                </div>
                <div class="order-actions">
                    <a class="button" href="#popup3"><button class="action-btn">Plus</button></a>
                </div>
              </li>
              <li class="order-item">
                <div class="order-info">
                  <span class="order-id"><?php echo $plats[4]["nom"];;?></span>
                </div>
                <div class="order-actions">
                    <a class="button" href="#popup4"><button class="action-btn">Plus</button></a>
                </div>
              </li>
              <li class="order-item">
                <div class="order-info">
                  <span class="order-id"><?php echo $plats[5]["nom"];;?></span>
                </div>
                <div class="order-actions">
                    <a class="button" href="#popup5"><button class="action-btn">Plus</button></a>
                </div>
              </li>
              <li class="order-item">
                <div class="order-info">
                  <span class="order-id"><?php echo $plats[6]["nom"];;?></span>
                </div>
                <div class="order-actions">
                    <a class="button" href="#popup6"><button class="action-btn">Plus</button></a>
                </div>
              </li>
              <li class="order-item">
                <div class="order-info">
                  <span class="order-id"><?php echo $plats[7]["nom"];;?></span>
                </div>
                <div class="order-actions">
                    <a class="button" href="#popup7"><button class="action-btn">Plus</button></a>
                </div>
              </li>
              <li class="order-item">
                <div class="order-info">
                  <span class="order-id"><?php echo $plats[8]["nom"];;?></span>
                </div>
                <div class="order-actions">
                    <a class="button" href="#popup8"><button class="action-btn">Plus</button></a>
                </div>
              </li>
              <li class="order-item">
                <div class="order-info">
                  <span class="order-id"><?php echo $plats[9]["nom"];;?></span>
                </div>
                <div class="order-actions">
                    <a class="button" href="#popup9"><button class="action-btn">Plus</button></a>
                </div>
              </li>
            </ul>
          </div>
          <div id="popup0" class="overlay">
            <div class="popup">
                <a class="close" href="#">&times;</a>
                <div class="contents">
                <?php echo "Nom du plat : " . $plats[0]["nom"];; ?><br>
                <td><?php echo "Prix : " . $plats[0]["prix"]; ?></td><br>
                <td><?php echo "Description : " . $plats[0]["description"]; ?></td>
            </div>
        </div>
        </div>
        <div id="popup1" class="overlay">
            <div class="popup">
                <a class="close" href="#">&times;</a>
                <div class="contents">
                <?php echo "Nom du plat : " . $plats[1]["nom"];; ?><br>
                <td><?php echo "Prix : " . $plats[1]["prix"]; ?></td><br>
                <td><?php echo "Description : " . $plats[1]["description"]; ?></td>
            </div>
        </div>
</div>
        <div id="popup2" class="overlay">
            <div class="popup">
                <div class="contact-form">
                <a class="close" href="#">&times;</a>
                <div class="contents">
                <?php echo "Nom du plat : " . $plats[2]["nom"];; ?><br>
                <td><?php echo "Prix : " . $plats[2]["prix"]; ?></td><br>
                <td><?php echo "Description : " . $plats[2]["description"]; ?></td>
                </div>
            </div>
          </div>
        </div>
        <div id="popup3" class="overlay">
            <div class="popup">
                <div class="contact-form">
                <a class="close" href="#">&times;</a>
                <div class="contents">
                <?php echo "Nom du plat : " . $plats[3]["nom"];; ?><br>
                <td><?php echo "Prix : " . $plats[3]["prix"]; ?></td><br>
                <td><?php echo "Description : " . $plats[3]["description"]; ?></td>
                </div>
            </div>
          </div>
        </div>
        <div id="popup4" class="overlay">
            <div class="popup">
                <div class="contact-form">
                <a class="close" href="#">&times;</a>
                <div class="contents">
                <?php echo "Nom du plat : " . $plats[4]["nom"];; ?><br>
                <td><?php echo "Prix : " . $plats[4]["prix"]; ?></td><br>
                <td><?php echo "Description : " . $plats[4]["description"]; ?></td>
                </div>
            </div>
          </div>
        </div>
        <div id="popup5" class="overlay">
            <div class="popup">
                <div class="contact-form">
                <a class="close" href="#">&times;</a>
                <div class="contents">
                <?php echo "Nom du plat : " . $plats[5]["nom"];; ?><br>
                <td><?php echo "Prix : " . $plats[5]["prix"]; ?></td><br>
                <td><?php echo "Description : " . $plats[5]["description"]; ?></td>
                </div>
            </div>
          </div>
        </div>
        <div id="popup6" class="overlay">
            <div class="popup">
                <div class="contact-form">
                <a class="close" href="#">&times;</a>
                <div class="contents">
                <?php echo "Nom du plat : " . $plats[6]["nom"];; ?><br>
                <td><?php echo "Prix : " . $plats[6]["prix"]; ?></td><br>
                <td><?php echo "Description : " . $plats[6]["description"]; ?></td>
                </div>
            </div>
          </div>
        </div>
        <div id="popup7" class="overlay">
            <div class="popup">
                <div class="contact-form">
                <a class="close" href="#">&times;</a>
                <div class="contents">
                <?php echo "Nom du plat : " . $plats[7]["nom"];; ?><br>
                <td><?php echo "Prix : " . $plats[7]["prix"]; ?></td><br>
                <td><?php echo "Description : " . $plats[7]["description"]; ?></td>
                </div>
            </div>
          </div>
        </div>
    </div>
</div>
    <footer>
        © Copyright
        <div class="Copyright">
            <p>Magali Vacher
            <br><a href="#"><img src = "img/githublogo.png" alt="logo github"></a></p>
            <p>Anna Maras
            <br><a href="#"><img src = "img/githublogo.png" alt="logo github"></a></p>
            <p>Jeffry KHALIFE
            <br><a href="https://github.com/jeffry-khalife"><img src = "img/githublogo.png" alt="logo github"></a></p>
        </div>
    </footer>

</body>
</html>