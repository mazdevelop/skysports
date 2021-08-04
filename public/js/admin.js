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
}); // CHART CUSTOMER

var customer_options = {
  series: [{
    name: 'Store Customer',
    data: [31, 40, 28, 51, 42, 109, 100]
  }, {
    name: 'Online Customer',
    data: [11, 32, 45, 32, 34, 52, 41]
  }],
  colors: ['#F08FC0', '#DF5E5E'],
  chart: {
    height: 350,
    type: 'area'
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    curve: 'smooth'
  },
  xaxis: {
    type: 'datetime',
    categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
  },
  tooltip: {
    x: {
      format: 'dd/MM/yy HH:mm'
    }
  },
  legend: {
    position: 'top'
  }
};
var customer_chart = new ApexCharts(document.querySelector("#customer-chart"), customer_options);
customer_chart.render(); // CHART CATEGORY

var category_options = {
  series: [44, 55, 41, 17],
  label: ['Cloths', 'Devices', 'Bags', 'Watches'],
  chart: {
    width: 380,
    type: 'donut'
  },
  color: ['#6ab04c', '#2980b9', '#f39c12', '#d35400'],
  plotOptions: {
    pie: {
      startAngle: -90,
      endAngle: 270
    }
  },
  fill: {
    type: 'gradient'
  },
  legend: {
    formatter: function formatter(val, opts) {
      return val + " - " + opts.w.globals.series[opts.seriesIndex];
    }
  },
  title: {
    text: 'Gradient Donut with custom Start-angle'
  },
  responsive: [{
    breakpoint: 480,
    options: {
      chart: {
        width: 200
      },
      legend: {
        position: 'bottom'
      }
    }
  }]
};
var category_chart = new ApexCharts(document.querySelector("#category-chart"), category_options);
category_chart.render(); // DARK MODE TOGGLE

setDarkChart = function setDarkChart(dark) {
  var theme = {
    theme: {
      mode: dark ? 'dark' : 'light'
    }
  };
  category_chart.updateOptions(theme);
  customer_chart.updateOptions(theme);
};

var darkmode_toggle = document.querySelector('#darkmode-toggle');

darkmode_toggle.onclick = function (e) {
  e.preventDefault();
  document.querySelector('body').classList.toggle('dark');
  darkmode_toggle.querySelector('.darkmode-switch').classList.toggle('active');
  setDarkChart(document.querySelector('body').classList.contains('dark'));
}; // MENU TOGGLE


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