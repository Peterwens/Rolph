<?php
$con=mysqli_connect("localhost","root","") or die ("ERREUR DE CONEXION");
mysqli_select_db($con,"dbunasmoh") or die ("IMPOSSIBLE DE TROUVER LA BASE");
if(isset($_POST['btnenregistrer'])){
$co="";
$opt=$_POST['option'];
$typep=$_POST['typeprogramme'];
$vac=$_POST['vacation'];
$no=$_POST['nom'];
$pre=$_POST['prenom'];
$se=$_POST['sexe'];
$datn=$_POST['datenaiss'];
$lieun=$_POST['lieunaiss'];
$nif=$_POST['nif'];
$add=$_POST['adresse'];
$photo=$_FILES['photo']['name'];
$files_tmp_name=$_FILES['photo']['tmp_name'];
$not=$_POST['notel'];
$telres=$_POST['telresp'];
$otel=$_POST['autretel'];
$mail=$_POST['email'];
$etatci=$_POST['etatcivil'];
$sport=$_POST['sportpratique'];
$fonction="Etudiant";
$mp="";

$r=random_int(10, 999);
$rb=random_int(1000, 9999);
$rc=random_int(10000, 99999);
$co=substr($no,0,3) . substr($pre,0,3)."-" . $rc ."-" . substr($datn,-2)."-"  . $r . $rb ;
move_uploaded_file($files_tmp_name,"./images/$photo");
$sql="insert into etudiantenligne values('$co','$opt','$typep','$vac','$no','$pre','$se','$datn','$lieun','$nif','$add','$photo','$not','$telres','$otel','$mail','$etatci','$sport')";
mysqli_query($con,$sql);


$sql1="insert into user values('$co','$fonction','$mp','$mail','$photo','$opt')";
mysqli_query($con,$sql1);

}

?>
<!DOCTYPE html>
<html lang="en">


