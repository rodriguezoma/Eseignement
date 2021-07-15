<?php

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">	

<style type="text/css">
.menu{
	width: 100%;
	height: 15px;	
}
.lien1_menu, .lien2_menu, .lien3_menu{
	color: white;
	font-size: 15px;
}
.item1, .item2, .item3{
    background-color: #FFC400;
    text-align: center;
    width: 32.4%;
    margin: 2px;
    padding: 5px;
    float: left;
}
.item1:hover, .item2:hover, .item3:hover{
background-color: #827717;
}
.barre{
	width: 100%;
	height: 70px;
	padding: 5px;
	margin: 5px;
	text-align: center;
	background-color: #FFE082;
}
.notification, .recherche_option{
	text-align: center;
	width: 50%;
	float: left;
}
.imprtant, h2{
	background-color: white;
	margin: 5px;
	padding: 5px;
	border-radius: 5px;
	color: red;
}
.champ_recherche{
	width: 600px;
	height: 40px;
}
.bouton_recherche{
	background-color: red;
	color: white;
}



.marquee-rtl{
	width: 600px;
	max-width: 40em;
	height: 30px;
	margin: 1em auto 2em;
	border: 1px solid white;
	overflow: hidden;
	background-color: white;
	box-shadow: 0.25em .5em #CCC, inset 0 0 1em .25em #CCC;
}

.marquee-rtl > :first-child{
	display: inline-block;
	padding-right: 2em;
	padding-left: 100%
	white-space: nowrap;
	animation: defilement-rtl 15s infinite linear;

	animation-name: defilement-rtl;
	animation-delay: 15s;
	animation-iteration-count: infinite;
	animation-timing-function: linear;
}

@keyframes defilement-rtl{
	0%{
		transform: translate3d(0, 0, 0);
	}
	100%{
		transform: translate3d(-100%, 0, 0);
	}
}	
</style>	

</head>
<body>

<div class="menu">
   <div class="item1"><strong><a class="lien1_menu" href="#" title="afficher la page à l'entrer du site"> ACCUEIL </a></strong></div>
   <div class="item2"><strong><a class="lien2_menu" href="#" title="connexion au compte que vous avez crée"> CONNEXION COMPTE </a></strong></div>
   <div class="item3"><strong><a class="lien3_menu" href="#" title="créé un compte pour pouvoir utiliser toute les fonctionnalités de la plateforme"> CREATION COMPTE </a></strong></div><br/>
</div>

<div class="barre">
	 <div class="notification">
		 <table class="conteneur1">
		 	<tr>
		 		<td class="important">
			         <h2>Important</h2>
			    </td>
			    <td>     	 
		             <div class="marquee-rtl">
                        <div><strong>Lancement officiel de la plateforme en septembre 2021...</strong></div>
                     </div>
                </td>
            </tr>
         </table>             
	</div>
	<div class="recherche_option">
		<form method="POST" action="index.php">
		     <table class="conteneur2">
			     <tr>
				     <td>
					     <input class="champ_recherche" type="search" name="recherche" placeholder="Recherche...">
				     </td>
				     <td style="background-color: red;">
				     	 <input width="45px" height="24px" type="image" src="Donnees/Icones/ic9.png" value="submit">
				     </td>
			     </tr>
		     </table>
	    </form>
	</div>
</div>

</body>
</html>