<?php 
define('TITLE' , 'contact');
include('includes/header.php');
?>

<!--content-->

   <div id="info">
 <p><b>Contact informatie</b></p>
            <p><img class="user" src="images/user.png"> Simone van Kempen</p>
            <p><span class="glyphicon glyphicon-home"></span> <b>Adres: </b>Urkerveste 8, 3432 RA <br>Nieuwegein</p>
            <p><span class="glyphicon glyphicon-earphone"></span> <b>Telefoon: </b>0651015549</p>
            <p><span class="glyphicon glyphicon-envelope"></span> <b>E-mail: </b>simone_vankempen@live.nl</p>
   
   </div>

<form action="mailto:506356@edu.rocmn.nl?subject=LK Events" class="registration_form" method="post" enctype="text/plain">
      <legend>CONTACT</legend>
        <div id="round">
          <div class="elements">
            <label for="name">Uw naam(verplicht)</label><br>
            <input type="text" class="round" id="naam" placeholder="naam" size="25" required/>
          </div>
          <div class="elements">
            <label for="e-mail">Uw email(verplicht)</label><br>
            <input type="text" class="round" id="email" placeholder="email" size="25" required/>
          </div>
          <div class="elements">
            <label for="e-mail">Onderwerp</label><br>
            <input type="text" class="round" id="onderwerp" placeholder="onderwerp" size="25" required/>
          </div>
          <div class="elements">
            <label for="opmerking">Uw bericht</label><br>
            <textarea name="verhaal" class="round" rows="10" cols="27"></textarea>
          </div>
          <div class="submit">
            <input id="gobutton" type="submit" value="submit"/>
            <input id="gobutton" type="reset" value="reset"/>
          </div>
        </div>
    </form>
    
 
    

    
 
        
  
    
<?php

include('includes/footer.php');

?>
    