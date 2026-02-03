const CACHE_NAME = 'forge-images-cache-v1';

// Installation du Service Worker
self.addEventListener('install', (event) => {
    self.skipWaiting(); // Force l'activation immédiate
});

// Activation et nettoyage des anciens caches si besoin
self.addEventListener('activate', (event) => {
    event.waitUntil(
        caches.keys().then((cacheNames) => {
            return Promise.all(
                cacheNames.map((cacheName) => {
                    if (cacheName !== CACHE_NAME) {
                        return caches.delete(cacheName);
                    }
                })
            );
        })
    );
});

// Interception des requêtes réseau
self.addEventListener('fetch', (event) => {
    const url = new URL(event.request.url);

    // On ne cible QUE les images venant de Google Drive ou Google User Content
    // Cela évite de cacher votre code HTML/JS/CSS pendant le développement
    if (url.hostname.includes('drive.google.com') || 
        url.hostname.includes('googleusercontent.com')) {

        event.respondWith(
            caches.match(event.request).then((cachedResponse) => {
                // 1. Si l'image est dans le cache, on la rend tout de suite (INSTANTANÉ)
                if (cachedResponse) {
                    return cachedResponse;
                }

                // 2. Sinon, on la télécharge
                return fetch(event.request).then((networkResponse) => {
                    // Vérification que la réponse est valide
                    if (!networkResponse || networkResponse.status !== 200 || networkResponse.type !== 'basic' && networkResponse.type !== 'cors' && networkResponse.type !== 'opaque') {
                        return networkResponse;
                    }

                    // 3. On clone la réponse pour la mettre dans le cache
                    const responseToCache = networkResponse.clone();

                    caches.open(CACHE_NAME).then((cache) => {
                        cache.put(event.request, responseToCache);
                    });

                    return networkResponse;
                });
            })
        );
    }
    // Pour tout le reste (votre site), on laisse passer normalement (pas de cache agressif pour le dév)
});