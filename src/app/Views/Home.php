<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>ONHYM Supplier Portal</title>
  <meta name="title" content="ONHYM">
  <meta name="description" content="This is the ONHYM Supplier Portal website made by DSI-ONHYM">

  <!-- 
    - icon
  -->
  <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/svg+xml">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap" rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="../assets/css/style.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="../assets/images/hero-bg.jpg">
  <link rel="preload" as="image" href="../assets/images/hero-slide-1.jpg">
  <link rel="preload" as="image" href="../assets/images/hero-slide-2.jpg">

</head>

<body>

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="../assets/images/logo-ONHYM.png" width="290" alt="Logo ONHYM" class="logo-light">

        <img src="../assets/images/logo-ONHYM.png" width="265" alt="Logo ONHYM" class="logo-dark">
      </a>

      <nav class="navbar" data-navbar>

        <ul class="navbar-list">

          <li>
            <a href="#" class="navbar-link">ACCUEIL</a>
          </li>

          <li>
            <a href="https://www.onhym.com/fr" target="_blank" class="navbar-link">SITE WEB ONHYM</a>
          </li>

          <li>
            <a href="#about" class="navbar-link">OPPORTUNITÉS ONHYM</a>
          </li>

          <li>
            <a href="https://www.onhym.com/fr/contact" target="_blank" class="navbar-link">CONTACT</a>
          </li>

        </ul>

        <div class="wrapper">
          <a href="mailto:info@email.com" class="contact-link">info@email.com</a>

          <a href="tel:+212 5 37 23 98 98" class="contact-link">+212 5 37 23 98 98</a>
        </div>

      </nav>
      <?php  ?>
      <a href="Auth/login.php" class="btn btn-primary">DEVENIR FOURNISSEUR</a>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero has-bg-image" aria-label="home" style="background-image: url('../assets/images/hero-bg.jpg')">
        <div class="container">

          <div class="hero-content">

            <h1 class="h1 hero-title">Bienvenue sur votre Portail Fournisseurs ONHYM.</h1>

            <p class="hero-text">
              Une plateforme intuitive et ergonomique pour tous vos échanges transactionnels. Gérer en toute transparence le cycle d'achat depuis la demande d'information jusqu'au suivi des factures.
            </p>

            <div class="btn-wrapper">

              <a href="https://www.onhym.com/fr/about" target="_blank" class="btn btn-outline">Lire la suite</a>

            </div>

          </div>

          <div class="hero-slider" data-slider>

            <div class="slider-inner">
              <ul class="slider-container" data-slider-container>

                <li class="slider-item">

                  <figure class="img-holder" style="--width: 575; --height: 550;">
                    <img src="../assets/images/hero-slide-1.jpg" width="575" height="550" alt="" class="img-cover">
                  </figure>

                </li>

                <li class="slider-item">

                  <figure class="img-holder" style="--width: 575; --height: 550;">
                    <img src="../assets/images/hero-slide-2.jpg" width="575" height="550" alt="" class="img-cover">
                  </figure>

                </li>

              </ul>
            </div>

            <button class="slider-btn prev" aria-label="slide to previous" data-slider-prev>
              <ion-icon name="arrow-back"></ion-icon>
            </button>

            <button class="slider-btn next" aria-label="slide to next" data-slider-next>
              <ion-icon name="arrow-forward"></ion-icon>
            </button>

          </div>

        </div>
      </section>


      <!-- 
        - #SERVICE
      -->

      <section class="section service" aria-labelledby="service-label">
        <div class="container">

          <h2 class="h2 section-title">
            L'ONHYM est constamment à la recherche de nouveaux fournisseurs qui partagent ses valeurs et son modèle de croissance partagée. Suivez ces étapes et fournissez les informations requises au sujet de votre entreprise et de vos activités.
          </h2>

          <ul class="grid-list">

            <li class="grid-item">
              <div class="service-card">
                <a href="Auth/login.php">

                  <div class="card-icon">
                    <img src="https://img.icons8.com/external-tanah-basah-glyph-tanah-basah/32/FFFFFF/external-profile-social-media-ui-tanah-basah-glyph-tanah-basah.png" />
                  </div>

                  <h3 class="h4 card-title">CRÉER VOTRE ESPACE FOURNISSEUR</h3>
                </a>
              </div>
            </li>

            <li class="grid-item">
              <div class="service-card">

                <div class="card-icon">
                  <img src="https://img.icons8.com/pastel-glyph/32/FFFFFF/clipboard-approve--v1.png" />
                </div>

                <h3 class="h4 card-title">DÉPOSER LES FACTURES EN LIGNE</h3>

              </div>
            </li>

            <li class="grid-item">
              <div class="service-card">

                <div class="card-icon">
                  <img src="https://img.icons8.com/fluency-systems-regular/32/FFFFFF/approval.png" />
                </div>

                <h3 class="h4 card-title">SUIVRE LES FACTURES DÉPOSÉES</h3>

              </div>
            </li>

          </ul>

        </div>
      </section>




      <!-- 
        - #ABOUT
      -->

      <section class="about" id="about" aria-labelledby="about-label">
        <div class="container">

          <figure class="about-banner">
            <img src="../assets/images/about-banner.png" width="800" height="580" loading="lazy" alt="about banner" class="w-100">
          </figure>

          <div class="about-content">

            <p class="section-subtitle" id="about-label">OPPORTUNITÉS ONHYM</p>

            <h2 class="h3 section-title">
              Consultez, identifiez et répondez aux opportunités émises par tous les sites ONHYM.
            </h2>

            <ul>

              <li class="about-item">
                <div class="accordion-card expanded" data-accordion>

                  <h3 class="card-title">
                    <button class="accordion-btn" data-accordion-btn>
                      <ion-icon name="chevron-down-outline" aria-hidden="true" class="down"></ion-icon>

                      <span class="span h5">Hydrocarbures</span>
                    </button>
                  </h3>

                  <p class="accordion-content">
                    Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                    sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna,
                    vel.
                  </p>

                </div>
              </li>

              <li class="about-item">
                <div class="accordion-card" data-accordion>

                  <h3 class="card-title">
                    <button class="accordion-btn" data-accordion-btn>
                      <ion-icon name="chevron-down-outline" aria-hidden="true" class="down"></ion-icon>

                      <span class="span h5">Mines</span>
                    </button>
                  </h3>

                  <p class="accordion-content">
                    Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                    sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna,
                    vel.
                  </p>

                </div>
              </li>

            </ul>

            <div class="btns-about">
              <a href="offreListing.html" class="btn-about">APPELS D'OFFRES OUVERTS</a>
              <a href="offreListing.html" class="btn-about">PROJET PREVISIONNEL</a>
            </div>


          </div>

        </div>
      </section>





      <!-- 
        - #FEATURE
      -->

      <section class="section feature" aria-labelledby="feature-label">
        <div class="container">

          <figure class="feature-banner">
            <img src="../assets/images/feature-banner.png" width="800" height="531" loading="lazy" alt="feature banner" class="w-100">
          </figure>

          <div class="feature-content">

            <p class="section-subtitle" id="feautre-label">E-SUIVI</p>

            <h2 class="h3 section-title">
              Consultez et suivez vos commandes ainsi que L’état de paiement de vos factures.
            </h2>

            <p class="section-text">
              Pour une meilleure collaboration avec ses fournisseurs, l'ONHYM a mis en place une plateforme digitale d'échange très intuitive et offrant une meilleure expérience utilisateur permettant de :
            </p>

            <ul class="feature-list">

              <li>
                <div class="feature-card">

                  <div class="card-icon">
                    <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                  </div>

                  <span class="span">
                    Visualiser vos commandes avec le détail des articles et prestations concernées.
                  </span>

                </div>
              </li>

              <li>
                <div class="feature-card">

                  <div class="card-icon">
                    <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                  </div>

                  <span class="span">
                    Visualiser les timeslines des livraisons avec leurs statuts de réception et paiement.
                  </span>

                </div>
              </li>

              <li>
                <div class="feature-card">

                  <div class="card-icon">
                    <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                  </div>

                  <span class="span">
                    Suivre le traitement de vos factures déposées.
                  </span>

                </div>
              </li>

              <li>
                <div class="feature-card">

                  <div class="card-icon">
                    <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                  </div>

                  <span class="span">
                    Soumettre vos attachements et suivre leurs statuts de validation.
                  </span>

                </div>
              </li>

              <li>
                <div class="feature-card">

                  <div class="card-icon">
                    <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                  </div>

                  <span class="span">
                    Emettre vos réclamations ou demandes d’information.
                  </span>

                </div>
              </li>
            </ul>

          </div>

        </div>
      </section>





      <!-- 
        - #PROJECT
      -->

      <section class="section project" aria-labelledby="project-label">
        <div class="container">

          <h2 class="h2 section-title">
            Le guide utilisateur du portail fournisseur est disponible.
          </h2>
          <a href="#" class="btn-download">Télécharger<i class="fa fa-download" aria-hidden="true" style="padding-left: 12px;"></i></a>

        </div>
      </section>



      <!-- 
    - #FOOTER
  -->

      <footer class="footer">
        <div class="container grid-list">

          <div class="footer-brand">

            <div>
              <a href="#" class="logo">
                <img src="../assets/images/logo-ONHYM.png" width="290" alt="Logo ONHYM">
              </a>
            </div>


            <p id="footer-text">
              &copy; Office National des Hydrocarbures <br> et des Mines 2022
            </p>

          </div>

          <ul class="footer-list">

            <li>
              <p class="h4 footer-list-title">Restez en Contact</p>
            </li>

            <li>
              <address class="footer-text">
                5 Avenue Moulay Hassan BP99, Rabat, Maroc.
              </address>
            </li>

            <li>
              <a href="mailto:achats@onhym.ma" class="footer-link">achats@onhym.ma</a>
            </li>

            <li>
              <a href="tel:+212 5 37 23 98 98" class="footer-link">+212 5 37 23 98 98</a>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <p class="h4 footer-list-title">Nos Services</p>
            </li>

            <li>
              <a href="https://www.onhym.com/fr" target="_blank" class="footer-link">ONHYM</a>
            </li>

            <li>
              <a href="https://www.onhym.com/fr/mineral-processing" target="_blank" class="footer-link">Présentation</a>
            </li>

            <li>
              <a href="https://www.onhym.com/fr/liens-utiles" target="_blank" class="footer-link">Liens Utiles</a>
            </li>

            <li>
              <a href="https://www.onhym.com/fr/conditions-dutilisation" target="_blank" class="footer-link">Conditions d’utilisation</a>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <p class="h4 footer-list-title">Nos Réseaux</p>
            </li>

            <li>
              <a href="https://www.linkedin.com/company/onhym/" target="_blank" class="footer-link">linkedin</a>
            </li>

          </ul>

        </div>
      </footer>





      <!-- 
    - custom js link
  -->
      <script src="../assets/js/script.js"></script>

      <!-- 
    - ionicon
  -->
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>