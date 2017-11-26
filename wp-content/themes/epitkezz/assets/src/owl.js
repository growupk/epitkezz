export default class Owl {
  constructor() {
    this.owl_carousel = '.owl-slider'
  }

  Init() {
    $(this.owl_carousel).owlCarousel({
      loop: false,
      mouseDrag: false,
      touchDrag: true,
      navigation: true,
      autoPlay: 4000,
      items : 1,
      itemsDesktop : [1199,1],
      itemsDesktopSmall : [980,1],
      itemsTablet: [768,1],
      itemsTabletSmall: false,
      itemsMobile : [479,1],
      singleItem : false,
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
      navigationText: false
    })
  }
}