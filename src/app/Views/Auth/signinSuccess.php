<?php header("refresh: 120; url= login.php");
?>
<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="shortcut icon" href="../../assets/icons/favicon.ico" type="image/svg+xml">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ONHYM Supplier Portal | Félicitation</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script src="../../assets/js/init-alpine.js"></script>
</head>

<body>
  <div class="flex items-center min-h-screen p-6 bg-gray-50">
    <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-2xl">
      <div class="flex flex-col overflow-y-auto md:flex-row">
        <div class="h-32 md:h-auto md:w-1/2">
          <img aria-hidden="true" class="object-cover w-full h-full dark:hidden" src="../../assets/images/signin-success-office.jpg" alt="Office" />
        </div>
        <div class="flex items-center justify-center p-6 sm:p-12 md:w-3/5">
          <div class="w-full text-justify	">
            <p>
              &emsp;&emsp;Félicitations pour la création de votre compte sur la plateforme ONHYM supplier portal ! Nous sommes ravis de vous accueillir dans notre communauté de fournisseurs et nous avons hâte de travailler avec vous pour fournir des produits et des services de qualité à nos clients.
            </p>
            <p>
              &emsp;&emsp;Votre compte vous donne accès à de nombreuses fonctionnalités, y compris la gestion de votre profil, la soumission de devis et de factures, et la consultation des commandes passées.
            </p>
            <p>
              &emsp;&emsp;N'hésitez pas à nous contacter si vous avez des questions ou des préoccupations. Nous sommes là pour vous aider à chaque étape du processus.
            </p>
            <p>
              &emsp;&emsp;Merci encore de votre confiance et de votre engagement envers ONHYM. Nous sommes impatients de voir les merveilleuses contributions que vous apporterez à notre communauté de fournisseurs.
            </p>
            <p class="mt-4">
              <a class="text-ùd font-medium text-purple-600 hover:underline" href="login.php">
                Se Connecter &rArr;
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>