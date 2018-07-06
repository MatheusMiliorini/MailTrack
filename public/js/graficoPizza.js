function graficoPizza(lido,nao_lido) {
    var ctx = document.getElementById("percent-chart2");
    if (ctx) {
    ctx.height = 209;
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
        datasets: [
            {
            label: "My First dataset",
            data: [lido, nao_lido],
            backgroundColor: [
                '#00b5e9',
                '#fa4251'
            ],
            hoverBackgroundColor: [
                '#00b5e9',
                '#fa4251'
            ],
            borderWidth: [
                0, 0
            ],
            hoverBorderColor: [
                'transparent',
                'transparent'
            ]
            }
        ],
        labels: [
            'Read',
            'Not read'
        ]
        },
        options: {
        maintainAspectRatio: false,
        responsive: true,
        cutoutPercentage: 87,
        animation: {
            animateScale: true,
            animateRotate: true
        },
        legend: {
            display: false,
            position: 'bottom',
            labels: {
            fontSize: 14,
            fontFamily: "Poppins,sans-serif"
            }
  
        },
        tooltips: {
            titleFontFamily: "Poppins",
            xPadding: 15,
            yPadding: 10,
            caretPadding: 0,
            bodyFontSize: 16,
        }
        }
    });
    }
  }