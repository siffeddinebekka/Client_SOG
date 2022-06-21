 <?php 
      $destination = "didine820@gmail.com";
      $sujet = "test";
      $message = "Votre panier a été valider";
      $headers = "from : didine950@gmail.com";
      mail($destination, $sujet, $message, $headers); 
   ?>