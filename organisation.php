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
    <title>Universit?? Am??ricaine Des Sciences Modernes d'Ha??ti</title>
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
 <a href="#gouv">La gouvernance</a>
 <a href="#pro">Profil des dirigeants</a>
 <a href="#dec">Les DECANATS</a>
                        </li>

 </div>
         
                            <h2><span>UNASMOH</span></h2>
                            <p><i>Universit?? Am??ricaine des Sciences Modernes d'Ha??ti</i></p><hr/><hr/>
                        </div>
               <div>
                            <div class="ho-event pg-eve-main pg-blog">
                                <ul>
                                    <li>
                                        
                                        <div class="pg-eve-desc pg-blog-desc">
                                            
                                                
                                           
											<img src="images/univ.jpg" alt="">
											<div class="share-btn blog-share-btn">
												<br/><br/><br/><div id="gouv"><h4><b><u>La gouvernance </u></b></h4>
											</div>
                                            <p style="text-align:justify">
											La gouvernance  de l???UNASMOH privil??gie un leadership organisationnel participatif  permettant aux membres de la communaut?? enseignante et administrative de contribuer dans les d??cisions strat??giques de l???institution. Ce choix qui repose essentiellement sur une strat??gie de communication transparente et ouverte permet  de valoriser les engagements des collaborateurs tout en renfor??ant leurs comp??tences et leurs capacit??s intrins??ques. Cette approche  offre l???avantage de laisser ??merger de nouveaux leaders capables de venir en support ?? la gouvernance actuelle de l???institution selon son identit??, ses valeurs, sa mission, ses objectifs dans la seule perspective d???assurer une rel??ve ordonn??e. Aujourd???hui, la gouvernance de l???universit?? repose sur l???organigramme  et les ressources suivants : 
											<br/>???	1 Conseil d???Administration pr??sid?? par <b><i>Michel DOSSOUS, Ph. D,</i></b>
											<br/>???	1 rectorat assur?? par <b><i>Florise M. DOSSOUS, Ph, D</i></b>
											<br/>  o	3 Vice-rectorats (recherche, affaires acad??miques, affaires administratives et logistiques) assum??s  respectivement par:<b><i> Rony FRAN??OIS, Jean Marcel LUMERANT et Jean Wilky RENE.</i></b>
											<br/>  o	1 secr??tariat g??n??ral qui r??v??le de la responsabilit?? de <b><i>Faverdieu JEAN BRUNEL.</i></b>
											Aux vices-rectorats sont rattach??s les d??canats et les directions p??dagogiques, techniques et administratives en vue d???assurer les fonctions et  services n??cessaires a la bonne marche  de l???Universit??.
											</p>										   
											<br/><br/><br/><div id="ja"><h4><b><u>Les Facult??s et les Programmes d?????tudes</u></b></h4>
										   <p style="text-align:justify">
                                            Au conseil d???administration, chaque facult?? est repr??sent??e par son doyen. L???UNASMOH offre ses services acad??miques ?? partir  de huit (8) facult??s, un programme de dipl??me-junior en deux ans, et un programme de maitrise. Chaque facult?? ou programme est administr?? par un conseil compos?? de trois ?? quatre membres selon les besoins de la facult?? ou du programme, selon l???organigramme ci-dessous</p></div>
										   		<img src="images/orga.png"></img>								   
										   </p>
										   
										   <br/><br/><br/><div id="pro"><h4><u>Profil des dirigeants</u></h4>
										   <h5>Le pr??sident du Conseil d'Administration : Dr. Michel DOSSOUS, Ph.D</h5>
										   <p style="text-align:justify">
										   Michel DOSSOUS est d??tenteur d???un doctorat en Business Administration (concentration leadership des organisations) et une double maitrise MBA, en Marketing et en leadership). Fondateur de l???Universit?? Am??ricaine des Sciences Modernes d???Ha??ti (UNASMOH),  il incarne un chef de fil avis?? et responsable, d??termin?? ?? offrir aux jeunes ha??tiennes et ha??tiens l???acc??s ?? une formation universitaire de qualit?? EVENEMENTSement comp??titive. </p>											
											</div>
											
											<br/><br/><br/><h5><u>La Rectrice : Florise M. DOSSOUS, Ph. D</u></h5>
										   <p style="text-align:justify">
										   Docteur Dossous est d??tentrice d???un doctorat en Gestion des Affaires (business administration)  concentration Leadership et d???une maitrise en  Business Administration de l???Universit?? de Ph??nix University of Phoenix (UoP). Elle a ??galement entrepris des ??tudes sp??cialis??es  en Gestion Strat??gique des Ressources Humaines  ?? l???Universit?? de Miami (UM).  Docteure DOSSOUS, comme Rectrice, symbolise un leadership f??minin qui encourage les jeunes femmes ?? poursuivre leurs ??tudes universitaires tout en ??tant comp??titives EVENEMENTSement.</p>										   
										   
										   <br/><br/><br/><h5><u>Le Vice-Recteur aux Affaires Acad??miques : Jean Marcel LUMERANT</u></h5>
										   <p style="text-align:justify">
										   M. Lumerant est d??tenteur d???une maitrise en Gestion de projet. Il est ??galement  licenci?? en Sciences ??conomiques. Professeur de Statistique et d'Economie. Monsieur Lumerant s'est av??r?? un professionnel tr??s dynamique dou?? d'un sens de leadership pouss?? et d'un charisme exceptionnel.</p>									   
									     
										  <br/><br/><br/><h5><u>Le  Vice-Recteur aux Affaires Administratives et logistiques : Jean Wilky RENE</u></h5>
										   <p style="text-align:justify">
										   Jean Wilky RENE, est d??tenteur d'une double maitrise en Sciences Informatiques, l???une en Base de Donn??es et Int??gration de Syst??me  de l'Universit?? de Nice Sophia-Antipolis (d??localis?? en Ha??ti) et  l???autre en Expertise et Ing??nierie des Syst??mes d'Information en Sant?? de l'Universit?? AIX-Marseille.</p>									    
										 
										  <br/><br/><br/><h5><u>Le Vice-Recteur ?? la Recherche et au D??veloppement : Rony FRAN??OIS </u></h5>
										   <p style="text-align:justify">
										   Rony FRANCOIS compl??te des ??tudes de doctorat en Formation ?? Distance (FAD) et E-learning. Il d??tient aussi une double maitrise en Sciences de l?????ducation (Gestion et ??valuation des Syst??mes ??ducatifs  Management des Syst??mes ??ducatifs et de Formation. </p>									    
									   
									       <br/><br/><br/><h5><u>Le Secr??taire G??n??ral : Jean Brunel  FAVERDIEU</u></h5>
										   <p style="text-align:justify">
										   Ma??tre en Sciences du d??veloppement, licenci?? en Anthroposociologie, Jean Brunel FAVERDIEU  est ??galement  dipl??m?? en impact et ??valuation environnementale ?? l'Universit?? Senghor d'Alexandrie.  Professeur des sciences sociales et encadreur des ??tudiants dans la pr??paration des travaux de fins d?????tudes (TFE) ; il occupe aussi le poste de Doyen de la Facult?? des Sciences de l'Education et de Secr??taire G??n??ral du Conseil d???administration. </p>									     
										   
										   <br/><br/><br/><div id="dec"><h4><u>LES DECANATS </u></h4>
										   <h5>Jean Michel GESNER FILS : Facult?? des Sciences Administratives (FASAE)  et de la  Facult?? De Droit et des Relations EVENEMENTSes (FADRI) Doyen : Jn Michel Ginen Fils</h5>
										   <p style="text-align:justify">
										   M. Gesner d??tient  une maitrise en gestion de projet et sp??cialiste en Marketing. Il est licenci?? en Sciences Comptables et dipl??m?? en Gestion. Professeur d'Universit??s, M. Gesner offre ses services de consultant en conception et gestion de projets. Il occupe les postes de Doyen de la Facult?? des Sciences Administratives et membre du Conseil d'Administration ?? l'Universit?? Am??ricaine des Sciences Modernes d'Ha??ti (UNASMOH).</p>									      
										  </div>
										  
										  <br/><br/><br/><h5><u>Aimond JULMEUS : Facult?? des Science Pures et Informatiques (FASPI)</u></h5>
										   <p style="text-align:justify">
										   Aimond JULMEUS, Doyen de la Facult?? des Sciences pures et Informatiques et membre du Conseil d' Administration de l???UNASMOH. Il d??tient  une  ma??trise en M??thodes Informatiques Appliqu??es ?? la Gestion d'Entreprises (MIAGE) et en Gestion de Projet  (MGP) Il est professeur des R??seaux Informatiques et des Syst??mes d'Informations d'Entreprises ?? la FASPI Facult?? des Sciences Pures et Informatiques. 
										   <br/>Il assure le cours  d'Ing??nierie de Projet ?? la FAGA Facult?? de G??nie et d'Architecture  et de Gestion de Projet ?? la FASAGE Facult?? d'Agronomie et des Sciences Environnementales de l'Universit?? Am??ricaines des Sciences Modernes d'Ha??ti Facult?? des Sciences Sociales.
										   </p>									      
										  
										  <br/><br/><br/><h5><u>Wedna LOUIS PIERRE : Directrice de la  Facult?? Des Sciences de la Sant?? (FASS) </u></h5>
										   <p style="text-align:justify">
										   Wedna LOUIS PIERRE est sp??cialiste en Sant?? communautaire. Elle est licenci??e en Sciences Infirmi??res, certifi??e en P??dagogie universitaire et en Ergonomie, ??tudiante finissante en psychologie. Mme Louis Pierre travaille comme directrice et professeure ?? la facult?? des sciences infirmi??res de L'UNASMOH.</p>									   
									   
									   <br/><br/><br/><h5><u>Facult?? de G??nie et D???architecture (FAGA) : Macly JEANNITE</u></h5>
										   <p style="text-align:justify">
										   M. JEANNITE est maitre en Sciences du D??veloppement (UEH), il est d??tenteur d'un baccalaur??at en G??nie Civil (ISTH). Il est dipl??m?? en G??ologie Appliqu??e (ENGA), en Science de l'Education (CFCE), d??tenteur d'un certificat en Sociologie (UEH). Il a suivi des s??minaires de formation en : Construction management (Boston) Construction post s??isme (Japon), Gestion des Risques (Costa Rica), Cartographie (Cor??e du Sud).</p>									   
									   
									   <br/><br/><br/><h5><u>Dr. Pierre Harry DUMORNEY : Facult?? des Sciences Agricoles et Environnementales (FASAGE) </u></h5>
										   <p style="text-align:justify">
										   M. Dumorney est docteur en m??decine v??t??rinaire et zootechnie. Il a fait ses ??tudes ?? l???Universit?? Agraire de la Havane (UNAH). Chercheur, il est le premier ?? implanter un laboratoire d'ins??mination artificielle en 2006  pour l'am??lioration g??n??tique des porcs apr??s l'abattage sanitaire de la maladie "Peste Porcine Africaine".  Il est aussi le pionnier dans l'int??gration de la physiopathologie pratique dans les sciences m??dicales en Ha??ti en 2007, Universit?? de l'Acad??mie Ha??tienne. (UAA). Il est ??galement  sp??cialiste en  hygi??ne des aliments (food sastie).</p>									   
									   
									   
									   <br/><br/><br/><h5><u>Programme Dipl??me : Tardelli AUGUSTE coordonnateur: </u></h5>
										   <p style="text-align:justify">
										   Tardelli Auguste est maitre en Gestion de Projet, il d??tient ??galement une licence en Sciences Administratives de  l'Universit?? Am??ricaine des Sciences Modernes d'Ha??ti (UNASMOH). Professeur d???universit??, depuis plusieurs ann??es,  membre du CA, il occupe  actuellement le poste de coordonnateur du programme de dipl??me. </p>									   
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
			<p>?? 2021 Tous drois R??serv??s UNASMOH</p></div>
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
                        <li><a href="https://mobile.facebook.com/pages/category/Community-College/Unasmoh-228275027292471/?locale2=fr_FR&_rdc=1&_rdr"><i class="fa fa-facebook"></i> Facebook</a>
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