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
	
header('location:gestionetudiant2.html');
}else if($val['fonction']=='Etudiant' and $val['Faculte']=='Genie Civile' ){
header('location:profilgenie1an.html');
}else if($val['fonction']=='Etudiant' and $val['Faculte']=='Sciences informatiques'){
header('location:profilscinfo1an.html');
}else if($val['fonction']=='Etudiant' and $val['Faculte']=='Developpement'){
header('location:adminscdev.html');
}else if($val['fonction']=='Etudiant' and $val['Faculte']=='Science infirmieres'){
header('location:profilscinf1an.html');
}else if($val['fonction']=='Etudiant' and $val['Faculte']=='Science education'){
header('location:profilscedu1an.html');


}else if($val['fonction']=='Etudiant' and $val['Faculte']=='Science juridique'){
header('location:profilscjuri1an.html');
}else if($val['fonction']=='Etudiant' and $val['Faculte']=='laboratoire medicale'){
header('location:profillabo1an.html');
}else if($val['fonction']=='Etudiant' and $val['Faculte']=='Ecole normal'){
header('location:profilens1an.html');

}else if($val['fonction']=='Etudiant' and $val['Faculte']=='Electromeca'){
header('location:profilEElectro1an.html');
}else if($val['fonction']=='Etudiant' and $val['Faculte']=='Sciences administratives'){
header('location:profilscadm1an.html');
}else if($val['fonction']=='Etudiant' and $val['Faculte']=='Sciences comptables'){
header('location:profileComptable.html');
}else if($val['fonction']=='Etudiant' and $val['Faculte']=='Gestion'){
header('location:profileGestion.html');
}else if($val['fonction']=='Etudiant' and $val['Faculte']=='Economie'){
header('location:profilEEconomie.html');
}else if($val['fonction']=='Etudiant' and $val['Faculte']=='Education scs soc/Econ'){
header('location:profilscedu1an.html');
}else if($val['fonction']=='Etudiant' and $val['Faculte']=='Agronomie'){
header('location:profilagro1an.html');






}else if($val['fonction']=='Etudiant' and $val['Faculte']=='ENS-Maths/Physiques(NS-SMP)'){
header('location:profilens1an.html');
}else if($val['fonction']=='Etudiant' and $val['Faculte']=='ENS-Nat./Chimie(NS-SVT)'){
header('location:profilens1an.html');
}else if($val['fonction']=='Etudiant' and $val['Faculte']=='ENS-Sces soc./Econ(NS-SES)'){
header('location:profilens1an.html');
}else if($val['fonction']=='Etudiant' and $val['Faculte']=='Sces Edu: Philosophie & Letrres'){
header('location:profilscedu1an.html');




header('location:gestionetudiant2.html');
}else if($val['fonction']=='Coordonateur' and $val['Faculte']=='Genie Civile' ){
header('location:admingenie.html');
}else if($val['fonction']=='Coordonateur' and $val['Faculte']=='SCience informatique'){
header('location:adminscinfo.html');
}else if($val['fonction']=='Coordonateur' and $val['Faculte']=='Developpement'){
header('location:adminscdev.html');
}else if($val['fonction']=='Coordonateur' and $val['Faculte']=='Science infirmieres'){
header('location:adminscinf.html');
}else if($val['fonction']=='Coordonateur' and $val['Faculte']=='Science education'){
header('location:adminscedu.html');
}else if($val['fonction']=='Coordonateur' and $val['Faculte']=='Science juridique'){
header('location:adminscjuri.html');
}else if($val['fonction']=='Coordonateur' and $val['Faculte']=='laboratoire medicale'){
header('location:adminlabo.html');
}else if($val['fonction']=='Coordonateur' and $val['Faculte']=='Ecole normal'){
header('location:adminens.html');

}else if($val['fonction']=='Coordonateur' and $val['Faculte']=='Electromeca'){
header('location:adminElectromeca.html');
}else if($val['fonction']=='Coordonateur' and $val['Faculte']=='Science Administratives'){
header('location:adminscadm.html');
}else if($val['fonction']=='Coordonateur' and $val['Faculte']=='Sciences Comptables'){
header('location:menuprofComptables.html');
}else if($val['fonction']=='Coordonateur' and $val['Faculte']=='Gestion'){
header('location:menuprofGestion.html');
}else if($val['fonction']=='Coordonateur' and $val['Faculte']=='Economie'){
header('location:menuprofeconomie.html');
}else if($val['fonction']=='Coordonateur' and $val['Faculte']=='Education scs soc/Econ'){
header('location:menuprofEnms.html');
}else if($val['fonction']=='Coordonateur' and $val['Faculte']=='Agronomie'){
header('location:adminagro.html');
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

<style>
html {
  scroll-behavior: smooth;
}
</style>
<head>
    <title>UNASMOH</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keyword" content="">
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

    <link href="css/style-mob.css" rel="stylesheet" />
    
</head>

<body>

<style>
#haut {
display: none;
position: fixed;
bottom: 20px;
right: 30px;
z-index: 99;
border: none;
outline: none;
background-color: skyblue;
color: white;
cursor: pointer;
padding: 15px;
border-radius: 10px;
font-size: 18px;
}
#haut:hover {
background-color: #ddd;
}
</style>

