// @ts-nocheck
const scroller = new LocomotiveScroll({
  el: document.querySelector('[data-scroll-container]'),
  smooth: true
})

setTimeout(() => {
  scroller.update()
}, 1000)

export default scroller