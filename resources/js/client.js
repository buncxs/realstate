import './bootstrap';

import Alpine from 'alpinejs';
import jQuery from 'jquery';
import toastr from 'toastr';


window.$ = jQuery;
window.Alpine = Alpine;
window.toastr = toastr;

Alpine.start();