<div style>
	<button onclick="retourHaut()" id="haut" title="Retour haut de page">Haut</button>
</div>

<script>
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
	if (document.body.scrollTop > 700 || document.documentElement.scrollTop > 700) 
	{
		document.getElementById("haut").style.display = "block";
	} 
	else 
	{
		document.getElementById("haut").style.display = "none";
	}
}

function retourHaut() {
document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;
} 
</script>
<a id="haut"></a>

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
								<li><a href="historicite.html">Historicit??</a></li>
								<li><a href="mission.html">Mission</a></li>
								<li><a href="organisation.html">Organisation</a></li>
								<li><a href="organisationb.html">Mot du pr??sident</a></li> </ul>
								
								
                                <ul><a href="inscription.html"><b>Admission</b></a></ul>
                                <ul><a href="Option.html"><b>Facult??s</b></a></ul>
                                <ul><a href="sport.html"><b>Sports</b></a></ul>
                                <ul><a href="events.html"><b>Actualit??</b></a></ul>
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
    <!--DEBUT SECTION ENTETE-->
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
                                                    <p>L'Unasmoh est l'une des plus grandes universit?? du pays. Avec le plus grand nombres d'??tudiants et le plus de succursale dans tout le pays. Donc veuillez nous r??joindre.</p>
                                                   
                                                </div>
												<!-- MENU1/MENU PRINCIPAL/ANNDAN ABOUT US -->
                                                <div class="mm1-com mm1-s3">
                                                    <ul>
                                                        <!-- <li><a href="all-Courses.html"></a></li> -->
                                                       <!-- <li><a href="Course-details.html">Course details</a></li> -->
                                                       <!-- <li><a href="about.html">About</a></li> --!>
                                                        <!-- <li><a href="inscription.html">Admission</a></li> -->
                                                    
														 <li><a href="historicite.html">Historicit??</a></li>
														<li><a href="mission.html">Mission</a></li>
														<li><a href="organisation.html">Organisation</a></li>
														<li><a href="organisationb.html">Mot du pr??sident</a></li>
														
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
                                <li><a href="Option.html">FACULT??S</a><span>|</span></li>
								
                                         

						
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
                                <li><a href="events.html">ACTUALIT??S</a><span>|</span>
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
                            <form>
                                <div class="sf-type">
                                    <div class="sf-input">
                                        <input type="text" id="sf-box" placeholder="rechercher Cours ">
                                    </div>
                                    <div class="sf-list">
                                        <ul>
                                            <li><a href="Comptable.html">Comptabilit??/Finance</a></li>
                                            <li><a href="Genie1.html">G??nie Civil</a></li>
                                            <li><a href="Administration.html">Sciences Administratives</a></li>
                                            <li><a href="Agronomie.html">Agronomie</a></li>
                                            <li><a href="Electromeca.html">Genie El??ctronique</a></li>
                                            <li><a href="Infirmiere.html">Sciences infirimi??res</a></li>
                                            <li><a href="laboratoireM.html">Laboratoire M??dicale</a></li>
                                            <li><a href="Sciences Juridiques.html">Science juridiques</a></li>
                                            <li><a href="EcoleN.html">Ecole Normale sup??rieure</a></li>
                                           <li><a href="Informatique.html">Sciences informatiques</a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="sf-submit">
                                    <input type="submit" value="Cours">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
    <!--FIN SECTION ENTETE-->

    <!--DEBUT DEFILEMENT D'IMAGE DANS LA PADE D'ACCUEIL-->
    <section>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
		
            <!-- PROPRIETE POUR L'IMAGE DE DEFILEMENT1 -->
            <div class="carousel-inner">
                <div class="item slider1 active">
				<!-- CHANGER IMAGE DE DEFILEMENT1 -->
                    <img src="images/slider/99.jpg" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>BIENVENUE A <span>L'UNASMOH</span></h2>
                        <p>"La valeur d'une education universitaire n'est pas l'apprentissage de nombreux fait,mais l'entrainement a penser" 
