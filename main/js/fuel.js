const ctx4 = document.getElementById('myFuelChart');

new Chart(ctx4, {
  type: 'polarArea',
  data: {
    labels: ['Bus No 1', 'Bus No 2', 'Bus No 3', 'Bus No 4', 'Bus No 5', 'Bus No 6'],
    datasets: [{
      label: 'Fuel consumption in L',
      data: [42, 43, 48, 52, 59, 36],
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