<html>
    
    <body>
        <form method="post" action="traitement.php">
            Nom : <input type="text" name="nom" size="12"><br>
            Prénom : <input type="text" name="prenom" size="12">
            
            <label for="start">Date de naissance:</label>
            <input type="date" id="start" name="naissance" size="12"
             value="2022-02-17"
             min="1980-01-01" max="2045-12-31">


            <input type="submit" value="OK">
        </form>
    </body>
</html>