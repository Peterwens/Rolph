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
    <title> Unasmoh</title>
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
    <!--== MAIN CONTRAINER ==-->
    <div class="container-fluid sb1">
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
        </div>
    

    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
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
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book" aria-hidden="true"></i> Cours et Descriptions</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
										<li><a href="Informatique.html"  style="color:black;">Science Informatique</a>
                                    </li>
                                    <li><a href="Electromeca.html"  style="color:black; ">Génie Electromeca</a>
                                    </li>
                                    <li><a href="Agronomie.html" style="color:black; ">Science de l'agronomie</a>
									
									 <li><a href="Genie1.html"  style="color:black; ">Génie Civil</a>
                                    </li>
                                    <li><a href="Administration.html"  style="color:black; ">Science Administratives</a>
                                    </li>
                                    <li><a href="economie.html"  style="color:black; ">Economie</a>
									   <li><a href="Gestion.html"  style="color:black; ">Gestion</a>
									
									 <li><a href="Infirmiere.html" style="color:black; ">Science infirmiéres</a>
                                    </li>
                                    <li><a href="laboratoireM.html"  style="color:black; ">Laboratoire Medicale</a>
                                    </li>
                                    <li><a href="Science developpement.html" style="color:black; ">Science du devéloppement</a>
										
                                    <li><a href="ScienceEdu.html"  style="color:black; ">Science de l'education</a>
                                    </li>
                                    <li><a href="EcoleN.html"  style="color:black; ">Ecole Normale Supérieure</a>
                                    </li>
									<li><a href="Sciences Juridiques.html" style="color:black; ">Science Juridiques</a>
                                    </li>
									<li><a href="Comptable.html"  style="color:black; ">Comptablilité</a>
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
                        <li class="active-bre"><a href="#"> Sciences économiques</a>
                        </li>
                           
                    </ul>
                </div>

                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
						<div class="box-inn-sp admin-form">
                                <div class="inn-title">
                                    <h4>Historicité des sciences économiques</h4>
                                      
                                </div>
                                <div class="tab-inn">
                                    <form>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="text" value="Description" class="validate" required>
                                                <label class="">Nom COURS</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                       <p style="text-align:justify">        

<b>L'économie</b> (ou économie politique, science économique) est une discipline qui étudie l'économie en tant qu'activité humaine, qui consiste en la production, la distribution, l'échange et la consommation de biens et de services. </br>
Le nom économie provient du grec ancien οἰκονομία / oikonomía qui signifie « administration d'un foyer ». </br>
Si dans l'Antiquité Xénophon et Aristote ont chacun écrit un traité sur l'économie, c'est à partir du XVIIe siècle que se développe la pensée économique moderne, avec le mercantilisme, puis au XVIIIe siècle avec les physiocrates. L'économie politique débute à la fin du XVIIIe siècle avec Adam Smith, puis David Ricardo ou encore Jean-Baptiste Say (les classiques) au début XIXe siècle. C'est avec la révolution marginaliste à la fin du XIXe siècle que l'économie se constitue comme une discipline scientifique et s'institutionnalise. </br>
Au sein de la discipline, on distingue deux grandes approches : la macroéconomie, qui étudie les grands agrégats économiques (épargne, investissement, consommation, croissance économique), et la microéconomie, qui étudie le comportement des agents économiques (individus, ménages, entreprises) et leurs interactions, notamment sur les marchés. </br>
Comme dans d'autres disciplines, l'économie se décline selon un spectre depuis la théorie économique, qui vise à construire un corpus de résultats fondamentaux et abstraits sur le fonctionnement de l'économie, jusqu'à l'économie appliquée, qui utilise les outils de la théorie économique et des disciplines connexes pour étudier des domaines importants comme l'environnement, le travail, la santé, l'immobilier, l'organisation industrielle ou encore l'éducation. </br></br>
<b>Développement de la discipline au XXe siècle</b></br></br>

Dans les années 1930, la science économique connaît deux grandes révolutions avec l'apparition de la macroéconomie et de l'économétrie. </br>
Avec la publication de la Théorie générale de l'emploi, de l'intérêt et de la monnaie (1936), John Maynard Keynes crée le champ de la macroéconomie. </br>

John Maynard Keynes (1883-1946) est considéré comme le père fondateur de la macroéconomie. Il est l' auteur de Théorie générale de l'emploi, de l'intérêt et de la monnaie. </br>

Ragnar Frisch fonde la société d'économétrie en 1930 et la revue Econometrica en 1933. </br>
Les années 1930 sont aussi marquées par le développement de l'économétrie. Ragnar Frisch crée la société d'économétrie en 1930 et la revue Econometrica en 1933. Le développement de l'économétrie conduit à un usage de plus en plus important des statistiques dans la science économique. Les modèles économétriques peuvent aussi bien être utilisés pour calibrer un modèle économique existant que pour tester sa validité empirique. </br></br>
Dans les années 1940 et 1950, les sciences économiques sont marquées par le développement des théories de la croissance économique avec le modèle de Harrod-Domar et surtout le modèle de Solow (Solow 1956), le développement des fondements de la théorie des jeux avec l'ouvrage fondateur de John von Neumann et Oskar Morgenstern (von Neumann et Morgenstern 1944) et les travaux de John Nash, et l'accomplissement des recherches sur l'équilibre général en concurrence parfaite avec les travaux de Kenneth Arrow et Gérard Debreu qui montrent les conditions d'existence et d'unicité de l'équilibre général imaginé par Léon Walras. </br></br>
Dans les années 1960, les sciences économiques explorent de nouveaux sujets comme l'éducation, la criminalité ou encore la famille. Les travaux de Gary Becker sont emblématiques de cette tendance à utiliser la théorie économique pour analyser des sujets hors du domaine traditionnel de l'économie. En macroéconomie, les années 1960 sont marquées par les débats sur l'arbitrage inflation-chômage mis en évidence par la courbe de Phillips (Phillips 1958). La remise en cause de cette courbe avec le phénomène de stagflation conduit à formuler différentes hypothèses sur les anticipations des agents (anticipations adaptatives puis anticipations rationnelles). </br></br>
Dans les années 1970 se développent les modèles économiques en information imparfaite comme le modèle de George Akerlof sur les asymétries d'information dans un marché (Akerlof 1970).
En macroéconomie, la fin des années 1980 et le début des années 1990 est marqué par un renouvellement des travaux sur la croissance économique autour de la notion de croissance endogène. </br></br>
Les années 1990 et 2000 sont caractérisées par une part de plus en plus importante de travaux empiriques dans la recherche en économie. Cette évolution est particulièrement vraie en économie du travail, en économie de l'éducation ou encore en économie du développement. Le développement de l'économétrie appliquée dans ces années là est notamment lié au développement d'un champ de recherche autour de l'inférence causale (voir notamment le modèle causal de Neymann-Rubin) et la diffusion de protocoles de recherche comme la méthode des variables instrumentales, la méthode des doubles différences ou encore la régression sur discontinuité. Les travaux de David Card sur l'effet de l'immigration sur le marché du travail (Card 1990) ou de David Card et Alan Krueger sur l'effet du salaire minimum sur l'emploi (Card et Krueger 1994) sont représentatifs de ce champ de recherche. </br>
</p>









                                               
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


    <!--Import jQuery before materialize.js-->
    <script src="js/main.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>


</html>