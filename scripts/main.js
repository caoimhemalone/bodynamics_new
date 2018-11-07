 // Author: Caoimhe Malone (key-vah) 

// For nav items
//home
$("#homeNav").click(function() {
    $('html, body').animate({
        scrollTop: $("#home").offset().top
    }, 1000);
});

//memberships
$("#membershipsNav").click(function() {
    $('html, body').animate({
        scrollTop: $("#memberships").offset().top
    }, 1000);
});

//team
$("#teamNav").click(function() {
    $('html, body').animate({
        scrollTop: $("#team").offset().top
    }, 1000);
});

//timetable
$("#timetableNav").click(function() {
    $('html, body').animate({
        scrollTop: $("#timetable").offset().top
    }, 1000);
});

//about
$("#aboutNav").click(function() {
    $('html, body').animate({
        scrollTop: $("#about").offset().top
    }, 1000);
});

//blog
$("#blogNav").click(function() {
    $('html, body').animate({
        scrollTop: $("#blog").offset().top
    }, 1000);
});

//For input fields 

( function( window ) {

'use strict';

// class helper functions from bonzo https://github.com/ded/bonzo

function classReg( className ) {
  return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
}

// classList support for class management
// altho to be fair, the api sucks because it won't accept multiple classes at once
var hasClass, addClass, removeClass;

if ( 'classList' in document.documentElement ) {
  hasClass = function( elem, c ) {
    return elem.classList.contains( c );
  };
  addClass = function( elem, c ) {
    elem.classList.add( c );
  };
  removeClass = function( elem, c ) {
    elem.classList.remove( c );
  };
}
else {
  hasClass = function( elem, c ) {
    return classReg( c ).test( elem.className );
  };
  addClass = function( elem, c ) {
    if ( !hasClass( elem, c ) ) {
      elem.className = elem.className + ' ' + c;
    }
  };
  removeClass = function( elem, c ) {
    elem.className = elem.className.replace( classReg( c ), ' ' );
  };
}

function toggleClass( elem, c ) {
  var fn = hasClass( elem, c ) ? removeClass : addClass;
  fn( elem, c );
}

var classie = {
  // full names
  hasClass: hasClass,
  addClass: addClass,
  removeClass: removeClass,
  toggleClass: toggleClass,
  // short names
  has: hasClass,
  add: addClass,
  remove: removeClass,
  toggle: toggleClass
};

// transport
if ( typeof define === 'function' && define.amd ) {
  // AMD
  define( classie );
} else {
  // browser global
  window.classie = classie;
}

})( window );

function formFunction() {
	    document.getElementById("contactForm").submit();

}