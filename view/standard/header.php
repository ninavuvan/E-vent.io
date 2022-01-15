<?php 


echo'<header>
  <nav>
    <div class="wrapper">
    <label for="toggle">☰</label>
    <input type="checkbox" id="toggle">
      <ul class="menu">  
        <li><a href="index.php">Accueil</a></li>
        <li><a href="index.php?ctrl=homepage&action=contact">Contact</a></li> '?>

<?php
  if (isset($_SESSION['auth'])):
    
    echo'<li> <a href="index.php?ctrl=compte&   action=Compte">Compte</a></li>
         <li> <a href="index.php?ctrl=user&action=logout">Déconnexion</a></li>'
         ?> 
  <?php else:
    echo'<li> <a href="index.php?ctrl=user&action=signin">Connexion</a></li>' ?>
  <?php endif; ?> 

  <?php echo' 
      </ul>
    </div>
  </nav>
</header>'
?>