</br>Albert Einstein</p
						                                                  
                        <!-- LIEN POUR VOIR TOUS LES Cours-->
					<!--	<a href="#" class="bann-btn-1">All Courses</a><a href="#" class="bann-btn-2">Voir plus</a> -->
                    </div>
                </div>
				
				<!-- PROPRIETE POUR L'IMAGE DE DEFILEMENT2-->
                <div class="item">
				<!-- CHANGER IMAGE DE DEFILEMENT2 -->
                    <img src="images/slider/c2.jpg" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>CINFOCA </h2>
                        <p>"La valeur d'une education universitaire n'est pas l'apprentissage de nombreux fait,mais l'entrainement a penser" 
</br>Albert Einstein</p>
                         <!-- LIEN POUR VOIR TOUS...-->
						<a href="Cinfoca.html" class="bann-btn-1">Voir plus</a>
                    </div>
                </div>
				
				<!-- PROPRIETE POUR L'IMAGE DE DEFILEMENT3-->
                <div class="item">
				<!-- CHANGER IMAGE DE DEFILEMENT3 -->
                    <img src="images/slider/faet.jpg" alt="">
                    <div class="carousel-caption slider-con">
                        <h2> <span>FAETAS</span></h2>
                        <p>Facult?? des ??tudes Avanc??es et Sp??cialis??es</p>
                         <!-- LIEN POUR VOIR TOUS...-->
						<a href="faetas.html" class="bann-btn-1">Voir plus</a>
                    </div>
                </div>
            </div>

            <!--DIRECTION/POINTEUR DE GAUCHE ET DE DROITE-->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <i class="fa fa-chevron-left slider-arr"></i>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <i class="fa fa-chevron-right slider-arr"></i>
            </a>
        </div>
    </section>
	 <!--FIN DEFILEMENT D'IMAGE DANS LA PADE D'ACCUEIL-->

    <!--DEBUT DES 4 ICONS DE FORME RONDS QUI SE TROUVENT DANS LA PAGE D'ACCUEIL -->
  
	<!--FIN DES 4 ICONS DE FORME RONDS QUI SE TROUVENT DANS LA PAGE D'ACCUEIL -->

    <!-- DEBUT DE DAUTRE ACTUALITE/DISCOVER MORE -->
 <!--SECTION START-->
 
    <section>
	
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="cor apropos-sp">
                    <div class="ed-apropos-tit">
                        <div class="con-title">
                            <h2>Actualit??s <span> Importantes</span></h2>
                            <p>Ev??nements qui seront organis??s dans les jours qui viennent et qui merite votre attention.</p>
                        </div>
                    </div>
                    <div class="ed-apropos-sec1">
                        <div class="ed-advan">
                            <ul>
                                <li>
                                    <div class="ed-ad-img">
                                        <img src="images/adv/5.png" alt="">
                                    </div>
                                    <div class="ed-ad-dec">
                                        <h4>Examen Intra</h4>
                                        <p>Les examens d'intras debuteront le 23 septembre prochain, veuillez bien acquitter vos differents avec l'economat pour pouvoir composer.</br> .</p>
                                        
                                    </div>
                                </li>
                                <li>
                                    <div class="ed-ad-img">
                                        <img src="images/adv/2.png" alt="">
                                    </div>
                                    <div class="ed-ad-dec">
                                        <h4>Journ??e Technologique</h4>
                                        <p>Unasmoh vous invite a sa premier ??dition de journ??e technologique qui aura lieu le 22 octobre prochain, et vous invite a venir en foule.</br>.</p>
                                        
                                    </div>
                                </li>
                                <li>
                                    <div class="ed-ad-img">
                                        <img src="images/adv/3.png" alt="">
                                    </div>
                                    <div class="ed-ad-dec">
                                        <h4>Week end Scientifique</h4>
                                        <p>Unasmoh vous annonces que le week-end scientifique de cette anne?? n'aura pas lieu en raison d'imprevus ,et vous remercie de votre compr??hension. </br>.</p>
                                        
                                    </div>
                                </li>
                                <li>
                                    <div class="ed-ad-img">
                                        <img src="images/adv/4.png" alt="">
                                    </div>
                                    <div class="ed-ad-dec">
                                        <h4>FAETAS</h4>
                                        <p> La facult?? des ??tudes Avanc??es et sp??cialis??es (FAETAS) Vous annonce que ses inscriptions se feront du 17 octobre au 15 Novembre prochain.</p>
                                        
                                    </div>
                                </li>
                                <li>
                                    <div class="ed-ad-img">
                                        <img src="images/adv/1.png" alt="">
                                    </div>
                                    <div class="ed-ad-dec">
                                        <h4>SPORT</h4>
                                        <p>La finale du championnat universitaire qui opposera Unasmoh et Unika aura lieu le 3 octobre prochain , nous comptons sur votre pr??sence.</p>
                                        
                                    </div>
                                </li>
                                <li>
                                    <div class="ed-ad-img">
                                        <img src="images/adv/6.png" alt="">
                                    </div>
                                    <div class="ed-ad-dec">
                                        <h4>Acad??mique</h4>
                                        <p>L'universit?? Unasmoh a l'honneur de vous annoncer le lancement de leurs facult?? de medecine cette anne??.</p>
                                      
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="ed-apropos-sec1">
                        <div class="col-md-6"></div>
                        <div class="col-md-6"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	 <!-- FIN DE DAUTRE ACTUALITE/DISCOVER MORE -->
	 

    <!-- DEBUT DES Cours POPULAIRES-->
	
    <section class="pop-cour">
	
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>Options et <span>Descriptions</span></h2>
                    <p>Liste des Cours disponibles a l'universit?? Unasmoh et l'ensemble des informations les caract??risant .</p>
                </div>
            </div>
            <div class="row">
			<div class="item">
                <div class="col-md-6">
				<div class="item">
                    
                        <!--Cours POPULAIRES -->
						
                        <div class="home-top-cour">
                            <!--IMAGE DES Cours POPULAIRES -->
                            <div class="col-md-3"> <img src="images/Course/Informatique1.jpg" alt=""> </div>
                            <!--CONTENU DES Cours POPULAIRES -->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="Informatique.html">
								<!-- TITRE DU Cours POPULAIRES  -->
                                    <h3>Sciences Informatiques</h3>
                                </a>
								<!-- SOUS-TITRE DU COUR POPULAIRE  -->
                                <h4>Logiciel / Securite / Base de donnees / Depannage ordinateur</h4>
                                <p>Cours disponible a delmas 65 et a Rue 4</p> <span class="home-top-cour-rat">4.2</span>
                                
								<!-- SOUS-TITRE DU COUR POPULAIRE/VIEWS/SHARE... -->
								<div class="hom-list-share">
                                    <ul>
                                        <li><a href="Informatique.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Voir plus</a> </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
						
						
                        <!--Cours POPULAIRES -->
                        <div class="home-top-cour">
                           <!--IMAGE DES Cours POPULAIRES -->
                            <div class="col-md-3"> <img src="images/Course/genie civil1.jpg" alt=""> </div>
                            <!--CONTENU DES Cours POPULAIRES -->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="Genie1.html">
								<!-- TITRE DU Cours POPULAIRES  -->
                                    <h3>G??nie Civil</h3>
                                </a>
								<!-- SOUS-TITRE DU COUR POPULAIRE  -->
                                <h4>Betonnage / Construction / Analyse</h4>
                                <p>Cours disponible a Delmas 65 et a Pont saint geraud</p> <span class="home-top-cour-rat">4.2</span>
                               <!-- SOUS-TITRE DU COUR POPULAIRE/VIEWS/SHARE... -->
							   <div class="hom-list-share">
                                    <ul>
                                        <li><a href="Genie1.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Voir plus</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
						
						
                       <!--Cours POPULAIRES -->
                        <div class="home-top-cour">
                           <!--IMAGE DES Cours POPULAIRES -->
                            <div class="col-md-3"> <img src="images/Course/Agronomie1.jpg" alt=""> </div>
                            <!--CONTENU DES Cours POPULAIRES -->
                            <div class="col-md-9 home-top-cour-desc">
                                <!-- TITRE DU Cours POPULAIRES  -->
								<a href="Agronomie.html">
                                    <h3>Sciences Agronomiques</h3>
                                </a>
								<!-- SOUS-TITRE DU COUR POPULAIRE  -->
                                <h4>Etude de sol / El??vage / Plantation</h4>
                                <p>Cours disponible a Delmas 65 et a Pont saint geraud</p> <span class="home-top-cour-rat">4.2</span>
                                <!-- SOUS-TITRE DU COUR POPULAIRE/VIEWS/SHARE... -->
								<div class="hom-list-share">
                                    <ul>
                                     <li><a href="Agronomie.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Voir plus</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR CoursES-->
                        <div class="home-top-cour">
                            <!--POPULAR CoursES IMAGE-->
                            <div class="col-md-3"> <img src="images/Course/infirmieres1.jpg" alt=""> </div>
                            <!--POPULAR CoursES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="Infirmiere.html">
                                    <h3>Sciences Infirmi??res</h3>
                                </a>
                                <h4>Soins Primaire / Consultation / Conseilles m??dicales</h4>
                                <p>Cours disponible a Delmas 65 et a Pont saint geraud</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                 <li><a href="Infirmiere.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Voir plus</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
												
					<div class="home-top-cour">
                            <!--POPULAR CoursES IMAGE-->
                            <div class="col-md-3"> <img src="images/Course/ec.jpg" alt=""> </div>
                            <!--POPULAR CoursES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="economie.html">
                                    <h3>Sciences Economiques</h3>
                                </a>
                                <h4>Cahier de charge / Comptable / Gestions financieres</h4>
                                <p>Cours desponible a Delmas 65 et a Rue 4</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                      <li><a href="economie.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Voir plus</a> </li>
                                    </ul>
									
                                </div>
								
                            </div>
							
                        </div>
							  <div class="home-top-cour">
                            <!--POPULAR CoursES IMAGE-->
                            <div class="col-md-3"> <img src="images/Course/ed.jpg" alt=""> </div>
                            <!--POPULAR CoursES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="EcoleN.html">
                                    <h3>Ecole Normale superieure</h3>
                                </a>
                                <h4>Soins Primaire / Consultation / Conseilles medicales</h4>
                                <p>Cours disponible a Delmas 65 et a Pont saint geraud</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                 <li><a href="EcoleN.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Voir plus</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
						 <div class="home-top-cour">
                            <!--POPULAR CoursES IMAGE-->
                            <div class="col-md-3"> <img src="images/res2.png" alt=""> </div>
                            <!--POPULAR CoursES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="Sciences Juridiques.html">
                                    <h3>Sciences Juridiques</h3>
                                </a>
                                <h4>Avocat / Juge/ Conseillier judiciare</h4>
                                <p>Cours disponible a Delmas 65 et a Pont saint geraud</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                 <li><a href="Sciences Juridiques.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Voir plus</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				</div>
				
                <div class="col-md-6">
                    <div>
                        <!--POPULAR CoursES-->
                        <div class="home-top-cour">
                            <!--POPULAR CoursES IMAGE-->
                            <div class="col-md-3"> <img src="images/Course/electro1.jpg" alt=""> </div>
                            <!--POPULAR CoursES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="Electromeca.html">
                                    <h3>Genie Electro M??canique</h3>
                                </a>
                                <h4>Barrieres Electriques / Lavabo Electrique /  hydrauliques</h4>
                                <p>Cours disponible a delmas 65 et a Rue 4</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                       <li><a href="Electromeca.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Voir plus</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR CoursES-->
                        <div class="home-top-cour">
                            <!--POPULAR CoursES IMAGE-->
                            <div class="col-md-3"> <img src="images/Course/laboratoire1.jpg" alt=""> </div>
                            <!--POPULAR CoursES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="laboratoireM.html">
                                    <h3>Laboratoire M??dicale</h3>
                                </a>
                                <h4>Prescription / Dosage / M??dicaments</h4>
                                <p>Cours disponible a delmas 65 et a Rue 4</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                     <li><a href="laboratoireM.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Voir plus</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR CoursES-->
                        <div class="home-top-cour">
                            <!--POPULAR CoursES IMAGE-->
                            <div class="col-md-3"> <img src="images/Course/admnistation 1.jpg" alt=""> </div>
                            <!--POPULAR CoursES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="Administration.html">
                                    <h3>SCiences Administratives</h3>
                                </a>
                                <h4>Gestion entreprise / administrateur / Management</h4>
                                <p>Cours disponible a Rue 4 et a Delmas 65</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                           <li><a href="Administration.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Voir plus</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR CoursES-->
                        <div class="home-top-cour">
                            <!--POPULAR CoursES IMAGE-->
                            <div class="col-md-3"> <img src="images/Course/Compatbilite1.jpg" alt=""> </div>
                            <!--POPULAR CoursES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="Comptable.html">
                                    <h3>Sciences Comptables</h3>
                                </a>
                                <h4>Cahier de charge / Comptable / Gestions financieres</h4>
                                <p>Cours desponible a Delmas 65 et a Rue 4</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                      <li><a href="Comptable.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Voir plus</a> </li>
                                    </ul>
									
                                </div>
								
                            </div>
							
                        </div>
						
						 <div class="home-top-cour">
                            <!--POPULAR CoursES IMAGE-->
                            <div class="col-md-3"> <img src="images/Course/gs.jpg" alt=""> </div>
                            <!--POPULAR CoursES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="Science developpement.html">
                                    <h3>Sciences du developpement</h3>
                                </a>
                                <h4>Cahier de charge / Comptable / Gestions financi??res</h4>
                                <p>Cours desponible a Delmas 65 et a Rue 4</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                      <li><a href="Science developpement.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Voir plus</a> </li>
                                    </ul>
									
                                </div>
								
                            </div>
							
                        </div>
						
						 <div class="home-top-cour">
                            <!--POPULAR CoursES IMAGE-->
                            <div class="col-md-3"> <img src="images/Course/gse.jpg" alt=""> </div>
                            <!--POPULAR CoursES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="Gestion.html">
                                    <h3>Gestion</h3>
                                </a>
                                <h4>Cahier de charge / Gestion Entreprise / finances</h4>
                                <p>Cours desponible a Delmas 65 et a Rue 4</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                      <li><a href="Gestion.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Voir plus</a> </li>
                                    </ul>
									
                                </div>
								
                            </div>
							
                        </div>
						
						
						
						 <div class="home-top-cour">
                            <!--POPULAR CoursES IMAGE-->
                            <div class="col-md-3"> <img src="images/education.jpg" alt=""> </div>
                            <!--POPULAR CoursES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="ScienceEdu.html">
                                    <h3>Sciences de l'education</h3>
                                </a>
                                <h4>Enseignant / Cadres/ Conseiller </h4>
                                <p>Cours desponible a Delmas 65 et a Rue 4</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                      <li><a href="ScienceEdu.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Voir plus</a> </li>
                                    </ul>
									
                                </div>
								
                            </div>
							
                        </div>
						
						
						
						

						

						</div>
						

						
						
                    </div>
					
                </div>
				
            </div>
			
        </div>
		
			
			
			
			
			
			</section>
			
			
			
			
			
			
			
		
