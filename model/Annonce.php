<?php

final class Annonce {

  public function addAnnonce() {
  require_once('noyau/Model.php');
  if(!empty($_POST)){
    session_start();
    $name = $_POST['name'];
    $author_id =$_SESSION['id'];
    $description = $_POST['description'];
    $description_courte = $_POST['description_courte'];
    $date = date("Y-m-d",time());
    $req = $pdo->prepare('INSERT INTO idee(id, name, author,date, description, description_courte, points, supplement) 
                        VALUES (\'' . '\', :name, :author_id, :date, :description, :description_courte, points, supplement)');
                
  $req->bindParam(':name', $name );
  $req->bindParam(':author_id', $author_id);
  $req->bindParam(':date', $date);
  $req->bindParam(':description', $description);
  $req->bindParam(':description_courte', $description_courte);
  $req->execute();

  $reqq = $pdo -> prepare('UPDATE users SET nb_event = nb_event+1 WHERE id_user = ?');
  $reqq->execute([$_SESSION['auth']->id_user]);
  
  return 'ok';
  
  exit();
    }
  }

    public function getArticle(){
      require_once('noyau/Model.php');
      $req = $pdo->query('SELECT * FROM idee ORDER BY points DESC');
      $reqq = $req -> fetchAll(PDO::FETCH_CLASS);
      return $reqq;
      
  }

  /*public function addpoint($points){
    require_once ('noyau/Model.php');
    $req= $pdo ->query('UPDATE idee SET points += $points ,  WHERE id = ?');
    $reqq = $req -> fetchAll(PDO::FETCH_CLASS);
    return $reqq;
  
  }*/
  


}
?> 