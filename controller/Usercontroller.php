<?php

final class Usercontroller 
{
  public function SigninAction()
  {
    Vue::montrer('users/sign-in');
  }
  public function __construct(){
  $this->O_connexion = new Connexion();
  $this->O_deconnexion =new Deconnexion();
  $this->O_changepassword =new Changepassword();
  }

  public function ConnexionAction(){
    $result = $this->O_connexion->getlogin();   
    if($result == 'login')
    { 
      Vue::montrer('accueil/homepage');
    }
    else if($result == 'changemdp')
    {
      Vue::montrer('users/changepassw');
    }
    else
    {
      echo'Identifiant ou mot de passe incorrect, Vous n\'avez pas de compte'; 
      Vue::montrer('users/sign-in');
    }
  }

  public function ChangepasswordAction(){
    $id = $_SESSION['id'];
    if(!empty($_POST)){
      session_start();
      if($_POST['motdp'] == $_POST['confmdp']){
        $result = $this->O_changepassword->changepass($id); 
        if($result == 'sucess'){
          session_start();
          Vue::montrer('accueil/homepage');
        }
        else{
          echo 'Erreur'; 
        }
      }
      else{
        $_SESSION['flash']['error'] = 'mdp pas identique';
      }
    }
  }

  public function SessionAction(){
    if(session_status() == PHP_SESSION_NONE){
      session_start(); 
    }
  }  

  public function LogoutAction()
  {
    $this->O_deconnexion->logout();
    $_SESSION['flash']['sucess'] = "Vous avez été déconnecté";
    Vue::montrer('users/sign-in');      
  }

  public function MdpoublieAction(){
    Vue::montrer('users/mdpoublie');
  }

}

