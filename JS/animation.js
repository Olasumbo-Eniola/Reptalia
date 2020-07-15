const createGeometry = require('three-bmfont-text');
const loadFont = require('load-bmfont');

loadFont('fonts/Lato.fnt', (err, font) => {
  // Create a geometry of packed bitmap glyphs
  const geometry = createGeometry({
    font,
    text: 'OCEAN'
  });
  
  // Load texture containing font glyphs
  const loader = new THREE.TextureLoader();
  loader.load('fonts/Lato.png', (texture) => {
    // Start and animate renderer
    init(geometry, texture);
    animate();
  });
});