const ctx3 = document.getElementById('myCarbonChart');

new Chart(ctx3, {
    type: 'doughnut',
    data: {
      labels: ['January', 'February', 'March', 'April', 'May', 'June'],
      datasets: [{
        label: 'Carbon levels in our environment',
        data: [20, 19, 16, 34, 10],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });