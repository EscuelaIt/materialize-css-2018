;
((d) => {
  d.addEventListener('DOMContentLoaded', e => {
    M.AutoInit()

    const sideNavs = d.querySelectorAll('.sidenav')

    M.Sidenav.init(sideNavs, {
      edge: 'right',
      inDuration: 1000,
      outDuration: 750
      /* onOpenStart: function () {
        alert('Hola')
      } */
    })
  })
})(document);
