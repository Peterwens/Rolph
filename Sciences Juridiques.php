<?php

$con=mysqli_connect("localhost","root","") or die("ERREUR");
mysqli_select_db($con,"dbunasmoh") or die("IMPOSSIBLE");
if(isset($_POST['btnconecter'])){
$cod=$_POST['code'];
$sql2="select * from user where code='$cod'";
$req=mysqli_query($con,$sql2);
while($val=mysqli_fetch_Array($req)){
$email=$val['code'];
if($val['fonction']=='Secretaire'){
	
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
                        <li class="active-bre"><a > Sciences Juridiques</a>
                        </li>
                           
                    </ul>
                </div>

                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
						<div class="box-inn-sp admin-form">
                                <div class="inn-title">
                                    <h4>Historicité Sciences Juridiques</h4>
                                      
                                </div>
                                <div class="tab-inn">
                                    <form>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="text" value="Sciences Juridiques " class="validate" required>
                                                <label class="">Nom COURS</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                             <p style="text-align:justify">  
Le <b>droit</b> est un terme polysémique qui désigne d'une part l'ensemble des règles de droit qui régissent la conduite des hommes et des femmes en société (droit objectif) ; et d'autre part la <b>science juridique</b>, c'est-à-dire la science rassemblant l'ensemble des connaissances rationnelles et des méthodes qui permettent de connaître, analyser et créer les règles de droit d'une société. La science du droit, dans la mesure où elle témoigne des mécanismes normatifs au sein des sociétés humaines, est une science sociale. </br>
La science juridique (strico sensu) n'est pas la seule discipline scientifique à questionner les phénomènes juridiques, et elle entretient des relations d'interdépendance voire de concurrence avec d'autres disciplines des sciences sociales qui se proposent elles aussi d'étudier le droit (sociologie, histoire, économie, science politique, etc.). Finalement la science juridique n'est pas seule à traiter du juridique mais est accompagnée par des sciences auxiliaires qui l'éclairent et la complète. Cette page traite des sciences juridiques (au pluriel), ou du moins de toutes les sciences qui touchent au juridique, que ce soit la science juridique (le droit), ou ses sciences auxiliaires. </br></br>
 
<b>La science juridique (stricto sensu)</b></br></br>
Le droit est à la fois l'ensemble des règles de droit (normes obligatoires sanctionnées par la puissance étatique) et la discipline scientifique qui cherche à les comprendre, les ordonner, les définir, les identifier. Ce travail de compréhension et de définition des normes juridiques se fait intra-juridique : la science juridique vise à expliquer le droit par lui-même, en se fondant sur ce qu'il dit. Cependant le droit ne pourrait pas être pleinement compris dans une logique purement autarcique : les normes juridiques sont le reflet d'une société à un instant donné, et pour comprendre les causes des règles de droit la science juridique en vient à faire appel à des sciences auxiliaires qui apportent un savoir complémentaire permettant une meilleure compréhension des règles de droit. Ainsi l'histoire du droit permet de mieux saisir la portée de certaines règles et leur régularité ; ou la sociologie permet de saisir l'impact de la société sur l'édiction de nouvelles normes juridiques. </br>
Concernant les subdivisions de la science juridique (branches), elles se confondent avec les subdivisions du droit objectif. Ainsi, par exemple, l'ensemble des règles de droit (objectif) encadrant les sûretés est nommé droit des sûretés ; et la branche de la science juridique qui étudiera le droit des sûretés est nommée elle aussi le droit des sûretés. Cette confusion s'explique par le fait que c'est la science juridique qui identifie dans son analyse l'existence d'une branche de droit objectif (elle ordonne les règles de droit dans des ensembles logiques), et que naturellement en l'identifiant elle vient à créer une discipline l'analysant du même nom. </br></br>
<b>Théorie du droit et philosophie du droit</b></br></br>
Des connaissances apportées par la science juridique, il est possible de rechercher des régularités et des règles générales, des mécanismes communs et durables ; en somme il est possible d'établir un corpus fondamental théorique des systèmes juridiques. Ces connaissances théoriques fondamentales sur la nature, les causes et les régularités des règles de droit constituent une discipline scientifique, la théorie du droit. La théorie du droit vise une approche scientifique et empirique : elle cherche empiriquement, par l'observation des règles de droit au sein de la société, des généralités formant un corpus théorique. En cela elle s'oppose à la philosophie du droit, qui comme la théorie du droit recherche la nature, les causes et les régularités du droit, mais dans une logique métaphysique et non pas empirique. Dans les faits la frontière entre les deux disciplines est mince puisqu'elles traitent du même objet, et ce qui permet de les différencier c'est la démarche du théoricien. Par ailleurs l'ensemble des débats concernant la nature du droit et de la science juridique font l'objet d'une discipline philosophique, l'épistémologie du droit. </br></br>
<b>Les sciences auxiliaires du droit :</b></br></br>
<b>Analyse économique du droit</b></br>
L'analyse économique du droit se propose d'étendre les concepts et les méthodes de la science économique afin de comprendre des phénomènes de nature juridique, et par son approche permet d'éclairer et compléter la science juridique par son approche particulière.
<b>Anthropologie juridique</b></br>
L'anthropologie juridique considère le droit objectif comme un phénomène social et culturel, et cherche des explications à travers l'évolution de l'espèce humaine et de sa culture à des phénomènes comme la juridicité, le contrôle social, et plus largement les systèmes coercitifs humains depuis les sociétés primitives ; ainsi que les fondements de l'Etat.
<b>Histoire du droit</b></br>
L'Histoire du droit est la science traitant de l'évolution du fonctionnement du droit au sein des différentes sociétés humaines à travers l'écoulement du temps. L'histoire du droit permet de compléter les disciplines juridiques en leur apportant une dimension temporelle indispensable pour comprendre la portée et la régularité des règles de droit ; mais aussi pour comprendre l'impact des mutations des cultures humaines sur l'évolution de leurs systèmes juridiques ; et comprendre les interdépendances entre les normes juridiques et les autres systèmes normatifs (normes sociales, morales, religieuses, etc.). Dans la mesure où les institutions (au sens juridique) sont un ensemble de normes juridiques les constituant ; et dans la mesure où les phénomènes politiques jouent un rôle dans l'édiction des règles de droit ; l'histoire du droit est très liée à l'histoire des institutions et à l'histoire politique. </br></br>
<b>Sociologie du droit</b></br>
La sociologie du droit traite de la pratique du droit par les citoyens auxquels il s'impose, ainsi que le regard de la société sur celui-ci (appropriations, critiques). La sociologie de la droite traite également de l'impact de la société sur les normes qui l'encadre, sur le rôle que jouent les mouvements sociaux, les idéologies politiques, l'évolution des mœurs, dans l'adCOURS ou l'évolution des règles de droit. Le droit est en effet un phénomène vivant qui s'adapte largement à son époque et aux évolutions des opinions de la société sur ce qui est juste ou normal. La sociologie du droit permet d'éclairer les décalages entre le texte juridique et son application in concreto. </br>
La sociologie politique (et plus largement la science politique) peuvent aussi traiter du rôle des mouvements politiques et sociaux, de l'Etat, des gouvernants, des élites, des élections et des institutions dans l'évolution de la règle de droit ; et entretiennent un lien d'interdépendance avec la sociologie du droit. En effet la plupart des phénomènes juridiques s'expliquent par des phénomènes politiques en amont.
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
                                <input type="text" data-ng-model="name" class="validate" name="code">
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