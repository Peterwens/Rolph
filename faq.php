<?html

$con=mysqli_connect("localhost","root","") or die("ERREUR");
mysqli_select_db($con,"dbunasmoh") or die("IMPOSSIBLE");
if(isset($_POST['btnconecter'])){

$mail=$_POST['email'];
$sql2="select * from user where  code='$mail'";
$req=mysqli_query($con,$sql2);
while($val=mysqli_fetch_Array($req)){
$email=$val['email'];
if($val['fonction']=='Secretaire'){
	
header('location:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminagro.html');on:gestionetudiant2.html');
}else if($val['fonction']=='Etudiant' and $val['Faculte']=='Genie Civile' ){
header('location:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminagro.html');on:profilgenie1an.html');
}else if($val['fonction']=='Etudiant' and $val['Faculte']=='Sciences informatiques'){
header('location:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminagro.html');on:profilscinfo1an.html');
}else if($val['fonction']=='Etudiant' and $val['Faculte']=='Developpement'){
header('location:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminscdev.html');
}else if($val['fonction']=='Etudiant' and $val['Faculte']=='Science infirmieres'){
header('location:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminagro.html');on:profilscinf1an.html');
}else if($val['fonction']=='Etudiant' and $val['Faculte']=='Science education'){
header('location:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminagro.html');on:profilscedu1an.html');


}else if($val['fonction']=='Etudiant' and $val['Faculte']=='Science juridique'){
header('location:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminagro.html');on:profilscjuri1an.html');
}else if($val['fonction']=='Etudiant' and $val['Faculte']=='laboratoire medicale'){
header('location:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminagro.html');on:profillabo1an.html');
}else if($val['fonction']=='Etudiant' and $val['Faculte']=='Ecole normal'){
header('location:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminagro.html');on:profilens1an.html');

}else if($val['fonction']=='Etudiant' and $val['Faculte']=='Electromeca'){
header('location:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminagro.html');on:profilEElectro1an.html');
}else if($val['fonction']=='Etudiant' and $val['Faculte']=='Sciences administratives'){
header('location:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminagro.html');on:profilscadm1an.html');
}else if($val['fonction']=='Etudiant' and $val['Faculte']=='Sciences comptables'){
header('location:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminagro.html');on:profileComptable.html');
}else if($val['fonction']=='Etudiant' and $val['Faculte']=='Gestion'){
header('location:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminagro.html');on:profileGestion.html');
}else if($val['fonction']=='Etudiant' and $val['Faculte']=='Economie'){
header('location:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminagro.html');on:profilEEconomie.html');
}else if($val['fonction']=='Etudiant' and $val['Faculte']=='Education scs soc/Econ'){
header('location:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminagro.html');on:profilscedu1an.html');
}else if($val['fonction']=='Etudiant' and $val['Faculte']=='Agronomie'){
header('location:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminagro.html');on:profilagro1an.html');






}else if($val['fonction']=='Etudiant' and $val['Faculte']=='ENS-Maths/Physiques(NS-SMP)'){
header('location:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminagro.html');on:profilens1an.html');
}else if($val['fonction']=='Etudiant' and $val['Faculte']=='ENS-Nat./Chimie(NS-SVT)'){
header('location:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminagro.html');on:profilens1an.html');
}else if($val['fonction']=='Etudiant' and $val['Faculte']=='ENS-Sces soc./Econ(NS-SES)'){
header('location:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminagro.html');on:profilens1an.html');
}else if($val['fonction']=='Etudiant' and $val['Faculte']=='Sces Edu: Philosophie & Letrres'){
header('location:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminagro.html');on:profilscedu1an.html');




header('location:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminagro.html');on:gestionetudiant2.html');
}else if($val['fonction']=='Coordonateur' and $val['Faculte']=='Genie Civile' ){
header('location:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminagro.html');on:admingenie.html');
}else if($val['fonction']=='Coordonateur' and $val['Faculte']=='SCience informatique'){
header('location:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminscinfo.html');
}else if($val['fonction']=='Coordonateur' and $val['Faculte']=='Developpement'){
header('location:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminscdev.html');
}else if($val['fonction']=='Coordonateur' and $val['Faculte']=='Science infirmieres'){
header('location:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminscinf.html');
}else if($val['fonction']=='Coordonateur' and $val['Faculte']=='Science education'){
header('location:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminscedu.html');
}else if($val['fonction']=='Coordonateur' and $val['Faculte']=='Science juridique'){
header('location:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminscjuri.html');
}else if($val['fonction']=='Coordonateur' and $val['Faculte']=='laboratoire medicale'){
header('location:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminlabo.html');
}else if($val['fonction']=='Coordonateur' and $val['Faculte']=='Ecole normal'){
header('location:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminens.html');

}else if($val['fonction']=='Coordonateur' and $val['Faculte']=='Electromeca'){
header('location:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminElectromeca.html');
}else if($val['fonction']=='Coordonateur' and $val['Faculte']=='Science Administratives'){
header('location:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminscadm.html');
}else if($val['fonction']=='Coordonateur' and $val['Faculte']=='Sciences Comptables'){
header('location:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminagro.html');on:menuprofComptables.html');
}else if($val['fonction']=='Coordonateur' and $val['Faculte']=='Gestion'){
header('location:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminagro.html');on:menuprofGestion.html');
}else if($val['fonction']=='Coordonateur' and $val['Faculte']=='Economie'){
header('location:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminagro.html');on:menuprofeconomie.html');
}else if($val['fonction']=='Coordonateur' and $val['Faculte']=='Education scs soc/Econ'){
header('location:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminagro.html');on:menuprofEnms.html');
}else if($val['fonction']=='Coordonateur' and $val['Faculte']=='Agronomie'){
header('location:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminagro.html');on:adminagro.html');
}














else{
$va=$val['fonction'];
echo"".$va;

}
} 
}


