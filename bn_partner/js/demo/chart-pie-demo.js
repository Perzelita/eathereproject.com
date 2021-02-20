// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

import { count_wait } from './chat_pie_count_kyc.js.php';
var val =count_wait;
console.log(val);

import { count_accept } from './chat_pie_count_kyc.js.php';
var val= count_accept;
console.log(val);

import { count_decline } from './chat_pie_count_kyc.js.php';
var val= count_decline;
console.log(val);

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["รอสถานะการยืนยัน", "รับเป็นสมาชิก", "ปฏิเสธเป็นสมาชิก"],
    datasets: [{
      data: [count_wait(), count_accept(), count_decline()],
      backgroundColor: ['#f6c23e', '#1cc88a', '#e74a3b'],
      hoverBackgroundColor: ['#f6c23e', '#1cc88a', '#e74a3b'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
