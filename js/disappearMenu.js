// var menu = document.querySelector('.conteneurMenu');

// window.addEventListener("scroll", function(){
//   if(window.scrollY==0){
//     //user is at the top of the page; no need to show the back to top button
//     menu.style.opacity = 1
    
//   } else {
//     menu.style.opacity = 0;
//     setTimeout(function(){
//     	menu.style.pointerEvents = "none";
//     }, 500);
//   }
// });


var menu = document.querySelector('.conteneurMenu');

window.onscroll = function(e) {
  // print "false" if direction is down and "true" if up
  console.log(this.oldScroll > this.scrollY);
  if (this.oldScroll > this.scrollY){
    menu.style.opacity = 1
  } else {
    menu.style.opacity = 0
  }
  this.oldScroll = this.scrollY;
}