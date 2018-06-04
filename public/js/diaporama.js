// Diaporama des images des produits
$(function(){
  /* Configuration */
  var width = 600;
  var animationSpeed = 1000;
  var pauseInterval = 5000;
  var currentSlide = 1;
  /* Cache DOM*/
  var $slider = $('#slideshow');
  var $slideContainer = $slider.find('.slides');
  var $slides = $slideContainer.find('.slide');

  /* Répetition du code */
  setInterval(function(){

    $slideContainer.animate({'margin-left':'-='+width}, animationSpeed, function(){
      currentSlide++;
      if(currentSlide === $slides.length)
      {
        currentSlide = 1;
        $slideContainer.css('margin-left',0);
      }
    });
  },pauseInterval);
});



// Diaporama des déscription
$(function(){
  /* Configuration */
  var width = 600;
  var animationSpeed = 1000;
  var pauseInterval = 5000;
  var currentSlide = 1;
  /* Cache DOM*/
  var $slider = $('#slideshow_description');
  var $slideContainer = $slider.find('.slides_description');
  var $slides = $slideContainer.find('.slide_description');

  /* Répetition du code */
  setInterval(function(){

    $slideContainer.animate({'margin-left':'-='+width}, animationSpeed, function(){
      currentSlide++;
      if(currentSlide === $slides.length)
      {
        currentSlide = 1;
        $slideContainer.css('margin-left',0);
      }
    });
  },pauseInterval);
});
