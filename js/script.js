document.addEventListener("DOMContentLoaded", function() {



//     $('#circleDrop').click(function(){
//         $('.card-middle').slideToggle();
//         $('.close').toggleClass('closeRotate');
//       });

//     //Desactive le scroll pendant 7 seconde (soit modifier ici, soit mettre sur true et supprimer les lignes 5 a 9)
//     firstAnimationIsFinish = true;
//     setTimeout(firstAnimationFinish, 7000)

//     function firstAnimationFinish(){
//         globalThis.firstAnimationIsFinish = true
//     }


//     const COUNTER_THRESHOLD = 3; // Change this to decrease/increase senstivity
//     const COUNTER_RESET_DURATION = 1000;
  
//     let animating = false;
//     let counter = 0;

//     var scrollDebounce = true;


//     // Scroll between views
//     function resetDelta() {
//         counter = 0
//     }

//     let deboucncedReset = debounce(resetDelta, COUNTER_RESET_DURATION);

//     function handleScroll(event) {
//         //event.wheelDelta can be positive or negative based on the direction of scroll
        
        
//         if (!firstAnimationIsFinish){
//             console.log("normalement, tu ne peux pas scroller !");
            
//         }
       
//         counter += 1 * (Math.sign(event.wheelDelta));

      

//         //Scroll down if value of counter is negative and absolute value is greater than threshold
       
//         if (!animating && (Math.abs(counter) >= COUNTER_THRESHOLD) && counter < 0 && firstAnimationIsFinish && scrollDebounce) {
           
//             let targetSection = document.querySelector("[data-active]").nextElementSibling;
       
           
//             if (targetSection) {
//                 scrollToSection(targetSection);
//             }

           
                
//         }

//          //Scroll up if value of counter is positive and absolute value is greater than threshold
//             else if (!animating && (Math.abs(counter) >= COUNTER_THRESHOLD) && counter > 0 && firstAnimationIsFinish) {
//                 let targetSection = document.querySelector("[data-active]").previousElementSibling;

//                 if (targetSection) {
//                     scrollToSection(targetSection);
//                 }

         
//             }

//             // prevent default scrolling behaviour of mouse wheel
//             event.preventDefault()

//             //Reset counter to 0 , 400 miliseconds after stopping the mousewheel
//             deboucncedReset()
       

            

            
//     }

//     function scrollToSection(target) {
//         console.log("ça vient de scroller ma gueule"+target)
//         animating = true;
        
        
       
//         target.scrollIntoView({
//             behavior: 'smooth'
//         });
          
//           delete document.querySelector("[data-active]").dataset.active;
//           target.dataset.active = "";

//           setTimeout(function(){
//             animating = false;

//           }, 300)

          
          
       
//       }

//     function debounce(func, delay) {
//         let debounceTimer
//         return function() {
//           const context = this
//           const args = arguments
//           clearTimeout(debounceTimer)
//           debounceTimer
//             = setTimeout(() => func.apply(context, args), delay)
//         }
//     }

//      //Test support for passive listeners
//   let supportsPassive = false;
//   try {
//     let options = Object.defineProperty({}, 'passive', {
//       get: function() {
//         supportsPassive = true;
//       }
//     });
//     window.addEventListener("testPassive", null, options);
//     window.removeEventListener("testPassive", null, options);
//   } catch (e) {}

//   let wheelOptions = supportsPassive ? {
//     passive: false
//   } : false;

//   // Older browsers used 'mousewheel' event
//   let wheelEvent = 'onwheel' in document.createElement('div') ? 'wheel' : 'mousewheel';

  
//   document.addEventListener(wheelEvent, handleScroll, wheelOptions)

  
    

    





 
    // Bloc tu veux - Animation


    // function([string1, string2],target id,[color1,color2])    
    consoleText(['mais tu ne sais pas quelle formation choisir ?', 'mais tu n\'es pas sur que tu vas aimer ?', 'mais tu as peur de te lancer ?'], 'text',['pink','rebeccapurple','lightblue']);

    function consoleText(words, id, colors) {
    if (colors === undefined) colors = ['#fff'];
    var visible = true;
    var con = document.getElementById('console');
    var letterCount = 1;
    var x = 1;
    var waiting = false;
    var target = document.getElementById(id)
    target.setAttribute('style', 'color:' + colors[0])
    window.setInterval(function() {

        if (letterCount === 0 && waiting === false) {
        waiting = true;
        target.innerHTML = words[0].substring(0, letterCount)
        window.setTimeout(function() {
            var usedColor = colors.shift();
            colors.push(usedColor);
            var usedWord = words.shift();
            words.push(usedWord);
            x = 1;
            target.setAttribute('style', 'color:' + colors[0])
            letterCount += x;
            waiting = false;
        }, 1000)
        } else if (letterCount === words[0].length + 1 && waiting === false) {
        waiting = true;
        window.setTimeout(function() {
            x = -1;
            letterCount += x;
            waiting = false;
        }, 1000)
        } else if (waiting === false) {
        target.innerHTML = words[0].substring(0, letterCount)
        letterCount += x;
        }
    }, 30)
    window.setInterval(function() {
        if (visible === true) {
        con.className = 'console-underscore hidden'
        visible = false;

        } else {
        con.className = 'console-underscore'

        visible = true;
        }
    }, 400)
    }


    // Glissement de la carte dans "Formation"

    var containerCard = document.querySelectorAll('.formations article');
    
for(i = 0; i < containerCard.length; i++){

    let button = containerCard[i].querySelector(".circle-button")
    let middleCard = containerCard[i].querySelector(".card-middle")
    let croix = containerCard[i].querySelector(".close")
    
  button.addEventListener('click', function(event){
    
    event.preventDefault();

    // var container = document.getElementById(this.dataset.container);

    if (!middleCard.classList.contains('active')) {
        console.log(button);
        middleCard.classList.add('active');
        // middleCard.style.height = 'auto';
        middleCard.style.maxHeight = '300px';
        // middleCard.style.padding = '30px';

        croix.classList.toggle('closeRotate');

      var height = middleCard.clientHeight + 'px';

    //   middleCard.style.height = '0px';

      setTimeout(function () {
        // middleCard.style.height = height;
      }, 0);
      
      
      
    } else {
      
        middleCard.style.maxHeight = '0px';
        // middleCard.style.padding = '0px';
        croix.classList.toggle('closeRotate');

   
        middleCard.classList.remove('active');

      
    }
    
  });

}


// CARROUSEL


// document.getElementById("bouton-gauche").addEventListener("click", gauche);
// document.getElementById("bouton-droit").addEventListener("click", droit);

// function gauche() {
//   console.log("test");
//   document.getElementById("carrousel").style.transform = "translateX(-100vw)"
// }

document.getElementById("bouton-gauche").addEventListener("click", gauche);

function gauche() {
  console.log("test");


  var firstCurrent = document.getElementsByClassName("firstCurrent");
  var firstGauche = document.getElementsByClassName("firstGauche");
  var firstDroite = document.getElementsByClassName("firstDroite");
  // Je met mes 3 cartes dans des variables grâce à leur ID pour changer leur CSS
  var current = document.getElementById("current");
  var gauche = document.getElementById("gauche");
  var droite = document.getElementById("droite");

  // Déplacement de la carte du milieu + opacité à 0
  current.style.transform = 'translateX(-100vw)';
  current.style.opacity = '0';  

  // Déplacement de la carte à droite (au milieu) + opacité à 1
  droite.style.transform = 'translateX(0)';
  droite.style.opacity = '1';

  // Déplacement de la carte à gauche (à gauche) son opacité reste à 0
  gauche.style.transform = 'translateX(100)';

  // On ajoute l'id 'gauche' à la carte mise à gauche, puis on lui retire l'id current

  // firstCurrent.setAttribute('id', 'gauche');

  // On ajoute l'id 'current' à la carte mise au milieu, puis on lui retire l'id droite
  // droite.setAttribute('id', 'current');
  // droite.removeAttribute('id', 'droite');
  
  // On ajoute l'id 'droite' à la carte mise à droite, puis on lui retire l'id gauche
  // gauche.setAttribute('id', 'droite');
  // gauche.removeAttribute('id', 'gauche');
  
  
  
  // if (initial.css.transform) {
  //   console.log("toutafé");
  // } else {
  //   console.log("pas trouvé");
  // }


  // document.getElementsByClassName("temoignage-initial").style.opacity = 'translateX(-100vw)';
  // document.getElementsByClassName("temoignage3").style.transform = 'translateX(0)';

  // Pas compris pourquoi ça ne fonctionnait pas avec un getelementsbyclassname mais fonctionne avec un queryselector ?

  // document.querySelector(".temoignage-initial").style.transform = 'translateX(-100vw)';
  // document.querySelector(".temoignage3").style.transform = 'translateX(0)';
  // document.querySelector(".temoignage3").style.opacity = '1';
  // document.querySelector(".temoignage-initial").style.opacity = '0';
}

});