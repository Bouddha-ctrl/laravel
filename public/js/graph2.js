

var data = document.currentScript.getAttribute('data');
data = JSON.parse(data);

var Titles = [['#fdb4b4'], ['New recovred','#c6f6d5'], ['New deaths','#ccd7e5']];

var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    
    data: {
        
        labels: data[0],
        datasets: [{
            
            label: "Confirmed",
            data: data[1],
            fill : false,
            backgroundColor: 
                '#fdb4b4'
            ,
            hoverBackgroundColor: 
            'rgba(240, 52, 52, 1)',
            pointRadius: 0,
            borderWidth: 2,
            borderColor: '#fdb4b4'

        },
        {
            label: "Deaths",
            data: data[2],
            fill : false,
            backgroundColor: 
                '#ccd7e5'
            ,
            hoverBackgroundColor: 
            'rgba(240, 52, 52, 1)',
            pointRadius: 0,
            borderWidth: 2,
            borderColor: '#ccd7e5'

        },
        {
            label: "Recovered",
            data: data[3],
            fill : false,
            backgroundColor: 
                '#c6f6d5'
            ,
            hoverBackgroundColor: 
            'rgba(240, 52, 52, 1)',
            pointRadius: 0,
            borderWidth: 2,
            borderColor: '#c6f6d5'

        },
        {
            label: "Actives",
            data: data[7],
            fill : false,
            backgroundColor: 
                '#ffcc80'
            ,
            hoverBackgroundColor: 
            'rgba(240, 52, 52, 1)',
            pointRadius: 0,
            borderWidth: 2,
            borderColor: '#ffcc80'

        }
        ]
    },
    options: {
        legend : {
            
        },
        responsive: false,
        tooltips: {
        mode: 'index',
        intersect: false
        },
        hover: {
            mode: 'index',
            intersect: false,
            axis: 'x'
        },
        scales: {
            yAxes: [{
                ticks: {
                    callback: function(label, index, labels) {
                        if (label >= 1000) 
                            return label/1000+'k';
                        return label;
                    },
                    beginAtZero: true,
                },
                gridLines: {
                    zeroLineColor: 'rgba(0, 0, 0, 1)',
                    zeroLineWidth:1,
                    borderColor : 'rgba(200, 0, 0, 1)',
                    borderWidth: 10,
                    
                    drawTicks: false
                },
            }],
            xAxes: [{ 
                
                ticks: {
                    autoSkip: true,
                    maxTicksLimit: 18
                },
                gridLines: {
                    
                    display : false,

                } 
            }]
        }
    }
});

