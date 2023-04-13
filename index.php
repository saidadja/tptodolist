<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css">
    <title>Exercice To Do List</title>
</head>
<body>
    <header>
    <a href="index.html">
    <img  src="images/logoMusique.jpg" alt="logomusic">
    </a>
    <nav>
        <a href="todolist.php" >Matodolist</a><br>
        <a href="bibliothéque.php">Bibliothèque</a>
    </nav>
    
    </header>
    <main>
    <form method="post" action="connexion.html">
    
        <label for="email">Email :</label>
        <input id="email" type="text" name="email"/>
        <label for="motdepasse">Mot de passe :</label>
        <input id="motdepasse" type="password" name="motdepasse"/>
       <button  type="submit" >connexion</button>
    </form>

    <form method="post" action="inscription.html">
        <label for="nom">Nom :</label>
        <input id="nom" type="text" name="nom" require>
        <label for="prenom">Prenom :</label>
        <input id="prenom" type="text" name="prenom"require>
        <label for="email">Email :</label>
        <input id="email" type="text" name="email" require>
        <label for="motdepasse">Mot de passe :</label>
        <input id="motdepasse" type="password" name="motdepasse" require>
       <button  type="submit" >inscire</button>
    </form>

    </main>
 <footer></footer>
</body>
</html>