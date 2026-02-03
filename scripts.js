// URL de connexion à votre Google Sheet
// J'utilise le format "gviz" qui fonctionne bien avec les liens de partage standards
const SHEET_ID = '1IgriQX5L5hcTZEpVnuL2ef_ncY5Yhmck0LOyVrgKsYQ';
const SHEET_URL = `https://docs.google.com/spreadsheets/d/${SHEET_ID}/gviz/tq?tqx=out:csv`;

// Stockage des produits pour le modal
let globalProducts = {};

// === NOUVEAU : Enregistrement du Service Worker pour le cache ===
if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        navigator.serviceWorker.register('./sw.js')
            .then(registration => {
                console.log('Service Worker enregistré avec succès :', registration.scope);
            })
            .catch(error => {
                console.log('Échec de l\'enregistrement du Service Worker :', error);
            });
    });
}

document.addEventListener('DOMContentLoaded', () => {
    initNavigation();
    initSmoothScroll();
    initHeaderScroll();
    
    // Lancer le chargement des données
    fetchDataAndRender();
});

/* =========================================
   1. CHARGEMENT ET TRAITEMENT DES DONNÉES
   ========================================= */

async function fetchDataAndRender() {
    try {
        const response = await fetch(SHEET_URL);
        
        if (!response.ok) {
            throw new Error('Erreur réseau');
        }

        const data = await response.text();
        const rows = parseCSV(data);
        
        // Filtrer les données selon la colonne "section"
        const carouselItems = rows.filter(item => item.section === 'carousel');
        const shopItems = rows.filter(item => item.section === 'boutique');

        // Afficher les éléments
        renderCarousel(carouselItems);
        renderShop(shopItems);
        
        // Sauvegarder pour l'ouverture du modal
        shopItems.forEach(item => {
            globalProducts[item.id] = item;
        });

        initModal();

    } catch (error) {
        console.error("Erreur chargement Google Sheets :", error);
        document.getElementById('products-grid').innerHTML = 
            '<p class="error">Impossible de charger les produits.<br>Vérifiez que le Google Sheet est bien partagé (Public).</p>';
    }
}

/* Transforme le texte CSV en objets JavaScript utilisables */
function parseCSV(csvText) {
    const lines = csvText.split('\n');
    // On nettoie les en-têtes (supprime les guillemets et espaces)
    const headers = lines[0].split(',').map(h => h.trim().replace(/"/g, '')); 
    const result = [];

    for (let i = 1; i < lines.length; i++) {
        if (!lines[i].trim()) continue;
        
        // Regex robuste pour gérer les virgules à l'intérieur des descriptions
        const regex = /(?:,|\n|^)("(?:(?:"")*[^"]*)*"|[^",\n]*|(?:\n|$))/g;
        let match;
        const rowData = [];
        
        while ((match = regex.exec(lines[i])) !== null) {
             let val = match[1].replace(/^"|"$/g, '').replace(/""/g, '"'); 
             if (match[0].startsWith(',')) val = val; 
             if(val !== undefined) rowData.push(val.trim());
        }
        
        // Création de l'objet (ex: {titre: "Couteau", prix: "144", ...})
        const row = {};
        headers.forEach((header, index) => {
             row[header] = rowData[index] || '';
        });
        
        // On ne garde que les lignes qui ont un ID (pour éviter les lignes vides)
        if(row.id) {
            result.push(row);
        }
    }
    return result;
}

/* =========================================
   2. GESTION DES IMAGES GOOGLE DRIVE (OPTIMISÉE)
   ========================================= */

// Ajout du paramètre 'size' pour contrôler la qualité (w500 = largeur 500px)
function processImageURL(url, size = 1000) {
    if (!url) return './img/placeholder.jpg'; 
    
    // Si c'est un lien Google Drive, on le convertit
    if (url.includes('drive.google.com')) {
        let id = '';
        // Extraction de l'ID selon le format du lien
        // Supporte : /file/d/ID/view, open?id=ID, etc.
        if (url.includes('/file/d/')) {
            const parts = url.split('/file/d/');
            if (parts[1]) id = parts[1].split('/')[0];
        } else if (url.includes('id=')) {
            id = url.split('id=')[1].split('&')[0];
        }

        if (id) {
            // OPTIMISATION : on utilise le paramètre sz=w{taille}
            return `https://drive.google.com/thumbnail?id=${id}&sz=w${size}`;
        }
    }
    return url;
}

