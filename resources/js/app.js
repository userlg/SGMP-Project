import './bootstrap';

import './dark';

import '../scss/app.scss';


console.log('Welcome To SGMP Project');


//***********Loading Effect 

window.onload = function () {
    const father = document.getElementById('container-loader');
    let container = document.getElementById('loading_container');
    let loader = document.getElementById('loading');
    // loader.style.animationPlayState = 'paused';
    container.style.visibility = 'hidden';
    father.removeChild(container);

}