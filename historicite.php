<?php

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
}else if($val['fonction']=='Etudiant' and $val['Faculte']=='SCience informatique'){
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
}else if($val['fonction']=='Etudiant' and $val['Faculte']=='Science Administratives'){
header('location:profilscadm1an.html');
}else if($val['fonction']=='Etudiant' and $val['Faculte']=='Comptables'){
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
}else if($val['fonction']=='Coordonateur' and $val['Faculte']=='Comptables'){
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


<head>
    <title>Université Américaine Des Sciences Modernes d'Haïti</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Education master is one of the best educational html template, it's suitable for all education websites like university,college,school,online education,tution center,distance education,computer education">
    <meta name="keyword" content="education html template, university template, college template, school template, online education template, tution center template">
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
    <section>
        <div class="container com-sp">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="con-title">
												<div class="sb2-2-2">
 <li class="page-back"><a href="index.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
 <a href="#his">Historicité</a>
 <a href="#ja">Jalons historiques</a>
                        </li>

 </div>
         
                            <h2><span>UNASMOH</span></h2>
                            <p><i>Université Américaine des Sciences Modernes d'Haïti</i></p><hr/><hr/>
                        </div>
               <div>
                            <div class="ho-event pg-eve-main pg-blog">
                                <ul>
                                    <li>
                                        
                                        <div class="pg-eve-desc pg-blog-desc">
                                            
                                                
                                           
											<img src="images/univ.jpg" alt="">
											<div class="share-btn blog-share-btn">
												<br/><br/><br/><div id="his"><h4><b><u>Historique</u></b></h4>
											</div>
                                            <p style="text-align:justify">
											L’UNASMOH émerge d’un projet citoyen de démocratisation de l’enseignement supérieur en faveur des couches les plus défavorisées du pays. Pendant plus d’un siècle et demi, ce palier éducatif a été longtemps le reflet d’une situation socioéconomique inégalitaire en restant l’apanage d’une élite prédatrice.  Avec les mutations amorcées par la société de l’information au cours de la décennie 80, les parents des milieux populaires, devenus plus avisés, réclamaient avec véhémence le droit aux études supérieures pour leurs enfants. Malheureusement, l’offre publique ne pouvait pas répondre à cette demande et les tentatives privées étaient très restreintes et élitistes à ce niveau. Le  problème a persisté jusqu’à la fin des années 90 quand un groupe d’intellectuels et professionnels, sous le leadership du <b><u>Dr Michel DOSSOUS</u></b> ont décidé de fonder, en novembre 1998, l’Université Américaine des Sciences Modernes D’Haïti (UNASMOH). Très expérimentés et hautement qualifiés, en majorité des éducateurs chevronnés, conscients de leur rôle d’avant-gardiste, ces derniers ont opté pour offrir à la population, toutes couches sociales confondues, une formation universitaire de qualité.</p><hr/>
										   <br/><br/><br/><div id="ja"><h4><b><u>Jalons historiques</u></b></h4>
										   <p style="text-align:justify">Le Centre d'Informatique de Comptabilité et d'Administration (CINFOCA),  fondé le <b><i>29 Juin1996</i></b> qui offrait un programme de 2 ans dans le secteur commercial  s’est  vu ajouter une entité d’enseignement supérieur dénommée la Faculté des Sciences Administratives et Économiques (FSAE) en <b><i>novembre 1997.</i></b> <b><i>En octobre 1999</b></i>, pour mieux répondre à la demande des étudiants et de la communauté toute entière, la FASA est devenue Université Américaine des Sciences Modernes d'Haïti  (UNASMOH).
										   </p></div>
										   
										   
										   <br/><p style="text-align:justify"> <b><i>En novembre 1999</i></b>, Création de la Faculté des Sciences de l’Education (FASED) avec les  options suivantes :
									     <br/><b>1)Ecole Préscolaire et Fondamentale</b>
                                        <br/> <b>2)Ecole Normale de Formation des Maitres</b> ayant les concentrations suivantes (mathématiques, physiques, chimie, sciences naturelle, philosophie, lettres modernes.)  
									   </p>
									   
									    <br/><p style="text-align:justify"> <b><i>novembre 2000</i></b>, Création de la Faculté des Sciences de la Santé avec comme option de démarrage : les Sciences Infirmières.
									   
									   </p>
									   
									   <br/> <p style="text-align:justify"><b><i>Février 2002</i></b>, Accréditation de l’UNASMOH et approbation de son plan de développement décennal par la Direction de l’Enseignement Supérieur et de la Recherche Scientifique (DESRS) du Ministère de l’Education Nationale et la Formation  Professionnelle (MENFP). 
									   </p>
									   <p style="text-align:justify"><b><i>Octobre 2004</i></b>, Implantation de la  Faculté de Génie et d'Architecture (FAGA);<br/>Construction du local principal à l’avenue Christophe afin de répondre au développement de l’université.

									   </p>
									    <br/><p style="text-align:justify"><b><i>Octobre 2006</i></b>, La Faculté de Droit et des Relations EVENEMENTSes (FADRI) en octobre 2006, et la Faculté des Sciences d’Agronomie et  Environnementales (FASAGE) ont vu le jour.<br/>Dans le souci de démocratiser l’enseignement supérieur en Haïti, L’UNASMOH lance son programme de décentralisation en ouvrant ses portes aux populations des départements géographiques suivants :
									   <br/>• Sud (Cayes)  2006
									   <br/>• Sud-Est (Jacmel) 2007
									   <br/>• Commune de Delmas 2010
									   <br/>• Haut-Artibonite 2 (Gonaïves) 2011
									   <br/>• Nord (Cap-Haitien) 2012
									   <br/>• Grande-Anse (Jérémie) 2019
									   <br/>• Commune de Carrefour 2020
									   </p>
									   
									    <br/><p style="text-align:justify"><b><i>Janvier 2010</i></b>, Le principal local de l’Université construit entre 2005 et 2006 à  Port-au-Prince, a été entièrement détruit lors du séisme du 12 janvier 2010. Plusieurs cadres, professeurs et étudiants y ont trouvé la mort.<br/>Loin de pouvoir baisser les bras, ce tremblement de terre dévastateur a été vu par les dirigeants de l’UNASMOH, non comme une fatalité mais comme une opportunité d’une remise en question des rapports de l’institution à la science. Selon une 
									   approche réflexive et critique, l’équipe s’est remise au travail tout en revisitant fondamentalement les programmes offerts et les pratiques pédagogico-administratives qui reposent essentiellement sur la science et les intérêts supérieurs de la communauté haïtienne.<br/>Grâce à ce changement de paradigmes, l’UNASMOH compte aujourd’hui, sur l’ensemble du territoire, plus 9000 étudiants, …….professeurs .et offre 35 programmes de formation. 
									   L’importance du travail accompli a attiré le regard et les intérêts de certains observateurs tant nationaux qu’internationaux qui sont devenus des partenaires à part entière.<br/>Du nombre, on retient : 
									   <br/>•	Universidad Católica Tecnológica de Barahona (UCATEBA);
									   <br/>•	Universidad Autónoma de Santo Domingo UASD;
									   <br/>•	Azure College (USA);
									   <br/>•	Brown Mackie College (USA);
									   <br/>•	Université  de  Guadalajara (Mexique);
									   
									   </p>
									   
									    <br/><p style="text-align:justify"><b><i>Mai 2020</i></b>, Evaluation globale de toutes les activités de l’UNASMOH et adoption d’un nouveau plan stratégique reposant sur les grands axes suivants : 
									   <br/>1.	Promotion de l’Approche-genre à tous les niveaux 
									   <br/>2.	Le virage numérique 
									   <br/>3.	La promotion de la recherche scientifique
									   <br/>4.	Extension de l’offre académique.
									   <br/>Les dernières crises vécues exigent à l’UNASMOH de contribuer à doter le pays de leaders capables de prendre en main les destinées du pays et des institutions indispensables à son bon développement, d’où le programme de maitrise en leadership, opérationnel depuis le mois de mai 2021 avec des concentrations en éducation, management des organisations et comptabilité contrôle et Audit (CCA).

									   
									   </p>
									   
									   
									   </div>
                                        
                                    </li>
                                   
                                   
                                       
    
									
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->


    
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
                        
                       <a href="https://youtube.com/"><i class="fa fa-youtube" aria-hidden="true"></i></a></li></br></br></br>
					  
                       

                       
                    </ul>
				 
				
                </div>
               
            </div>
            <div class="col-md-4">
			<p>© 2021 Tous drois Réservés UNASMOH</p></div>
        </div>
    </section>
    <!--END HEADER SECTION-->

  
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
                 <li><a href="#" class="sh">2k <br> Share</a> </li>
                <li><a href="https://mobile.facebook.com/pages/category/Community-College/Unasmoh-228275027292471/?locale2=fr_FR&_rdc=1&_rdr" class="fb1"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
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