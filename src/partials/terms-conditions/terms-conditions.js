$(document).ready(() => {
  const termsTitle = '[data-selector="terms-title"]';

  if (!$(termsTitle).length) return;

  const termsSection = '[data-selector="terms-section"]';
  const termsContent = '[data-selector="terms-content"]';
  const activeClassName = '_active';

  // show/hide terms page content
  $(document).on('click', termsTitle, (event) => {
    const $currentTitle = $(event.target);
    const $currentSection = $currentTitle.closest(termsSection);
    const $currentContent = $currentSection.find(termsContent);

    if ($currentSection.hasClass(activeClassName)) {
      $currentContent.slideUp(300, () => {
        $currentSection.removeClass(activeClassName);
      });
      return;
    }

    $currentContent.slideDown(300, () => {
      $currentSection.addClass(activeClassName);
    });
  });
});
