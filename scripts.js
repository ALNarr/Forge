// Exécuter quand le DOM est prêt
document.addEventListener('DOMContentLoaded', () => {
    /* ===== Header mobile ===== */
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');
    if (hamburger && navLinks) {
        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
    }

    /* ===== Smooth scroll ancre ===== */
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', (e) => {
            const targetId = anchor.getAttribute('href');
            if (!targetId || targetId === '#') return;
            const target = document.querySelector(targetId);
            if (!target) return;

            e.preventDefault();
            window.scrollTo({
                top: target.offsetTop - 70,
                behavior: 'smooth'
            });
            if (navLinks) navLinks.classList.remove('active');
        });
    });

    /* ===== Carrousel ===== */
    const carousel = document.querySelector('.carousel');
    const slides = document.querySelectorAll('.carousel-slide');
    const prevBtn = document.querySelector('.carousel-prev');
    const nextBtn = document.querySelector('.carousel-next');
    const indicators = document.querySelectorAll('.carousel-indicator');
    const carouselContainer = document.querySelector('.carousel-container');

    let currentIndex = 0;
    let autoPlayInterval = null;

    function updateCarousel() {
        if (!carousel || !slides.length) return;
        carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
        indicators.forEach((ind, i) => {
            ind.classList.toggle('active', i === currentIndex);
            ind.setAttribute('aria-selected', i === currentIndex ? 'true' : 'false');
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

    if (slides.length && prevBtn && nextBtn) {
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

        if (carouselContainer) {
            carouselContainer.addEventListener('mouseenter', stopAutoplay);
            carouselContainer.addEventListener('mouseleave', startAutoplay);
        }

        // Contrôles clavier
        window.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowRight') nextBtn.click();
            if (e.key === 'ArrowLeft') prevBtn.click();
        });

        updateCarousel();
        startAutoplay();
    }

    /* ===== Modal Produits ===== */
    const modal = document.getElementById('product-modal');
    const modalImage = document.getElementById('modal-image');
    const modalTitle = document.getElementById('modal-title');
    const modalPrice = document.getElementById('modal-price');
    const modalDescription = document.getElementById('modal-description');
    const modalOrderBtn = document.getElementById('modal-order-btn');
    const closeModal = document.querySelector('.close-modal');

    const productDetails = {
        'Couteau': {
            title: 'Couteau Artisanale',
            price: '200.-',
            description:
                'Notre couteau artisanal est forgé à la main selon les techniques traditionnelles. La lame en acier trempé offre une coupe exceptionnelle et une durabilité incomparable. Le manche en chêne massif est façonné pour un confort optimal. Chaque pièce est unique et aiguisée à la pierre diamant pour une perfection de coupe.',
            image: './img/couteau.jpg'
        },
        'support': {
            title: 'Support pour Mangeoire',
            price: '95€',
            description:
                "Ce support élégant combine fonctionnalité et esthétique. Forgé dans un acier résistant aux intempéries, il accueillera vos mangeoires tout en décorant votre jardin. Sa conception permet d'accueillir différents types de mangeoires et sa finition protégée garantit une longue durée de vie en extérieur.",
            image: './img/bague.jpg'
        },
        'porte': {
            title: 'Heurtoir de Porte',
            price: '120€',
            description:
                "Un heurtoir de porte qui allie tradition et élégance. Le motif d'oiseau finement ciselé apporte une touche unique à votre entrée. Forgé dans un métal robuste avec une finition patinée, ce heurtoir est à la fois décoratif et fonctionnel. Installation simple sur tout type de porte.",
            image: './img/tirebch1.jpg'
        },
        'grille': {
            title: 'Grille Décorative',
            price: '250€',
            description:
                "Cette grille décorative est une véritable œuvre d'art pour votre intérieur ou extérieur. Les motifs floraux et d'oiseaux sont minutieusement forgés et assemblés pour créer une pièce unique. Parfaite comme séparation d'espace, décoration murale ou protection de fenêtre, elle allie sécurité et beauté.",
            image: './img/tirbch2.jpg'
        }
    };

    let currentProductKey = null;

    document.querySelectorAll('.product-details-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const card = btn.closest('.product-card');
            if (!card || !modal) return;

            const key = card.getAttribute('data-product');
            const product = productDetails[key];
            if (!product) return;

            currentProductKey = key;

            modalImage.src = product.image;
            modalImage.alt = product.title;
            modalTitle.textContent = product.title;
            modalPrice.textContent = product.price;
            modalDescription.textContent = product.description;

            modal.style.display = 'block';
        });
    });

    if (closeModal && modal) {
        closeModal.addEventListener('click', () => (modal.style.display = 'none'));
        window.addEventListener('click', (e) => {
            if (e.target === modal) modal.style.display = 'none';
        });
        window.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') modal.style.display = 'none';
        });
    }

    if (modalOrderBtn && modal) {
        modalOrderBtn.addEventListener('click', () => {
            const productSelect = document.getElementById('product');
            const map = { 'Couteau': 'couteau', 'support': 'support', 'porte': 'heurtoir', 'grille': 'grille' };
            if (productSelect && currentProductKey) {
                productSelect.value = map[currentProductKey] || '';
            }
            modal.style.display = 'none';
        });
    }

    /* ===== Formulaire de contact ===== */
    const orderForm = document.getElementById('order-form');
    if (orderForm) {
        orderForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const formData = new FormData(orderForm);
            const data = Object.fromEntries(formData);
            alert(`Merci pour votre demande, ${data.name}! Nous vous contacterons bientôt à l'adresse ${data.email}.`);
            orderForm.reset();
        });
    }

   /* ===== Effet scroll header : auto-hide + couleur ===== */
const header = document.querySelector('header');
if (header) {
  // Décalage du contenu = hauteur réelle du header (au cas où il change en responsive)
  const setBodyOffset = () => {
    document.body.style.paddingTop = `${header.offsetHeight}px`;
  };
  setBodyOffset();
  window.addEventListener('resize', setBodyOffset);

  let lastY = window.pageYOffset || 0;
  const delta = 8; // évite les micro-jitters

  const onScroll = () => {
    const y = window.pageYOffset || 0;

    // Couleur de fond quand on a un peu scrollé
    header.style.backgroundColor =
      y > 100 ? 'rgba(46, 46, 46, 0.95)' : 'var(--primary-color)';

    // Auto-hide : si on descend assez et qu'on a dépassé la hauteur du header -> cacher
    if (Math.abs(y - lastY) > delta) {
      if (y > lastY && y > header.offsetHeight) {
        header.classList.add('header-hidden');
      } else {
        header.classList.remove('header-hidden');
      }
      lastY = y;
    }
  };

  // Garde le header visible quand on ouvre le menu mobile
  const hamburger = document.querySelector('.hamburger');
  const navLinks = document.querySelector('.nav-links');
  if (hamburger && navLinks) {
    hamburger.addEventListener('click', () => {
      navLinks.classList.toggle('active');
      header.classList.remove('header-hidden');
    });
  }

  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();
}
});