<!-- FIN DES Cours POPULAIRES -->
	
   

    <!-- NEWS AND EVENTS -->
    <section>
        <div class="container com-sp">
            <div class="row">
                <div class="con-title">
                    <h2>Gall??ries et <span>Ev??nements</span></h2>
                    <p>Repartition  des photo ,videos et des ??v??nements ?? venir</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="bot-gal h-gal ho-event-mob-bot-sp">
                       <h4><li><a href="gallery-photo.html">Gall??ries Photo</a></li></h4>
                        <ul>
                     
                            </li>
                            <li><img class="materialboxed" data-caption="Groupe d'etudiants de la 4em anee science informatique" src="images/slider/f2.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Denival Peterwens dourolph (president de la 4em ane science informatique 2021)" src="images/slider/p.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Decanat Unasmoh" src="images/slider/h.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Etudiante en science informatique 3em et 4em annee" src="images/slider/w.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Pierre olivier (Vice-president 4em annee science informatique 2021)" src="images/slider/o.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Derice Caleb ( Etudiant en science informatique  4em annee)" src="images/slider/c.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Desilus shneider ( Etudiant en science informatique  4em annee)" src="images/slider/s.jpg" alt="">
                            </li>
                          
						<li><img class="materialboxed" data-caption="Batiment Unasmoh" src="images/slider/ff.jpg" alt="">
						</li>
						<li><img class="materialboxed" data-caption="Batiment Unasmoh" src="images/slider/gg.jpg" alt="">
						</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bot-gal h-vid ho-event-mob-bot-sp">
                        <h4><li><a href="gallery-video.html">Gall??ries Video</a></li></h4>
                        <iframe src="https://www.youtube.com/embed/9BPWcxJArII?autoplay=0&amp;showinfo=0&amp;controls=0" allowfullscreen></iframe>
						
					
						
						
						https://www.youtube.com/watch?v=2WqFtiR4-F4
                        <h5>Promotion r??alisant le site web </h5>
                        <p>Unamoh a l'honneur de vous presenter les etudiants de 4em anne?? science informatique promotion 2017-2021.</p>
                        <p>Qui dans leur devouement et leurs discipline ont r??alisant ce site web de standard internationnal.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bot-gal h-Cinfoca ho-event">
                       <h4><li><a href="events.html">Ev??nement</a></li></h4>
                        <div class="ho-event">
                            <ul>
                                <li>
                                    <div class="ho-ev-date"><span>15</span><span>Oct,2021</span>
                                    </div>
                                    <div class="ho-ev-link">
                                        <a href="events.html">
                                            <h4>Examen Final</h4>
                                        </a>
                                        <p>La realisation de l'examen final se deroulera entre le : .</p>
                                        <span>15 Octobre et le  10 Novembre</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ho-ev-date"><span>17</span><span>Dec,2021</span>
                                    </div>
                                    <div class="ho-ev-link">
                                        <a href="events.html">
                                            <h4>Nouvelle session</h4>
                                        </a>
                                        <p>Debut de la nouvelle sessionse fera entre</p>
                                        <span>10 Decembre</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ho-ev-date"><span>22</span><span>Oct,2021</span>
                                    </div>
                                    <div class="ho-ev-link">
                                        <a href="events.html">
                                            <h4>Journ??e technologique</h4>
                                        </a>
                                        <p>Le 22 octobre prochain s'organisera la premi??re edition.</p>
                                        <span>22 Octobre 2021</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ho-ev-date"><span>28</span><span>Sept,2021</span>
                                    </div>
                                    <div class="ho-ev-link">
                                        <a href="events.html">
                                            <h4>Pr??sentation</h4>
                                        </a>
                                        <p>Organistion de la pr??sentation de la nouvelle.</p>
                                        <span>28 Septembre 2021</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
 
    <!-- pieds de page -->
    <section class="wed-hom-footer">
        <div class="container">
          
			  </div>
			  </div>
            <div class="row wed-foot-link">
                <div class="col-md-4 foot-tc-mar-t-o">
                   <h4 style="margin-left:40px;">Informations utiles</h4>
                    <ul style="margin-left:40px; ">	
                    <p>Adresse: # 4,Rue Marcelin,Delmas65 / 16 ,Avenue Christophe Rue 4</p>
                    <p>Phone: <a >+(509) 3664-0716 / 3622-3235 / 40132239</a></p>
                    <p>Email: <a >unasmoh@edu.com</a></p>
						
						
						
					
                    </ul>
					
                </div>
               
                <div class="col-md-4">
                    <h4>AIDE & SUPPORT</h4>
					
                    <ul>
                       
					   
                        <li><a href="contact.html">CONTACTEZ-NOUS</a> </br>
                        <a href="faq.html">FAQs</a></br></br></br></br>
					
                        </li>
                        
                    </ul>
                </div>
				 <div class="col-md-4 foot-tc-mar-t-o">
				 <h4> Localisation </h4>
                    				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60523.266380257715!2d-72.3301674208984!3d18.542266899999987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eb9e76f785b4ab9%3A0x22b8c97f9b17581f!2sUNASMOH!5e0!3m2!1sfr!2sht!4v1632258148522!5m2!1sfr!2sht" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				
                </div>
				
					
	
	
				
            </div>
            <div class="row wed-foot-link-1">
               
               
            </div>
			 <div class="col-md-4">
			<p style="margin-left:25px; ">?? 2021 Tous droit R??serv??s UNASMOH</p></div>
        </div>
    </section>

    
    <section class="wed-rights">
        <div class="container">
            <div class="row">
                <div class="copy-right">
                   
                </div>
            </div>
        </div>
    </section>

   
    <section>
       
		
        <div id="modal1" class="modal fade" role="dialog">
            <div class="log-in-pop">
                <div class="log-in-pop-left">
                    <h1>Bonjour...</h1>
                    <p>N'avez-vous pas de compte? Pour cr??er un compte rendez-vous a la direction pour reclamer votre code.</p>
                    <h4>Se connecter avec facebook</h4>
                    <ul>
                        <li><a href="https://www.facebook.com/Unasmoh-228275027292471?_rdc=1&_rdr"><i class="fa fa-facebook"></i> Facebook</a>
                        </li>
                      
                        </li>
                    </ul>
                </div>
                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                    </a>
                    <h4>Connexion</h4>
                    <p>N'avez-vous pas de compte? Pour cr??er un compte rendez-vous a la direction pour reclamer votre code.</p>
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
                            <div class="input-field s12"> <a >NB: Si vous avez oubli?? votre code ??tudiant veuillez le reclamer a nouveau a la s??cr??tariat.</a>  </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
       
       </form>
    </section>

    <!-- SOCIAL MEDIA SHARE -->
    <section>
        <div class="icon-float">
            <ul>
                <li><a href="#" class="sh">2k <br> Share</a> </li>
                <li><a href="https://www.facebook.com/Unasmoh-228275027292471?_rdc=1&_rdr" class="fb1"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                <li><a href="https://twitter.com/" class="tw1"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                <li><a href="https://www.linkedin.com/" class="li1"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                <li><a href="https://www.whatsapp.com/?lang=sr" class="wa1"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
                <li><a href="https://mail.google.com/mail/u/0/#inbox" class="sh1"><i class="fa fa-envelope-o" aria-hidden="true"></i></a> </li>
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