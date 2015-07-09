<?php include "../../include/header.php"; include "../../include/carousel.php"; ?>

<title>Fitness</title>

<body>

  <div class="container text-center">
    <div class="main">
    <h1><strong>Votre seule limite, c'est vous.</strong></h1>
    <h1><strong>Etes-vous prêt ?</strong></h1>
    <p><strong>Programme personnalisé. Coach individuel. Résultats garantis.</strong></p>
    </div>
    <form class="inscription" method="POST" action="inscription.php">
      <input type="email" name="email" placeholder="Adresse e-mail" required>
      <button class="btn-warning"><strong>je suis prêt !</strong></button>
    </form>
  </div>
</body>
</html>


<?php include "include/footer.php"; ?>