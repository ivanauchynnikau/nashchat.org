import $ from '$';

const options = {
  innerHTML: '<?xml version="1.0" encoding="UTF-8"?>' +
              '<svg enable-background="new 0 0 476.737 476.737" version="1.1" viewBox="0 0 476.737 476.737" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">' +
                '<path fill="lightgray" d="m238.37 0c-131.64 0-238.37 106.73-238.37 238.37 0 131.68 106.73 238.37 238.37 238.37 131.68 0 238.37-106.69 238.37-238.37-1e-3 -131.64-106.7-238.37-238.37-238.37zm114.35 289.22c-6.198 6.198-16.273 6.198-22.47 0l-91.883-91.883-91.883 91.883c-6.198 6.198-16.273 6.198-22.47 0-6.198-6.166-6.198-16.273 0-22.47l103.07-103.07c3.115-3.115 7.183-4.64 11.283-4.64s8.168 1.526 11.283 4.64l103.07 103.07c6.198 6.198 6.198 16.241 0 22.471z" fill="#010002"/>\n' +
              '</svg>',
  className: 'go-to-top-btn',
  offset: '0px',
};

options.offset = options.offset || '1rem';

const backTop = document.createElement('a');
backTop.href = '#top';
backTop.innerHTML = options.innerHTML || 'Back to Top';
backTop.id = options.id || '';
backTop.className = options.className || '';

backTop.style.position = 'fixed';
backTop.style.right = options.offset;
backTop.style.bottom = '-100px';
backTop.style['transition-property'] = 'bottom';

if (!options.transition) {
  options.transition = {};
}

backTop.style['transition-duration'] = '800ms';
backTop.style['transition-timing-function'] = 'linear';

window.addEventListener('scroll', () => {
  if (window.pageYOffset < 100) {
    backTop.style.bottom = '-100px';
  } else {
    backTop.style.bottom = options.offset;
  }
});

backTop.addEventListener('click', e => {
  const $body = $('body, html');
    $body.animate({
      scrollTop :0
    }, 500);

  // Remove hash from URL:
  history.pushState(
    '',
    document.title,
    window.location.pathname + window.location.search
  );
  e.preventDefault();
});

document.body.appendChild(backTop);
