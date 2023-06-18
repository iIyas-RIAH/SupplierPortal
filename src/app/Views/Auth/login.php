<?php

include_once '../../Config/Database.php';

session_start();
if (isset($_SESSION['CIN'])) {
  header("Location: ../EspaceFournisseur/Accueil.php");
}
?>
<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>ONHYM Supplier Portal | Se Connecter</title>
  <link rel="shortcut icon" href="../../assets/icons/favicon.ico" type="image/svg+xml">
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
          <img aria-hidden="true" class="object-cover w-full h-full" src="../../assets/images/login-office.jpeg" alt="Login" />
        </div>
        <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
          <div class="w-full">
            <h1 class="mb-4 text-2xl font-semibold">
              Authentification
            </h1>

            <form action="../../Service/LoginService.php" method="POST">
              <label class="block text-md">
                <span class="focus:border-black">Email</span>
                <input class="block w-full h-7 mt-1 p-2 text-md focus:border-black focus:outline-black focus:shadow-md form-input @error('email') is-invalid @enderror" placeholder="example@abc.xyz" type="Email" name="email" />
              </label>
              <label class="block mt-4 text-md">
                <span class="focus:border-black">Mot de passe</span>
                <input class="block w-full h-7 mt-1 p-2 text-md focus:border-black focus:outline-black focus:shadow-md form-input @error('password') is-invalid @enderror" placeholder="********" type="password" name="password" />
              </label>

              <!-- You should use a button here, as the anchor is only used for the example  -->
              <button class="block w-full px-4 py-2 mt-4 text-lg font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" type="submit">
                Se connecter
              </button>
            </form>
            <hr class="my-8" />

            <p class="mt-4">
              <a class="text-md font-medium text-purple-600 hover:underline" href="forgetPassword.php">
                Mot de passe oublié ?
              </a>
            </p>
            <p class="mt-1">
              <a class="text-md font-medium text-purple-600 hover:underline" href="signin.php">
                Créer votre account
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>