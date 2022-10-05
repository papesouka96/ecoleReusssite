<?php
	session_start();
	@$login=$_POST["login"];
	@$pass=$_POST["pass"];
	@$valider=$_POST["valider"];
	$message="";
	if(isset($valider)){
		include("connexion.php");
		$res=$pdo->prepare("select * from users where login=? and pass=? limit 1");
		$res->setFetchMode(PDO::FETCH_ASSOC);
		$res->execute(array($login,$pass));
		$tab=$res->fetchAll();
		if(count($tab)==0)
			$message="<li>Mauvais login ou mot de passe!</li>";
		else{
			$_SESSION["autoriser"]="oui";
			$_SESSION["nomPrenom"]=strtoupper($tab[0]["nom"]." ".$tab[0]["prenom"]);
			header("location:session.php");
		}
	}
?>
<!DOCYTPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<!--link rel="stylesheet" type="text/css" href="css/style.css" /-->
		<!--Bosstrap css-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <!--css-->
		<link rel="stylesheet" href="css/style.css">
		<!--boostrap bundle-->
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

	</head>
	<body onLoad="document.fo.login.focus()">
		<header>
			Authentification
			<a href="inscriptionEleve.php">S'inscrire</a>
		</header>
		
		<div class="container py-4 h-100">
        <div class="myCard row d-flex justify-content-center align-items-center h-100">
            <div class="row g-0">
                <div class="col-md-6 col-lg-6 d-flex align-items-center">
                    <div class="myLeftCtn card-body p-4 p-lg-5 text-black"> 
                        <form class="myForm text-center" name="fo" method="post" action="" style="margin-top: 200px;" >
                            <header>
								<img src="ecole.png" alt="" width="99px">
							</header>
							
                            <div class=" form-group">
                                <input class=" form-control form-control-lg" type="text" placeholder="Login" id="username" required> 
								
                            </div>
							
							
                           




							<!--input class=" form-control form-control-lg" type="password" id="Cycle" placeholder="cycle" required--> 
    
							


							<div class="form-group ">
							
							<input class=" form-control form-control-lg" type="4" id="password" placeholder="Password" required> 
						   </div>

						   
						  

                            <div class="form-group ">
                                <label>
                                    <input id="check_1" name="check_1"  type="checkbox" required><small> I read and agree to Terms & Conditions</small></input> 
                                    <div class="invalid-feedback">You must check the box.</div>
                                </label>
                            </div>


                            <input type="submit" class="butt"  name="valider"value="Se Connecter">
							<a href="inscriptionEleve.php">S'inscrire</a>
							
		
                        </form>
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="myRightCtn">
                            <div class="box"><header>Hello World!</header>
                            
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
		<?php if(!empty($message)){ ?>
		<div id="message"><?php echo $message ?></div>
		<?php } ?>
	</body>
</html>