?>




<!DOCTYPE html>
<html lang="en">


<head>
    <title>Unasmoh</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Peterwens,wildryph,olivier,alexis">
    <meta name="keyword" content="Contactez-nous pour plus d'infos">
    <!-- FAV ICON(BROWSER TAB ICON) -->
<link rel="shortcut icon" href="images/UnasLogo.JFIF" type="">
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
 <section>
        <!-- TOP BARRE/  -->
        <div class="ed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ed-com-t1-left">
                            <ul>
                                <li><a href="contact.html">Adresse: # 4,Rue Marcelin,Delmas65 / 16 ,Avenue Christophe Rue 4</a>
                                <a href="tel:509509640716" >Phone:+(509) 3664-0716 / 3622-3235 / 40132239</a>
							
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
                                    <a class="mm-arr">A PROPOS DE</a><span>|</span>
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
	
		<!-- BARRE de recherche en haut -->
     
  
    <!--FIN SECTION ENTETE-->

	<section>
        <div class="head-2">
            <div class="container">
                <div class="head-2-inn head-2-inn-padd-top">
                    <h1>Concepteur du site web</h1>
<p>

Ci-dessous se retrouve les quatre étudiants de la promotion 2017-2021 qui ont principalement travailles à la réalisation de ce chef-d’œuvre informatique et technologiques.
Plus bas vous retrouverez tous les noms des étudiants de la promotion qui ont apportés leurs soutiens d’une manière ou d’une autre a cette prouesse.</p>
                    <div class="event-head-sub">
                        <ul>
                            <li>Promotions: Inoubliés</li>
                            <li>Total etudiants: 26</li>
                            <li>Localisation: Delmas 65</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>	
	
    <!--SECTION START-->
    <section>
        <div class="ed-res-bg">
		<div class="container com-sp pad-bot-70 ed-res-bg">
            <div class="row">
                <div class="cor about-sp h-gal ed-pho-gal">
					<ul>
					       
                            </li>
                           
                            </li>
                            <li><img class="materialboxed" data-caption="Denival Peterwens dourolph (president de la 4em ane science informatique 2021)" src="images/slider/p.jpg" width="500px" alt="">
							<p  ><b><u>Denival Peterwens Dourolph</u></b></br>
							Président de la promotion</br>
Programmeur (web, logiciel) gestionnaire de base de données et supervision</br>

Email : dpeterwensdourolph37@gmail.com
</p>
                            </li>
							
                     
                            <li><img class="materialboxed" data-caption="Pierre olivier (Vice-president 4em annee science informatique 2021)" src="images/slider/o.jpg" alt="">
										<p><b><u>Pierre Olivier</u></b></br>
							vice-Président de la promotion</br>
							gestionnaire de base de données </br>
							
							Email : pierreolivier@gmail.com
