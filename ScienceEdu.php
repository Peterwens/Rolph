
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
                        <li class="active-bre"><a > science de l'education</a>
                        </li>
                           
                    </ul>
                </div>

                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
						<div class="box-inn-sp admin-form">
                                <div class="inn-title">
                                    <h4>Historicité science de l'education</h4>
                                      
                                </div>
                                <div class="tab-inn">
                                    <form>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="text" value="science de l'education " class="validate" required>
                                                <label class="">Nom COURS</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
											<p style="text-align:justify">
À la fin du XIXe siècle en France, on parle initialement de science de l'éducation, puis de sciences de l'éducation. Cette discipline est née dans un contexte politique à la fois général et scolaire, avec les lois sur l'instruction obligatoire et la diffusion de l'école publique. Ainsi, de nombreux auteurs ont proposé leur définition sur cette discipline : </br></br>
•	Pour Louis Not : La science de l'éducation serait centrée sur la réalité éducative, elle interrogerait les autres sciences pour en synthétiser les résultats sous forme de théorie qui serait à son tour confrontée à la pratique. </br>
•	Pour Viviane de Landsheere : distinction entre recherche en éducation qui porterait directement sur l'éducation et la formation et la recherche sur l'éducation qui serait dépendante des différentes disciplines scientifiques, elle serait tributaire des critères de validité des sciences mères. Il s'agit d'élaborer une théorie générale du curriculum conçu comme l'ensemble intégré des activités poursuivant des fins éducatives ou formatives. </br>
•	Pour Gaston Mialaret, Les sciences de l'éducation sont constituées par l'ensemble des disciplines qui étudient les conditions d'existence, de fonctionnement, et d'évolution des situations et des faits d'éducation. Selon lui, démêler les facteurs qui entrent en jeu requiert le reCOURS à plusieurs disciplines scientifiques : sociologie de l'éducation, histoire, démographie, économie de l'éducation. </br></br>

