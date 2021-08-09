/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/admin.js ***!
  \*******************************/
document.querySelectorAll('.sidebar-submenu').forEach(function (e) {
  e.querySelector('.sidebar-menu-dropdown').onclick = function (event) {
    event.preventDefault();
    e.querySelector('.sidebar-menu-dropdown .dropdown-icon').classList.toggle('active');
    var dropdown_content = e.querySelector('.sidebar-menu-dropdown-content');
    var dropdown_content_list = dropdown_content.querySelectorAll('li');
    var active_height = dropdown_content_list[0].clientHeight * dropdown_content_list.length;
    dropdown_content.classList.toggle('active');
    dropdown_content.style.height = dropdown_content.classList.contains('active') ? active_height + 'px' : '0';
  };
}); // MENU TOGGLE

var overlay = document.querySelector('.overlay');
var sidebar = document.querySelector('.sidebar');

document.querySelector('#mobile-toggle').onclick = function () {
  sidebar.classList.toggle('active');
  overlay.classList.toggle('active');
};

document.querySelector('#sidebar-close').onclick = function () {
  sidebar.classList.toggle('active');
  overlay.classList.toggle('active');
};
/******/ })()
;