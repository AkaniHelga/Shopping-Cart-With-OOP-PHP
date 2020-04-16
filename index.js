$(function() {
  $('a[href*=#]').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
  });
});


$(document).ready(function() {
    $(document).delegate('.open', 'click', function(event){
      $(this).addClass('oppenned');
      event.stopPropagation();
    })
    $(document).delegate('body', 'click', function(event) {
      $('.open').removeClass('oppenned');
    })
    $(document).delegate('.cls', 'click', function(event){
      $('.open').removeClass('oppenned');
      event.stopPropagation();
    });
  });


//progress navbar on scroll

let navbar = document.getElementById('navbar');
let scrollbar = document.getElementById('scrollbar');
let y = 0;
navbar.addEventListener('scroll', () => {
  y += 9;
  scrollbar.style.top = y + 'px';
  // console.log(y);
  let rect = scrollbar.getBoundingClientRect();
console.log(rect.y);
});

//end of navbar progress on scroll



$(document).ready(function(){

  // Anchor arrow click
  // smooth scroll to anchor tag
 $('a[href*="#"]:not([href="#featured"])').click(function() { // Check to see if anchor tag is not carousel's featured link
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          // Smooth scroll to link section
          $('html, body').animate({
            scrollTop: target.offset().top + 50
          }, 900);
          return false;
        }
      }
    });
    
  //highlight navigation
  $(window).scroll(function() {
    var windowpos = $(window).scrollTop();
    $('nav li a').removeClass('active');
    $('.progress-bar--circle').removeClass('active');

    if (windowpos > $('#top').offset().top) {
      $('nav li a').removeClass('active');
      $('a[href$="#top"]').addClass('active');
    } //windowpos

    if (windowpos > $('#article-1').offset().top) {
      $('nav li a').removeClass('active');
      $('a[href$="#article-1"]').addClass('active');
      $('a[href$="#article-1"] .progress-bar--circle').addClass('active');
    } //windowpos

    if (windowpos > $('#article-2').offset().top) {
      $('nav li a').removeClass('active');
      $('a[href$="#article-2"]').addClass('active');
      $('a[href$="#article-2"] .progress-bar--circle').addClass('active');
    } //windowpos

    if (windowpos > $('#article-3').offset().top) {
      $('nav li a').removeClass('active');
      $('a[href$="#article-3"]').addClass('active');
      $('a[href$="#article-3"] .progress-bar--circle').addClass('active');
    } //windowpos

    if (windowpos > $('#bottom').offset().top) {
      $('nav li a').removeClass('active');
      $('a[href$="#bottom"]').addClass('active');
    } //windowpos

    // Scrollbar progression
        // pixels scrolled from top
    var scrollTop = $(window).scrollTop(),
        // document height
        docHeight = $(document).height(),
        // window height
        winHeight = $(window).height(),
        // percent of document scrolled
        scrollPercent = (scrollTop) / (docHeight - winHeight),
        scrollPercentRounded = Math.round(scrollPercent*100);

    // incement progress bar as user scrolls
    $('.progress-bar--increment').css('height', scrollPercentRounded + '%');
  });

}); // on load 

//change navbar layout 
    $(document).ready(function(){       
     var scroll_start = 0;
     var startchange = $('#startchange');
     var offset = startchange.offset();
      if (startchange.length){
     $(document).scroll(function() { 
        scroll_start = $(this).scrollTop();
        if(scroll_start > offset.top) {
            $(".navbar-default").css('background-color', '#000',);
         } else {
            $('.navbar-default').css('background-color', 'transparent');
         }
     });
      }
      AOS.init({
            easing: 'ease',
            duration: 1800,
            once: true
          });
  });
  </script>