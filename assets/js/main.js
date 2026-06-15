const navMenu = document.getElementById('navMenu');
const menuBtn = document.getElementById('menuBtn');

menuBtn?.addEventListener('click', () => {
  navMenu?.classList.toggle('open');
});

document.querySelectorAll('#navMenu a').forEach((link) => {
  link.addEventListener('click', () => navMenu?.classList.remove('open'));
});

document.querySelectorAll('[data-open]').forEach((button) => {
  button.addEventListener('click', () => {
    document.getElementById(button.dataset.open)?.classList.add('open');
  });
});

document.querySelectorAll('[data-close], .modal').forEach((element) => {
  element.addEventListener('click', (event) => {
    if (event.target === element || event.target.hasAttribute('data-close')) {
      element.closest('.modal')?.classList.remove('open');
    }
  });
});

const revealObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('show');
        revealObserver.unobserve(entry.target);
      }
    });
  },
  { threshold: 0.14, rootMargin: '0px 0px -40px 0px' }
);

document.querySelectorAll('.reveal-up, .reveal-zoom, .reveal-left, .reveal-right').forEach((element) => {
  revealObserver.observe(element);
});

document.querySelectorAll('.tilt-card').forEach((card) => {
  card.addEventListener('mousemove', (event) => {
    const rect = card.getBoundingClientRect();
    const x = (event.clientX - rect.left) / rect.width - 0.5;
    const y = (event.clientY - rect.top) / rect.height - 0.5;
    card.style.transform = `perspective(1100px) rotateX(${y * -8}deg) rotateY(${x * 10}deg) translateY(-10px)`;
  });

  card.addEventListener('mouseleave', () => {
    card.style.transform = '';
  });
});

const parallaxItems = document.querySelectorAll('[data-parallax]');
window.addEventListener('scroll', () => {
  const scrollY = window.scrollY;
  document.documentElement.style.setProperty('--scroll-y', `${scrollY}px`);
  parallaxItems.forEach((item) => {
    const speed = Number(item.dataset.parallax || 0.12);
    item.style.transform = `translate3d(0, ${scrollY * speed}px, 0)`;
  });
});

const counters = document.querySelectorAll('[data-count]');
const counterObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (!entry.isIntersecting) return;
    const counter = entry.target;
    const target = Number(counter.dataset.count || 0);
    let current = 0;
    const step = Math.max(1, Math.ceil(target / 48));
    const timer = setInterval(() => {
      current += step;
      if (current >= target) {
        counter.textContent = target.toString();
        clearInterval(timer);
      } else {
        counter.textContent = current.toString();
      }
    }, 22);
    counterObserver.unobserve(counter);
  });
});

counters.forEach((counter) => counterObserver.observe(counter));

const progressBar = document.querySelector('.scroll-progress');
const cursorDot = document.querySelector('.cursor-dot');

function updateProgress() {
  const maxScroll = document.documentElement.scrollHeight - window.innerHeight;
  const progress = maxScroll > 0 ? (window.scrollY / maxScroll) * 100 : 0;
  progressBar?.style.setProperty('--progress', `${progress}%`);
}

window.addEventListener('scroll', updateProgress, { passive: true });
updateProgress();

window.addEventListener('pointermove', (event) => {
  document.documentElement.style.setProperty('--mouse-x', `${(event.clientX - window.innerWidth / 2) * 0.08}px`);
  document.documentElement.style.setProperty('--mouse-y', `${(event.clientY - window.innerHeight / 2) * 0.08}px`);
  if (cursorDot) {
    cursorDot.style.transform = `translate3d(${event.clientX - 7}px, ${event.clientY - 7}px, 0)`;
  }
});

const threeDStage = document.querySelector('.journey-3d-stage');
if (threeDStage) {
  window.addEventListener('scroll', () => {
    const rect = threeDStage.getBoundingClientRect();
    const centerOffset = (rect.top + rect.height / 2 - window.innerHeight / 2) / window.innerHeight;
    threeDStage.style.transform = `rotateX(${centerOffset * -7}deg) rotateY(${centerOffset * 4}deg)`;
  }, { passive: true });
}
