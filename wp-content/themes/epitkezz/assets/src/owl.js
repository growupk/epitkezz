export default class Owl {
    constructor () {
      this.owl_carousel = '.owl-slider'
    }
  
    Init () {
      $(this.owl_carousel).owlCarousel({
        loop: true,
        autoPlay: 3000,
        items: 1
      })
    }
  }
  