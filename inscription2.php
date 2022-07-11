
<?php
$con=mysqli_connect("localhost","root","") or die ("ERREUR DE CONEXION");
mysqli_select_db($con,"dbunasmoh") or die ("IMPOSSIBLE DE TROUVER LA BASE");
if(isset($_POST['btnenregistrer'])){
$co="";
$no=$_POST['nom'];
$pre=$_POST['prenom'];
$se=$_POST['sexe'];
$mail=$_POST['email'];
$opt=$_POST['optionb'];
$re=$_POST['religion'];
$nomphoto=$_FILES['photo']['name'];
$files_tmp_name=$_FILES['photo']['tmp_name'];
$te=$_POST['telephone'];
$te2=$_POST['telephoneparent'];
$da=$_POST['date'];
move_uploaded_file($files_tmp_name,"./images/$nomphoto");
$sql="insert into etudiant values('$co','$no','$pre','$se','$mail','$re','$opt','$nomphoto','$te','$te2','$da')";
mysqli_query($con,$sql);


}

?>

<!DOCTYPE html>
<html lang="en">


<head>
    <title>Universite Américaine Des Sciences Modernes d'Haiti</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Education master is one of the best educational html template, it's suitable for all education websites like university,college,school,online education,tution center,distance education,computer education">
    <meta name="keyword" content="education html template, university template, college template, school template, online education template, tution center template">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="images/unasmoh.png" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- ALL CSS FILES -->
    <link href="css/materialize.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="css/style-mob.css" rel="stylesheet" />
    
</head>

<body>
<!--DEBUT SECTION ENTETE-->
    <section>
        <!-- TOP BARRE/  -->
        <div class="ed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ed-com-t1-left">
                            <ul>
                                <li><a href="#">Adresse: #4,Rue Marcelin,Delmas65 / 16 ,Avenue Christophe Rue 4</a>
                                <a href="#">Phone:+(509) 3664-0716 / 3622-3235 / 40132239</a>
								</li>
                            </ul>
                        </div>
                        <div class="ed-com-t1-right">
                            <ul>
                                <!-- TOP BARRE A DROITE  -->
                                <li><a href="#!" data-toggle="modal" data-target="#modal1">S'identifier</a>
                                </li>
								
                            </ul>
                        </div>
                        <div class="ed-com-t1-social">
                            <ul>
                                <li><a href="https://mobile.facebook.com/pages/category/Community-College/Unasmoh-228275027292471/?locale2=fr_FR&_rdc=1&_rdr"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       <!-- LOGO ET MENU SECTION -->
       <div class="top-logo" data-spy="affix" data-offset-top="250">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wed-logo">
                              <a href="index.html"><img src="images/logounas.png" alt=""   />
							  
                            </a>
                        </div>
                              <div class="main-menu">
                            <ul class="navigation">
							 <!-- MENU1/MENU PRINCIPAL -->
                                <li><a href="index.html">ACCUEIL</a>
                                </li>
                                <li class="about-menu">
                                    <a class="mm-arr">A PROPOS DE</a>
                                    <!-- MENU1/MENU PRINCIPAL -->
                                    <div class="mm-pos">
                                        <div class="about-mm m-menu">
                                            <div class="m-menu-inn">
                                                <div class="mm1-com mm1-s1">
                                                    <div class="ed-COURSe-in">
                                                        <a class="COURSe-overlay menu-about" href="inscription.html">
                                                            <img src="images/slider/new.jpg" alt="">
                                                            <!-- <span>Academique</span> -->
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="mm1-com mm1-s2">
                                                    <p>L'Unasmoh est l'une des plus grandes université du pays. Avec le plus grand nombres d'étudiants et le plus de succursale dans tout le pays. Donc veuillez nous réjoindre.</p>
                                                </div>
												<!-- MENU1/MENU PRINCIPAL/ANNDAN ABOUT US -->
                                                <div class="mm1-com mm1-s3">
                                                    <ul>
                                                        <!-- <li><a href="all-COURSes.html"></a></li> -->
                                                       <!-- <li><a href="COURSe-details.html">COURSe details</a></li> -->
                                                       <!-- <li><a href="about.html">About</a></li> --!>
                                                        <!-- <li><a href="inscription.html">Admission</a></li> -->
                                                    
														 <li><a href="historicite.html">Historicité</a></li>
														<li><a href="mission.html">Mission</a></li>
														<li><a href="organisation.html">Organisation</a></li>
														
                                                    </ul>
                                                </div>
                                               
											   
											         <div class="mm1-com mm1-s3">
														<p><b><h4>S'ouvrir </br> a </br>votre savoir</h4></b></p>
                                                </div>
											   
											   
											   
											   
											   
											   
											   
											   
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="EnCours">
								<!--MENU1/MENU PRINCIPAL -->
                                    <a href="inscription.html" class="mm-arr">ADMISSION</a></li>
                                    
								<!-- MENU1/MENU PRINCIPAL -->
                                <li><a href="Option.html">COURS </a></li>
								
                                         

						
								<li class='menu-aboutSport'>
								
							<a href="sport.html" class="mm-arrSport">SPORT</a>
							
							<div class='king m-Menuport'>
							 <div class="m-menu-inn">
							  <div class="mm1Sport-com mm1Sport-s3">
							 
                                                
													
                                                </div>
					
										</div>
										 </div>
										
                                 </li>
									<!-- MENU1/MENU PRINCIPAL -->
                                <li><a href="events.html">EVENEMENTS</a>
                                </li>
								 <li><a href="contact.html">CONTACTEZ-NOUS</a>
                                </li>
					
                             
                                
                            </ul>
                        </div>
                    </div>
                    <div class="all-drop-down-menu">

                    </div>

                </div>
            </div>
        </div>
		<!-- BARRE de recherche en haut -->
		<div class="search-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search-form">
                                                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END HEADER SECTION-->

    <!--SECTION START-->
    <section class="c-all h-quote">
	
        <div class="container" >
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="all-title quote-title qu-new">
                    <h2>UNASMOH</h2>
                    <p>Univérsité Américaine des sciences Modernes d'Haïti</p><hr style="width:75%;" />
					<hr style="width:75%;" /><br/><br/><br/><br/><br/><br/>
					<h5>Quelques informations<h5>
			  
					
                    <p style="color:black;" class="help-line">Il faut que vous remplissez tous les champs afin de bien valider vos informations, et après avoir fini, cliquez sur ENVOYEZ.<br/><br/><br/>MERCI!!!</p> </div>
            </div>
               
            <div class="col-md-6 col-sm-12 col-xs-12">
			
                <div class="n-form-com admiss-form">
				
                    <div class="col s12">
					
        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">




