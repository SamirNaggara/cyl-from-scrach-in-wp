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
    consoleText(['mais tu ne sais pas quelle formation choisir ?', 'mais est-ce fait pour toi ?', 'mais tu as peur de te lancer ?'], 'text',['pink','rebeccapurple','lightblue']);

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


// Pour les accordeons


  let titre = document.querySelectorAll('.accordion-item .heading')

  console.log(titre)


  titre.forEach(element => {
      // Faire la liste des autres elements de titre
      // titreCopy = [...titre]
      // const indexCetElement = titreCopy.indexOf(5);
      // if (indexCetElement > -1) {
      //   array.splice(indexCetElement, 1); // 2nd parameter means remove one item only
      // }

      // console.log(titreCopy)
       

    element.addEventListener('click', function(e) {
      e.preventDefault();
      // console.log("je me declenche")
      // console.log("C'est this : "+this)
      let accordeonItem = element.closest(".accordion-item") 
      // console.log("C'est l'accordeon item : "+accordeonItem)
      let content = accordeonItem.getElementsByClassName("content")[0];
      // console.log("C'est le content: "+content)


    
   

      // Add the correct active class
      if(accordeonItem.classList.contains('active')) {
          // Remove active classes
          accordeonItem.classList.remove('active');

          // content.style.display = "none";
          content.style.maxHeight = "0";


      } else {
          titre.forEach(unContenu => {
            let accordeonItem2 = unContenu.closest(".accordion-item") 
          let content2 = accordeonItem2.getElementsByClassName("content")[0];
    
            if(accordeonItem2.classList.contains('active')) {
              accordeonItem2.classList.remove('active')
              content2.style.maxHeight = "0"
            }
          })


          // Remove active classes
          accordeonItem.classList.remove('active');
  
          // Add the active class
          accordeonItem.classList.add('active');

          // content.style.display = "block";
          content.style.maxHeight = "200px";


          // On veut fermer tout les autres
          

      }
  
      // Show the content
      
      // $content.slideToggle(100);
      // document.querySelector('.accordion-item .content').not(content).slideUp('fast');
    });

});

  



});