const ctx = document.getElementById('myWaterChart');

new Chart(ctx, {
  type: 'polarArea',
  data: {
    labels: ['Washroom 1', 'Washroom 2', 'Homescience', 'Washroom 3', 'Washroom 4', 'Washroom 5'],
    datasets: [{
      label: 'Sources of Water Usage',
      data: [12, 19, 3, 5, 2, 3],
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