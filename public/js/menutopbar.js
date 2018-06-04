$(window).scroll(function (event)
 {
    // A chaque fois que l'utilisateur va scroller (descendre la page)
    var   y   =   $(this).scrollTop(); // On récupérer la valeur du scroll vertical
 
    //si cette valeur > à 200 on ajouter la class
    if (y >= 114)
    {
      $('#navBar_hori').addClass('fixed');
    } 
    else 
    {
      // sinon, on l'enlève
      $('#navBar_hori').removeClass('fixed');
    }
  });