<b>Naissance d'une discipline universitaire</b></br></br>
La municipalité de Bordeaux crée le premier COURS universitaire de pédagogie dans une Faculté de Lettres, en 1882. 
Il faudra attendre 1883, où Jules Ferry crée un COURS de science de l'éducation à la Sorbonne. La première chaire 
de pédagogie est créée à la Sorbonne. Elle est notamment occupée par Henri Marion, Ferdinand Buisson ou encor
e Émile Durkheim. Elle est supprimée en 1917, à la mort de Durkheim.
</br></br>
<b>L'Association EVENEMENTSe des sciences de l'éducation</b></br></br>
La première est l'Association EVENEMENTSe des sciences de l'éducation, qui prend en 1977 le nom d'Association mondiale des sciences de l'éducation (AMSE)2. Un premier congrès EVENEMENTS de l’enseignement universitaire de sciences de l'éducation, se tient à Gand, en septembre 1953. Destiné aux professeurs d'université, il rassemble une centaine de participants3, et est organisé par R.L. Plancke, de l'université de cette ville4 et Richard Verbist. </br>
Lors de ce premier congrès, le principe de maintenir les échanges entre universitaires du champ de l'éducation est décidé, il s'accompagne de la création d'un « secrétariat EVENEMENTS pour l'enseignement universitaire des sciences pédagogiques », basé à Gand, de la création d'une revue et d'une décision de faire un deuxième congrès6. </br>
Celui-ci se tient à Florence, en 1957. La décision de créer une association est prise, son nom est trouvé : Association EVENEMENTSe des sciences de l'éducation. Un conseil d'enseignants universitaires représentant 28 pays doit coordonner le projet7, et un comité d'action de cinq personnes est nommé, dont font partie Maurice Debesse, R.L. Plancke, M.J. Langeveld, J. Sandven et W.A.C. Stewart. L'association est fondée officiellement au COURS du congrès d'Oslo, en 1961. Elle doit notamment « promouvoir la recherche scientifique dans le domaine de l’éducation et de l’enseignement des sciences de l’éducation au niveau universitaire et sur un plan EVENEMENTS, par l’édition ou la promotion de publication scientifiques, par l’échange d’informations . </br></br>
Les congrès se succèdent : après Oslo, il y a Cambridge (1965), Varsovie (1969), Paris (1973). </br> 
Pour connaître l'état des lieux en ce qui concerne l'organisation et les conceptions de l'enseignement pédagogique en Europe occidentale, le congrès de Gand de 1953 demande des rapports à des représentants de dix pays. Maurice Debesse doit établir le rapport pour la situation en France. Il adresse un questionnaire à 17 universités françaises, et les résultats sont publiés dans la revue Éducation nationale. </br></br>
<b>L'Association francophone EVENEMENTSe de recherche en sciences de l'éducation (Afirse)</b></br></br>
Une deuxième association francophone est créée durant cette même période, par les chercheurs en « pédagogie expérimentale », l'Association EVENEMENTSe de pédagogie expérimentale de langue française (AIPELF), qui prend en 1976 le nom d'Association francophone EVENEMENTSe de recherche en sciences de l'éducation (Afirse)10. La première rencontre a lieu à Lyon, en 1953, à l'initiative de Robert Dottrens, professeur de pédagogie expérimentale à l'université de Genève et créateur du laboratoire de pédagogie expérimental de cette université. Un laboratoire de pédagogie expérimentale existe à Lyon, créé par Léon Husson puis dirigé par Richard Delchet, deux personnalités de la société Binet participent à cette rencontre princeps qui réunit 8 Français, 2 Suisses et 2 Belges, notamment Maurice Debesse, Gaston Mialaret, Hélène Gratiot-Alphandéry11 et d'autres12. Le projet de créer une association est prise durant ce colloque, il se concrétise en 1958, sous l'intitulé d'Association EVENEMENTSe de pédagogie expérimentale de langue française, dont le siège est à l'Institut pédagogique national. L'association organise un colloque annuel et un congrès EVENEMENTS tous les cinq ans. Une ouverture vers des objets de recherche non directement liés aux disciplines scolaires se fait, avec des recherches en sociologie ou sémiotique. </br>Progressivement, un élargissement à des chercheurs d'autres pays13 se fait. Au congrès de Paris, en 1962, des universitaires de 14 pays sont présents. Le congrès suivant se tient à Sherbrooke, en 1967, rassemblant moins de 200 participants. Un accent est mis sur la publication des résultats de recherche, avec des articles de revues : Revue belge de pédagogie, courrier de la recherche pédagogique, bulletin de la société Binet14, Cahiers de pédagogie expérimentale et de psychologie de l'enfant, et la revue déjà évoquée de Caen. Gaston Mialaret, Maurice Debesse, Jean Château, et Marc-André Bloch, par ailleurs responsable de la section pédagogique de la collection Bibliothèque scientifique EVENEMENTSe (Puf). En 1972, la revue Pour l’Ère nouvelle prend l'intitulé Les Sciences de l’éducation – Pour l’Ère nouvelle et, sous la direction de Gaston Mialaret, devient l'organe officiel de l'AIPELF15, l'une des premières revues scientifiques francophones en sciences de l'éducation qui prennent ainsi progressivement leur autonomie à l'égard de la pédagogie16, elle le reste jusqu'en 1984. </br></br>
<b>En Belgique</b></br>
La Belgique fait figure de « pionnière dans le développement universitaire des sciences pédagogiques »2. Une section pédagogie ouvre à l'université libre de Bruxelles en 1919, suivie d'une école de pédagogie et de psychologie appliquée à l'université de Louvain en 1923 et d'instituts de pédagogie en 1927 au sein des facultés de philosophie et de lettres de Gand et de Liège17. Ces instituts doivent être des « centres de recherche et de documentation » et assurer aux étudiants une formation tant scientifique que professionnelle17. En 1940, un institut supérieur de pédagogie est créé à Morlanwelz, dans le contexte de la Seconde Guerre mondiale18, dont Fernand Hotyat prend la responsabilité, en y créant un centre de travaux. </br> 
L'Association belge des chercheurs en éducation (ABC-Educ) est créée en 2000 par des enseignants et scientifiques des universités belges francophones21. ABC-Educ s’est donné comme mission de promouvoir la recherche en éducation en Belgique francophone, quelle que soit l'appartenance disciplinaire des chercheurs. Elle compte actuellement plus d'une centaine d’affiliés, principalement issus des universités et des hautes écoles, ou cadres du système d’enseignement. Elle co-organise tous les trois ans, depuis 2007, avec l'Association des enseignants-chercheurs en éducation et la Société suisse de recherche en éducation, le congrès EVENEMENTS d'actualité de la recherche en éducation et en formation (AREF). </br></br>
<b>En France</b> : création de l'Association des enseignants et chercheurs en sciences de l'éducation (AECSE) </br></br>
Depuis 1967, les sciences de l'éducation sont une discipline universitaire22. Les trois premières chaires sont fondées, par Gaston Mialaret à l'université Caen-Normandie, par Jean Château à l'université de Bordeaux et par Maurice Debesse à la Sorbonne. Maurice Debesse était titulaire depuis 1957 d'une chaire de pédagogie23. Les forces sont limitées, du fait de l'absence de titulaires de doctorat dans cette discipline, qui pourraient être nommés aux nouveaux postes. Après la création officielle de la discipline à l'université, Debesse, Château et Mialaret prennent l'initiative d'une rencontre, en 1968, à Bordeaux23, réunion à laquelle se joint Jacques Wittwer. L'« amicale » des 4 mousquetaires ainsi initiée s'élargit à de nouveaux acteurs : Michel Debeauvais, et Jean-Claude Filloux27. </br>
En 1969, quatre universités mentionnent des unités d'enseignement qui font directement référence aux sciences de l'éducation : Caen, Paris, Toulouse et Vincennes23. Gaston Mialaret appelle à une rencontre un an après la rencontre princeps de Bordeaux, elle se déroule le 19 avril 1969 à la Sorbonne et concerne les professeurs d'université de la discipline23, comme l'indique le compte rendu, qui évoque l'« amicale des professeurs de sciences de l'éducation ». À l'issue de la réunion, les participants envisagent la création d'une association, en créant des statuts. Un conseil provisoire est mis en place, composé de Maurice Debesse, Jean-Claude Filloux, Gaston Mialaret et Jacques Wittwer. Une réunion prévue le 12 décembre 1970 doit permettre une réunion de l'amicale des enseignants de sciences de l'éducation. L'ordre du jour proposé prévoit « l'élection d'un bureau de l'Amicale », qui n'a pas lieu, et « un projet de congrès EVENEMENTS de sciences de l'éducation, à Paris, en 1973 ». Une nouvelle réunion est convoquée en avril 1971, avec à l'ordre du jour, la réorganisation du cursus universitaire et les débouchés. La constitution légale de l'association est à nouveau à l'ordre du jour de la journée du 18 décembre, un groupe est chargé de préparer des statuts dans cette perspective. Il s'agit d'un regroupement professionnel, ainsi que d'un groupe se préoccupant des carrières, la mention de la recherche en sciences de l'éducation n'apparaît pas alors. Le collectif joue un rôle socialisateur et structurant pour ce milieu professionnel émergent, dont les membres sont régulièrement reçus au ministère de l'Éducation nationale. Un conseil d'administration, qui représente les universités et institutions concernées par l'enseignement des sciences de l'éducation est établi en décembre 1971, une assemblée constituante est convoquée en janvier 1972, pour adopter les statuts et désigne Michel Debeauvais, qui s'est occupé des statuts, comme président, et trois vice-présidents, Jacques Wittwer, Jean Vial et Raymond Lallez. l'association compte une soixantaine de membres en 1973. </br>
L'association s'occupe de l'organisation des études et des enseignements de cette discipline récente ou de la formation continue institutionnalisée par l'accord du 9 juillet 1970. L'association élabore un projet de DEUG de sciences de l'éducation, soumis au ministère en mars 1973. Des journées d'étude thématiques sont organisées, en lien des questions qui concernent la recherche, sur le plan scientifique mais aussi les activités de recherche.</br>
Elle entretient des liens avec l’Association EVENEMENTSe des sciences de l'éducation, dont elle organise le 6e congrès à Paris, en 1973, sous la direction de Gaston Mialaret, à l'université Paris-Dauphine. L'AECSE, présidée en 2018 par Cédric Frétigné et Thérèse Perez-Roux, participe aux activités de valorisation de la recherche en sciences de l'éducation en France menées par le HCERES. </br>
En 2017, les sciences de l'éducation fêtent leurs 50 ans d'existence dans l'université française. Deux colloques sont organisés pour marquer l'évènement : un a lieu à Caen, organisé par l'AECSE et par le CIRNEF. L'autre a lieu à Toulouse, organisé par l'EFTS.
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