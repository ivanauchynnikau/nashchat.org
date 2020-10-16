$(document).ready(() => {
  const termsTitle = '[data-selector="terms-title"]';

  if (!$(termsTitle).length) return;
  const activeClassName = '_active';
  const termsContent = '[data-selector="terms-content"]';

  function toggleSection(sectionId) {
    const $termsSection = $(`#${sectionId}`);
    const $currentContent = $termsSection.find(termsContent);

    if ($termsSection.hasClass(activeClassName)) {
      $currentContent.slideUp(700, () => {
        $termsSection.removeClass(activeClassName);
      });
      return;
    }

    $currentContent.slideDown(700, () => {
      $termsSection.addClass(activeClassName);
    });
  }

  function scrollIntoView(id) {
    const { top } = $(id).offset();
    $('body,html').animate({ scrollTop: top }, 1500);
  }

  function onPageLoad() {
    if (window.location.hash === '#policy') {
      toggleSection('policy');
      scrollIntoView('#policy');
    }

    if (window.location.hash === '#terms') {
      toggleSection('terms');
      scrollIntoView('#terms');
    }
  }

  onPageLoad();

  // show/hide terms page content
  $(document).on('click', termsTitle, (event) => {
    const $currentTitle = $(event.target);
    const termsSection = '[data-selector="terms-section"]';
    const $currentSection = $currentTitle.closest(termsSection);
    const sectionId = $currentSection.attr('id');
    toggleSection(sectionId);
  });

  window.addEventListener('hashchange', onPageLoad, false);
});
