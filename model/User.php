<?php

final class User {

    
    public function getlogin()
  {

    require_once('noyau/Model.php');


    if(!empty($_POST)){
      session_start();
      
      $req = $pdo -> prepare('SELECT * FROM users WHERE username = :username');
      $req->execute(['username' => $_POST['username']]);

      $user = $req->fetch();
      $Changemdp = $user -> change_pass;
      if(password_verify($_POST['password'], $user->password )&& $Changemdp!=0){
        $_SESSION['auth'] = $user;
        $_SESSION['role'] = $user->role;
        $_SESSION['id'] = $user->id_user;    
        if($Changemdp == 0){
          return 'changemdp';
        }
        else {  
          return 'login';}
        exit();
      } 
      else{
          return 'invalid user';
    
      }

    }
    exit();
  }
      
  public function isFull(){
    require('noyau/Model.php');
    $req = $pdo -> prepare('SELECT * FROM users WHERE username = :username');

    $req->execute(['username' => $_SESSION['auth']->username]);
    $user = $req->fetch();
    $nbevent=$user->nb_event;
    
    if ($nbevent==1)
      return true;
  }
  public function logout(){
      session_start();
      unset($_SESSION['auth']);
    }
 
}
    

  
  /*

  public function changepass($id) {
    session_start();
    $password = password_hash($_POST['motdp'] , PASSWORD_BCRYPT);
    require_once('noyau/Model.php');
    $pdo -> prepare("UPDATE users SET password = ?, change_pass=1 WHERE id_user = ?")-> execute([$password, $id]);
    return 'sucess';
  
  }
  */


  
?>