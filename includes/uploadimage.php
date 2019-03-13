<?php

define('TARGET', '/files/');    
define('MAX_SIZE', 100000);    
define('WIDTH_MAX', 800);    
define('HEIGHT_MAX', 800);   
 
// Tableaux de donnees
$tabExt = array('jpg','gif','png','jpeg');   
$infosImg = array();
 
// Variables
$extension = '';
$message = '';
$nomImage = '';
if( !is_dir(TARGET) ) {
  if( !mkdir(TARGET, 0755) ) {
    exit('Erreur de répertoire');
  }
}
if(!empty($_POST))
{
  if( !empty($_FILES['fichier']['name']) )
  {
    $extension  = pathinfo($_FILES['fichier']['name'], PATHINFO_EXTENSION);
     if(in_array(strtolower($extension),$tabExt))
    {
      $infosImg = getimagesize($_FILES['fichier']['tmp_name']);
 
      if($infosImg[2] >= 1 && $infosImg[2] <= 14)
      {
     
        if(($infosImg[0] <= WIDTH_MAX) && ($infosImg[1] <= HEIGHT_MAX) && (filesize($_FILES['fichier']['tmp_name']) <= MAX_SIZE))
        {
     
          if(isset($_FILES['fichier']['error']) 
            && UPLOAD_ERR_OK === $_FILES['fichier']['error'])
          {
            $nomImage = md5(uniqid()) .'.'. $extension;
 
            if(move_uploaded_file($_FILES['fichier']['tmp_name'], TARGET.$nomImage))
            {
              $message = 'Upload réussi !';
            }
            else
            {
              $message = 'Problème lors de l\'upload !';
            }
          }
          else
          {
            $message = 'Une erreur interne a empêché l\'uplaod de l\'image';
          }
        }
        else
        {
          $message = 'Erreur dans les dimensions de l\'image !';
        }
      }
      else
      {
        $message = 'Le fichier à uploader n\'est pas une image !';
      }
    }
    else
    {
      $message = 'L\'extension du fichier est incorrecte !';
    }
  }
  else
  {
    $message = 'Veuillez remplir le formulaire svp !';
  }
}
?>