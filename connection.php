<html lang="fr">
<head>
	<title>connection</title>
	<meta name="connection" >
    <?php include('header.php') ?>
</head>
<body>
    <?php include('config.php');?>
    <div class='menu_real'>
        <div class='admin'>
                    <form method="POST" action="validation.php">
                        <h1>Bonjour Vlupien !</h1><br>
                        <div class="formContent">
                            <p class="formSubContent">
                                <label for="pseudoForm">Votre pseudo</label>
                                <input id="pseudoForm" class="form-input" type="text" name="pseudo" pattern"^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$">
                            </p>

                            <p class="formSubContent">
                                <label for="passwordForm">Votre mot de passe</label>
                                <input id="passwordForm" class="form-input" type="password" pattern"^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" name="motdepasse">
                            </p>
                        </div>

                        <div class="form-submit">
                            <button class='btn' id="#btn1" type="submit"></button>
                        </div>
                    </form>
        </div>
    </div>

<?php include ('footer.php') ?>

</body>
</html>