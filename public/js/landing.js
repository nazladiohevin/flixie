const contCards = document.getElementById("containerCards");      
const newReleaseCont = document.getElementById("newReleaseCont");
const freeCont = document.getElementById("freeCont");
const comingSoonCont = document.getElementById("comingsoonCont");
const tvSeriesCont = document.getElementById("tvseriesCont");


datafilms.forEach((film, index) => {
  let posterNum = index + 1;
  contCards.innerHTML += generateCard(false, posterNum, film, "src/views/"); 
  newReleaseCont.innerHTML += generateCard(false, posterNum, film, "src/views/");        
  freeCont.innerHTML += generateCard(true, posterNum, film, "src/views/");        
  comingSoonCont.innerHTML += generateCard(false, posterNum, film, "src/views/");        
  tvSeriesCont.innerHTML += generateCard(true, posterNum, film, "src/views/");        
})


$('#containerCards').slick({
  lazyLoad: 'ondemand',
  slidesToShow: 5,        
  centerMode: true,
  arrows:false,
  dots: false,        
  infinite: true,
  touchMove: true,  
  swipe: true,
  swipeToSlide: true,
  autoplay: true,
  autoplaySpeed: 3000,
  speed: 500,        
  pauseOnHover: true,
  centerPadding: '100px',
  responsive: [
    {
      breakpoint: 640,
      settings: {
        slidesToShow: 1
      }
    },          
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2
      }
    },          
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3
      }
    },          
    {
      breakpoint: 1280,
      settings: {
        slidesToShow: 4
      }
    },          
  ]
});

const secondarySwiper = {
  lazyLoad: 'ondemand',
  slidesToShow: 6,        
  centerMode: true,
  arrows: true,
  dots: false,        
  infinite: true,                       
  speed: 500,        
  prevArrow: `<button class="scroll-px-3 absolute top-24 left-4 z-10 h-min py-3 bg-lagoon-500 rounded-md hover:scale-110 ease-in transition-all"><svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="m14 7l-5 5m0 0l5 5"/></svg></button>`,
  nextArrow: `<button class="scroll-px-3 absolute top-24 right-4 z-10 h-min py-3 bg-lagoon-500 rounded-md hover:scale-110 ease-in transition-all"><svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="m10 17l5-5m0 0l-5-5"/></svg></button>`,
  centerPadding: '50px',
  responsive: [
    {
      breakpoint: 640,
      settings: {
        slidesToShow: 1,
        centerPadding: '30px',
      }
    },          
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2
      }
    },          
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3
      }
    },          
    {
      breakpoint: 1280,
      settings: {
        slidesToShow: 4
      }
    },          
    {
      breakpoint: 1536,
      settings: {
        slidesToShow: 5
      }
    },          
  ]
};

$('#newReleaseCont').slick(secondarySwiper);
$('#freeCont').slick(secondarySwiper);
$('#comingsoonCont').slick(secondarySwiper);
$('#tvseriesCont').slick(secondarySwiper);