<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Employés</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
          <h3 style="color:blue;"> Test HOMECLICK</h3>
          <br>
        <a href="ajouter.php" class="Btn_add"> <img src="images/plus.png"> Ajouter </a>
        
        <table>
            <tr id="items">
                <th>Nom</th>
                <th>Prénom</th>
                <th>Adresse</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            <?php 
                //inclure la page de connexion
                include_once "connexion.php";
                //requête pour afficher la liste des clients
                $req = mysqli_query($con , "SELECT * FROM Employe");
                if(mysqli_num_rows($req) == 0){
                    //s'il n'existe pas client dans la base de donné , alors on affiche ce message :
                    echo "Il n'y a pas encore Client ajouter !" ;
                    
                }else {
                    //si non , affichons la liste de tous les clients
                    while($row=mysqli_fetch_assoc($req)){
                        ?>
                        <tr>
                            <td><?=$row['nom']?></td>
                            <td><?=$row['prenom']?></td>
                            <td><?=$row['age']?></td>
                            <!--Nous alons mettre l'id de chaque client dans ce lien -->
                            <td><a href="modifier.php?id=<?=$row['id']?>"><img src="images/pen.png"></a></td>
                            <td><a href="supprimer.php?id=<?=$row['id']?>"><img src="images/trash.png"></a></td>
                        </tr>
                        <?php
                    }
                    
                }
            ?>
      
         
        </table>
   
   
   
   
    </div>
</body>
</html>