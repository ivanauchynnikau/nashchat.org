// default styles
import './assets/styles/reset.css';

// component styles
import './assets/common.css';
import './partials/main-section/main-section.css';
import './partials/what-we-have/what-we-have.css';
import './partials/who-we-are/who-we-are.css';
import './partials/contact-us/contact-us.css';
import './partials/enjoy-us/enjoy-us.css';
import './partials/footer/footer.css';
import './partials/header/header.css';
import './partials/section-title/section-title.css';
import './partials/form/form.css';
import './partials/seo-section/seo-section.css';
import './partials/got-to-top-btn/go-to-top-btn.css';

// js
import './partials/got-to-top-btn/go-to-top-btn';
import './partials/header/header.js';

$(document).ready(() => {
  const $body = $('body');

  $body.on('click', '[data-selector="header-nav-item"]', (event) => {
    event.preventDefault();

    const $burgerBtn = $('[data-selector="header-burger-btn"]');
    $burgerBtn.click();

    const id = $(event.target).attr('href');
    const { top } = $(id).offset();
    $('body,html').animate({ scrollTop: top }, 1500);
  });
});
