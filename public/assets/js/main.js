/* Main JavaScript for UI-only interactions */

const wireButtons = () => {
  document.querySelectorAll('[data-action="alert"]').forEach((button) => {
    button.addEventListener('click', () => {
      const message = button.getAttribute('data-message') || 'Action triggered!';
      window.alert(message);
    });
  });

  document.querySelectorAll('form[data-form="mock"]').forEach((form) => {
    form.addEventListener('submit', (event) => {
      event.preventDefault();
      window.alert('Thanks! This form is a UI-only demo.');
    });
  });
};

const setActiveLink = () => {
  const path = window.location.pathname.split('/');
  const currentPage = path[path.length - 1] || 'index.html';
  document.querySelectorAll('.navbar .nav-link').forEach((link) => {
    if (link.getAttribute('href') === currentPage) {
      link.classList.add('active');
    }
  });
};

window.addEventListener('DOMContentLoaded', () => {
  wireButtons();
  setActiveLink();
});
