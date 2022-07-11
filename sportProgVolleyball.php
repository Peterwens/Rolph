
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
    <title>Unasmoh</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="EEducation master is one of the best eEducational html template, it's suitable for all eEducation websites like university,college,school,online eEducation,tution center,distance eEducation,computer eEducation">
    <meta name="keyword" content="eEducation html template, university template, college template, school template, online eEducation template, tution center template">
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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
   
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
							
							<div class='king m-MENUport'>
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

    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
                   <div class="sb2-1">
                <!--== USER INFO ==-->
                <div class="sb2-12">
                    <ul>
                        
                       
                        <li></li>
                    </ul>
                </div>
                <!--== LEFT MENU ==-->
                <div class="sb2-13">
                    <ul class="collapsible" data-collapsible="accordion">
                        
                        
						
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header" href="Informatique.html"><i class="fa fa-book" aria-hidden="true"></i> Volley-Ball</a>
                            <div class="collapsible-body left-sub-menu">
                               <ul>
							 
							    
							 <li><a href="sportProgVolleyball.html" style="color:black; " ><b>Matchs</b></a>
                                    </li>
									<li><a href="gallery-photo - Volleyball.html" style="color:black;"><b>Photo</b></a>
                                    </li>
							   </ul>
                            </div>
							
							<li><a href="javascript:void(0)" class="collapsible-header" href="Informatique.html"><i class="fa fa-book" aria-hidden="true"></i> Football</a>
                            <div class="collapsible-body left-sub-menu">
                                 <ul>
								 
							   <li><a href="sportProgFootball.html"  style="color:black;"><b>Matchs</b></a>
                                    </li>
									<li><a href="gallery-photo - Footballl.html"  style="color:black;"><b>Photo</b></a>
                                    </li>
							   </ul>
                            </div>
							<li><a href="javascript:void(0)" class="collapsible-header" href="Informatique.html"><i class="fa fa-book" aria-hidden="true"></i> Basket-ball</a>
                            <div class="collapsible-body left-sub-menu">
                                 <ul>
								   
							   <li><a href="sportProgBasketball.html " style="color:black;"><b>Matchs</b></a>
                                    </li>
									<li><a href="gallery-photo - basketBall.html" style="color:black;"><b>Photo</b></a>
                                    </li>
							   </ul>
                            </div>
                        </li>
                        
                       
                    
						
                       
                      
                    
                     
                     
                    </ul>
                </div>
            </div>

            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Accueil</a>
                        </li>
                        <li class="active-bre"><a href="sport.html"> Sport</a>
                        </li>
                          
                    </ul>
                </div>

                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
						<div class="box-inn-sp admin-form">
                                <div class="inn-title">
                                    <h4>Programmation de l'equipe de Volley-Ball de l'unasmoh</h4>
                                   
                                </div>
                                <div class="tab-inn">
                                    <form>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="text" value="Volley-Ball" class="validate" required>
                                                <label class="">Nom COURS</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
											
											
    <div>
                            <div class="ho-event pg-eve-main">
                                <ul>
                                    <li>
                                        <div class="ho-ev-date pg-eve-date"><span>07</span><span>jan,2018</span>
                                        </div>
                                        <div class="ho-ev-link pg-eve-desc">
                                            <a >
                                                <h4>Championnat universitaire</h4>
                                            </a>
                                            <p>Unasmoh vs Inuka</p>
                                            <span>9:15 am – 5:00 pm</span>
                                        </div>
                                        <div class="pg-eve-reg">
                                           
                                        </div>
                                    </li>
                                   <li>
                                        <div class="ho-ev-date pg-eve-date"><span>07</span><span>jan,2018</span>
                                        </div>
                                        <div class="ho-ev-link pg-eve-desc">
                                            <a >
                                                <h4>Championnat universitaire </h4>
                                            </a>
                                            <p>Unasmoh vs Notre-dame</p>
                                            <span>9:15 am – 5:00 pm</span>
                                        </div>
                                        <div class="pg-eve-reg">
                                           
                                        </div>
                                    </li>
                                   <li>
                                        <div class="ho-ev-date pg-eve-date"><span>07</span><span>jan,2018</span>
                                        </div>
                                        <div class="ho-ev-link pg-eve-desc">
                                            <a >
                                                <h4>Championnat universitaire</h4>
                                            </a>
                                            <p>Unasmoh vs quiesqueya</p>
                                            <span>9:15 am – 5:00 pm</span>
                                        </div>
                                        <div class="pg-eve-reg">
                                           
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ho-ev-date pg-eve-date"><span>07</span><span>jan,2018</span>
                                        </div>
                                        <div class="ho-ev-link pg-eve-desc">
                                            <a >
                                                <h4>Championnat universitaire </h4>
                                            </a>
                                            <p>Unasmoh vs UEH</p>
                                            <span>9:15 am – 5:00 pm</span>
                                        </div>
                                        <div class="pg-eve-reg">
                                           
                                        </div>
                                    </li>
                                  <li>
                                        <div class="ho-ev-date pg-eve-date"><span>07</span><span>jan,2018</span>
                                        </div>
                                        <div class="ho-ev-link pg-eve-desc">
                                            <a >
                                                <h4>Championnat universitaire </h4>
                                            </a>
                                            <p>Unasmoh vs inuka </p>
                                            <span>9:15 am – 5:00 pm</span>
                                        </div>
                                        <div class="pg-eve-reg">
                                           
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ho-ev-date pg-eve-date"><span>07</span><span>jan,2018</span>
                                        </div>
                                        <div class="ho-ev-link pg-eve-desc">
                                            <a >
                                                <h4>Championnat universitaire </h4>
                                            </a>
                                            <p>Unasmoh vs GOC</p>
                                            <span>9:15 am – 5:00 pm</span>
                                        </div>
                                        <div class="pg-eve-reg">
                                           
                                        </div>
                                    </li>
                                   <li>
                                        <div class="ho-ev-date pg-eve-date"><span>07</span><span>jan,2018</span>
                                        </div>
                                        <div class="ho-ev-link pg-eve-desc">
                                            <a >
                                                <h4>Championnat universitaire </h4>
                                            </a>
                                            <p>Unasmoh vs LeCompte</p>
                                            <span>9:15 am – 5:00 pm</span>
                                        </div>
                                        <div class="pg-eve-reg">
                                           
                                        </div>
                                    </li>
                                </ul>
								
                            </div>
                        </div>
                                               
	

 

                                               
                                            </div>
                                        </div>
                                       
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

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

    <!-- materialize.js-->
    <script src="js/main.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>


</html>