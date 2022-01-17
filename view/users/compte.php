

<div class="compte">
  <h1>Bonjour <b><?= Comptecontroller::getUserAction('username'); ?></b></h1>
  <div class="cpt">
    <div class="cptinfo">
      <h4>Mes informations : </h4>
      <li>e-mail : <?= $_SESSION['auth']->email; ?></li>
      <li>Rôle : <?= $_SESSION['auth']->role; ?></li>
    </div>
    <div class="cptinfo">
      <h4>Mes annonces : </h4>
      <li>annonces : <?= Compte::GetAnnonce()?></li>
    </div>
    <div class="cptinfo">
      <h4>Gestion des utilisateurs : </h4>
      <li><a id="gestionUsrLink" href="index.php?ctrl=Compte&action=GestionUser">Gerer les utilisateurs</a></li>
    </div>  
  </div>
</div>
