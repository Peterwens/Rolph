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
                        <li class="active-bre"><a > Agronomie</a>
                        </li>
                           
                    </ul>
                </div>

                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
						<div class="box-inn-sp admin-form">
                                <div class="inn-title">
                                    <h4>Historicité Agronomie</h4>
                                      
                                </div>
                                <div class="tab-inn">
                                    <form>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="text" value="Agronomie " class="validate" required>
                                                <label class="">Nom COURS</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                               <p style="text-align:justify">
<b>L'agronomie</b> est l'ensemble des sciences exactes, naturelles, économiques et sociales, et des techniques auxquelles il est fait appel dans la pratique et la compréhension de l'agriculture. Les sciences vétérinaires sont parfois exclues de cette définition. </br></br>
<b>L'agronomie</b> ne doit pas être confondue avec l'agrologie.
Le terme vient des mots grecs agro, campagne ou champs et nomos, loi ou règle. </br></br>

<b>Définition</b></br></br>
Les termes d'agriculture et d'agronomie sont souvent utilisés indifféremment, alors qu'il s'agit de deux concepts différents. </br>
D'une façon générale, l'agronomie est la science visant à comprendre les mécanismes en jeu en agriculture et à les améliorer. Ceci explique que l'on parle parfois de sciences agronomiques. Dès son apparition en français dans la deuxième moitié du XVIIIe siècle3, le mot agronomie désigne aussi bien l'étude des lois qui régissent les phénomènes naturels, que la définition de règles que les agriculteurs peuvent appliquer pour améliorer leurs productions. </br>
L'agriculture quant à elle est la pratique de l'activité agricole. Idéalement, l'agriculture se nourrit des réflexions agronomiques, et vice-versa : l'agronome a beaucoup à apprendre des agriculteurs ! </br>
Dans son acception restreinte, l'agronomie embrasse la connaissance des techniques agricoles en interaction avec le milieu (date de semis, valeur des assolements, choix des semences, calcul de la minéralisation de la matière organique, techniques d'élevage…). Dans une acception plus large, l'agronomie comprend également la connaissance de l'organisation socio-économique de l'agriculture (forme sociale, financement, fonctionnement des marchés, structures familiales) </br>
Différentes définitions de l'agronomie coexistent ou se sont succédé4. Ainsi, dans les années 1950, Stéphane Hénin définissait l'agronomie comme une « écologie du champ cultivé », tandis que les ouvrages d'agronomie français actuels utilisent généralement la définition proposée ultérieurement par Michel Sebillotte1 : « l'étude, menée simultanément dans le temps et dans l'espace, des relations au sein de l'ensemble constitué par le peuplement végétal et le milieu physique, chimique et biologique, et sur lequel l'homme agit pour en obtenir une production » </br>
Histoire de l'agronomie Selon l'historien Gilles Denis, l'agronomie apparaît en Europe au XVIIIe siècle, en lien avec le développement de la méthode scientifique et d'une « idéologie de l'utilité » qui pousse à comprendre et à maîtriser la nature. Elle serait également liée au développement de l'économie politique, de la physiocratie et de l'idée que l'agriculture est la source essentielle de richesse d'un royaume. Pour Gilles Denis, il est donc anachronique de parler d'agronomie avant son apparition dans l'Europe du XVIIIe siècle (par exemple dans les expressions agronomie antique, latine, chinoise...). À l'inverse, Jean Boulaine, définissant l'agronomie comme un « corpus de connaissances relatives à la mise en valeur, à l’exploitation et à la conservation du monde rural, et systèmes de techniques qui permettent de les mettre en valeur », considère que l'agronomie apparaît en même temps que l'agriculture. </br>
L’agronomie se pense et s’érige à partir d’une question centrale : comment produire plus, comment rendre compatible le développement du produit et celui de la société, comment nourrir les villes et assurer le bien-être des populations rurales ? Ainsi, l’intervention de l’ingénieur agronome ne se justifie que s’il y a tentative ou volonté politique pour rationaliser la production.</br></br>
<b>Antiquité</b></br></br>
Si dès la plus haute Antiquité, les travaux ruraux sont présents dans l'iconographie (bas-reliefs égyptiens par exemple) et font l'objet de l'attention des élites dans certaines civilisations (rôle des paradeisias, palais et fermes impériales, dans l'Empire perse achéménide) il faut attendre l'agronome punique carthaginois (ancienne Tunisie) Magon (antérieur au IIe siècle av. J.-C. mais sans qu'il soit aisé de le dater) pour que soit fait référence à un traité d'agronomie structuré. Sa valeur fut si bien reconnue que le Sénat romain en ordonna la traduction. D'une manière générale l'aristocratie romaine marqua un certain intérêt pour l'agronomie ce qui se traduisit par une succession d'auteurs (Caton l'Ancien, Varron, Columelle, Palladius...) et de traités portant sur l'agriculture. </br></br>
</b>Du Moyen Âge au début du XIXe siècle</b></br></br>
Au Moyen Âge, le progrès agronomique diffuse essentiellement au travers des abbayes notamment bénédictines. Dès la Renaissance, le regain général de l'écriture et de la lecture affectera également l'agronomie. Si dans un premier temps on se contenta essentiellement de publier en latin puis dans les langues vernaculaires les traités antiques (voir l'article Traités médiévaux sur l'agriculture), dans un deuxième temps furent produits des traités originaux (Bernard Palissy). Le plus connu en France est celui du gentilhomme Olivier de Serres auteur du Théâtre d'agriculture; néanmoins la diffusion de l'agronomie reste confidentielle. Ensuite dans la seconde moitié du XVIIIe siècle la diffusion et l'étude de l'agronomie se renouvelèrent par l'intermédiaire des sociétés royales d'agriculture et de savants tels que Duhamel du Monceau auteur des Éléments d'agriculture en 1762. </br>
Au XVIIIe siècle et au début du XIXe siècle, les physiocrates s'intéressent à l'agriculture sous son aspect économique, tandis qu'un ensemble de grands propriétaires terriens (Jethro Tull, Arthur Young, Mathieu de Dombasle) expérimentent de nouvelles méthodes qu'ils diffusent dans des ouvrages et codifient parfois sous forme de théories. En parallèle se créent des sociétés nationales ou locales d'agriculture et des fermes expérimentales. La première de France, la Société royale d'agriculture de la généralité de Paris, est fondée par Louis XV en 1761 et compte dans ses correspondants des agronomes comme Victor Yvart. </br>
<B>XIXe siècle</b></br></br>
L'agronomie naît comme discipline universitaire au COURS du XIXe siècle, où se développent à la fois la recherche et l'enseignement autour de l'agriculture. Participent à ce mouvement dans la première moitié du siècle des agronomes comme Thaer, Thouin ou de Gasparin. Les contributions de Liebig préparent l'avènement de l'agriculture industrielle. En France, la ferme école de la Saulsaie est créée en 1842, l'Institut National Agronomique, en 1848, l'école régionale d'agriculture de Bretagne en 1849. En 1868 est créé le réseau des stations de recherche agronomiques. Aux États-Unis, l'enseignement supérieur agricole se met en place grâce au Morill Act de 1862 puis au Second Morill Act de 1890. Les stations de recherche agricole sont créées en 1887 par le Hatch Act, dans le cadre des établissements d'enseignement précédemment créés. En Allemagne, les stations de recherche agricole se mettent en place dans les années 1850 et 1860. </br></br>
<B>XXe et XXIe siècles</b></br></br>
Dans la seconde moitié du XXe siècle, l'agronomie subit de profondes mutations sur un plan épistémologique et technique. Elle est également confrontée à de profondes mutations du contexte agricole. </br>
L'agronomie subit une rupture conceptuelle qui consacre sa séparation définitive d'avec l'agriculture et son avènement comme science à part entière : désormais, la théorie scientifique précède la collecte des données, contrairement à ce qui avait prévalu précédemment. Caractérisée par de nouveaux concepts, comme le « profil cultural »8 (S. Hénin) qui permet une approche théorique de l'étude des sols, l'itinéraire technique ou le système de culture, elle conduit à la rédaction d'une nouvelle définition de l'agronomie par Sebillotte. </br>
Dans la seconde moitié du XXe siècle, l'agronomie est également confrontée à de profondes mutations du contexte agricole. Après une phase de forte croissance de la production agricole, caractérisée par le développement des engrais et pesticides de synthèse, liés aux progrès parallèles réalisés en matière de productions végétales et animales (sélection et amélioration), l'agriculture est confrontée à une série de difficultés. Les fonctions économiques, environnementales et sociales de l'agriculture sont aujourd'hui au cœur d'un vaste débat de société. De récentes crises (vache folle, organismes génétiquement modifiés, pesticides, Escherichia coli O104:H49), ont bien montré la complexité et l'importance de ce débat, en mettant notamment en évidence le lien entre recherche agronomique et intérêts économiques : association extrêmement efficace pour accélérer l'innovation mais posant problème dès lors qu'il convient de l'évaluer objectivement. En effet, les spécialistes, impliqués dans des programmes industriels peuvent se retrouver juges et parties. C'est le problème plus général du conflit d'intérêt étendu aux chercheurs. </br>
À partir des années 1980, de nouveaux outils sont disponibles pour la recherche agronomique. La biologie moléculaire ouvre de nouvelles possibilités pour la sélection variétale (cartographie puis séquençage des génomes, création d'OGM), l'étude des pathogènes et ravageurs ou l'étude des communautés microbiennes des sols ou du rumen (qPCR, métagénomique). Le développement de l'informatique permet l'essor de la modélisation et de la biométrie grâce au développement de puissants moyens de calcul statistiques désormais couramment utilisés lors des expérimentations. </br>
Compte tenu des importantes difficultés économiques du monde agricole et paysans au COURS des années 1980-90 marquée par une chute constante du prix des matières agricoles, certains agronomes estiment indispensable de mettre à jour les mécanismes explicatifs de l'évolution de l'agriculture en les reliant à l'évolution de la demande sociale. L'approche agronomique purement locale est enrichie et complétée par une approche qui vise à replacer l'agriculture et les systèmes de production mis en place dans le contexte mondial. À l'heure de la mondialisation des échanges, il paraît impossible d'interpréter correctement les stratégies agricoles sans connaître les politiques agricoles et les accords internationaux notamment dans le cadre de Organisation mondiale du commerce qui conditionne le prix des matières premières et donc la rentabilité des productions. </br>
</br><b>Développement des concepts conciliant environnement et agriculture</b></br></br>
Les dégradations environnementales, liées à l'agriculture industrielle, au développement industriel et au fort accroissement de la population mondiale, ont soulevé de nombreuses questions et entraîné le développement, voire l'apparition de nouvelles préoccupations pour la science agronomique (dépollution, traitement des déchets, aménagement rural, lutte biologique, lutte intégrée et production intégrée). L'agriculture est confrontée également aux crises de surproduction. </br>
L'essor du concept de développement durable à partir de la conférence de Rio de 1992 marque un nouveau virage avec l'apparition de préoccupations concernant la dégradation des ressources naturelles (baisse de fertilité des sols, pollution des eaux, érosion, perte de biodiversité domestique…) occasionnée par l'industrialisation de l'agriculture. Dans cette perspective qui vise à terme une réduction drastique des impacts liés aux intrants, l'agronomie se fixe comme objectif de soutenir le développement d'une agriculture maintenant voire augmentant les rendements des cultures et des productions animales tout en respectant les équilibres naturels. L'agriculture est conçue comme un écosystème anthropisé – agrosystème – dont l'homme fait partie et qu'il doit maintenir en équilibre. </br></br>
Dans ce contexte, l'essor des nouvelles technologies, biotechnologie et informatique, a ouvert de nouveaux champs d'études menant au développement de l'agriculture de précision. Mais il existe un désaccord entre les agronomes sur la place à accorder à ces nouvelles technologies dans la résolution des problèmes actuels. Certains n'y voient que des moyens secondaires, susceptibles mêmes d'aggraver les effets pervers de l'agriculture industrielle quand d'autres en font le pilier d'une nouvelle révolution verte. À l'opposé d'autres solutions ont été proposées par les agronomes, basées sur l'utilisation des régulations naturelles des agro-écosystèmes : agriculture de conservation, agriculture durable, agroécologie, intensification écologique, révolution doublement verte... Des agronomes se sont également intéressés à l'agriculture biologique, une forme d'agriculture née en dehors de la recherche agronomique. Parmi d'autres formes d'agriculture se voulant respectueuses de l'environnement, la biodynamie et la permaculture sont marginalement étudiées par des agronomes. Dans les années 90, l'INRA propose l'« extensification » (plus tard renommé « désintensification »)  comme nouveau modèle agricole dans le cadre d’une baisse des prix garantis et de la déprise agricole et qui vise à diminuer la quantité de travail et de capital (et donc d’intrants) utilisés par unité de surface, dans une logique avant tout économique. Les années 90 voient également la promotion du concept de multifonctionnalité de l'agriculture qui vise à prendre en compte dans les politiques agricoles la diversité des fonctions sociales et environnementales de l'agriculture (souveraineté alimentaire, emploi, gestion des paysages...) au-delà de la fonction de production agricole. </br></br>

Le début du XXIe siècle voit la multiplication dans la littérature scientifique des termes désignant de nouvelles formes d'agriculture plus respectueuses de l'environnement : agriculture durable, agriculture durable à faible niveau d’intrants, écoagriculture, modernisation écologique de l’agriculture. </br></br>
<b>Agronomie : une science locale</b></br></br>
L'agriculture étant une mise en valeur d'un territoire donné ayant ses caractéristiques propres, l'agronomie replace des connaissances génériques dans un contexte local. Il s'agit en effet de comprendre un milieu pour en tirer le meilleur parti agricole. Dans sa partie concernant les pratiques agricoles proprement dites, l'agronomie est étroitement liée à la pédologie dans la mesure où elle est étroitement liée aux sols et aux climats, qui ne sont jamais les mêmes d'une région à l'autre. C'est la raison pour laquelle en France, par exemple, certaines spécialisations se font en agronomie tropicale, dont les spécificités ne sont pas comparables à l'agriculture de la métropole. On parle souvent de terroirs, lesquels doivent être traités différemment les uns des autres.
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