/* =========================================
   3. AFFICHAGE (RENDU)
   ========================================= */

function renderCarousel(items) {
    const container = document.getElementById('dynamic-carousel');
    const indicators = document.getElementById('dynamic-indicators');
    
    if (!items.length) {
        container.innerHTML = '<p style="color:white; text-align:center; padding:2rem;">Aucune image à afficher</p>';
        return;
    }

    container.innerHTML = '';
    indicators.innerHTML = '';

    items.forEach((item, index) => {
        // Carrousel : on garde une bonne qualité (1000px)
        const imageUrl = processImageURL(item.image, 1000);

        // Slide
        const slide = document.createElement('div');
        slide.className = 'carousel-slide';
        // Ajout de referrerpolicy="no-referrer" pour aider au chargement des images Google
        slide.innerHTML = `
            <img src="${imageUrl}" alt="${item.titre}" referrerpolicy="no-referrer" onerror="this.src='./img/logo.png'" />
            <div class="carousel-caption">
                <h3>${item.titre}</h3>
                <p>${item.description}</p>
            </div>
        `;
        container.appendChild(slide);

        // Indicateur (point)
        const dot = document.createElement('div');
        dot.className = `carousel-indicator ${index === 0 ? 'active' : ''}`;
        indicators.appendChild(dot);
    });

    document.querySelector('.carousel-prev').style.display = 'flex';
    document.querySelector('.carousel-next').style.display = 'flex';

    initCarouselLogic();
}

function renderShop(items) {
    const grid = document.getElementById('products-grid');
    grid.innerHTML = ''; 

    if (items.length === 0) {
        grid.innerHTML = '<p>Bientôt disponible...</p>';
        return;
    }

    items.forEach(item => {
        // OPTIMISATION : Pour la grille, on demande une image de 500px seulement
        // C'est beaucoup plus léger à télécharger
        const thumbnail = processImageURL(item.image, 500);
        
        // Pour le modal (quand on clique), on prépare le lien haute qualité (1200px)
        const fullSize = processImageURL(item.image, 1200);
        
        // On sauvegarde l'URL haute qualité pour le modal
        item.processedImage = fullSize;

        const card = document.createElement('div');
        card.className = 'product-card';
        card.setAttribute('data-product', item.id);
        
        // On affiche la version "thumbnail" dans la grille
        card.innerHTML = `
            <div class="product-image">
                <img src="${thumbnail}" alt="${item.titre}" loading="lazy" referrerpolicy="no-referrer" onerror="this.onerror=null;this.src='./img/logo.png';" />
            </div>
            <div class="product-info">
              <h3>${item.titre}</h3>
              <p>${item.description.substring(0, 80)}${item.description.length > 80 ? '...' : ''}</p>
              <span class="price">${item.prix} CHF</span>
              <a href="#" class="btn product-details-btn">Voir détails</a>
            </div>
        `;
        grid.appendChild(card);
    });
}

/* =========================================
   4. INTERFACES (MENU, CAROUSEL, MODAL)
   ========================================= */

function initNavigation() {
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');
    const header = document.querySelector('header');

    if (hamburger && navLinks) {
        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            if(header) header.classList.remove('header-hidden');
        });
    }
}

function initSmoothScroll() {
    const navLinks = document.querySelector('.nav-links');
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', (e) => {
            const targetId = anchor.getAttribute('href');
            if (!targetId || targetId === '#') return;
            const target = document.querySelector(targetId);
            if (!target) return;

            e.preventDefault();
            if (navLinks) navLinks.classList.remove('active');

            window.scrollTo({
                top: target.offsetTop - 70,
                behavior: 'smooth'
            });
        });
    });
}

