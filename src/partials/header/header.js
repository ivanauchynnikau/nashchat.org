$(document).ready(() => {
  const burgerBtn = '[data-selector="header-burger-btn"]';
  const $headerNav = $('[data-selector="header-nav"]');
  const activeNavClass = '_active';

  $(document).on('click', burgerBtn, (e) => {
    const { clientWidth } = document.documentElement;
    const viewportWidth = Math.max(clientWidth || 0, window.innerWidth || 0);
    if (viewportWidth > 768) return;

    if ($(e.target).hasClass(activeNavClass)) {
      $(burgerBtn).removeClass(activeNavClass);
      $headerNav.fadeOut();
      return;
    }

    $(burgerBtn).addClass(activeNavClass);
    $headerNav.fadeIn();
  });
});
