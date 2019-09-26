require('./bootstrap');

window.$ = window.jQuery = require('jquery');
require('popper.js/dist/popper.min');
require('bootstrap/dist/js/bootstrap.min');
require('pace-progress/pace.min');
require('perfect-scrollbar/dist/perfect-scrollbar.min');
require('@coreui/coreui/dist/js/coreui.min');
window.CustomTooltips = require('./components/dashboard/Chart.min');
require('@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min');
require('./components/dashboard/main');