const ctx2 = document.getElementById('myElectricityChart');

new Chart(ctx2, {
    type: 'doughnut',
    data: {
      labels: ['1st Floor ', '2nd Floor', 'Ground Floor', 'Auditorium', 'Outdoors'],
      datasets: [{
        label: 'Sources of Electricity Usage',
        data: [15, 15, 2, 7, 8],
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