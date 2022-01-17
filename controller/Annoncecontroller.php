<?php

final class Annoncecontroller{
  
  public function __construct(){
    $this->O_annonce = new Annonce();
  }
  
  public function AnnonceAction() {
    Vue::montrer('evenement/annonce');
  }

  public function PostAction() {
    $result = $this->O_annonce->addAnnonce();    
    
    if($result == 'ok'){
    echo 'Données insérées';
    }
    else{
      echo "Échec de l'opération d'insertion";
    }
  }
  
  public function getAnnonceAction(){
    $article = $this->O_annonce->getArticle();
    return $article;
    
  }  

  public function goEvenement($id){
      
  }
  /*public function  AddpointsAction($points){
    $addpoint = $this->O_annonce->addpoint($points);
    return $addpoints;
  }*/
}

?>