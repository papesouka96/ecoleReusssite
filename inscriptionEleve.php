<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
	@$nom=$_POST["nom"];
	@$prenom=$_POST["prenom"];
	@$daten=$_POST["daten"];
	@$lieun=$_POST["lieun"];
	@$classe=$_POST["classe"];
	@$cycle=$_POST["cycle"];
	@$login=$_POST["login"];
	@$valider=$_POST["valider"];
	$message="";
	if(isset($valider)){
		if(empty($nom)) $message="<li>Non invalide!</li>";
		if(empty($prenom)) $message.="<li>Prénom invalide!</li>";
		if(empty($daten)) $message.="<li>Date de naissance invalide!</li>";
		if(empty($lieun)) $message.="<li>lieu de naissance invalide!</li>";
		if(empty($classe)) $message.="<li>classe invalide!</li>";
		if(empty($cycle)) $message.="<li>cycle invalide!</li>";
		if(empty($login)) $message.="<li>Login invalide!</li>";	
		if(empty($message)){
			include("connexion.php");
			/* $req=$pdo->prepare("select id from eleve where login=? limit 1");
			$req->setFetchMode(PDO::FETCH_ASSOC);
			$req->execute(array($login));
			$tab=$req->fetchAll();
			if(count($tab)>0)
				$message="<li>eleve déjà inscrit!</li>";
			else{ */
				$ins=$pdo->prepare("insert into eleve(date,nom,prenom,daten,lieun,classe,cycle,login) values(now(),?,?,?,?,?,?,?)");
				$ins->execute(array($nom,$prenom,$daten,$lieun,$classe,$cycle,$login));
				header("location:session.php");}}
	/* 		}
		}
	} */
?>
<!DOCYTPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
		<header>
			Inscription
			<a href="login.php">Déja inscrit</a>
		</header>
		<form name="fo" method="post" action="" enctype="multipart/form-data">
			<div class="label">Nom</div>
			<input type="text" name="nom" value="<?php echo $nom?>" />
			<div class="label">Prénom</div>
			<input type="text" name="prenom" value="<?php echo $prenom?>" />
			<div class="label">Date de naissance</div>
			<input type="date" name="daten" value="<?php echo $daten?>" />
			<div class="label">lieu de naissance</div>
			<input type="text" name="lieun" />
			<div class="label">classe</div>
			<input type="text" name="classe" />
			<div class="label">cycle</div>
			<input type="text" name="cycle" />
			<div class="label">Login</div>
			<input type="text" name="login" value="<?php echo $login?>" />
			<input type="submit" name="valider" value="S'inscrire" />
		</form>
		<?php if(!empty($message)){ ?>
		<div id="message"><?php echo $message ?></div>
		<?php } ?>
	</body>
</html>