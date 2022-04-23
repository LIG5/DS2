<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>squid game
    </title>
</head>
<body>
    <script src="script.js"></script>
    <h3> nom joueur</h3>
    <form action="" name="f">
    <table border="1"> 
        <th colspan="2"> niveau : 1</th>
        <tr>
            <td>joueur 1 (toi)</td>
            <td id="monpanier"> <input type="number" name="monpanier" id="" value="20"></td>
        </tr>
        <tr>
            <td>joueur 2 (ordinateur)</td>
            <td id="botpanier"><input type="number" name="botpanier" id="" value="20"></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="button" value="pair" id="btnpair" onclick="pair()">
                <input type="button" value="impair" id="btnimpair" onclick="impair()">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="button" value="jouer" onclick="demarrer()">
            </td>
        </tr>
    </table>
    </form>
    <h1 id="resultat"></h1>
    <h3  > nombre de fois gagnez : <h id="nbgagnez" name="nbgagnez">0</h> </h3>
</body>
</html>