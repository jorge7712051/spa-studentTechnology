$(document).ready(function() {
  
    const data = {
      labels: [
        'Lenguajes de programacion',
        'Plataformas',
        'Inteligencia artifical',
        'Bases de Datos'
      ],
      datasets: [{
        label: 'My First Dataset',
        data: [250, 100, 50,80],
        backgroundColor: [
          'rgb(255, 99, 132)',
          'rgb(54, 162, 235)',
          'rgb(255, 205, 86)',
          'rgb(224, 64, 251)'
        ],
        hoverOffset: 4
      }]
    };
    
    const config = {
      type: 'doughnut',
      data: data,
      options: {
        layaout:{
            padding: 300
        },
        plugins: {
            title: {
                display: true,
                text: 'Sector Tecnologico mas solicitado'
            }
        }
       
      }
    };
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );


    const labels =['C#','PHP','Docker','Javascript','MSSQL','Python','Cisco'];
    const data2 = {
      labels: labels,
      datasets: [{
        label: 'Tecnologias',
        data: [65, 59, 80, 81, 56, 55, 40],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(255, 205, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(201, 203, 207, 0.2)'
        ],
        borderColor: [
          'rgb(255, 99, 132)',
          'rgb(255, 159, 64)',
          'rgb(255, 205, 86)',
          'rgb(75, 192, 192)',
          'rgb(54, 162, 235)',
          'rgb(153, 102, 255)',
          'rgb(201, 203, 207)'
        ],
        borderWidth: 1
      }]
    };

    const config2 = {
        type: 'bar',
        data: data2,
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          },
          plugins: {
            title: {
                display: true,
                text: 'Tecnologias mas solicitadas'
            }
        }

        },
      };

      const topTech = new Chart(
        document.getElementById('topTech'),
        config2
      );

      const labels2 = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio','Julio'];
      const data3 = {
        labels: labels2,
        datasets: [{
          label: 'Encuesta',
          data: [65, 59, 80, 81, 56, 55, 45],
          fill: false,
          borderColor: 'rgb(75, 192, 192)',
          tension: 0.1
        }]
        
      };

      const config3 = {
        type: 'line',
        data: data3,
        options: {
            
            plugins: {
              title: {
                  display: true,
                  text: 'Encuestas realizadas por mes'
              }
          }
  
          },
      };
      const myChartQuiz = new Chart(
        document.getElementById('myChartQuiz'),
        config3
      );
  
  });
  