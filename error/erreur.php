<?php
switch($_GET['erreur'])
{
   case '400':
   echo '&Eacute;chec de l\'analyse HTTP.';
   break;
   case '401':
   echo 'Le pseudo ou le mot de passe n\'est pas correct !';
   break;
   case '402':
   echo 'Le client doit reformuler sa demande avec les bonnes donn&eacute;es de paiement.';
   break;
   case '403':
   echo 'Requ&ecirc;te interdite !'; 
   break;
   case '404':
   echo 'These are not the droids you\'re looking for&hellip;';
   break;
   case '405':
   echo 'M&eacute;thode non autoris&eacute;e.';
   break;
   case '418':
   echo 'D&eacute;sol&eacute;e, mais je ne suis qu\'une th&eacute;i&egrave;re&nbsp;!';
   break;
   case '500':
   echo 'Erreur interne au serveur ou serveur satur&eacute;.';
   break;
   case '501':
   echo 'Le serveur ne supporte pas le service demand&eacute;.';
   break;
   case '502':
   echo 'Mauvaise passerelle.';
   break;
   case '503':
   echo ' Service indisponible.';
   break;
   case '504':
   echo 'Trop de temps &agrave; la r&eacute;ponse.';
   break;
   case '505':
   echo 'Version HTTP non support&eacute;e.';
   break;
   default:
   echo 'Erreur !';
}
?>
