<?php include 'controller/Annoncecontroller.php'; ?>
<div id="titre-accueil">
      <h1>E-Event . IO !</h1>
      <p><b>Bienvenue sur E-Event.IO! Le meilleur site de gestion d’idéations d’événements.</b></p>
    </div>
    <div class="annonces">
      <h3>Propositions d'évènements</h3>
      <div class="compteur">
        <h3> La campagne se termine dans : </h3>
      </div>      
      <div class = "slide" >
        <?php 
        $article = new Annoncecontroller();
        $getarticle = $article->getAnnonceAction();
        foreach ($getarticle as $article): ?> 
        <div class="annonce">
          <h5><?= $article->name;?></h5>
          <p><?= $article->date;?></p>
          <p><?= $article->description_courte;?></p>
          <p><?= "points : " .  $article->points;?></p>
          <?=
           '<a href="index.php?ctrl=annonce&action=goEvenement(' . $article->id . ')"><button class="btn" type="button"> Voir l\'évènement !</button></a>'; ?>
        </div>
        <?php endforeach; ?>


        
        <!--- <?php 
          if(isset($_SESSION['auth']))
          if(($_SESSION['role'] == 'donateur') || ($_SESSION['role'] == 'admin')): ?>
          <a href="index.php?ctrl=points&action=points"><button class="btn" type="button"> Donnez vos points !</button></a>
        <?php endif; ?>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
      </div>
        <div class="dot-container">
          <?php 
            foreach ($getarticle as $article){ 
            $compteur += 1;
            echo '<span class="dot" onclick="currentSlide(' .  $compteur . ')"></span>'; 
            }
          ?>
        </div>
    </div>
                  
    <div class="idee">
      <?php  $user = new Usercontroller();
      $nbevent = $user->canpostAction();
      if(isset($_SESSION['auth'])){
        if(((($_SESSION['role'] == 'organisateur') || ($_SESSION['role'] == 'admin')) && $nbevent == 'ok')){
          echo '<a href="index.php?ctrl=annonce&action=annonce"><button class="btn" type="button">Proposez votre idée !</button></a>';
        }
      }
      ?>

      <?php 
      if(isset($_SESSION['auth']))
        if(($_SESSION['role'] == 'admin')): ?>
        <a href="index.php?ctrl=campagne&action=campagne"><button class="btn" type="button">Proposez votre campagne !</button></a>
      <?php endif; ?>


    </div>  
 <script src="/view/js/slider.js"></script>