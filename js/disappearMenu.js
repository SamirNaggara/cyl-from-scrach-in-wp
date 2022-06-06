var menu = document.querySelector('.conteneurMenu');

window.addEventListener("scroll", function(){
  if(window.scrollY==0){
    //user is at the top of the page; no need to show the back to top button
    menu.style.opacity = 1
    
  } else {
    menu.style.opacity = 0;
    setTimeout(function(){
    	menu.style.pointerEvents = "none";
    }, 500);
  }
});


