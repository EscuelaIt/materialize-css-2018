;
((d) => {
  d.addEventListener('DOMContentLoaded', e => {
    M.AutoInit()

    const sideNavs = d.querySelectorAll('.sidenav'),
      carousels = d.querySelectorAll('.carousel'),
      sliders = d.querySelectorAll('.carousel-slider')

    M.Sidenav.init(sideNavs, {
      edge: 'right',
      inDuration: 1000,
      outDuration: 750
      /* onOpenStart: function () {
        alert('Hola')
      } */
    })

    M.Carousel.init(carousels, {})
    M.Carousel.init(sliders, {
      fullWidth: true
    })
  })
})(document);
