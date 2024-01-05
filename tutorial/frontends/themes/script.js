//javascript
const colors = document.getElementsByClassName('colors');

let i;
for(i = 0;i<colors.length;i++) {
  colors[i].addEventListener('click', changecolor);
}

function changecolor() {
  let color = this.getAttribute('data-color');
  document.documentElement.style.setProperty('--color', color);
}


//jquery
// $('.colors').each(function(){
//   $(this).click(function(){
//     let color = $(this).attr('data-color');
//     document.documentElement.style.setProperty('--color'. color)
//   })
// })