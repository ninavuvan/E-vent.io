
<strong><h1> CONTACT</h1></strong>

  <div class = "contact">
    <form action="index.php?ctrl=homepage&action=post" method="post">
      <input type="text" name="surname" placeholder="Nom*"><br>
      <input type="text" name="firstname" placeholder="Prénom*" ><br>
      <input type="text" name="email"placeholder="E-mail*"><br>

     <input type="radio" id="dmd" name="choix" onclick="choice()" value="Dmdcmpt">Demande de compte</input>
     <input type="radio" id="pblm" name="choix" onclick="choice()">Probème technique </input>
            
      <div id="compte" style="display: none;">
        <select>
        <option value="mtf">--Choisissez un role--</option>
        <option name="role"value="cpt">Organisateur</option>
        <option name="role" value="pb">Donateur</option>
      </select>
      <br>
      </div>
    <div id="probleme" style="display= none;">
      <input type="text"  placeholder="message"><br>
      </div>
      
      <input type="submit" value="Envoyer">
    </form>
    <div>
      <img src="view/img/image_contact.png" id="imagee">
    </div>
  </div>