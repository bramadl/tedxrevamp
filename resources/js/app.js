// @ts-nocheck
require("./bootstrap");

// Required Plugins
import scroller from "./plugins/locomotiveScroll";
require("./plugins/custom-cursor");
require("./plugins/preloader");

// Home Page
require("./modules/menu");
require("./modules/hero");
require("./modules/teaser");
require("./modules/speaker");
require("./modules/archetype");

// About Page
require("./modules/about");

// Partners Page
require('./modules/partners')

const preloader = document.body.classList.contains('preloader')
if (preloader) {
  gsap.to('#preloader', {
    opacity: 0,
    pointerEvents: 'none',
    duration: 1,
    delay: 3,
    ease: 'power2.inOut'
  })
}

const buyTicketLink = document.querySelector('._tedx_register_cta')
if (buyTicketLink) {
  buyTicketLink.addEventListener('click', (e) => {
    scroller.scrollTo('#ticketPurchase')
  })
}

const goToLinks = document.querySelectorAll('a.go-to')
if (goToLinks.length) {
  goToLinks.forEach(link => {
    link.addEventListener('click', function (e) {
      e.preventDefault();
      const hash = e.target.href.split('#')[e.target.href.split('#').length - 1]

      sessionStorage.setItem('goto', hash)
      location.href = '/about'
    })
  })
}

if (location.pathname === '/about') {
  if (sessionStorage.getItem('goto')) {
    scroller.scrollTo(`#${sessionStorage.getItem('goto')}`)
    sessionStorage.clear()
  }
}