import './bootstrap';

import '../assets/vendors/core/core.js';
import '../assets/vendors/flatpickr/flatpickr.min.js';
import '../assets/vendors/apexcharts/apexcharts.min.js';
import '../assets/vendors/feather-icons/feather.min.js';
import '../assets/js/template.js';
import '../assets/js/dashboard-light.js';


import Alpine from 'alpinejs';
import jQuery from 'jquery';
import toastr from 'toastr';


window.$ = jQuery;
window.Alpine = Alpine;
window.toastr = toastr;

Alpine.start();
