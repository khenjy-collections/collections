import './bootstrap';

const button = document.querySelector('#dropdownButton');
const button2 = document.querySelector('#dropdownButton2');
const button3 = document.querySelector('#dropdownButton3');
const button4 = document.querySelector('#dropdownButton4');
const menu = document.querySelector('.menu')
const menu2 = document.querySelector('#menu2')
const menu3 = document.querySelector('#menu3')
const menu4 = document.querySelector('#menu4')

button.addEventListener('mouseover', function () {
    
    if(menu.style.display = 'none') {
        menu.style.display = 'block'
    }else {
        menu.style.display = 'none'
    }
})

button.addEventListener('mouseleave', function() {
    menu.style.display = 'none'
})

// Button 2
button2.addEventListener('mouseover', function () {
    
    if(menu2.style.display = 'none') {
        menu2.style.display = 'block'
    }else {
        menu2.style.display = 'none'
    }
})

button2.addEventListener('mouseleave', function() {
    menu2.style.display = 'none'
})

// Button 3
button3.addEventListener('mouseover', function () {
    
    if(menu3.style.display = 'none') {
        menu3.style.display = 'block'
    }else {
        menu3.style.display = 'none'
    }
})

button3.addEventListener('mouseleave', function() {
    menu3.style.display = 'none'
})

// Button 4
button4.addEventListener('mouseover', function () {
    
    if(menu4.style.display = 'none') {
        menu4.style.display = 'block'
    }else {
        menu4.style.display = 'none'
    }
})

button4.addEventListener('mouseleave', function() {
    menu4.style.display = 'none'
})

const customCardImage = document.querySelectorAll('#customCardImage')

customCardImage.addEventListener('mouseover', function() {
    const a = document.createElement('a')
    
})