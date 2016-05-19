<?php
function conectar()
{
  //  ini_set('display_errors',0);
  include_once('libs/adodb/adodb.inc.php');
  $link =  NewADOConnection('mysqli');
  if(empty($link))
  {
    
    die("Imposible crear la conexi&oacute;n");
  }
  if(!$link->Connect("localhost", "root", "cesarin", "cafe"))
   {
    print "Falla en la conexi&oacute;n ".$link->ErrorMsg();
    die;
   }
  return $link;
}
?>