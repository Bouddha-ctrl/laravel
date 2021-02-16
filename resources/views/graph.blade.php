
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/page2.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>

</head>
<?php 

?>
<div class="graph">
    

    <form action="">
        <select id="type"  onchange="OnSelectionChange()">


                        <option value="0" selected>New cases</option>
                        <option value="1" >New recovred</option>
                        <option value="2" >New deaths</option>

        </select>
    </form>
    <canvas id="myChart" width="600" height="420"></canvas>


</div>
<script>
    var type=4;
    var data = <?php echo json_encode($StatArray); ?>;
    var Titles = ['New cases', 'New recovred', 'New deaths'];


    chartIT();
    async function OnSelectionChange()
    {
    var e = document.getElementById("type");
    type = e.value;
    chartIT();
    }

    async function chartIT()
    {
        await OnSelectionChange();
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                
                labels: data[0],
                datasets: [{
                    axisY:{    
                        valueFormatString:  "#,##0.##",
                    },
                    label: Titles[type],
                    data: data[type+4],
                    fill : false,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                    ],

                    borderColor: [
                        'rgba(255, 99, 132, 0.2)',
                    ],

                    hoverBackgroundColor: 
                    'rgba(240, 52, 52, 1)',
                    
                    borderWidth: 1
                    
                }]
            },
            options: {
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
                            beginAtZero: true
                        }
                    }],
                    xAxes: [{ 
                        gridLines: {
                            display:false
                        } 
                    }]
                }
            }
        });

    }
</script>
