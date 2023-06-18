<?php

include_once '../../Config/Database.php';
include_once '../components/Enum.php';

session_start();
if (!(isset($_SESSION['IDFOURNISSEUR']))) {
  header("Location: ../Auth/login.php");
}
?>
<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ONHYM Supplier Portal | Esapace Fournisseurs</title>
  <link rel="shortcut icon" href="../../assets/icons/favicon.ico" type="image/svg+xml">

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script src="../../assets/js/init-alpine.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="../../assets/js/charts-lines.js" defer></script>
  <script src="../../assets/js/charts-pie.js" defer></script>
</head>

<body>

  <?php
  $IDFOURNISSEUR = $_SESSION['IDFOURNISSEUR'];
  $fournisseur = mysqli_fetch_row(mysqli_query($conn, "SELECT * FROM fournisseur WHERE IDFOURNISSEUR='$IDFOURNISSEUR'"));
  $entreprise = mysqli_fetch_row(mysqli_query($conn, "SELECT * FROM entreprise WHERE IDFOURNISSEUR='$IDFOURNISSEUR'"));

  ?>

  <div class="flex h-screen bg-gray-50" :class="{ 'overflow-hidden': isSideMenuOpen }">
    <!-- Desktop sidebar -->
    <aside class="z-20 hidden w-64 overflow-y-auto bg-white md:block flex-shrink-0">
      <div class="py-4 text-gray-500">
        <a class="flex justify-center" href="../">
          <img src="../../assets/images/logo-ONHYM.png" width="220" alt="Logo ONHYM">
        </a>
        <ul class="mt-6">
          <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800" href="Accueil.php">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
              </svg>
              <span class="ml-4">Dashboard</span>
            </a>
          </li>
        </ul>
        <ul>
          <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800" href="Marche.php">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
              </svg>
              <span class="ml-4">Marchés</span>
            </a>
          </li>
          <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800" href="BonDeCommande.php">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
              </svg>
              <span class="ml-4">Bons de Commande</span>
            </a>
          </li>
          <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800" href="Facture.php">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
              </svg>
              <span class="ml-4">Mes Factures</span>
            </a>
          </li>
          <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800" href="Réclamations.php">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
              </svg>
              <span class="ml-4">Réclamations</span>
            </a>
          </li>
        </ul>
      </div>
    </aside>
    <!-- Mobile sidebar -->
    <!-- Backdrop -->
    <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
    <aside class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden" x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu" @keydown.escape="closeSideMenu">
      <div class="py-4 text-gray-500">
        <a class="flex justify-center" href="../index.html">
          <img src="../../assets/images/logo-ONHYM.png" width="220" alt="Logo ONHYM">
        </a>
        <ul class="mt-6">
          <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800" href="Accueil.php">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
              </svg>
              <span class="ml-4">Dashboard</span>
            </a>
          </li>
          <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800" href="Marche.php">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
              </svg>
              <span class="ml-4">Marchés</span>
            </a>
          </li>
          <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800" href="BonDeCommande.php">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
              </svg>
              <span class="ml-4">Bons de Commande</span>
            </a>
          </li>
          <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800" href="Facture.php">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
              </svg>
              <span class="ml-4">Mes Factures</span>
            </a>
          </li>
          <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="Réclamations.php">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
              </svg>
              <span class="ml-4">Réclamations</span>
            </a>
          </li>
        </ul>
      </div>
    </aside>
    <div class="flex flex-col flex-1 w-full">
      <header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
        <div class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600">
          <!-- Mobile hamburger -->
          <button class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple" @click="toggleSideMenu" aria-label="Menu">
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
          </button>
          <!-- Search input -->
          <div class="flex justify-center flex-1 lg:mr-32">
            <div class="relative w-full max-w-xl mr-6 focus-within:text-purple-500">
              <div class="absolute inset-y-0 flex items-center pl-2">
                <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                </svg>
              </div>
              <input class="w-full h-8 pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-50 border-0 rounded-md focus:placeholder-gray-700 focus:bg-gray-200 focus:border-purple-900 form-input" type="text" placeholder="Search for projects" aria-label="Search" />
              <input type="hidden" name="IDFOURNISSEUR" value="<?php echo $IDFOURNISSEUR; ?>">
            </div>
          </div>
          <ul class="flex items-center flex-shrink-0 space-x-6">
            <!-- Profile menu -->
            <li class="relative">
              <button class="align-middle w-9 h-9 rounded-full bg-gray-400 text-lg text-white font-semibold focus:shadow-outline-purple focus:outline-none" @click="toggleProfileMenu" @keydown.escape="closeProfileMenu" aria-label="Account" aria-haspopup="true">
                <?php echo substr($fournisseur[2], 0, 1); ?>
              </button>
              <template x-if="isProfileMenuOpen">
                <ul x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click.away="closeProfileMenu" @keydown.escape="closeProfileMenu" class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700" aria-label="submenu">
                  <li class="flex">
                    <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="#">
                      <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                      </svg>
                      <span>Profil</span>
                    </a>
                  </li>
                  <li class="flex">
                    <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="../../Service/LogoutService.php">
                      <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                      </svg>
                      <span>Se déconnecter</span>
                    </a>
                  </li>
                </ul>
              </template>
            </li>
          </ul>
        </div>
      </header>

      <main class="h-full overflow-y-auto">

        <div class="w-full px-14 py-10">
          <!-- Profile tab -->
          <!-- About Section -->
          <div class="bg-white px-4 shadow-md rounded-md py-5">
            <div class="flex justify-between">
              <div class=" flex items-center space-x-2 text-xl font-semibold text-gray-900 leading-8 px-4 py-2">
                <span clas="text-green-500">
                  <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                  </svg>
                </span>
                <span class="px-1">Profil</span>
              </div>
              <div class="pt-3">
                <a class="block w-max px-2 py-2 mt-4 text-lg font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" href="EditProfil.php">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                  </svg>
                </a>
              </div>

            </div>
            <div class="text-gray-700">
              <div class="grid md:grid-cols-2 text-sm">
                <div class="grid grid-cols-2">
                  <div class="px-4 py-2 font-semibold">NOM</div>
                  <div class="py-2">
                    <?php echo $fournisseur[2]; ?>
                  </div>
                </div>
                <div class="grid grid-cols-2">
                  <div class="px-4 py-2 font-semibold">PRENOM</div>
                  <div class="py-2">
                    <?php echo $fournisseur[3]; ?>
                  </div>
                </div>
                <div class="grid grid-cols-2">
                  <div class="px-4 py-2 font-semibold">CIN</div>
                  <div class="py-2">
                    <?php echo $fournisseur[1]; ?>
                  </div>
                </div>
                <div class="grid grid-cols-2">
                  <div class="px-4 py-2 font-semibold">EMAIL</div>
                  <div class="py-2">
                    <?php echo $fournisseur[4]; ?>
                  </div>
                </div>
                <div class="grid grid-cols-2">
                  <div class="px-4 py-2 font-semibold">TELEPHONE</div>
                  <div class="py-2">
                    <?php echo $fournisseur[5]; ?>
                  </div>
                </div>
                <div class="grid grid-cols-2">
                  <div class="px-4 py-2 font-semibold">FAX</div>
                  <div class="py-2">
                    <?php echo $fournisseur[7]; ?>
                  </div>
                </div>
                <div class="grid grid-cols-2">
                  <div class="px-4 py-2 font-semibold">TYPE PERSONNE</div>
                  <div class="py-2">
                    <?php echo $fournisseur[8]; ?>
                  </div>
                </div>
                <div class="grid grid-cols-2">
                  <div class="px-4 py-2 font-semibold">TYPE FOURNISSEUR</div>
                  <div class="py-2">
                    <?php
                    $typefournisseur = $fournisseur[9] ? "Titulaire de marché" : "Soumissionnaire";
                    echo $typefournisseur;
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End of about section -->

          <div class="my-8"></div>

          <!-- Experience and education -->
          <div class="bg-white px-4 shadow-md rounded-md py-5">
            <div class="flex justify-between">
              <div class="flex items-center space-x-2 text-xl font-semibold text-gray-900 leading-8 px-4 py-2">
                <span clas="text-green-500">
                  <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                  </svg>
                </span>
                <span class="px-1">Entreprise</span>
              </div>
              <div class="flex justify-end">
                <a class="block w-max px-2 py-2 mt-4 text-lg font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" href="EditEntreprise.php">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                  </svg>
                </a>
              </div>
            </div>
            <div class="grid md:grid-cols-2 text-sm">
              <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-semibold">TYPE DE L'ENTREPRISE</div>
                <div class="py-2">
                  <?php echo $TYPE[$entreprise[2]]; ?>
                </div>
              </div>
              <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-semibold">NOM DE L'ENTREPRISE</div>
                <div class="py-2">
                  <?php echo $entreprise[3]; ?>
                </div>
              </div>
              <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-semibold">PME</div>
                <div class="py-2">
                  <?php
                  $PME = $entreprise[4] ? "Vérifié" : "Non-vérifié";
                  echo $PME; ?>
                </div>
              </div>
              <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-semibold">FORME JURIDIQUE</div>
                <div class="py-2">
                  <?php echo $FORME[$entreprise[5]]; ?>
                </div>
              </div>
              <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-semibold">REGISTRE COMMERCIAL</div>
                <div class="py-2">
                  <?php echo $entreprise[6]; ?>
                </div>
              </div>
              <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-semibold">PAYS</div>
                <div class="py-2">
                  <?php echo $entreprise[7]; ?>
                </div>
              </div>
              <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-semibold">VILLE</div>
                <div class="py-2">
                  <?php echo $entreprise[8]; ?>
                </div>
              </div>
              <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-semibold">CODE POSTAL</div>
                <div class="py-2">
                  <?php echo $entreprise[9]; ?>
                </div>
              </div>
              <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-semibold">ICE</div>
                <div class="py-2">
                  <?php echo $entreprise[10]; ?>
                </div>
              </div>
              <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-semibold">IDENTIFIANT FISCAL</div>
                <div class="py-2">
                  <?php echo $entreprise[11]; ?>
                </div>
              </div>
              <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-semibold">TAXE PROFESSIONNELLE</div>
                <div class="py-2">
                  <?php echo $entreprise[12]; ?>
                </div>
              </div>
              <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-semibold">CNSS</div>
                <div class="py-2">
                  <?php echo $entreprise[13]; ?>
                </div>
              </div>
              <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-semibold">Téléphone</div>
                <div class="py-2">
                  <?php echo $entreprise[14]; ?>
                </div>
              </div>
              <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-semibold">Fax</div>
                <div class="py-2">
                  <?php echo $entreprise[15]; ?>
                </div>
              </div>
              <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-semibold">Adresse</div>
                <div class="py-2">
                  <?php echo $entreprise[16]; ?>
                </div>
              </div>
              </ul>
            </div>
          </div>
          <!-- End of profile tab -->
        </div>
      </main>
    </div>
  </div>
</body>

</html>