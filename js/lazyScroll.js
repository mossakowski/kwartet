$(document).ready(function(){
  $('.navbar').find('a').click(function(){
      var $href = $(this).attr('href');
      var $anchor = $($href).offset();
      var $menuHeight = $('.navbar').height();
      $('html').animate({ scrollTop: $anchor.top - $menuHeight });
      console.log($menuHeight);
      return false;
  });
});
