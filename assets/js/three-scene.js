(function () {
  const canvas = document.getElementById('threeHero');
  if (!canvas || typeof THREE === 'undefined') return;

  const scene = new THREE.Scene();
  const camera = new THREE.PerspectiveCamera(60, window.innerWidth / window.innerHeight, 0.1, 1000);
  const renderer = new THREE.WebGLRenderer({ canvas, alpha: true, antialias: true });
  const group = new THREE.Group();
  const particles = [];

  renderer.setPixelRatio(Math.min(window.devicePixelRatio || 1, 2));
  renderer.setSize(window.innerWidth, window.innerHeight);
  camera.position.z = 12;

  scene.add(group);

  const gold = new THREE.MeshBasicMaterial({ color: 0xd9aa4f, wireframe: true, transparent: true, opacity: 0.48 });
  const blue = new THREE.MeshBasicMaterial({ color: 0x9cc7ff, wireframe: true, transparent: true, opacity: 0.24 });

  const torus = new THREE.Mesh(new THREE.TorusKnotGeometry(2.1, 0.18, 130, 12), gold);
  torus.position.set(4.8, 1.6, -1.5);
  group.add(torus);

  const sphere = new THREE.Mesh(new THREE.IcosahedronGeometry(1.8, 1), blue);
  sphere.position.set(-5.1, -1.2, -2.2);
  group.add(sphere);

  const cone = new THREE.Mesh(new THREE.ConeGeometry(1.8, 3.4, 5, 1, true), gold.clone());
  cone.material.opacity = 0.28;
  cone.position.set(0, -2.5, -3);
  group.add(cone);

  for (let i = 0; i < 90; i += 1) {
    const geometry = new THREE.SphereGeometry(Math.random() * 0.035 + 0.018, 8, 8);
    const material = new THREE.MeshBasicMaterial({ color: i % 3 === 0 ? 0xd9aa4f : 0xffffff, transparent: true, opacity: Math.random() * 0.55 + 0.2 });
    const particle = new THREE.Mesh(geometry, material);
    particle.position.set((Math.random() - 0.5) * 18, (Math.random() - 0.5) * 10, (Math.random() - 0.5) * 10);
    particle.userData.speed = Math.random() * 0.006 + 0.002;
    particles.push(particle);
    group.add(particle);
  }

  function resize() {
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(window.innerWidth, window.innerHeight);
  }

  window.addEventListener('resize', resize);
  window.addEventListener('scroll', () => {
    group.rotation.y = window.scrollY * 0.0007;
    group.position.y = window.scrollY * -0.001;
  }, { passive: true });

  function animate() {
    requestAnimationFrame(animate);
    torus.rotation.x += 0.004;
    torus.rotation.y += 0.007;
    sphere.rotation.x -= 0.003;
    sphere.rotation.y += 0.005;
    cone.rotation.y -= 0.004;
    particles.forEach((particle) => {
      particle.position.y += particle.userData.speed;
      if (particle.position.y > 5.4) particle.position.y = -5.4;
    });
    renderer.render(scene, camera);
  }

  animate();
}());
