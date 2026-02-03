<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./img/logo.png" type="image/png" />
    <title>Forge Des Oiseleurs - Artisanat Forgé</title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
    <?php include 'header.php'; ?>

    <section id="accueil" class="hero">
        <div class="hero-content">
            <h1>Forge Des Oiseleurs</h1>
            <p>Artisanat forgé à la main avec passion et savoir-faire traditionnel</p>
            <a href="#gallery" class="btn">Découvrir nos créations</a>
        </div>
    </section>

    <section id="about">
        <div class="section-header">
            <h2>À Propos de Notre Forge</h2>
        </div>
        <div class="about-content">
            <div class="about-text">
                <p>Bienvenue à la Forge Des Oiseleurs, un atelier où tradition et innovation se rencontrent pour donner vie à des créations uniques en métal forgé.</p>
                <p>Fondée par un passionné de métallurgie, notre forge perpétue des techniques ancestrales tout en les adaptant aux besoins contemporains.</p>
                <p>Chaque pièce qui sort de notre atelier est le fruit d'un travail minutieux, réalisé entièrement à la main, du dessin initial jusqu'aux finitions. Nous utilisons des matériaux de première qualité pour garantir la durabilité et l'esthétique de nos créations.</p>
                <p>Notre spécialité ? Les objets inspirés du monde des oiseaux, d'où notre nom "Des Oiseleurs", mais notre savoir-faire s'étend à une variété de réalisations sur mesure pour répondre à vos besoins spécifiques.</p>
            </div>
            <div class="about-image">
                <img src="./img/forge.jpg" alt="Atelier de la Forge Des Oiseleurs" />
            </div>
        </div>
    </section>

    <!-- Section du carrousel de créations -->
    <section id="gallery" class="gallery">
        <div class="section-header">
            <h2>Nos Créations</h2>
        </div>

        <div class="carousel-container">
            <div class="carousel" aria-live="polite">
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
                        <p>Sublimez vos moments de convivialité avec nos créations</p>
                    </div>
                </div>
            </div>

            <button class="carousel-prev" aria-label="Image précédente">&#10094;</button>
            <button class="carousel-next" aria-label="Image suivante">&#10095;</button>

            <div class="carousel-indicators" role="tablist" aria-label="Sélecteur d’images">
                <div class="carousel-indicator active" role="tab" aria-selected="true" aria-label="Aller à l’image 1"></div>
                <div class="carousel-indicator" role="tab" aria-selected="false" aria-label="Aller à l’image 2"></div>
                <div class="carousel-indicator" role="tab" aria-selected="false" aria-label="Aller à l’image 3"></div>
                <div class="carousel-indicator" role="tab" aria-selected="false" aria-label="Aller à l’image 4"></div>
            </div>
        </div>

        <div class="gallery-description">
            <p>Découvrez l'étendue de notre savoir-faire à travers cette sélection de créations uniques. Chaque pièce témoigne de notre passion pour le travail du métal et de notre engagement envers l'excellence artisanale. Notre forge réalise également des pièces sur mesure selon vos besoins et envies.</p>
        </div>
    </section>

    <!-- JOURNÉE DÉCOUVERTE -->
    <section id="discovery" class="discovery">
        <div class="section-header">
            <h2>Journée Découverte à la Forge</h2>
        </div>

        <div class="discovery-content">
            <p class="discovery-intro">
                Vivez une expérience unique et immersive dans l'univers fascinant de la forge traditionnelle.
                Que vous soyez curieux, passionné ou à la recherche d'une activité originale, notre journée découverte
                vous permettra de vous initier aux techniques ancestrales du travail du métal et de repartir avec votre propre création.
            </p>

            <div class="discovery-features">
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
                    <span class="feature-icon">🛠️</span>
                    <h3>Ce que vous apprendrez</h3>
                    <ul>
                        <li>Les bases du travail du métal à chaud</li>
                        <li>Utilisation du marteau et de l'enclume</li>
                        <li>Techniques de mise en forme</li>
                        <li>Gestion de la température du métal</li>
                        <li>Notions de trempe et de finition</li>
                        <li>Histoire et traditions de la forge</li>
                    </ul>
                </div>

                <div class="feature-card">
                    <span class="feature-icon">✨</span>
                    <h3>Votre Création</h3>
                    <ul>
                        <li>Choix parmi plusieurs projets adaptés</li>
                        <li>Crochet mural décoratif</li>
                        <li>Ouvre-bouteille personnalisé</li>
                        <li>Porte-clés forgé</li>
                        <li>Petit couteau d'atelier</li>
                        <li>Objet personnalisé selon niveau</li>
                    </ul>
                </div>
            </div>

            <div class="discovery-highlight">
                <h3>Une Expérience Inoubliable</h3>
                <div class="highlight-content">
                    <div class="highlight-item">
                        <strong>6h</strong>
                        <span>D'immersion totale</span>
                    </div>
                    <div class="highlight-item">
                        <strong>1-3</strong>
                        <span>Participants max</span>
                    </div>
                    <div class="highlight-item">
                        <strong>16+</strong>
                        <span>Âge minimum</span>
                    </div>
                    <div class="highlight-item">
                        <strong>150€</strong>
                        <span>Tout inclus</span>
                    </div>
                </div>
            </div>

            <div class="discovery-features">
                <div class="feature-card">
                    <span class="feature-icon">📋</span>
                    <h3>Inclus dans la Journée</h3>
                    <ul>
                        <li>Encadrement personnalisé par le maître forgeron</li>
                        <li>Tous les matériaux et matières premières</li>
                        <li>Équipements de protection individuelle</li>
                        <li>Pause café et collation</li>
                        <li>Votre création à emporter</li>
                        <li>Certificat de participation</li>
                    </ul>
                </div>

                <div class="feature-card">
                    <span class="feature-icon">👕</span>
                    <h3>À Prévoir</h3>
                    <ul>
                        <li>Vêtements en coton (pantalon long obligatoire)</li>
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
                        <li>Durée : 9h00 - 16h00 (pause déjeuner incluse)</li>
                        <li>Disponible du mardi au samedi</li>
                        <li>Sur réservation uniquement</li>
                        <li>Niveau : débutant bienvenu</li>
                        <li>Langues : Français, Anglais</li>
                        <li>Groupe privé possible sur demande</li>
                    </ul>
                </div>
            </div>

            <div class="discovery-cta">
                <a href="#contact" class="btn-primary">Réserver ma journée découverte</a>
                <a href="mailto:contact@forgedesoiseleurs.fr?subject=Demande%20d'information%20-%20Journée%20Découverte" class="btn-secondary">Demander plus d'infos</a>
            </div>
        </div>
    </section>

    <section id="products" class="products">
        <div class="section-header">
            <h2>Boutique</h2>
        </div>
        <div class="products-grid">
            <div class="product-card" data-product="Couteau">
                <div class="product-image">
                    <img src="./img/couteau.jpg" alt="Couteau artisanal" />
                </div>
                <div class="product-info">
                    <h3>Couteau Artisanale</h3>
                    <p>Couteau forgé, lame en acier trempé, manche en chêne, aiguisé à la pierre diamant.</p>
                    <span class="price">200.-</span>
                    <a href="#" class="btn product-details-btn">Voir détails</a>
                </div>
            </div>

            <div class="product-card" data-product="support">
                <div class="product-image">
                    <img src="./img/bague.jpg" alt="Support pour mangeoire" />
                </div>
                <div class="product-info">
                    <h3>Support pour Mangeoire</h3>
                    <p>Support décoratif et résistant pour accueillir vos mangeoires à oiseaux.</p>
                    <span class="price">95€</span>
                    <a href="#" class="btn product-details-btn">Voir détails</a>
                </div>
            </div>

            <div class="product-card" data-product="porte">
                <div class="product-image">
                    <img src="./img/tirebch1.jpg" alt="Heurtoir de porte" />
                </div>
                <div class="product-info">
                    <h3>Heurtoir de Porte</h3>
                    <p>Élégant heurtoir de porte à motif d'oiseau pour donner du caractère à votre entrée.</p>
                    <span class="price">120€</span>
                    <a href="#" class="btn product-details-btn">Voir détails</a>
                </div>
            </div>

            <div class="product-card" data-product="grille">
                <div class="product-image">
                    <img src="./img/tirbch2.jpg" alt="Grille décorative" />
                </div>
                <div class="product-info">
                    <h3>Grille Décorative</h3>
                    <p>Grille décorative ornée de motifs floraux et d'oiseaux pour embellir votre intérieur.</p>
                    <span class="price">250€</span>
                    <a href="#" class="btn product-details-btn">Voir détails</a>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="section-header">
            <h2>Contactez-Nous</h2>
        </div>
        <div class="contact-container">
            <div class="contact-info">
                <h3>Informations</h3>
                <p>Pour toute commande, question ou projet personnalisé, n'hésitez pas à nous contacter.</p>

                <div class="info-item">
                    <i>📍</i>
                    <span>12 Rue des Forgerons, 75001 Paris, France</span>
                </div>

                <div class="info-item">
                    <i>📞</i>
                    <span>+33 1 23 45 67 89</span>
                </div>

                <div class="info-item">
                    <i>✉️</i>
                    <span>contact@forgedesoiseleurs.fr</span>
                </div>

                <div class="info-item">
                    <i>🕐</i>
                    <span>Lun-Ven: 9h-18h | Sam: 10h-16h</span>
                </div>
            </div>

            <form class="contact-form" id="order-form">
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
                    <label for="product">Produit</label>
                    <select id="product" name="product">
                        <option value="">Sélectionnez un produit</option>
                        <option value="couteau">Couteau Artisanale</option>
                        <option value="support">Support pour Mangeoire</option>
                        <option value="heurtoir">Heurtoir de Porte</option>
                        <option value="grille">Grille Décorative</option>
                        <option value="sculpture">Sculpture d'Oiseau</option>
                        <option value="chandelier">Chandelier Forgé</option>
                        <option value="journee-decouverte">Journée Découverte</option>
                        <option value="custom">Projet personnalisé</option>
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

    <?php include 'footer.php'; ?>

    <!-- Product Detail Modal -->
    <div id="product-modal" class="modal" aria-modal="true" role="dialog" aria-labelledby="modal-title">
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

    <script src="scripts.js"></script>
</body>
</html>