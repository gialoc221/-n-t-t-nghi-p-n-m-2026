// Khởi tạo Three.js cho Banner Hero
document.addEventListener('DOMContentLoaded', () => {
  initThreeHero();
});

function initThreeHero() {
  const canvas = document.getElementById('three-hero-canvas');
  if (!canvas) return;

  const parent = canvas.parentElement;
  let width = parent.clientWidth;
  let height = parent.clientHeight;

  // Scene & Camera
  const scene = new THREE.Scene();
  const camera = new THREE.PerspectiveCamera(55, width / height, 0.1, 1000);
  camera.position.set(0, 15, 30);
  camera.lookAt(0, 0, 0);

  // Renderer
  const renderer = new THREE.WebGLRenderer({
    canvas: canvas,
    alpha: true,
    antialias: true
  });
  renderer.setSize(width, height);
  renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

  // Thêm lưới các hạt sóng nước biển (Wave Particles)
  const particleCount = 1800;
  const geometry = new THREE.BufferGeometry();
  const positions = new Float32Array(particleCount * 3);
  const scales = new Float32Array(particleCount);

  let i = 0, j = 0;
  const numX = 60;
  const numZ = 30;

  for (let ix = 0; ix < numX; ix++) {
    for (let iz = 0; iz < numZ; iz++) {
      positions[i] = (ix - numX / 2) * 1.4; // x
      positions[i + 1] = 0;                  // y (độ cao sóng thay đổi trong loop)
      positions[i + 2] = (iz - numZ / 2) * 1.4; // z
      scales[j] = 1.0;
      i += 3;
      j++;
    }
  }

  geometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));
  geometry.setAttribute('scale', new THREE.BufferAttribute(scales, 1));

  // Shader Material cho hạt ánh nước phản chiếu hoàng hôn
  const material = new THREE.PointsMaterial({
    color: 0x38bdf8,
    size: 0.35,
    transparent: true,
    opacity: 0.75,
    blending: THREE.AdditiveBlending
  });

  const particles = new THREE.Points(geometry, material);
  scene.add(particles);

  // Thêm một khối cầu ánh sáng tượng trưng Mặt Trời lặn
  const sunGeo = new THREE.SphereGeometry(4, 32, 32);
  const sunMat = new THREE.MeshBasicMaterial({ color: 0xf59e0b, transparent: true, opacity: 0.35 });
  const sun = new THREE.Mesh(sunGeo, sunMat);
  sun.position.set(0, 8, -25);
  scene.add(sun);

  // Xử lý tương tác di chuột (Parallax Mouse Effect)
  let mouseX = 0;
  let mouseY = 0;
  let targetX = 0;
  let targetY = 0;
  const windowHalfX = width / 2;
  const windowHalfY = height / 2;

  parent.addEventListener('mousemove', (event) => {
    const rect = parent.getBoundingClientRect();
    mouseX = (event.clientX - rect.left - windowHalfX) * 0.03;
    mouseY = (event.clientY - rect.top - windowHalfY) * 0.03;
  });

  // Animation Loop
  let step = 0;
  function animate() {
    requestAnimationFrame(animate);

    step += 0.04;
    const pos = geometry.attributes.position.array;

    let index = 0;
    for (let ix = 0; ix < numX; ix++) {
      for (let iz = 0; iz < numZ; iz++) {
        // Tạo nhịp sóng lượn tự nhiên
        pos[index + 1] = (Math.sin((ix + step) * 0.3) * 1.2) + (Math.sin((iz + step) * 0.5) * 1.2);
        index += 3;
      }
    }
    geometry.attributes.position.needsUpdate = true;

    // Hiệu ứng mượt mà theo chuột
    targetX += (mouseX - targetX) * 0.05;
    targetY += (mouseY - targetY) * 0.05;
    camera.position.x = targetX;
    camera.position.y = 15 - targetY;
    camera.lookAt(0, 0, 0);

    renderer.render(scene, camera);
  }

  animate();

  // Responsive resize
  window.addEventListener('resize', () => {
    width = parent.clientWidth;
    height = parent.clientHeight;
    camera.aspect = width / height;
    camera.updateProjectionMatrix();
    renderer.setSize(width, height);
  });
}