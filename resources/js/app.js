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
require('jquery-migrate/dist/jquery-migrate.min');
require('popper.js');
require('bootstrap');
require('./components/landing/jquery.easing.1.3');
require('./components/landing/jquery.waypoints.min');
require('./components/landing/jquery.stellar');
require('owl.carousel/dist/owl.carousel');
require('./components/landing/jquery.magnific-popup.min');
window.AOS = require('./components/landing/aos');
require('./components/landing/jquery.animateNumber.min');
require('./components/landing/scrollax.min');
require('./components/landing/bootstrap-datepicker');
require('./components/landing/jquery.timepicker.min');
require('./components/landing/main');
