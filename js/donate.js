const a = 1664525;
const c = 1013904223;
const m = 4294967296;

function lcg(seed) {
  return (a * seed + c) % m;
}

function lcgIndex(seed, n) {
  return lcg(seed) % n;
}

export function startFullPageRotation(images, intervalSec = 10) {
  if (!Array.isArray(images) || images.length === 0) return;

  let seed = Math.floor(Date.now() / 1000);
  let current = 0;

  // Créer les deux calques pour la rotation
  const before = document.createElement("div");
  const after = document.createElement("div");

  [before, after].forEach(layer => {
    layer.style.cssText = `
      position: fixed;
      top: 0; left: 0; right: 0; bottom: 0;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      transition: opacity 1.5s ease-in-out;
      z-index: -1;
    `;
    document.body.appendChild(layer);
  });

  before.style.opacity = "1";
  after.style.opacity = "0";
  before.style.backgroundImage = `url(${images[current]})`;

  setInterval(() => {
    seed = lcg(seed);
    const idx = lcgIndex(seed, images.length);
    const nextImage = images[idx];

    const img = new Image();
    img.src = nextImage;

    img.onload = () => {
      after.style.backgroundImage = `url(${nextImage})`;
      after.style.opacity = "1";
      before.style.opacity = "0";

      // swap les rôles
      const temp = before;
      before = after;
      after = temp;
    };
  }, intervalSec * 1000);
}
