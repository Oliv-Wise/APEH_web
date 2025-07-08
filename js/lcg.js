const a = 1664525;
const c = 1013904223;
const m = 4294967296;

function lcg(seed) {
  return (a * seed + c) % m;
}

function lcgIndex(seed, n) {
  return lcg(seed) % n;
}

export function startRotation(images, intervalSec = 10, callback) {
  if (!Array.isArray(images) || images.length === 0) return;

  try {
    let seed = Math.floor(Date.now() / 1000);
    let current = 0;

    const header = document.querySelector("header");
    const target = header.querySelector(".header-background") || header;

    let before = document.createElement("div");
    let after = document.createElement("div");

    before.style.cssText = after.style.cssText =
      "position:absolute; inset:0; background-size:cover; background-position:center; transition:opacity 1.5s ease-in-out; z-index:0;";

    before.style.opacity = 1;
    after.style.opacity = 0;

    target.appendChild(before);
    target.appendChild(after);

    before.style.backgroundImage = `url(${images[current]})`;

    setInterval(() => {
      seed = lcg(seed);
      const idx = lcgIndex(seed, images.length);
      const nextImage = images[idx];

      after.style.backgroundImage = `url(${nextImage})`;
      after.style.opacity = 1;
      before.style.opacity = 0;

      const temp = before;
      before = after;
      after = temp;
    }, intervalSec * 1000);
  } catch (e) {
    console.error("Erreur dans le module lcg.js :", e);
  }
  const a = 5;
  const b = 6;
  console.log(a+b);
}
