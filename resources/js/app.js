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

const buyTicketLink = document.querySelector('._tedx_register_cta')
if (buyTicketLink) {
  buyTicketLink.addEventListener('click', (e) => {
    scroller.scrollTo('#ticketPurchase')
  })
}