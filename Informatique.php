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
                        <li class="active-bre"><a > Science informatique</a>
                        </li>
                           
                    </ul>
                </div>

                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
						<div class="box-inn-sp admin-form">
                                <div class="inn-title">
                                    <h4>Historicité science informatique</h4>
                                      
                                </div>
                                <div class="tab-inn">
                                    <form>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="text" value="Science informatique " class="validate" required>
                                                <label class="">Nom COURS</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
											<p style="text-align:justify">
<b>L’histoire de l'informatique </b>est l’histoire de la science du traitement rationnel, notamment par machines automatiques, de l'information considérée comme le support des connaissances humaines et des communications dans les domaines techniques, économiques et sociaux et professionnelle.
L'histoire de l'informatique a commencé bien avant la discipline moderne des sciences informatiques, généralement par les mathématiques ou la physique. Les développements des siècles précédents ont évolué vers la discipline que nous connaissons aujourd'hui sous le nom d'informatique1. Cette progression, des inventions mécaniques et des théories mathématiques vers les concepts et les machines informatiques modernes, a conduit au développement d'un domaine académique majeur, à un progrès technologique spectaculaire à travers le monde occidental et à la base d'un commerce et d'une culture mondiale massive. </br></br>
En 1966, l’informatique a été définie par l'Académie française comme la « science du traitement rationnel, notamment par machines automatiques, de l'information considérée comme le support des connaissances humaines et des communications dans les domaines techniques, économiques et sociaux ». </br>
L’histoire de l’informatique résulte de la conjonction entre des découvertes scientifiques et des transformations techniques et sociales. </br>
•	Découvertes physiques sur les semi-conducteurs et la miniaturisation des transistors. </br>
•	Découvertes mathématiques sur la calculabilité et les propriétés des algorithmes. </br>
•	Invention de la théorie de l’information, de la sémiotique et de la cybernétique. </br>
•	Transformations techniques, l’introduction de machines ou de composants informatiques, des machines à laver aux automobiles et aux avions, des banques à la santé, de l’imprimerie à la documentation en ligne. </br>
•	Transformations sociales avec l’organisation des entreprises et des administrations autour de leur système d’information automatisé, et avec la circulation de l’information dans les réseaux sous forme numérique. </br></br>
Si la plupart des ordinateurs ont été conçus au départ pour exécuter des calculs numériques trop longs ou trop compliqués pour être effectués à la main, des machines similaires ont été construites pour traiter des informations non numériques (par exemple, reconnaître une chaîne de caractères dans un texte, ce que faisait dès 1943 le Colossus du service de cryptanalyse britannique4). Les calculateurs devenaient des machines universelles de traitement de l’information, d’où le mot ordinateur, retenu en 1956 pour trouver un équivalent français à l’expression anglaise data processing machine. Ce terme a progressivement remplacé en français celui de calculateur, au sens trop restreint. </br>
Les premiers ordinateurs datent de 1949. C'est la notion de programme enregistré, due à John von Neumann et à ses collaborateurs, en 1945, qui transforme les machines à calculer en ordinateurs. La machine est composée des éléments suivants : </br>
•	un organe de calcul, susceptible d’exécuter les opérations arithmétiques et logiques, l’unité arithmétique et logique ; </br>
•	une mémoire, ou mémoire centrale, servant à la fois à contenir les programmes décrivant la façon d’arriver aux résultats et les données à traiter ; </br>
•	des organes d’entrée-sortie, ou périphériques, servant d’organes de communication avec l’environnement et avec l’homme ; </br>
•	une unité de commande (control unit) permettant d’assurer un fonctionnement cohérent des éléments précédents. </br></br>
L’ensemble formé par l’unité arithmétique et logique, d’une part, et l’organe de commande, d’autre part, constitue l’unité centrale ou processeur. L’ensemble des composants physiques, appelé matériel (hardware), est commandé par un logiciel (software). </br>
Selon l'architecture de Von Neumann, les programmes sont enregistrés dans la mémoire de la machine. Ils peuvent comporter des boucles de calcul et des alternatives, contrairement aux programmes exécutés à partir de bandes perforées. Alors qu’on connaît depuis longtemps le codage des procédures par des trous sur des bandes perforées (machines à tisser, orgue de barbarie) lorsque le programme est enregistré en mémoire, il n’y a pas de différence fondamentale entre coder des données et coder des procédures. On peut donc calculer sur les instructions d’une procédure, par exemple pour faire un saut en arrière dans les instructions, ou pour compter le nombre de tours d’une boucle de calcul sur les éléments d’une liste. Ce calcul sur les programmes a permis le développement du logiciel : langages de programmation, systèmes d'exploitation, applications. </br>
L’histoire de l’informatique porte donc seulement sur une soixantaine d'années. Elle peut se décliner selon quatre points de vue : </br>
•	la dimension physique qui décrit les moyens matériels du traitement, de la conservation et du transport de l'information : les machines et les réseaux ; </br>
•	la dimension logicielle qui définit d’une part les méthodes de calcul, de mémorisation et de commande qui caractérisent les fonctions des ordinateurs, et d’autre part les interfaces entre les personnes et les machines depuis l’arrivée des ordinateurs individuels vers 1980 ; </br>
•	la dimension applicative qui définit les objets et les processus informationnels utilisés, traités, transformés et montrés ; </br>
•	la dimension sociale qui décrit les usages de l’informatique dans tous les domaines et son insertion dans les pratiques sociales les plus diverses. </br>
L'informatique est une nouvelle technologie intellectuelle, comme l'ont été en leur temps l'écriture et l'imprimerie, un moyen de représenter, de structurer et d'exploiter des informations qui en retour structure la pensée de l'homme, selon Pierre Lévy. </br></br>
L’évolution des machines et des réseaux constitue l’infrastructure physique de l’informatique. L'histoire des ordinateurs est décrite dans un autre article. Celle des réseaux informatiques aussi. Depuis ses débuts, l'informatique a connu des transformations profondes des matériels informatiques en vitesse, puissance, fiabilité, miniaturisation. La transformation du logiciel est au moins aussi profonde, transformation en qualité, sécurité, complexité, réutilisabilité. Les objets traités ont beaucoup changé : d’abord les nombres et les fichiers de gestion des entreprises (textes et nombres), puis les formules, les règles de calcul et de raisonnement, les signaux, les événements, les dessins, les images, le son, la vidéo. L’informatique a de plus en plus d’usages et de plus en plus d’utilisateurs, et l'usage principal passe par les réseaux. Ces transformations du matériel, du logiciel et des usages ont modifié profondément la structure économique politique et sociale des sociétés humaines. </br></br>
<b>Fondements du logiciel</b></br></br>
On appelle logiciels les composants logiques et symboliques qui permettent de traiter l’information dans les machines informatiques. Le mot information a un sens très large. On appelle ici information tout ce qui peut être codé sous forme numérique pour être mémorisé, transporté et traité par des machines informatiques : des signes (chiffres, lettres, monnaie, textes), des images, des signaux numérisés (musique, parole, relevés de capteurs sur des instruments). Les fondements du logiciel sont le codage, le calcul et l'interaction. </br></br>
<b>Le codage</b></br></br>
Les procédés physiques de codage de l’information sont analogiques ou numériques. </br>
Les premiers enregistrements du son étaient analogiques, sur disques ou bandes magnétiques. La télévision a longtemps utilisé la modulation des ondes, donc un phénomène physique continu, pour transporter les images et les sons. Le transport, le codage et le décodage, utilisent alors les caractéristiques continues des machines physiques. Ces codages sont sensibles aux déformations par l’usure matérielle et le bruit. Ils ont l'avantage de rester compréhensibles malgré la dégradation du signal. </br>
Avec le codage numérique, qui supplante peu à peu le codage analogique dans tous les domaines, les machines physiques sont seulement le support d’une information qui est traitée, transformée, codée, décodée par des machines logicielles. Il y a « dématérialisation » de l’information, qui n’est plus liée à son support, qui peut être recopiée facilement et à très faible coût sans perte d’information. Il y a toutefois perte d’information par la compression des fichiers, souvent adoptée pour économiser de la taille mémoire et accélérer le traitement. Autre inconvénient, dans les systèmes numériques fondés sur "tout ou rien", il suffit d'un petit dysfonctionnement pour que l'ensemble des données deviennent incompréhensibles, voire perdues. </br>
Vers 1930, Gödel invente pour faire des démonstrations d’indécidabilité un codage numérique des expressions logiques. Ce travail fournira plus tard des bases théoriques au codage informatique. Dans les codes informatiques ASCII (7 bits), ISO (8 bits), Unicode (16 bits), tous les caractères ont un équivalent numérique qui permet de passer d’une représentation interne sous forme de 0 et de 1 sur laquelle l'ordinateur calcule, à leur présentation lisible par l'homme sur un écran ou une feuille de papier. </br>
Avec ces codes, on transforme des textes en nombres. On peut aussi numériser des images, du son, par discrétisation du signal. Le son est continu, mais un signal sonore peut être découpé en éléments très petits, inférieurs à la sensibilité de l'oreille humaine. Les images numérisées sont découpées en points (pixels) et chaque point est codé en fonction de ses propriétés. Si le pouvoir discriminant de l’œil est inférieur à l’approximation faite, on ne fait pas de différence entre l’image analogique et l’image numérique. C’est la même chose au cinéma pour la reconstruction du mouvement par l’œil à partir des 24 images fixes par seconde. Une fois toutes ces informations codées sous forme numérique, on va pouvoir calculer sur elles, comme sur les nombres. Non seulement le codage numérique est plus fiable, mais il est transportable et copiable avec un coût négligeable. </br>
<b>Le calcul</b></br></br>
Le calcul mécanique s’est développé au XVIIe siècle, donc bien avant l’informatique, avec les machines de Pascal et de Leibniz, les horloges astronomiques comme celle de Strasbourg ou de Lyon, puis les machines à tisser avec des programmes sur bandes perforées. Avec le codage numérique de toutes les informations, le calcul s'est beaucoup étendu par rapport à son origine5. On calcule d'abord sur des nombres, qui ont une représentation binaire exacte ou approchée. On peut décrire des phénomènes par des systèmes d’équations pour la simulation informatique. </br></br>
On peut aussi calculer sur des symboles, par exemple, concaténer des chaînes de caractères :
riche + lieu = richelieu
ou leur appliquer des fonctions :
inverser (abcd) = dcba
Lorsque les images sont codées numériquement, on peut les redimensionner, les restaurer, les transformer par des calculs. </br></br>
Le raisonnement a été défini comme un calcul avec la définition en 1965 de l’algorithme d’unification de Robinson6. C’est la base du calcul formel, des systèmes experts, qui se développent à partir de 1975 et vont donner le coup d’envoi à l’intelligence artificielle. </br></br>
L’utilisation des ordinateurs repose sur le principe que tout calcul compliqué peut être décomposé en une suite d’opérations plus simples, susceptibles d’être exécutées automatiquement. C’est la notion d’algorithme de calcul. Plusieurs inventions ont permis le développement de l'algorithmique. En 1936 la machine de Turing définit abstraitement la notion de calcul et permet de définir ce qui est calculable ou non. C’est une machine abstraite qui définit les calculs comme des opérations qu’on peut enchaîner mécaniquement sans réflexion. Le "lambda-calcul" d'Alonzo Church en est l'équivalent. Donald Knuth (né en 1938), est l'auteur du traité (en)The Art of Computer Programming, paru en plusieurs volumes à partir de 1968. Il décrit de très nombreux algorithmes et pose des fondements mathématiques rigoureux pour leur analyse. </br></br>
Vers 1960 la théorie des langages de Schutzenberger donne un fondement solide à la définition, à la compilation et à l’interprétation des langages de programmation. Ce sera aussi le départ de la linguistique computationnelle de Chomsky. </br></br>
<b>La gestion des données</b></br></br>
La mémoire centrale des machines est volatile et ne conserve les données que pendant la durée d'exécution des programmes. Or les fichiers doivent être conservés d'une exécution à l'autre. D'abord sous forme de paquets de cartes perforées, les fichiers sont conservés ensuite dans des mémoires auxiliaires comme des bandes magnétiques ou des disques durs (1956). Ces fichiers sont soit des programmes, soit des données. On constitue des bibliothèques de programmes et de procédures pour éviter de refaire sans cesse le même travail de programmation (formules usuelles de la physique, calcul statistique). </br></br>
C'est surtout en informatique de gestion que l'importance des fichiers de données s'est fait sentir : fichier des clients, des fournisseurs, des employés. À partir de 1970, les bases de données prennent un statut indépendant des programmes qui les utilisent. Elles regroupent toutes les informations qui étaient auparavant dispersées dans les fichiers propres à chaque programme. Lorsque les fichiers étaient constitués pour chaque application de manière indépendante, le même travail était fait plusieurs fois et les mises à jour n’étaient pas toujours répercutées. L'accès de chaque programme aux données dont il a besoin et à celles qu'il construit ou modifie se fait par l'intermédiaire d'un système de gestion de bases de données (SGBD). </br></br>
Vers 1975, avec les systèmes experts7, on découvre la possibilité de constituer des bases de connaissances sur des sujets variés : médecine, chimie, recherche pétrolière, stratégies pour les jeux. Les bases de connaissances ne sont pas des encyclopédies, elles codent la connaissance sous une forme qui permet le raisonnement des machines. </br></br>
À partir de 1990, on constitue des bases de documents en numérisant des archives (livres, enregistrements sonores, cinéma). On assure ainsi une plus grande disponibilité et une plus grande fiabilité de la conservation. À travers le réseau Internet, le Web offre un espace public de mise à disposition de documents sans passer par des éditeurs et des imprimeurs. Il permet d’emblée l’accès à des informations et des créations mondiales. Mais il pose des questions importantes à l’organisation sociale : possibilité d’interdire et de juger les infractions, paiement des droits d’auteur, sécurité des échanges commerciaux, qualité des documents trouvés (les images peuvent être truquées, les informations mensongères ou partiales). En parallèle, avec les langages à objets (voir ci-dessous), les composants réutilisables pour la programmation ne sont plus tant des procédures que des objets, encapsulant des données et des fonctions, ou même des processus complets s'articulant les uns avec les autres par leurs interfaces.
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
        <!-- LOGIN SECTION -->
       
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