// @ts-nocheck
import scroller from '../plugins/locomotiveScroll'

const videoTeaser = document.querySelector('._tedx_video_teaser')
const videoMask = document.querySelector('._tedx_video_mask')
const videoText = document.querySelector('._tedx_video_text')

if (videoTeaser && videoMask && videoText) {
  gsap.registerPlugin(ScrollTrigger)
  scroller.on('scroll', ScrollTrigger.update)
  
  ScrollTrigger.scrollerProxy(
    videoTeaser, {
        scrollTop(value) {
            return arguments.length ?
            scroller.scrollTo(value, 0, 0) :
            scroller.scroll.instance.scroll.y
        },
        getBoundingClientRect() {
            return {
                left: 0, top: 0, 
                width: window.innerWidth,
                height: window.innerHeight
            }
        }
    }
  )
  
  const timeline = new TimelineLite()
  ScrollTrigger.create({
    trigger: videoMask,
    scroller: videoTeaser,
    start: 'top+=30% 50%',
    end: 'bottom-=40% 50%',
    animation: timeline
    .to(
      videoMask, 
      {
        backgroundSize: '120%'
      }
    )
    .to(
      videoText,
      {
        opacity: 1
      },
      '<'
    ),
    scrub: 2
  })
  
  ScrollTrigger.addEventListener('refresh', () => scroller.update())
  ScrollTrigger.refresh()
}

const playVideoButton = document.querySelector('.open-video-player')
const closeVideoButton = document.querySelector('.close-video-player')
const videoPlayer = document.querySelector('#videoPlayer')

if (playVideoButton && closeVideoButton) {
  playVideoButton.addEventListener('click', () => {
    const timeline = gsap.timeline()
  
    timeline
    .to(
      videoPlayer,
      {
        opacity: 1,
        scale: 1,
        y: 0,
        pointerEvents: 'all',
        duration: 1.2,
        ease: 'power2.inOut'
      }
    )
    .to(
      closeVideoButton,
      {
        opacity: 1,
        duration: 1,
        ease: 'power.out'
      }
    )
  })
  
  closeVideoButton.addEventListener('click', () => {
    const video = videoPlayer.querySelector('video')
    
    const timeline = gsap.timeline()
  
    timeline
    .to(
      closeVideoButton,
      {
        opacity: 0,
        duration: 1,
        ease: 'power2.inOut'
      }
    )
    .to(
      videoPlayer,
      {
        opacity: 0,
        scale: 0,
        y: '100%',
        pointerEvents: 'none',
        duration: 1.2,
        ease: 'power2.inOut',
        onComplete: () => {
          video.pause()
          video.currentTime = 0
        }
      }
    )
  })
}