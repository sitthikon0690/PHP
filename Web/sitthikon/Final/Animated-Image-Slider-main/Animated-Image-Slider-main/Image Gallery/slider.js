var swiper = new Swiper(".mySwiper",{
  effect : "coverflow",
  grabCursor : true,
  centeredSlides : true,
  slidesPerView : "auto",
  coverflowEffect : {
    rotate : 50,
    stretch : 0,
    depth :100,
    modifier :1,
    slideShadows : true,
  },
  pagination: {
    el: ".swiper-pagination",
  },
});

particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 200,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#f0c394"
    },
    
    "opacity": {
      "value": 0.4,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 3,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#f0c394",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": .9,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },

  "retina_detect": true
});





