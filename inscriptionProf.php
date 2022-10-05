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
		<!--link rel="stylesheet" type="text/css" href="css/style.css" /-->
		<!--Bosstrap css-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <!--css-->
		<link rel="stylesheet" href="css/style.css">
		<!--boostrap bundle-->
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
	</head>
	<body>
		<!--header>
			Inscription
			<a href="login.php">Déja inscrit</a>
		</header-->
		
    <div class="container py-4 h-100">
        <div class="myCard row d-flex justify-content-center align-items-center h-100">
            <div class="row g-0">
                <div class="col-md-6 col-lg-6 d-flex align-items-center">
                    <div class="myLeftCtn card-body p-4 p-lg-5 text-black"> 
                        <form class="myForm text-center" name="fo" method="post" action="" >
                            <header>
								<img src="ecole.png" alt="" width="99px">
							</header>
							
                            <div class=" form-group">
                                <input class=" form-control form-control-lg" type="text" placeholder="Nom" id="username" required> 
								
                            </div>
							<div class="form-group ">
                              
						
                                <input class=" form-control form-control-lg" type="text" placeholder="Prenom" id="username" required> 
                            </div>
							<div class="form-group ">
                                
                                <input class=" form-control form-control-lg" type="text" placeholder="Email" id="username" required> 
                            </div>
							<div class=" form-group">
                                <input class="form-control form-control-lg" type="text" placeholder="Adresse" id="username" required> 
								
                            </div>
							<div class=" form-group">
                                <input class="form-control form-control-lg" type="text" placeholder="Login" id="username" required> 
								
                            </div>

                          




							<!--input class=" form-control form-control-lg" type="password" id="Cycle" placeholder="cycle" required--> 
    
							<select class="custom-select  custom-select-lg mb-3"style="color: gray;">
                              <option selected>Statut</option>
							  <option value="2">C2</option>
                              <option value="2">C2</option>
                              <option value="3">CM1</option>
							  <option value="3">CM1</option>
							  <option value="3">CM1</option>
							  <option value="3">CM1</option>
							  <option value="3">CM1</option>
							  <option value="3">CM1</option>
							  <option value="3">CM1</option>
							  <option value="3">CM1</option>
							  <option value="3">CM1</option>
							  <option value="3">CM1</option>
							  <option value="3">CM1</option>
							  <option value="3">CM1</option>
							  <option value="3">CM1</option>
							  <option value="3">CM1</option>
							  <option value="3">CM1</option>
                           </select>



							<div class="form-group ">
							
							<input class=" form-control form-control-lg" type="4" id="password" placeholder="Password" required> 
						   </div>

						   <div class="form-group ">
							
							<input class=" form-control form-control-lg" type="password" id="password" placeholder="Confirmer mot de passe" required> 
						   </div>
						  

                            <div class="form-group ">
                                <label>
                                    <input id="check_1" name="check_1"  type="checkbox" required><small> I read and agree to Terms & Conditions</small></input> 
                                    <div class="invalid-feedback">You must check the box.</div>
                                </label>
                            </div>


                            <input type="submit" class="butt"  name="valider"value="S'inscrire'">
							
		
                        </form>
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="myRightCtn">
                            <div class="box"><header>ECOLE DE LA REUSSITE</header>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                sed do eiusmod tempor incididunt ut labore et dolore magna 
                                aliqua. Ut enim ad minim veniam.</p>
                                <input type="button" class="butt_out" value="Learn More"/>
                            </div>
                                
                    </div>
                </div>
            </div>
        </div>
</div>
			<!--div class="label">Nom</div-->
			<!--input type="text" name="nom" value="<?php echo $nom?>" />
			<div class="label">Prénom</div>
			<input type="text" name="prenom" value="<?php echo $prenom?>" />
			<div class="label">Login</div>
			<input type="text" name="login" value="<?php echo $login?>" />
			<div class="label">Date de naissance</div>
			<input type="date" name="daten" value="<?php echo $daten?>" />
			<div class="label">lieu de naissance</div>
			<input type="text" name="lieun" />
			<div class="label">classe</div>
			<input type="text" name="classe" />
			<div class="label">cycle</div>
			<input type="text" name="cycle" /-->
			
		
		
		<?php if(!empty($message)){ ?>
		<div id="message"><?php echo $message ?></div>
		<?php } ?>
	</body>
</html>