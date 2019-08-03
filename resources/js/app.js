/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

window.$ = window.jQuery = require('jquery');

require('popper.js');
require('bootstrap');
//require('./components/Example');
require('./components/jquery.easing.1.3');
require('./components/jquery.waypoints.min');
require('./components/jquery.stellar');
require('owl.carousel/dist/owl.carousel');
require('./components/jquery.magnific-popup.min');
window.AOS = require('./components/aos');
require('./components/jquery.animateNumber.min');
require('./components/scrollax');
require('./components/main');
