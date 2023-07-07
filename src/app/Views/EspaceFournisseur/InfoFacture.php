<?php

include_once '../../Config/Database.php';

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
    $idFacture = $_GET['idFacture'];
    $IDFOURNISSEUR = $_SESSION['IDFOURNISSEUR'];
    $resultat = mysqli_fetch_row(mysqli_query($conn, "SELECT * FROM fournisseur WHERE IDFOURNISSEUR='$IDFOURNISSEUR'"));
    $facture = mysqli_fetch_row(mysqli_query($conn, "SELECT * FROM facture WHERE NUMFACTURE = '$idFacture'"));
    $depense = mysqli_query($conn, "SELECT NUMDEPENSE FROM depense WHERE IDFOURNISSEUR = '$IDFOURNISSEUR' and DATEFIN IS NULL");
    ?>

    <div class="flex h-screen bg-gray-50" :class="{ 'overflow-hidden': isSideMenuOpen }">
        <!-- Desktop sidebar -->
        <aside class="z-20 hidden w-64 overflow-y-auto bg-white md:block flex-shrink-0">
            <div class="py-4 text-gray-500">
                <a class="flex justify-center" href="../Home.php">
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
                        </div>
                    </div>
                    <ul class="flex items-center flex-shrink-0 space-x-6">
                        <!-- Profile menu -->
                        <li class="relative">
                            <button class="align-middle w-9 h-9 rounded-full bg-gray-400 text-lg text-white font-semibold focus:shadow-outline-purple focus:outline-none" @click="toggleProfileMenu" @keydown.escape="closeProfileMenu" aria-label="Account" aria-haspopup="true">
                                <?php echo substr($resultat[2], 0, 1); ?>
                            </button>
                            <template x-if="isProfileMenuOpen">
                                <ul x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click.away="closeProfileMenu" @keydown.escape="closeProfileMenu" class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700" aria-label="submenu">
                                    <li class="flex">
                                        <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="Profile.php">
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

            <?php
            if ($facture[14]) {
                $stat = "";
                echo '<script>';
                echo 'document.getElementsByTagName("input").innerHTML = "' . $stat . '";';
                echo '</script>';
            }
            ?>



            <main class="h-full overflow-y-auto">

                <div class="w-full  px-14 py-10">
                    <div class="bg-white px-8 shadow-md rounded-md py-5">
                        <div>
                            <div class="flex items-center space-x-2 text-xl font-semibold text-gray-900 leading-8 px-4 py-3">
                                <span clas="text-green-500">
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </span>
                                <span class="px-1">Ma Facture</span>
                            </div>

                            <form action="../../Service/EditFactureService.php" method="post" id="form" class="grid grid-cols-2 gap-x-12 gap-y-6 pl-4">
                                <div>
                                    <h4 class="py-4">NUM FACTURE</h4>
                                    <input class="w-11/12 rounded-lg border-2 border-black px-3 text-gray-700 h-10" type="text" name="Num_Facture" value="<?php echo $facture[0]; ?>">
                                </div>

                                <div>
                                    <h4 class="py-4">NUM DEPENSE</h4>
                                    <select class="w-11/12 rounded-lg border-2 border-black px-3 text-gray-700 h-10" name="Num_Depense" required>
                                        <?php
                                        while ($d = mysqli_fetch_row($depense)) {
                                        ?>
                                            <option value="<?php echo $d[0]; ?>" <?php echo ($d[0] == $facture[2]) ? "selected" : "" ?>><?php echo $d[0]; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>

                                </div>

                                <div>
                                    <h4 class="py-4">ETAT FACTURE</h4>
                                    <input class="w-11/12 rounded-lg border-2 border-black px-3 text-gray-700 h-10" type="text" name="Etat_Facture" value="<?php echo $facture[3]; ?>" readonly>
                                </div>

                                <div>
                                    <h4 class="py-4">DATE FACTURE</h4>
                                    <input class="w-11/12  rounded-lg border-2 border-black px-3 text-gray-700 h-10" type="date" name="Date_Facture" value="<?php echo $facture[5]; ?>">
                                </div>

                                <div>
                                    <h4 class="py-4">MONTANT HT</h4>
                                    <input class="w-11/12  rounded-lg border-2 border-black px-3 text-gray-700 h-10" type="text" name="Montant_HT" value="<?php echo $facture[6]; ?>">
                                </div>

                                <div>
                                    <h4 class="py-4">MONTANT TTC</h4>
                                    <input class="w-11/12  rounded-lg border-2 border-black px-3 text-gray-700 h-10" type="text" name="Montant_TTC" value="<?php echo $facture[7]; ?>">
                                </div>

                                <div>
                                    <h4 class="py-4">DEVISE</h4>
                                    <select class="w-11/12 rounded-lg border-2 border-black px-3 text-gray-700 h-10" name="Devise" required>
                                        <option value="MAD" <?php echo ($facture[4] == 'MAD') ? "selected" : "" ?>>MAD</option>
                                        <option value="EUR" <?php echo ($facture[4] == 'EUR') ? "selected" : "" ?>>EUR</option>
                                        <option value="USD" <?php echo ($facture[4] == 'USD') ? "selected" : "" ?>>USD</option>
                                        <option value="GBP" <?php echo ($facture[4] == 'GBP') ? "selected" : "" ?>>GBP</option>
                                    </select>
                                </div>

                                <div>
                                    <h4 class="py-4">DATE DEPOSE</h4>
                                    <input class="w-11/12 rounded-lg border-2 border-black px-3 text-gray-700 h-10" type="date" name="Date_Depose" value="<?php echo $facture[8]; ?>" readonly>
                                </div>

                                <div>
                                    <h4 class="py-4">DATE VALIDE</h4>
                                    <input class="w-11/12 rounded-lg border-2 border-black px-3 text-gray-700 h-10" type="date" name="Date_Valide" value="<?php echo $facture[9]; ?>" readonly>
                                </div>

                                <div>
                                    <h4 class="py-4">DATE REJETE</h4>
                                    <input class="w-11/12 rounded-lg border-2 border-black px-3 text-gray-700 h-10" type="date" name="Date_Rejete" value="<?php echo $facture[10]; ?>" readonly>
                                </div>

                                <div>
                                    <h4 class="py-4">DATE TRAITEMENT</h4>
                                    <input class="w-11/12 rounded-lg border-2 border-black px-3 text-gray-700 h-10" type="date" name="Date_Traitement" value="<?php echo $facture[11]; ?>" readonly>
                                </div>

                                <div>
                                    <h4 class="py-4">DATE PAYE</h4>
                                    <input class="w-11/12 rounded-lg border-2 border-black px-3 text-gray-700 h-10" type="date" name="Date_Paye" value="<?php echo $facture[12]; ?>" readonly>
                                </div>

                                <div>
                                    <h4 class="py-4">ATTACHEMENT</h4>
                                    <a href="factureFile.php?idFacture=<?php echo $facture[0]; ?>" target="_blank" class="btn-download"><input class="w-11/12 rounded-lg border-2 border-black px-3 text-gray-700 h-10" type="text" name="Attachement" value="<?php echo $facture[13]; ?>"></a>
                                </div>

                                <div>
                                    <h4 class="py-4">VALIDÉ</h4>
                                    <select class="w-11/12 rounded-lg border-2 border-black px-3 text-gray-700 h-10" name="Validé" required>
                                        <option value="OUI" <?php echo ($facture[15] == true) ? "selected" : "" ?>>OUI</option>
                                        <option value="NON" <?php echo ($facture[15] == false) ? "selected" : "" ?>>NON</option>
                                    </select>
                                </div>

                                <?php
                                if ($facture[3] == 'Rejetée') { ?>
                                    <div class="col-span-2" style="width: 96%;">
                                        <h4 class="py-4">Motif</h4>
                                        <textarea name="Motif" class="w-full py-3 text-lg leading-relaxed rounded-lg border-2 border-black px-3 text-gray-700" rows="3" readonly><?php echo $facture[16]; ?></textarea>
                                    </div>
                                <?php } ?>

                                <input type="hidden" name="Fournisseur" value="<?php echo $IDFOURNISSEUR; ?>">

                            </form>
                            <div class="flex justify-center pt-5">
                                <?php
                                if (!$facture[14]) { ?>
                                    <button class="block w-5/12 px-4 py-2 my-4 mx-4 text-lg font-medium leading-5 text-center text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-lg active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-purple" type="button" onclick="toggleModal('modal-validation-facture')">
                                        Valider
                                    </button>
                                    <button class="block w-5/12 px-4 py-2 my-4 mx-4 text-lg font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" type="button" onclick="toggleModal('modal-id')">
                                        Enregistrer
                                    </button>
                                    <button class="block w-5/12 px-4 py-2 my-4 mx-4 text-lg font-medium leading-5 text-center text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple" type="button" onclick="toggleModal('modal-suppression-facture')">
                                        Supprimer
                                    </button>
                                <?php } else { ?>
                                    <button class="block w-5/12 px-4 py-2 my-4 mx-4 text-lg font-medium leading-5 text-center text-white bg-green-600 border border-transparent rounded-lg active:bg-green-600" type="button" disabled>
                                        Valider
                                    </button>
                                    <button class="block w-5/12 px-4 py-2 my-4 mx-4 text-lg font-medium leading-5 text-center text-white bg-purple-600 border border-transparent rounded-lg" type="button" disabled>
                                        Enregistrer
                                    </button>
                                    <button class="block w-5/12 px-4 py-2 my-4 mx-4 text-lg font-medium leading-5 text-center text-white bg-red-600 border border-transparent rounded-lg" type="button" disabled>
                                        Supprimer
                                    </button>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <?php include '../components/validModal.php'; ?>

            <?php include '../components/modifModal.php'; ?>

            <?php include '../components/suppModal.php'; ?>

        </div>
    </div>
</body>

</html>