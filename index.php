<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="./img/logo.png" type="image/png" />
  <title>Forge Des Oiseleurs - Jérémy, Forgeron Coutelier</title>
  
  <link rel="stylesheet" href="styles.css?v=2" />
  
  <style>
    header { transition: transform .3s ease; }
    .header-hidden { transform: translateY(-100%); }
    
    /* Si tu veux VRAIMENT cacher le menu sur mobile, décommente les 3 lignes ci-dessous : */
    /* @media screen and (max-width: 768px) {
         .hamburger { display: none !important; }
    } */
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
      <div class="carousel">
        <div class="carousel-slide">
          <img src="./img/couteau.jpg" alt="Couteau forgé à la main" />
          <div class="carousel-caption">
            <h3>Couteau Traditionnel</h3>
            <p>Lame en acier damascus et manche en bois d'ébène</p>
          </div>
        </div>
        <div class="carousel-slide">
          <img src="./img/bague.jpg" alt="Bijou forgé à la main" />
          <div class="carousel-caption">
            <h3>Bijouterie Forgée</h3>
            <p>Fusion parfaite entre métaux nobles et techniques ancestrales</p>
          </div>
        </div>
        <div class="carousel-slide">
          <img src="./img/tirebch1.jpg" alt="Tire-bouchon artisanal" />
          <div class="carousel-caption">
            <h3>Tire-bouchon Artisanal</h3>
            <p>Alliance de fonctionnalité et d'élégance</p>
          </div>
        </div>
        <div class="carousel-slide">
          <img src="./img/tirbch2.jpg" alt="Tire-bouchon décoratif" />
          <div class="carousel-caption">
            <h3>Accessoires de Dégustation</h3>
            <p>Sublimez vos moments de convivialité avec mes créations</p>
          </div>
        </div>
      </div>

      <button class="carousel-prev" aria-label="Précédent">&#10094;</button>
      <button class="carousel-next" aria-label="Suivant">&#10095;</button>

      <div class="carousel-indicators" role="tablist">
        <div class="carousel-indicator active" role="tab" aria-selected="true"></div>
        <div class="carousel-indicator" role="tab" aria-selected="false"></div>
        <div class="carousel-indicator" role="tab" aria-selected="false"></div>
        <div class="carousel-indicator" role="tab" aria-selected="false"></div>
      </div>
    </div>

    <div class="gallery-description">
      <p>À La Forge des Oiseleurs, chaque pièce est forgée à la main avec soin et exigence. Je travaille l’acier et les matériaux naturels pour créer des couteaux uniques, pensés pour être à la fois beaux, solides et fonctionnels. Chaque création porte la trace du feu, du geste et de l’intention : un objet authentique, fait pour durer et accompagner son propriétaire au quotidien.</p>
    </div>
  </section>

  <section id="discovery" class="discovery">
    <div class="section-header"><h2>Journée Découverte à la Forge</h2></div>

    <div class="discovery-content">
      <p class="discovery-intro">
        Vivez une expérience unique et immersive dans mon univers.
        Que tu sois curieux, passionné ou à la recherche d'une activité originale, ma journée découverte
        te permettra de t'initier aux techniques ancestrales du travail du métal et de repartir avec ta propre création.
      </p>

      <div class="discovery-grid">
        
        <div class="feature-card">
          <span class="feature-icon">🔥</span>
          <h3>Programme de la Journée</h3>
          <ul>
            <li>Accueil et briefing sécurité (30 min)</li>
            <li>Découverte de l'atelier et des outils</li>
            <li>Démonstration des techniques de base</li>
            <li>Pratique guidée : chauffe et martelage</li>
            <li>Réalisation de votre première pièce</li>
            <li>Finitions et personnalisation</li>
          </ul>
        </div>

        <div class="feature-card">
          <span class="feature-icon">📋</span>
          <h3>Inclus dans la Journée</h3>
          <ul>
            <li>Matériaux et matières premières</li>
            <li>Équipements de protection individuelle</li>
            <li>Pause café et collation</li>
            <li>Votre création à emporter</li>
            <li>Conseils et astuces personnalisés</li>
            <li>Une ambiance conviviale</li>
          </ul>
        </div>

        <div class="feature-card">
          <span class="feature-icon">👕</span>
          <h3>À Prévoir</h3>
          <ul>
            <li>Vêtements de travail (pantalon long obligatoire)</li>
            <li>Chaussures fermées et robustes</li>
            <li>Cheveux longs attachés</li>
            <li>Retrait des bijoux et montres</li>
            <li>Bouteille d'eau</li>
            <li>Appareil photo si souhaité</li>
          </ul>
        </div>

        <div class="feature-card">
          <span class="feature-icon">📅</span>
          <h3>Informations Pratiques</h3>
          <ul>
            <li>Durée : 9h00 - 16h00 (pause dîner incluse)</li>
            <li>Disponible du mardi au samedi</li>
            <li>Sur réservation uniquement</li>
            <li>Niveau : débutant bienvenu</li>
            <li>Langues : Français, Espagnol</li>
          </ul>
        </div>

      </div>

      <div class="discovery-highlight">
        <h3>Une Expérience Inoubliable</h3>
        <div class="highlight-content">
          <div class="highlight-item"><strong>6h</strong><span>D'immersion totale</span></div>
          <div class="highlight-item"><strong>2</strong><span>Participants max</span></div>
          <div class="highlight-item"><strong>16+</strong><span>Âge minimum</span></div>
          <div class="highlight-item"><strong>250.-</strong><span>Tout inclus</span></div>
        </div>
      </div>

      <div class="discovery-cta">
        <a href="#contact" class="btn-primary">Réserver ma journée découverte</a>
        <a href="#contact" class="btn-secondary">Demander plus d'infos</a>
      </div>
    </div>
  </section>

  <section id="products" class="products">
    <div class="section-header"><h2>Boutique</h2></div>
    <div class="products-grid">
      <div class="product-card" data-product="Couteau">
        <div class="product-image"><img src="./img/couteau.jpg" alt="Couteau artisanale" /></div>
        <div class="product-info">
          <h3>Couteau Artisanale</h3>
          <p>Couteau forgé, lame en acier trempé, manche en chêne, aiguisé à la pierre diamant.</p>
          <span class="price">200.-</span>
          <a href="#" class="btn product-details-btn">Voir détails</a>
        </div>
      </div>

      <div class="product-card" data-product="support">
        <div class="product-image"><img src="./img/bague.jpg" alt="Support pour mangeoire" /></div>
        <div class="product-info">
          <h3>Support pour Mangeoire</h3>
          <p>Support décoratif et résistant pour accueillir vos mangeoires à oiseaux.</p>
          <span class="price">95.-</span>
          <a href="#" class="btn product-details-btn">Voir détails</a>
        </div>
      </div>

      <div class="product-card" data-product="porte">
        <div class="product-image"><img src="./img/tirebch1.jpg" alt="Heurtoir de porte" /></div>
        <div class="product-info">
          <h3>Heurtoir de Porte</h3>
          <p>Élégant heurtoir de porte à motif d'oiseau pour donner du caractère à votre entrée.</p>
          <span class="price">120.-</span>
          <a href="#" class="btn product-details-btn">Voir détails</a>
        </div>
      </div>

      <div class="product-card" data-product="grille">
        <div class="product-image"><img src="./img/tirbch2.jpg" alt="Grille décorative" /></div>
        <div class="product-info">
          <h3>Grille Décorative</h3>
          <p>Grille décorative ornée de motifs floraux et d'oiseaux pour embellir votre intérieur.</p>
          <span class="price">250.-</span>
          <a href="#" class="btn product-details-btn">Voir détails</a>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="contact">
    <div class="section-header"><h2>Me Contacter</h2></div>
    <div class="contact-container">
      <div class="contact-info">
        <h3>Informations</h3>
        <p>Pour toute commande, question ou projet personnalisé, n'hésite pas à me contacter.</p>
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
            <option value="couteau">Couteau Artisanale</option>
            <option value="support">Support Mangeoire</option>
            <option value="heurtoir">Heurtoir de Porte</option>
            <option value="grille">Grille Décorative</option>
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
      <h3>Forge Des Oiseleurs</h3>
      <div class="social-links">
        <a href="#" aria-label="Facebook">f</a>
        <a href="#" aria-label="Instagram">i</a>
      </div>
      <p class="copyright">© <span id="year"></span> Forge Des Oiseleurs — Tous droits réservés.</p>
    </div>
  </footer>

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
  
  <script src="scripts.js?v=2"></script>
</body>
</html>