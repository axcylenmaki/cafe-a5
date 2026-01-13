/* ===============================
   CAFE A5 - MAIN JS (NO THEME)
   =============================== */

document.addEventListener("DOMContentLoaded", function () {

  // Smooth scroll untuk anchor
  const links = document.querySelectorAll('a[href^="#"]');
  links.forEach(link => {
    link.addEventListener("click", function (e) {
      const href = this.getAttribute("href");
      const target = document.querySelector(href);
      if (!target) return;

      e.preventDefault();
      target.scrollIntoView({ behavior: "smooth" });
    });
  });

  // Auto close navbar (mobile)
  const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
  const navCollapse = document.querySelector('.navbar-collapse');

  navLinks.forEach(link => {
    link.addEventListener('click', () => {
      if (navCollapse && navCollapse.classList.contains('show') && window.bootstrap?.Collapse) {
        new bootstrap.Collapse(navCollapse).toggle();
      }
    });
  });

});
