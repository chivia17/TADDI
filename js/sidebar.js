/*
==========================
Vertical Responsive Menu
==========================
*/

'use strict';


var tid = setInterval( function () {
  if ( document.readyState !== 'complete' ) return;
  clearInterval( tid );


  var querySelector = document.querySelector.bind(document);

  var nav = document.querySelector('.vertical_nav');
  var wrapper = document.querySelector('.wrapper');

  var menu = document.getElementById("js-menu");
  var subnavs = menu.querySelectorAll('.menu-item_has_sub_menu');
	
  // Toggle menu click
  querySelector('.toggle_menu').onclick = function () {

    nav.classList.toggle('vertical_nav-opened');

    wrapper.classList.toggle('toggle_content');

  };

  // Abrir sub-menús
  for (var i = 0; i < subnavs.length; i++) {

    if (subnavs[i].classList.contains('menu-item_has_sub_menu') ) {

      subnavs[i].addEventListener('click', function (e) {

        for (var j = 0; j < subnavs.length; j++) {

          if(this != subnavs[j])
            subnavs[j].classList.remove('menu_subitems-opened');
          

        }

        this.classList.toggle('menu_subitems-opened');

      }, false);

    }
  }


}, 100 );