<div class="form-group">
<h4 style="padding-left:50px; padding-bottom:45px;"><u>FORMULAIRE D'INSCRIPTION</u></h4><hr style="width:75%;" />
<div class="form-group">
                                <label class="control-label col-sm-3">NOM:</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nom" class="form-control" placeholder="Entrez votre nom">
                                </div>
                            </div>
<div class="form-group">
                                <label class="control-label col-sm-3">PRENOM:</label>
                                <div class="col-sm-9">
                                    <input type="text" name="prenom" class="form-control" placeholder="Entrez votre prenom" >
                                </div>
                            </div>
							
							
	<div class="form-group">
                                <label class="control-label col-sm-3">SEXE:</label>
                                <div class="col-sm-9">
                                    <select name="sexe">
								<option>********</option>
								<option>Masculin</option>
								<option>Feminin</option>							
								<option>Autre</option>
							  </select>
                                </div>
                            </div>
<div class="form-group">
                                <label class="control-label col-sm-3">EMAIL:</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" class="form-control" placeholder="exemple.@gmail.com" required>
                                </div>
                            </div>
		

<div class="form-group">
                                <label class="control-label col-sm-3">Religion:</label>
                                <div class="col-sm-9">
                                    <input type="text" name="religion" class="form-control" placeholder="Protestant" required>
                                </div>
                            </div>

     <div class="form-group">
							
							
                                <label class="control-label col-sm-3">OPTION:</label>
                                <div class="col-sm-9">
                                    <select name="optionb">
								<option>********</option>
								<option>Sciences informatiques</option>
								<option>Sciences comptables</option>							
								<option>Sciences administratives</option>
								<option>Sciences de la géstion</option>
								<option>Génie civil</option>							
								<option>Sciences de l'éducation</option>
								<option>Sciences juridiques</option>
								<option>Sciences économiques</option>							
								<option>Sciences du développement</option>
								<option>Sciences infirmières</option>
								<option>Génie éléctromécanique</option>							
								<option>Laboratoire Medical</option>
								<option>ENS-Maths/Physiques(NS-SMP)</option>
								<option>ENS-Nat./Chimie(NS-SVT)</option>
								<option>ENS-Sces soc./Econ(NS-SES)</option>
								<option>Sces Edu: Philosophie & Letrres</option>
							  </select>
                                </div>
                            </div>

