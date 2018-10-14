var CACHE_NAME = 'my-site-cache-v1';
var urlsToCache = [
  '/jumbotron.css',
  '/layout-styles.css',
  '/tables/css/bootstrap-theme.css',
  '/tables/css/bootstrap-theme.min.css',
  '/tables/css/bootstrap.css',
  '/tables/css/bootstrap.min.css',
  '/tables/css/dataTables.bootstrap.css',
  '/tables/css/dataTables.bootstrap.min.css',
  '/tables/css/dataTables.bootstrap4.css',
  '/tables/css/dataTables.bootstrap4.min.css',
  '/tables/css/dataTables.foundation.css',
  '/tables/css/dataTables.foundation.min.css'
];

self.addEventListener('install', function(event) {
  // Perform install steps
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(function(cache) {
        console.log('Opened cache');
        return cache.addAll(urlsToCache);
      })
  );
});

self.addEventListener('fetch', function(event) {});

self.addEventListener('activate', function(event) {

  var cacheWhitelist = ['my-site-cache-v1'];

  event.waitUntil(
    caches.keys().then(function(cacheNames) {
      return Promise.all(
        cacheNames.map(function(cacheName) {
          if (cacheWhitelist.indexOf(cacheName) === -1) {
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
});