function initCarouselLogic() {
    const carousel = document.querySelector('.carousel');
    const slides = document.querySelectorAll('.carousel-slide');
    const indicators = document.querySelectorAll('.carousel-indicator');
    const prevBtn = document.querySelector('.carousel-prev');
    const nextBtn = document.querySelector('.carousel-next');
    const container = document.querySelector('.carousel-container');

    if (!carousel || !slides.length) return;

    let currentIndex = 0;
    let autoPlayInterval = null;

    function updateCarousel() {
        carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
        indicators.forEach((ind, i) => {
            ind.classList.toggle('active', i === currentIndex);
        });
    }

    function startAutoplay() {
        stopAutoplay();
        autoPlayInterval = setInterval(() => {
            currentIndex = (currentIndex + 1) % slides.length;
            updateCarousel();
        }, 5000);
    }

    function stopAutoplay() {
        if (autoPlayInterval) clearInterval(autoPlayInterval);
        autoPlayInterval = null;
    }

    nextBtn.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % slides.length;
        updateCarousel();
    });

    prevBtn.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        updateCarousel();
    });

    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            currentIndex = index;
            updateCarousel();
        });
    });

    if (container) {
        container.addEventListener('mouseenter', stopAutoplay);
        container.addEventListener('mouseleave', startAutoplay);
    }

    updateCarousel();
    startAutoplay();
}

function initModal() {
    const modal = document.getElementById('product-modal');
    const modalImage = document.getElementById('modal-image');
    const modalTitle = document.getElementById('modal-title');
    const modalPrice = document.getElementById('modal-price');
    const modalDescription = document.getElementById('modal-description');
    const modalOrderBtn = document.getElementById('modal-order-btn');
    const closeModal = document.querySelector('.close-modal');
    
    // CORRECTION : Appliquer la politique "no-referrer" à l'image du modal pour éviter le blocage
    if (modalImage) {
        modalImage.setAttribute('referrerpolicy', 'no-referrer');
    }
    
    let currentProductKey = null;

    // Ouverture du modal au clic sur un bouton "Voir détails"
    document.getElementById('products-grid').addEventListener('click', (e) => {
        if (e.target.classList.contains('product-details-btn')) {
            e.preventDefault();
            const card = e.target.closest('.product-card');
            const key = card.getAttribute('data-product');
            const product = globalProducts[key];

            if (product) {
                currentProductKey = key; 
                // Ici on utilise 'processedImage' qui contient maintenant la version Haute Qualité (1200px)
                modalImage.src = product.processedImage || product.image;
                modalImage.alt = product.titre;
                // Si l'image du modal échoue, fallback aussi (avec reset pour éviter boucle)
                modalImage.onerror = function() { 
                    this.onerror = null; 
                    this.src='./img/logo.png'; 
                };
                
                modalTitle.textContent = product.titre;
                modalPrice.textContent = product.prix + " CHF";
                modalDescription.textContent = product.description;
                modal.style.display = 'block';
            }
        }
    });

    // Fermeture du modal
    if (closeModal && modal) {
        const close = () => modal.style.display = 'none';
        closeModal.addEventListener('click', close);
        window.addEventListener('click', (e) => { if (e.target === modal) close(); });
        window.addEventListener('keydown', (e) => { if (e.key === 'Escape') close(); });
    }

    // Bouton "Commander" dans le modal -> remplit le formulaire
    if (modalOrderBtn && modal) {
        modalOrderBtn.addEventListener('click', () => {
            const productSelect = document.getElementById('product');
            if (productSelect && currentProductKey) {
                // Vérifie si l'option existe, sinon l'ajoute
                let option = Array.from(productSelect.options).find(opt => opt.value === currentProductKey);
                
                if(!option) {
                    option = document.createElement('option');
                    option.value = currentProductKey;
                    option.text = globalProducts[currentProductKey].titre;
                    productSelect.add(option);
                }
                productSelect.value = currentProductKey;
            }
            modal.style.display = 'none';
        });
    }
}

function initHeaderScroll() {
    const header = document.querySelector('header');
    if (header) {
      const setBodyOffset = () => {
        document.body.style.paddingTop = `${header.offsetHeight}px`;
      };
      setBodyOffset();
      window.addEventListener('resize', setBodyOffset);

      let lastY = window.pageYOffset || 0;
      const delta = 8; 

      const onScroll = () => {
        const y = window.pageYOffset || 0;
        header.style.backgroundColor = y > 100 ? 'rgba(46, 46, 46, 0.95)' : 'var(--primary-color)';

        if (Math.abs(y - lastY) > delta) {
          if (y > lastY && y > header.offsetHeight) {
            header.classList.add('header-hidden');
          } else {
            header.classList.remove('header-hidden');
          }
          lastY = y;
        }
      };
      window.addEventListener('scroll', onScroll, { passive: true });
      onScroll();
    }
}