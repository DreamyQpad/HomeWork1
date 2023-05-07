let baseLocation = [        // location Csemő
    47.115880,
    19.696240
];

let map = L.map('map');
map.setView(baseLocation, 10);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

// Create Marker
L.marker(baseLocation, {alt: 'JosephDev'}).addTo(map).bindPopup("Address of JosephDev's organization");