<head>
    <title>Universite Américaine Des Sciences Modernes d'Haiti</title>
    <!-- META TAGS


	-->
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
    <!-- MOBILE MENU -->
    <section>
        <div class="ed-mob-menu">
            <div class="ed-mob-menu-con">
                <div class="ed-mm-left">
                    <div class="wed-logo">
                        <a href="index.html"><img src="images/UnasLogo - Copy.JFIF"  alt="" style="max-height:220%; max-width:220%;"/>
						</a>
                    </div>
                </div>
                <div class="ed-mm-right">
                    <div class="ed-mm-menu">
                        <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                        <div class="ed-mm-inn">
                            <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                            
                            <h4><b><u>Menu</u></b></h4>
							</br>
                            <ul>
                                <ul><a href="index.html"><b>Accueil</b></a></ul>
                                <ul><a href=""><b>A propos de</b></a>
								<li><a href="historicite.html">Historicité</a></li>
								<li><a href="mission.html">Mission</a></li>
								<li><a href="organisation.html">Organisation</a></li>
								<li><a href="organisationb.html">Mot du président</a></li> </ul>
								
								
                                <ul><a href="inscription.html"><b>Admission</b></a></ul>
                                <ul><a href="Option.html"><b>Facultés</b></a></ul>
                                <ul><a href="sport.html"><b>Sports</b></a></ul>
                                <ul><a href="events.html"><b>Actualité</b></a></ul>
                                <ul><a href="contact.html"><b>Contactez-nous</b></a></ul>
								<hr/>
                                <ul><a href="#!" data-toggle="modal" data-target="#modal1"><b>Se connecter</b></a></ul>
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--HEADER SECTION-->
    <section>
        <!-- TOP BARRE/  -->
      <div class="ed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ed-com-t1-left">
                            <ul>
                                <li><a href="contact.html">Adresse: # 4,Rue Marcelin,Delmas65 / 16 ,Avenue Christophe Rue 4</a>
                                <a >Phone:+(509) 3664-0716 / 3622-3235 / 40132239</a>
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
						
                            <a href="index.html"><img  style = "width:52%; padding-top:3%;"  src="images/UnasLogo.JFIF" alt="" />
							  
                            </a>
                        </div>
                        <div class="main-menu">
                            <ul>
							 <!-- MENU1/MENU PRINCIPAL -->
                                <li><a href="index.html">ACCUEIL</a><span>|</span>
                                </li>
                                <li class="about-menu">
                                    <a class="mm-arr" href="#">A PROPOS DE</a><span>|</span>
                                    <!-- MENU1/MENU PRINCIPAL -->
                                    <div class="mm-pos">
                                        <div class="about-mm m-menu">
                                            <div class="m-menu-inn">
                                                <div class="mm1-com mm1-s1">
                                                    <div class="ed-Course-in">
                                                        <a class="Course-overlay menu-about" href="inscription.html">
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
                                                        <!-- <li><a href="all-Courses.html"></a></li> -->
                                                       <!-- <li><a href="Course-details.html">Course details</a></li> -->
                                                       <!-- <li><a href="about.html">About</a></li> --!>
                                                        <!-- <li><a href="inscription.html">Admission</a></li> -->
                                                    
														 <li><a href="historicite.html">Historicité</a></li>
														<li><a href="mission.html">Mission</a></li>
														<li><a href="organisation.html">Organisation</a></li>
														<li><a href="organisationb.html">Mot du président</a></li>
														
                                                    </ul>
                                                </div>
                                               
											   
											         <div class="mm1-com mm1-s3">
														<p><b><h4>S'ouvrir </br> a </br>votre savoir</h4></b></p>
                                                </div>
											   
											   
											   
											   
											   
											   
											   
											   
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="admi-menu">
								<!--MENU1/MENU PRINCIPAL -->
                                    <a href="inscription.html" class="mm-arr">ADMISSION</a><span>|</span>
                                    
								<!-- MENU1/MENU PRINCIPAL -->
                                <li><a href="Option.html">FACULTÉS</a><span>|</span></li>
								
                                         

						
								<li class='menu-aboutSport'>
								
							<a href="sport.html" class="mm-arrSport">SPORT</a><span>|</span>
							
							<div class='king m-Menuport'>
							 <div class="m-menu-inn">
							  <div class="mm1Sport-com mm1Sport-s3">
							 
                                                
													
                                                </div>
					
										</div>
										 </div>
										
                                 </li>
									<!-- MENU1/MENU PRINCIPAL -->
                                <li><a href="events.html">ACTUALITÉS</a><span>|</span>
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
							<h4 style="padding-left:60px; padding-bottom:45px;"><u>FORMULAIRE D'INSCRIPTION</u></h4><hr style="width:75%;" />
							
                                <label class="control-label col-sm-3">OPTION:</label>
                                <div class="col-sm-9">
                                    <select name="option">
								<option>********</option>
								<option>Sciences informatiques</option>
								<option>Sciences comptables</option>							
								<option>Sciences administratives</option>
								<option>Sciences de la géstion</option>
								<option>Génie civil</option>							
								<option>Sciences  Education</option>
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
                                <label class="control-label col-sm-3">TYPE DE PROGRAMME:</label>
                                <div class="col-sm-9">
                                    <select name="typeprogramme">
								<option>********</option>
								<option>Programme cycle court</option>
								<option>Programme Licence</option>
															
							  </select>
                                </div>
                            </div>
                                  
								
								<div class="form-group">
                                <label class="control-label col-sm-3">VACATION:</label>
                                <div class="col-sm-9">
                                    <select name="vacation">
								<option>********</option>
								<option>Matin</option>
								<option>Median</option>
								<option>Soir</option>
															
							  </select>
                                </div>
                            </div><hr style="width:75%;" />
							    
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
                                <label class="control-label col-sm-3">DATE DE NAISSANCE:</label>
                                <div class="col-sm-9">
                                    <input type="date" name="datenaiss" class="form-control" placeholder="Entrez votre date de naissance ">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">LIEU DE NAISSANCE:</label>
                                <div class="col-sm-9">
                                    <input type="text" name="lieunaiss" class="form-control" placeholder="Entrez votre lieu de naissance">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="control-label col-sm-3">NIF(CIN):</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nif" class="form-control" placeholder="Entrez votre nif ou cin" required>
                                </div>
                            </div>
							<div class="form-group">
                                <label class="control-label col-sm-3">ADRESSE:</label>
                                <div class="col-sm-9">
                                    <input type="text" name="adresse" class="form-control" placeholder="Entrez votre Adresse">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="control-label col-sm-3">PHOTO:</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="photo">  
                              </div>
                            </div>
							<div class="form-group">
 
							<label class="control-label col-sm-3">N0 TELEPHONE:</label>
                                <div class="col-sm-9">
                                    <input type="text" name="notel" value="(+509)" class="form-control" required>
                                </div>
                            </div>
							<div class="form-group">
                                <label class="control-label col-sm-3"> N0 TEL. RESPONSABLE:</label>
                                <div class="col-sm-9">
                                    <input type="text" name="telresp" value="(+509)" class="form-control" required>
                                </div>
                            </div>
							<div class="form-group">
                                <label class="control-label col-sm-3">AUTRE N0 TEL.:</label>
                                <div class="col-sm-9">
                                    <input type="text" name="autretel"value="(+509)" class="form-control" required>
                                </div>
                            </div>
							<div class="form-group">
                                <label class="control-label col-sm-3">EMAIL:</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" class="form-control" placeholder="exemple.@gmail.com" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">ETAT CIVIL:</label>
                                <div class="col-sm-9">
                                    <select name="etatcivil">
								<option>********</option>
								<option>Celibataire</option>
								<option>Marie</option>							
								<option>veuf(ve)</option>
								<option>Autre</option>
							  </select>
                                </div>
                            </div>
							
							<div class="form-group">
                                <label class="control-label col-sm-3">SPORT PRATIQUE:</label>
                                <div class="col-sm-9">
                                    <select name="sportpratique">
								<option>Aucun</option>
								<option>Football</option>
								<option>Volley-ball</option>							
								<option>Basket-ball</option>
								<option>Tennis de table</option>
							  </select>
                                </div>
                            </div>
								
							  </select>
							  
                                </div>
                            </div>
							
							<tr>

							
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
                   <h4>Informations utiles</h4>
                    <ul>	
                    <p>Adresse: # 4,Rue Marcelin,Delmas65 / 16 ,Avenue Christophe Rue 4</p>
                    <p>Phone: <a href="#!">+(509) 3664-0716 / 3622-3235 / 40132239</a></p>
                    <p>Email: <a href="#!">unasmoh@edu.com</a></p>
						
						
						
					
                    </ul>
					
                </div>
               
                <div class="col-md-4">
                    <h4>AIDE & SUPPORT</h4>
					
                    <ul>
                       
					   
                        <li><a href="contact-us.html">CONTACTEZ-NOUS</a> </br>
                        <a href="faq.html">FAQs</a></br></br></br></br>
					
                        </li>
                        
                    </ul>
                </div>
				 <div class="col-md-4 foot-tc-mar-t-o">
				 <h4> Localisation </h4>
                    				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60523.266380257715!2d-72.3301674208984!3d18.542266899999987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eb9e76f785b4ab9%3A0x22b8c97f9b17581f!2sUNASMOH!5e0!3m2!1sfr!2sht!4v1632258148522!5m2!1sfr!2sht" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				<p>© 2021 Tous drois Réservés UNASMOH</p>
                </div>
				
					
	
	
				
            </div>
            <div class="row wed-foot-link-1">
               
               
            </div>
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


</html>