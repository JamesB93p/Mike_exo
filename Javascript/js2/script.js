var slides =
[
    { image: 'images/1.jpg', legend: 'Street Art'          },
    { image: 'images/2.jpg', legend: 'Fast Lane'           },
    { image: 'images/3.jpg', legend: 'Colorful Building'   },
    { image: 'images/4.jpg', legend: 'Skyscrapers'         },
    { image: 'images/5.jpg', legend: 'City by night'       },
    { image: 'images/6.jpg', legend: 'Tour Eiffel la nuit' }
];

var btnToolbar = document.getElementById('toolbar-toggle');
var menuitem = document.querySelector('ul');
var eltImage = document.querySelector('img');
var eltFigcaption = document.querySelector('figcaption');
var state = {index: 0};
var eltPrevious = document.getElementById('slider-previous');
var eltNext = document.getElementById('slider-next');
var elt = document.getElementById('slider-next');

function showToolbar(){
    menuitem.classList.toggle('hide');
    document.querySelector('i').classList.toggle('fa-arrow-right');
    document.querySelector('i').classList.toggle('fa-arrow-down');
}

function refreshSlider(){
    eltImage.src=slides[state.index].image;
    eltFigcaption.textContent=slides[state.index].legend;
}

function sliderPrevious(){
    state.index--
    if (state.index == -1) {
        state.index = 5;
    }
    refreshSlider();
}

function sliderPrevious(){
    state.index++
    if (state.index == 6) {
        state.index = 0;
    }
    refreshSlider();
}

refreshSlider();
btnToolbar.addEventListener('click', showToolbar);
eltPrevious.addEventListener('click', sliderPrevious);
