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
    <meta name="description" content="">
    <meta name="keyword" content="Peterking">
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
    <!-- LOGO ET MENU SECTION -->
       
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
                        </li>

 </div>
         
                            <h2><span>F.A.E.T.A.S</span></h2>
                            <p>Facult?? des ??tudes Avanc??es et Sp??cialis??es</p>
                        </div>
               <div>
                            <div class="ho-event pg-eve-main pg-blog">
                                <ul>
                                    <li>
                                        
                                        <div class="pg-eve-desc pg-blog-desc">
                                            
                                                <h4><b>Lancement d???une nouvelle facult?? de sp??cialisation ?? l???UNASMOH</b></h4>
                                            </a>
											<img src="images/tzx.jpg" alt="">
											<div class="share-btn blog-share-btn">
												
											</div>
                                            <p style="text-align:justify">
											
											
								Apr??s plus de 20 ans de service dans l???enseignement sup??rieur, l???Universit?? Am??ricaine des Sciences Modernes d???Ha??ti (l???UNASMOH) en partenariat avec des universit??s Nord Am??ricain vient de lancer une nouvelle facult?? post gradu?? en Ha??ti. D??nomm??e FAETAS (Facult?? des ??tudes Avanc??es et Sp??cialis??es), cette pr??sente facult?? offre des programmes de maitrise sp??cialis??e en Gestion et leadership des organisations.

                                            <span></span>
                                        </div>
                                        <div class="pg-eve-reg pg-blog-reg">
                                           
                                        </div>
                                    </li>
                                    <li>
                                        
                                        <div class="pg-eve-desc pg-blog-desc">
                                           
                                                <h4><b>BUT</b></h4>
                                            </a>
											<img src="images/oo.jpg" alt="">
											<div class="share-btn blog-share-btn">
												
											</div>
											<p style="text-align:justify;">
Lancement d'une nouvelle facult?? de sp??cialisation ?? l'UNASMOH
Le PDG de l???UNASMOH, le Dr Michel Dossous, accompagn?? du Dr Florise Dossous, Doyenne de la FAETAS, a lanc?? le samedi 24 avril 2021, une nouvelle facult?? de maitrise pouvant aider les ??tudiants ha??tiens ?? se sp??cialiser.

Lors de la c??r??monie du lancement qui s???est d??roul??e en pr??sence des invit??s d???honneurs, des ??tudiants et des professeurs de l???UNASMOH, Dr Michel Dossous a ??voqu?? l???importance de cette nouvelle facult?? lanc??e.

FAETAS, affirme le PDG, est la toute premi??re facult?? post gradu??e lanc??e dans le pays en vue de r??pondre aux besoins imm??diats des ??tudiants dans des domaines de sp??cialisation. Ce programme soutient-il, sera encadr?? par des cadres ha??tiens et ??trangers venant des universit??s de Canada, de Mexique???
 <span></span>
                                        </div>
                                        <div class="pg-eve-reg pg-blog-reg">
                                            
                                        </div>
                                    </li>
                                    <li>
                                        
                                        <div class="pg-eve-desc pg-blog-desc">
                                            
                                                <h4><b>COURS</b></h4>
                                            
											<img src="images/blog/3.jpg" alt="">
											<div class="share-btn blog-share-btn">
												
											</div>
											<p style="text-align:justify;">
 Des cours qui seront dispens??s en presentiel et en ligne, sont parmi des methodes que l???UNASMOH compte utiliser pour former et perfectionner les ??tudiants de la FAETAS dans le domaine de leadership afin de leur permettre d???affronter les defis de l???heure.

<b><u>Maitrise en leadership et gestion des organisations</u></b>, <b><u>maitrise en gestion strat??giques des ressources humaines</u></b>, <b><u>maitrise en leadership et gestion financi??re</u></b>, <b><u>maitrise de sp??cialisation en comptabilit?? d???audit</u></b>, <b><u>maitrise en leadership entrepreneurial</u></b> et <b><u>maitrise en leadership et en ??ducation</u></b>, sont <i>les six fili??res d?????tude de la FAETAS</i>, a indiqu??, pour sa part, la Doyenne de Facult?? des ??tudes avanc??es et sp??cialis??es, Dr Florise M. Dossous qui dit fi??re de doter le pays de ce programme, ax?? sur le leadership. ???Nous allons travailler durement pour construire des leaders ha??tiens ?? l???instar dans grands leaders de l???humanit??,??? a martel?? la Doyenne.

Par ce programme d?????tude post gradu??s, l???objectif vis?? est de permettre au pays de construire des leaders ??clair??s et responsables pouvant affronter les d??fis de la globalisation.</p>
 </p>                                            <span></span>
                                        </div>
                                        <div class="pg-eve-reg pg-blog-reg">
                                            
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


    <!--SECTION END-->

    <!--HEADER SECTION-->
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
			<p>?? 2021 Tous drois R??serv??s UNASMOH</p></div>
        </div>
    </section>
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
