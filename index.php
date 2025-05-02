<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/logo.png" type="image/png">
    <title>Forge Des Oiseleurs - Artisanat Forgé</title>
    <style>
        :root {
            --primary-color: #2e2e2e;
            --secondary-color: #cf7500;
            --accent-color: #e09f3e;
            --light-color: #f9f7f3;
            --dark-color: #1a1a1a;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: var(--light-color);
            color: var(--primary-color);
            line-height: 1.6;
        }
        
        header {
            background-color: var(--primary-color);
            color: var(--light-color);
            padding: 1.2rem;
            position: fixed;
            width: 100%;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }
        
        .logo {
            display: flex;
            align-items: center;
            font-size: 1.8rem;
            font-weight: 700;
        }
        
        .logo img {
            height: 80px;		  
            margin-right: 15px;
        }
        
        .nav-links {
            display: flex;
            list-style: none;
        }
        
        .nav-links li {
            margin-left: 2rem;
        }
        
        .nav-links a {
            color: var(--light-color);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .nav-links a:hover {
            color: var(--accent-color);
        }
        
        .hamburger {
            display: none;
            cursor: pointer;
        }
        
        .hero {
            height: 100vh;
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('./img/forgeillu.jpg') center/cover no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: var(--light-color);
            padding-top: 70px;
        }
        
        .hero-content {
            max-width: 800px;
            padding: 2rem;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }
        
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }
        
        .btn {
            display: inline-block;
            background-color: var(--secondary-color);
            color: var(--light-color);
            padding: 0.8rem 1.5rem;
            text-decoration: none;
            border-radius: 4px;
            font-weight: 600;
            transition: background-color 0.3s, transform 0.3s;
        }
        
        .btn:hover {
            background-color: var(--accent-color);
            transform: translateY(-3px);
        }
        
        section {
            padding: 5rem 1rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .section-header {
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .section-header h2 {
            font-size: 2.5rem;
            color: var(--primary-color);
            position: relative;
            display: inline-block;
            padding-bottom: 10px;
        }
        
        .section-header h2::after {
            content: '';
            position: absolute;
            width: 50%;
            height: 3px;
            background-color: var(--secondary-color);
            bottom: 0;
            left: 25%;
        }
        
        .about-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 2rem;
        }
        
        .about-text {
            flex: 1;
        }
        
        .about-image {
            flex: 1;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        
        .about-image img {
            width: 100%;
            height: auto;
            display: block;
        }
        
        .products {
            background-color: #f0ece2;
        }
        
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }
        
        .product-card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        
        .product-image {
            height: 200px;
            overflow: hidden;
        }
        
        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .product-card:hover .product-image img {
            transform: scale(1.1);
        }
        
        .product-info {
            padding: 1.5rem;
        }
        
        .product-info h3 {
            margin-bottom: 0.5rem;
            color: var(--primary-color);
        }
        
        .product-info p {
            color: #666;
            margin-bottom: 1rem;
        }
        
        .product-info .price {
            font-weight: 700;
            color: var(--secondary-color);
            font-size: 1.2rem;
            display: block;
            margin-bottom: 1rem;
        }
        
        .product-info .btn {
            width: 100%;
            text-align: center;
        }
        
        .contact {
            background-color: white;
        }
        
        .contact-container {
            display: flex;
            gap: 2rem;
        }
        
        .contact-info {
            flex: 1;
        }
        
        .contact-info h3 {
            margin-bottom: 1rem;
            color: var(--primary-color);
        }
        
        .contact-info p {
            margin-bottom: 1.5rem;
        }
        
        .contact-info .info-item {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }
        
        .info-item i {
            margin-right: 1rem;
            color: var(--secondary-color);
            font-size: 1.2rem;
        }
        
        .contact-form {
            flex: 1;
            background-color: #f9f9f9;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }
        
        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
        }
        
        .form-group textarea {
            height: 150px;
            resize: vertical;
        }
        
        footer {
            background-color: var(--primary-color);
            color: var(--light-color);
            padding: 3rem 1rem;
            text-align: center;
        }
        
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .social-links {
            display: flex;
            gap: 1rem;
            margin: 1.5rem 0;
        }
        
        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: var(--dark-color);
            color: var(--light-color);
            border-radius: 50%;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        
        .social-links a:hover {
            background-color: var(--secondary-color);
        }
        
        .copyright {
            margin-top: 1.5rem;
        }

        /* Carousel Styles */
        .gallery {
            background-color: #e8e4da;
            padding: 5rem 1rem;
        }

        .carousel-container {
            max-width: 900px;
            margin: 0 auto;
            position: relative;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
            border-radius: 10px;
        }

        .carousel {
            display: flex;
            transition: transform 0.5s ease-in-out;
            height: 500px;
        }

        .carousel-slide {
            min-width: 100%;
            position: relative;
        }

        .carousel-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .carousel-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            padding: 15px;
            text-align: center;
        }

        .carousel-caption h3 {
            margin-bottom: 5px;
            font-size: 1.5rem;
        }

        .carousel-prev, .carousel-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 50px;
            height: 50px;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            font-size: 1.5rem;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: background-color 0.3s;
        }

        .carousel-prev:hover, .carousel-next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .carousel-prev {
            left: 20px;
        }

        .carousel-next {
            right: 20px;
        }

        .carousel-indicators {
            position: absolute;
            bottom: 70px;
            left: 0;
            right: 0;
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .carousel-indicator {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .carousel-indicator.active {
            background-color: white;
        }

        .gallery-description {
            max-width: 800px;
            margin: 3rem auto 0;
            text-align: center;
        }
        
        @media screen and (max-width: 768px) {
            .hamburger {
                display: block;
            }
            
            .nav-links {
                position: fixed;
                top: 70px;
                left: 0;
                width: 100%;
                background-color: var(--primary-color);
                flex-direction: column;
                align-items: center;
                padding: 2rem 0;
                clip-path: circle(0px at 100% 0);
                transition: clip-path 0.4s ease-in-out;
            }
            
            .nav-links.active {
                clip-path: circle(1000px at 100% 0);
            }
            
            .nav-links li {
                margin: 1rem 0;
            }
            
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .about-content {
                flex-direction: column;
            }
            
            .contact-container {
                flex-direction: column;
            }

            .carousel {
                height: 350px;
            }
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.7);
            overflow: auto;
        }

        .modal-content {
            background-color: white;
            margin: 10% auto;
            padding: 2rem;
            width: 80%;
            max-width: 600px;
            border-radius: 10px;
            position: relative;
        }

        .close-modal {
            position: absolute;
            right: 20px;
            top: 10px;
            font-size: 2rem;
            font-weight: bold;
            color: #aaa;
            cursor: pointer;
        }

        .close-modal:hover {
            color: var(--primary-color);
        }

        .modal-product-info {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .modal-product-image {
            width: 100%;
            max-height: 300px;
            object-fit: contain;
            margin-bottom: 1.5rem;
        }

        .modal h3 {
            margin-bottom: 1rem;
            color: var(--primary-color);
            text-align: center;
        }

        .modal .price {
            font-weight: 700;
            color: var(--secondary-color);
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .modal p {
            margin-bottom: 1.5rem;
            text-align: justify;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="./img/logo.png" alt="Logo Forge Des Oiseleurs">
                <span>Forge Des Oiseleurs</span>
            </div>
            <ul class="nav-links">
                <li><a href="#accueil">Accueil</a></li>
                <li><a href="#about">À Propos</a></li>
                <li><a href="#gallery">Nos Créations</a></li>
                <li><a href="#products">Boutique</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="hamburger">
                <span>≡</span>
            </div>
        </nav>
    </header>

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
                <img src="./img/forge.jpg" alt="Atelier de la Forge Des Oiseleurs">
            </div>
        </div>
    </section>

    <!-- Nouvelle section du carrousel de créations -->
    <section id="gallery" class="gallery">
        <div class="section-header">
            <h2>Nos Créations</h2>
        </div>
        
        <div class="carousel-container">
            <div class="carousel">
                <div class="carousel-slide">
                    <img src="./img/couteau.jpg" alt="Couteau forgé à la main">
                    <div class="carousel-caption">
                        <h3>Couteau Traditionnel</h3>
                        <p>Lame en acier damascus et manche en bois d'ébène</p>
                    </div>
                </div>
                <div class="carousel-slide">
                    <img src="./img/bague.jpg" alt="Bijou forgé à la main">
                    <div class="carousel-caption">
                        <h3>Bijouterie Forgée</h3>
                        <p>Fusion parfaite entre métaux nobles et techniques ancestrales</p>
                    </div>
                </div>
                <div class="carousel-slide">
                    <img src="./img/tirebch1.jpg" alt="Tire-bouchon artisanal">
                    <div class="carousel-caption">
                        <h3>Tire-bouchon Artisanal</h3>
                        <p>Alliance de fonctionnalité et d'élégance</p>
                    </div>
                </div>
                <div class="carousel-slide">
                    <img src="./img/tirbch2.jpg" alt="Tire-bouchon décoratif">
                    <div class="carousel-caption">
                        <h3>Accessoires de Dégustation</h3>
                        <p>Sublimez vos moments de convivialité avec nos créations</p>
                    </div>
                </div>
            </div>
            
            <button class="carousel-prev">&#10094;</button>
            <button class="carousel-next">&#10095;</button>
            
            <div class="carousel-indicators">
                <div class="carousel-indicator active"></div>
                <div class="carousel-indicator"></div>
                <div class="carousel-indicator"></div>
                <div class="carousel-indicator"></div>
            </div>
        </div>
        
        <div class="gallery-description">
            <p>Découvrez l'étendue de notre savoir-faire à travers cette sélection de créations uniques. Chaque pièce témoigne de notre passion pour le travail du métal et de notre engagement envers l'excellence artisanale. Notre forge réalise également des pièces sur mesure selon vos besoins et envies.</p>
        </div>
    </section>

    <section id="products" class="products">
        <div class="section-header">
            <h2>Boutique</h2>
        </div>
        <div class="products-grid">
            <div class="product-card" data-product="Couteau">
                <div class="product-image">
                    <img src="./img/couteau.jpg" alt="Couteau artisanale">
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
                    <img src="./img/bague.jpg" alt="Support pour mangeoire">
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
                    <img src="./img/tirebch1.jpg" alt="Heurtoir de porte">
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
                    <img src="./img/tirbch2.jpg" alt="Grille décorative">
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
                    <i>🕒</i>
                    <span>Lun-Ven: 9h-18h | Sam: 10h-16h</span>
                </div>
            </div>
            
            <form class="contact-form" id="order-form">
                <div class="form-group">
                    <label for="name">Nom complet</label>
                    <input type="text" id="name" name="name" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div class="form-group">
                    <label for="phone">Téléphone</label>
                    <input type="tel" id="phone" name="phone">
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

    <footer>
        <div class="footer-content">
            <div class="logo">
                <img src="./img/logo.png" alt="Logo Forge Des Oiseleurs">
                <span>Forge Des Oiseleurs</span>
            </div>
            
            <div class="social-links">
                <a href="https://www.facebook.com/La.forge.des.oiseleurs/"><span>FB</span></a>
                <a href="https://www.instagram.com/la.forge.des.oiseleurs/"><span>IG</span></a>
                <a href="#"><span>YT</span></a>
            </div>
            
            <p class="copyright">© 2025 Forge Des Oiseleurs. Tous droits réservés.</p>
        </div>
    </footer>

    <!-- Product Detail Modals -->
    <div id="product-modal" class="modal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <div class="modal-product-info">
                <img src="" alt="" class="modal-product-image" id="modal-image">
                <h3 id="modal-title"></h3>
                <span class="price" id="modal-price"></span>
                <p id="modal-description"></p>
                <a href="#contact" class="btn" id="modal-order-btn">Commander ce produit</a>
            </div>
        </div>
    </div>

    <script>
        // Menu toggle for mobile
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');
        
        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 70,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    navLinks.classList.remove('active');
                }
            });
        });
        
        // Carousel functionality
        const carousel = document.querySelector('.carousel');
        const slides = document.querySelectorAll('.carousel-slide');
        const prevBtn = document.querySelector('.carousel-prev');
        const nextBtn = document.querySelector('.carousel-next');
        const indicators = document.querySelectorAll('.carousel-indicator');
        
        let currentIndex = 0;
        const slideWidth = 100; // 100% width
        
        // Set initial position
        function updateCarousel() {
            carousel.style.transform = `translateX(-${currentIndex * slideWidth}%)`;
            
            // Update indicators
            indicators.forEach((indicator, index) => {
                if (index === currentIndex) {
                    indicator.classList.add('active');
                } else {
                    indicator.classList.remove('active');
                }
            });
        }
        
        // Next slide
        nextBtn.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % slides.length;
            updateCarousel();
        });
        
        // Previous slide
        prevBtn.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + slides.length) % slides.length;
            updateCarousel();
        });
        
        // Indicator clicks
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                currentIndex = index;
                updateCarousel();
            });
        });
        
    </script>
</body>
</html>