<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="./img/logo.png" type="image/png" />
  <title>Forge Des Oiseleurs - Jérémy, Forgeron Coutelier</title>
  
  <link rel="stylesheet" href="styles.css?v=4" />
  
  <style>
    header { transition: transform .3s ease; }
    .header-hidden { transform: translateY(-100%); }
    
    /* Style pour le message de chargement */
    .loading {
      text-align: center;
      padding: 2rem;
      font-style: italic;
      color: #666;
      grid-column: 1 / -1;
    }
    .error {
      color: #cf7500;
      text-align: center;
      grid-column: 1 / -1;
    }
  </style>
</head>
<body>

  <header>
    <nav>
      <div class="logo">
        <img src="./img/logo.png" alt="Forge Des Oiseleurs" />
        Forge Des Oiseleurs
      </div>

      <ul class="nav-links">
        <li><a href="#accueil">Accueil</a></li>
        <li><a href="#about">À propos</a></li>
        <li><a href="#gallery">Mes Créations</a></li>
        <li><a href="#discovery">Journée découverte</a></li>
        <li><a href="#products">Boutique</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>

      <button class="hamburger" aria-label="Ouvrir le menu" style="background: transparent; border: none; color: #f9f7f3; font-size: 2rem; cursor: pointer;">☰</button>
    </nav>
  </header>

  <section id="accueil" class="hero">
    <!-- Vidéo en arrière-plan -->
    <video class="hero-video" autoplay muted loop playsinline>
        <source src="./img/videobckg.mov" type="video/mp4">
        <!-- Fallback pour format .mov spécifique si besoin -->
        <source src="./img/videobckg.mov" type="video/quicktime"> 
        Votre navigateur ne supporte pas la vidéo.
    </video>
    
    <!-- Filtre sombre pour que le texte reste lisible par dessus la vidéo -->
    <div class="hero-overlay"></div>

    <div class="hero-content">
      <h1>Forge Des Oiseleurs</h1>
      <p>Artisanat forgé à la main avec passion et savoir-faire</p>
      <a href="#gallery" class="btn">Découvrir mes créations</a>
    </div>
  </section>

  <section id="about">
    <div class="section-header"><h2>À Propos</h2></div>
    <div class="about-content">
      <div class="about-text">
        <p>Je suis Jérémy, forgeron coutelier et créateur de La Forge des Oiseleurs. Dans mon atelier, le métal devient un langage, un espace où se rencontrent la force du feu et la finesse du geste. J’ai choisi ce métier par passion pour la matière brute, pour le travail manuel, et pour cette magie singulière qui naît lorsque l’acier rougeoyant se transforme sous le marteau.</p>
        <p>Le nom "La Forge des Oiseleurs" reflète ma vision : créer des pièces qui allient légèreté et caractère, précision et liberté. Comme l’oiseleur qui observe, comprend et respecte la nature, je cherche à écouter la matière, à suivre son rythme, à révéler ce qu’elle a de plus beau.</p>
        <p>Chaque couteau que je forge est unique. Je travaille l’acier carbone, le damas, les bois naturels et d’autres matériaux nobles pour donner naissance à des pièces durables, fonctionnelles et chargées d’âme. Couteaux de cuisine, pliants, pièces d’exception ou créations sur mesure : chaque projet est une rencontre entre ton besoin et mon savoir-faire.</p>
      </div>
      <div class="about-image">
        <img src="./img/forge.jpg" alt="Atelier de la Forge Des Oiseleurs" />
      </div>
    </div>
  </section>

  <section id="gallery" class="gallery">
    <div class="section-header"><h2>Mes Créations</h2></div>

    <div class="carousel-container">
      <!-- Le contenu du carousel sera généré par JS -->
      <div class="carousel" id="dynamic-carousel">
         <!-- Chargement... -->
      </div>
      
      <!-- Contrôles du carousel -->
      <button class="carousel-prev" aria-label="Précédent" style="display:none">&#10094;</button>
      <button class="carousel-next" aria-label="Suivant" style="display:none">&#10095;</button>

      <div class="carousel-indicators" role="tablist" id="dynamic-indicators"></div>
    </div>

    <div class="gallery-description">
      <p>À La Forge des Oiseleurs, chaque pièce est forgée à la main avec soin et exigence. Je travaille l’acier et les matériaux naturels pour créer des couteaux uniques, pensés pour être à la fois beaux, solides et fonctionnels.</p>
    </div>
  </section>

  <section id="discovery" class="discovery">
    <div class="section-header"><h2>Journée Découverte à la Forge</h2></div>

    <div class="discovery-content">
      <p class="discovery-intro">
        Vivez une expérience unique et immersive dans mon univers.
        Initiez-vous aux techniques ancestrales du travail du métal et repartez avec votre création.
      </p>

      <div class="discovery-grid">
        <div class="feature-card">
          <span class="feature-icon">🔥</span>
          <h3>Programme</h3>
          <ul>
            <li>Accueil et sécurité</li>
            <li>Découverte de l'atelier</li>
            <li>Démonstration technique</li>
            <li>Pratique : chauffe et martelage</li>
            <li>Réalisation de votre pièce</li>
            <li>Finitions</li>
          </ul>
        </div>

        <div class="feature-card">
          <span class="feature-icon">📋</span>
          <h3>Inclus</h3>
          <ul>
            <li>Matériaux (acier, charbon)</li>
            <li>Équipements de protection</li>
            <li>Pause café et collation</li>
            <li>Votre création à emporter</li>
            <li>Conseils personnalisés</li>
          </ul>
        </div>

        <div class="feature-card">
          <span class="feature-icon">👕</span>
          <h3>À Prévoir</h3>
          <ul>
            <li>Vêtements en coton (pas de synthétique)</li>
            <li>Chaussures de sécurité ou rando</li>
            <li>Cheveux attachés</li>
            <li>Pas de bijoux</li>
            <li>Bouteille d'eau</li>
          </ul>
        </div>

        <div class="feature-card">
          <span class="feature-icon">📅</span>
          <h3>Infos</h3>
          <ul>
            <li>9h00 - 16h00</li>
            <li>Du mardi au samedi</li>
            <li>Sur réservation</li>
            <li>Débutants bienvenus</li>
            <li>Français / Espagnol</li>
          </ul>
        </div>
      </div>

      <div class="discovery-cta">
        <a href="#contact" class="btn-primary">Réserver ma journée</a>
      </div>
    </div>
  </section>

  <section id="products" class="products">
    <div class="section-header"><h2>Boutique</h2></div>
    <!-- Conteneur rempli par JS -->
    <div class="products-grid" id="products-grid">
      <div class="loading">Chargement des produits depuis l'atelier...</div>
    </div>
  </section>

  <section id="contact" class="contact">
    <div class="section-header"><h2>Me Contacter</h2></div>
    <div class="contact-container">
      <div class="contact-info">
        <h3>Informations</h3>
        <p>Pour toute commande ou projet personnalisé.</p>
        <div class="info-item"><i>📍</i><span>Route de St-Denis 7, 1117 Grancy, Suisse</span></div>
        <div class="info-item"><i>📞</i><span>079 703 53 03</span></div>
        <div class="info-item"><i>✉️</i><span>contact@forge-des-oiseleurs.ch</span></div>
      </div>

      <form class="contact-form" id="order-form" action="https://formspree.io/f/mykjajjo" method="POST">
        <div class="form-group">
          <label for="name">Nom complet</label>
          <input type="text" id="name" name="name" required />
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required />
        </div>
        <div class="form-group">
          <label for="phone">Téléphone</label>
          <input type="tel" id="phone" name="phone" />
        </div>
        <div class="form-group">
          <label for="product">Sujet / Produit</label>
          <select id="product" name="product">
            <option value="">Sélectionnez un sujet</option>
            <option value="journee-decouverte">Journée Découverte (250.-)</option>
            <option value="custom">Projet personnalisé</option>
            <option value="autre">Autre question</option>
          </select>
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea id="message" name="message" required></textarea>
        </div>
        <button type="submit" class="btn">Envoyer la demande</button>
      </form>
    </div>
  </section>

  <footer>
    <div class="footer-content">
      <p class="copyright">© <span id="year"></span> Forge Des Oiseleurs</p>
    </div>
  </footer>

  <!-- Modal Produit -->
  <div id="product-modal" class="modal" aria-hidden="true">
    <div class="modal-content">
      <span class="close-modal" aria-label="Fermer">&times;</span>
      <div class="modal-product-info">
        <img src="" alt="" class="modal-product-image" id="modal-image" />
        <h3 id="modal-title"></h3>
        <span class="price" id="modal-price"></span>
        <p id="modal-description"></p>
        <a href="#contact" class="btn" id="modal-order-btn">Commander ce produit</a>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const y = document.getElementById('year');
      if (y) y.textContent = new Date().getFullYear();
    });
  </script>
  
  <script src="scripts.js?v=5"></script>
</body>
</html>