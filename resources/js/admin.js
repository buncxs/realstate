import './bootstrap';

import '../assets/admin/vendors/core/core.js';
import '../assets/admin/vendors/flatpickr/flatpickr.min.js';
import '../assets/admin/vendors/apexcharts/apexcharts.min.js';
import '../assets/admin/vendors/feather-icons/feather.min.js';
import '../assets/admin/js/template.js';
import '../assets/admin/js/dashboard-light.js';

import Alpine from 'alpinejs';
import jQuery from 'jquery';
import toastr from 'toastr';

window.$ = jQuery;
window.Alpine = Alpine;
window.toastr = toastr;

Alpine.start();
