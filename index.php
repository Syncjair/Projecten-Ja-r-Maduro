<?php

include 'inc/header.php';
include 'inc/database.php';

?>

<div class="container">
    <h1 id="inloggen">Inloggen</h1>
    <form action='' method='post'>
        <input type='text' name='gebruikersnaam' placeholder='Gebruikersnaam invoeren'><br>
        <input type='password' name='wachtwoord' placeholder='Wachtwoord invoeren'><br>
        <input type='submit' name='submit' value='Inloggen'>
    </form>
</div>

<?php

if(isset($_POST['gebruikersnaam']) && isset($_POST['wachtwoord'])) {
    $gebruikersnaam = $_POST['gebruikersnaam'];
    $wachtwoord = $_POST['wachtwoord'];

$query = "SELECT * FROM gebruikers WHERE gebruikersnaam = ? AND wachtwoord = ?";
$stmt = $pdo->prepare($query);
$stmt->execute([$gebruikersnaam, $wachtwoord]);


}