<div class="form-group">
                                <label class="control-label col-sm-3">PHOTO:</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="photo">  
                              </div>
                  


				  </div>


<div class="form-group">
                                <label class="control-label col-sm-3"> N0 TEL. :</label>
                                <div class="col-sm-9">
                                    <input type="text" name="telephone" value="(+509)" class="form-control" required>
                                </div>
                            </div>
<div class="form-group">
                                <label class="control-label col-sm-3"> N0 TEL Responsable:</label>
                                <div class="col-sm-9">
                                    <input type="text" name="telephoneparent" value="(+509)" class="form-control" required>
                                </div>
                            </div>
					
<div class="form-group">
                                <label class="control-label col-sm-3"> Date de NAISSANCE:</label>
                                <div class="col-sm-9">
                                    <input type="date" name="date" value="date" class="form-control" placeholder="Entrez votre date de naissance " required>
                                </div>
                            </div>
							





                            <div class="form-group mar-bot-0">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <i class="waves-effect waves-light light-btn waves-input-wrapper" style="">
                                         <input type="submit" name="btnenregistrer" value="Enregistrer"/>
                                </div>
                            </div>

</form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->


    

    <!-- FOOTER -->
   <section class="wed-hom-footer">
        <div class="container">
           
            <div class="row wed-foot-link">
                <div class="col-md-4 foot-tc-mar-t-o">
                   
                    <ul>
                      <h4>Informations utiles</h4>
                    <ul>	
                    <p>Adresse: # 4,Rue Marcelin,Delmas65 / 16 ,Avenue Christophe Rue 4</p>
                    <p>Phone: <a >+(509) 3664-0716 / 3622-3235 / 40132239</a></p>
                    <p>Email: <a >unasmoh@edu.com</a></p>
                        <li><a href="COURSe-details.html"> </a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    
                    <ul>
                      <h4>AIDE & SUPPORT</h4>
                    <ul>
                       
					   
                        <li><a href="contact.html">CONTACTEZ-NOUS</a> </br>
                        <a href="faq.html">FAQs</a>
                    </ul>
                </div>
		 <div class="col-md-4 foot-tc-mar-t-o">
				 <h4> Reseau sociaux</h4>
				  <ul>
				  <li>
                       <a href="https://mobile.facebook.com/pages/category/Community-College/Unasmoh-228275027292471/?locale2=fr_FR&_rdc=1&_rdr"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </br>
                       <a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                           </br>
                        
                       <a href="https://youtube.com/"><i class="fa fa-youtube" aria-hidden="true"></i></a></li></br>
					   </br></br></br>
                       

                       
                    </ul>
				 
				
                </div>
               
            </div>
            <div class="col-md-4">
			<p>© 2021 Tous drois Réservés UNASMOH</p></div>
        </div>
    </section>
    <!--END HEADER SECTION-->

   

    
    <section>
        <div class="icon-float">
            <ul>
                <li><a href="#" class="sh">1k <br> Share</a> </li>
                <li><a href="#" class="fb1"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                <li><a href="#" class="gp1"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                <li><a href="#" class="tw1"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                <li><a href="#" class="li1"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                <li><a href="#" class="wa1"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
                <li><a href="#" class="sh1"><i class="fa fa-envelope-o" aria-hidden="true"></i></a> </li>
            </ul>
        </div>
    </section>

    <!--Import jQuery before materialize.js-->
    <script src="js/main.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>


</html