$(document).ready(() => {
  const burgerBtn = '[data-selector="header-burger-btn"]';
  const $headerNav = $('[data-selector="header-nav"]');
  const activeNavClass = '_active';

  $(document).on('click', burgerBtn, (e) => {
    if ($(e.target).hasClass(activeNavClass)) {
      $(burgerBtn).removeClass(activeNavClass);
      $headerNav.fadeOut();
      return;
    }

    $(burgerBtn).addClass(activeNavClass);
    $headerNav.fadeIn();
  });
});