</p>
       
                            </li>
							
							
                            <li><img class="materialboxed" data-caption="Caseneuve wildryph ( Etudiant en science informatique  4em annee)" src="images/slider/will4.jpeg" alt="">
													<p><b><u>Caseneuve wildryph</u></b></br>							
Programmeur (web,logiciel) contrôleur de qualité </br>

							Email : caseneuvewildryph@gmail.com
</p>
    
                            </li>
						
                                 <li><img class="materialboxed" data-caption=" ALexis Samuel ( Etudiant en science informatique  4em annee)" src="images/slider/samiby.jpeg" alt="">
													<p><b><u>ALexis Samuel</u></b></br>	
Porte-parole de la promotion</br>													
Programmeur web .  </br>
							Email : alexissamuel013@gmail.com
</p>
    
                            </li>
			
						
					</ul>
					<ul>
					
					</ul>
                </div>
            </div>
        </div>
		</div>
    </section>
    <!--SECTION FIn-->
	
		<p style="text-justify: auto|inter-word|inter-character|none|initial|inherit;  margin-left:50px; margin-right:50px; margin-top:100px; margin-bottom:100px;" ><b><u>Membres de la promotion :</u></b></br>	
ALEXIS SAMUEL ,ARCELIN MARTIN CARTNEY ,ARISTOR ADNEL ,BATALIEN WELDINE ,CASENEUVE WILDRYPH ,CHARLES NICO JERRY ,CHARLES ROSE VERLANDE ,
 DENIVAL PETERWENS Dourolph,DERICE CALEB ,DESILUS SHNEIDER ,DUCLAIR FABIOLA ,ELYSEE WIDLINE ,JEUNE ROSE NESLY ,LUBIN MAXIM ,METELLUS MARKENDY, 
MONFISTON JOHN HENDEL ,NORE SHATSON L. ,PETIT-HOMME BLACKSONDY ,PIERRE MILORD GARCIA NARCISSE ,PIERRE OLIVIER ,POLLAS STANLEY ,RICHARD JOHN WILLY ,
ROMILUS DOLF MARLON ,SAINT-AUDE JEFFERSON ,SALOMON DANIEL ,VIRGILE EMMANUELA . 

</p>
      <!-- pieds de page -->
 <!-- pieds de page -->

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
			<p>© 2021 Tous droit Réservés UNASMOH</p></div>
        </div>
    </section>
  <section>
       
    
	
	   <section>
       
		
        <div id="modal1" class="modal fade" role="dialog">
            <div class="log-in-pop">
                <div class="log-in-pop-left">
                    <h1>Bonjour...</h1>
                    <p>N'avez-vous pas de compte? Pour créer un compte rendez-vous a la direction pour reclamer votre code.</p>
                    <h4>Se connecter avec facebook</h4>
                    <ul>
                        <li><a href="https://mobile.facebook.com/pages/category/Community-College/Unasmoh-228275027292471/?locale2=fr_FR&_rdc=1&_rdr"><i class="fa fa-facebook"></i> Facebook</a>
                        </li>
                      
                        </li>
                    </ul>
                </div>
                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                    </a>
                    <h4>Connexion</h4>
                    <p>N'avez-vous pas de compte? Pour créer un compte rendez-vous a la direction pour reclamer votre code.</p>
					<form method="post" action=""  class="form">
                    <form class="s12">
                        <div>
                            <div class="input-field s12">
                                    <input type="text" data-ng-model="name" class="validate" name="email">
                                <label>Code de connexion</label>
                            </div>
                        </div>
                        
                        <div>
                            <div class="s12 log-ch-bx">
                                <p>
                                    <input type="checkbox" id="test5" />
                                    <label for="test5">Remember me</label>
                                </p>
                            </div>
                        </div></br>
                      <div class="field2">
            <input type="submit"  name="btnconecter" value="LOGIN" class="waves-effect waves-light log-in-btn" >
          </div>
                        <div>
                            <div class="input-field s12"> <a >NB: Si vous avez oublié votre code étudiant veuillez le reclamer a nouveau a la sécrétariat.</a>  </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
       
       </form>
    </section>



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