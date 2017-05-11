        

  
  $(window).scroll(function () {
      //if you hard code, then use console
      //.log to determine when you want the 
      //nav bar to stick.  
       if($(window).width() > 768)
    {
     
    if ($(window).scrollTop() > 150) {
      $('.top-menu').css('position', 'fixed');
        $('.top-menu').css('top', '0');
    }
    if ($(window).scrollTop() < 151) {
      $('.top-menu').css('position', 'absolute');
         $('.top-menu').css('top', '111px');
 }
    }
  });


  
  $(window).scroll(function () {
      //if you hard code, then use console
      //.log to determine when you want the 
      //nav bar to stick.  
       if($(window).width() < 768)
    {
      console.log($(window).scrollTop())
    if ($(window).scrollTop() > 150) {
      $('.top-menu').css('position', 'fixed');
        $('.top-menu').css('top', '0');
    }
    if ($(window).scrollTop() < 151) {
      $('.top-menu').css('position', 'absolute');
         $('.top-menu').css('top', '212px');
 }
    }
  });


  if($(window).width() < 768) {

      $("#contact").click(function () {
          $('#show-menu').click();
      });

      $("#latest_news").click(function () {
          $('#show-menu').click();
      });
  }