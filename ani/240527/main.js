let mainText = document.querySelector("h1");
console.log(mainText);

window.addEventListener('scroll', function () {
  let value = window.scrollY;
  console.log('scrollY', value);

  if(value > 300) {
    mainText.style.animation = 'disapear 1s ease-out forwards';
  } else {
    mainText.style.animation = 'slide 1s ease-out forwards';
  }

})