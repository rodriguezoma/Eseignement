<!DOCTYPE html>
<html>
<head>

<style type="text/css">
.barre{
	width: 100%;
	height: 110px;
	padding: 5px;
	margin: 5px;
	text-align: center;
	background-color: #FFE0B2;
}
.bienvenu{
     color: green;
}
.nom_etablissement{
     color: black;
}
.item{
float: left;
padding: 5px;
}
.conteneur{
     border-collapse: collapse;
}
.item_header{
     background-color: white;
}
.item_menu{
     background-color: #FFC400;
}
.lien_item{
     color: white;
     padding: 10px;
}
.lien_item:hover{
     color: white;
     background-color: #827717;
     padding: 10px;
}
.lien_item:focus{
     color: white;
     background-color: #827717;
     padding: 10px;
}
.titre_item{
     color: green;
     padding: 10px;
}
.statu_session_de_recrutement{
     background-color: red;
     color: white;
     padding: 5px;
     border-radius: 5px;
}
.nombre_notification{
     color: white;
     padding: 2px;
     border-radius: 10px;
     background-color: #757575;
}	
</style>

</head>
<body>
     <table align="center">
     	<tr> <td><strong>COMPTE PRINCIPAL</strong></td>
     		<td><img src="Donnees/Images/logo.png" width="50px" height="50px" title="Logo de la plateforme"></td>
     		<td><h3 class="bienvenu">BIENVENU <em class="nom_etablissement">ECOLE CENTRE-FILLE DE KOUDOUGOU</em></h3></td>
     		<td><img src="Donnees/Images/logo.png" width="50px" height="50px" title="Logo de l'établissement"></td>
     	</tr>
     </table>
     <div class="barre">
     	<div class="item">
     		<table class="conteneur">
     			<tr class="item_header">
     				<td>
                              <strong class="titre_item">INTENDANCE</strong>
                         </td>
     			</tr>
                    <tr class="item_menu">
                         <td>
                              <table>
                                   <tr>
                                        <td><strong><a class="lien_item" href="#">SCOLARITE A JOUR</a></strong></td>
                                        <td><strong><a class="lien_item" href="#">SCOLARITE NON A JOUR</a></strong></td>
                                   </tr>
                              </table>
                         </td>
                    </tr>
     		</table>
     	</div>
          <div class="item">
               <table class="conteneur">
                    <tr class="item_header">
                         <td>
                              <table>
                                   <tr>
                                        <td><strong class="titre_item">SESSION DE RECRUTEMENT</strong></td>
                                        <td><strong class="statu_session_de_recrutement">Fermer</strong></td>
                                   </tr>
                              </table>          
                         </td>
                    </tr>
                    <tr class="item_menu">
                        <td><strong><a class="lien_item" href="#">OUVRIR</a></strong></td>
                    </tr>
               </table>
          </div>
          <div class="item">
               <table class="conteneur">
                    <tr class="item_header">
                         <td>
                              <strong class="titre_item">ELEVES</strong>
                         </td>
                    </tr>
                    <tr class="item_menu">
                         <td>
                              <table>
                                   <tr>
                                        <td><strong><a class="lien_item" href="#">VOS ELEVES</a></strong></td>
                                        <td><strong class="nombre_notification">0</strong></td>
                                        <td><strong><a class="lien_item" href="#">AFFECTATIONS</a></strong></td>
                                        <td><strong class="nombre_notification">0</strong></td>
                                        <td><strong><a class="lien_item" href="#">CANDIDATURES AU RECRUTEMENT</a></strong></td>
                                        <td><strong class="nombre_notification">0</strong></td>
                                   </tr>
                              </table>
                         </td>
                    </tr>
               </table>
          </div>
          <div class="item">
               <table class="conteneur">
                    <tr class="item_header">
                         <td>
                              <strong class="titre_item">COMPTE DE L'ETABLISSEMENT</strong>
                         </td>
                    </tr>
                    <tr class="item_menu">
                         <td>
                              <table>
                                   <tr>
                                        <td><strong><a class="lien_item" href="#">ACCUEIL</a></strong></td>
                                        <td><strong><a class="lien_item" href="#">ACTUALISER</a></strong></td>
                                        <td><strong><a class="lien_item" href="#">MODIFIER LE COMPTE</a></strong></td>
                                        <td><strong><a class="lien_item" href="#">MODIFIER LES DROITS D'ACCES</a></strong></td>
                                        <td><strong><a class="lien_item" href="#">DECONNEXION</a></strong></td>
                                   </tr>
                              </table>
                         </td>
                    </tr>
               </table>
          </div>
          <div class="item">
               <table class="conteneur">
                    <tr class="item_header">
                         <td>
                              <strong class="titre_item">BOX</strong>
                         </td>
                    </tr>
                    <tr class="item_menu">
                          <td>
                               <table>
                                   <tr>
                                         <td><strong><a class="lien_item" href="#">NOTIFICATIONS</a></strong></td>
                                         <td><strong class="nombre_notification">0</strong></td>
                                   </tr>
                               </table>          
                          </td>
                    </tr>
               </table>
          </div>
     </div>
</body>
</html>