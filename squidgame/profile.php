<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>squid game
    </title>
</head>
<link rel="stylesheet" href="style.css">

<style>
    .card{
        box-shadow: 0 0 20px 1px black;
    }
    .navbar{
        border-radius: 40px;
    }
</style>


<body>
    <script src="script.js"></script>

    <nav>
        <ul class="nav-list">
            <li class="nav-item"><a href="#">Logout</a></li>
            <li class="nav-item"><a href="#">Parametre</a></li>
            <li class="nav-item"><a href="#">Menu</a></li>

        </ul>
    </nav>
<center>
    <div id="entete">
    <h3 id="pseudo"> nom joueur</h3>
    <img src="img/Avatar-2-une-premiere-bande-annonce-en-mai.jpg" alt="" id="avatar">
    </div>
    <div id="bloc">
    <form action="" name="f">
    <table border="1"> 
        <th  class="ligne" colspan="2"> niveau : 1</th>
        <tr class="ligne">
            <td>joueur 1 (toi)</td>
            <td id="monpanier"> <input type="number" name="monpanier"  value="20"></td>
        </tr>
        <tr class="ligne">
            <td>joueur 2 (ordinateur)</td>
            <td id="botpanier"><input type="number" name="botpanier"  value="20"></td>
        </tr class="ligne">
        <tr class="ligne">
            <td colspan="2">
                <input type="button" value="pair" id="btnpair" onclick="pair()">
                <input type="button" value="impair" id="btnimpair" onclick="impair()">
            </td>
        </tr>
        <tr class="ligne">
            <td colspan="2">
                <input type="button" value="jouer" onclick="demarrer()">
            </td>
        </tr>
    </table>
    </form>
    </div>
    <h1 id="resultat"></h1>
    </center>
</body>
</html>