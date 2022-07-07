var textWrapper = document.querySelector('.text');
                    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

                     anime.timeline({loop: true})
                          .add({
                            targets: '.text .letter',
                            translateX: [40,0],
                            translateZ: 0,
                            opacity: [0,1],
                            easing: "easeOutExpo",
                            duration: 1200,
                            delay: (el, i) => 500 + 30 * i
                          }).add({
                            targets: '.text .letter',
                            translateX: [0,-30],
                            opacity: [1,0],
                            easing: "easeInExpo",
                            duration: 1100,
                            delay: (el, i) => 100 + 30 * i
                          });
var textWrapper = document.querySelector('.text1');
                    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

                     anime.timeline({loop: true})
                          .add({
                            targets: '.text1 .letter',
                            translateX: [40,0],
                            translateZ: 0,
                            opacity: [0,1],
                            easing: "easeOutExpo",
                            duration: 1200,
                            delay: (el, i) => 500 + 30 * i
                          }).add({
                            targets: '.text1 .letter',
                            translateX: [0,-30],
                            opacity: [1,0],
                            easing: "easeInExpo",
                            duration: 1100,
                            delay: (el, i) => 100 + 30 * i
                          });
                        
  var textWrapper = document.querySelector('.qoute');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

                        anime.timeline({loop: true})
                        .add({
                            targets: '.qoute .letter',
                            translateX: [40,0],
                            translateZ: 0,
                            opacity: [0,1],
                            easing: "easeOutExpo",
                            duration: 1200,
                            delay: (el, i) => 500 + 30 * i
                        }).add({
                            targets: '.qoute .letter',
                            translateX: [0,-30],
                            opacity: [1,0],
                            easing: "easeInExpo",
                            duration: 1100,
                            delay: (el, i) => 100 + 30 * i
                        });                     


                        var popupViews = document.querySelectorAll('.popup-view');
                        var popupBtns = document.querySelectorAll('.popup-btn');
                        var closeBtns = document.querySelectorAll('.close-btn');
                    
                      
                        var popup = function(popupClick){
                          popupViews[popupClick].classList.add('active');
                        }
                    
                        popupBtns.forEach((popupBtn, i) => {
                          popupBtn.addEventListener("click", () => {
                            popup(i);
                          });
                        });
                    
                        
                        closeBtns.forEach((closeBtn) => {
                          closeBtn.addEventListener("click", () => {
                            popupViews.forEach((popupView) => {
                              popupView.classList.remove('active');
                            });
                          });
                        });
                  
                  
                    
                    const select = (el, all = false) => {
                      el = el.trim()
                      if (all) {
                        return [...document.querySelectorAll(el)]
                      } else {
                        return document.querySelector(el)
                      }
                    }
                  
                    const on = (type, el, listener, all = false) => {
                      let selectEl = select(el, all)
                      if (selectEl) {
                        if (all) {
                          selectEl.forEach(e => e.addEventListener(type, listener))
                        } else {
                          selectEl.addEventListener(type, listener)
                        }
                      }
                    }
                  
                        window.addEventListener('load', () => {
                      let menuContainer = select('.menu-container');
                      if (menuContainer) {
                        let menuIsotope = new Isotope(menuContainer, {
                          itemSelector: '.menu-item',
                          layoutMode: 'fitRows'
                        });
                  
                        let menuFilters = select('#menu-flters li', true);
                  
                        on('click', '#menu-flters li', function(e) {
                          e.preventDefault();
                          menuFilters.forEach(function(el) {
                            el.classList.remove('filter-active');
                          });
                          this.classList.add('filter-active');
                  
                          menuIsotope.arrange({
                            filter: this.getAttribute('data-filter')
                          });
                          menuIsotope.on('arrangeComplete', function() {
                            AOS.refresh()
                          });
                        }, true);
                      }
                  
                    });
                  
                      
