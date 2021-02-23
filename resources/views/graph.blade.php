
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/page2.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>

</head>

<div class="graph_container">
    <div class="graph1">  

        <form action="">
            <select id="type"  onchange="OnSelectionChange()">

                            <option value="0" selected>New cases</option>
                            <option value="1" >New recovred</option>
                            <option value="2" >New deaths</option>

            </select>
        </form>
        <canvas id="myChart" width="600" height="420"></canvas>
        <script src="/js/graph.js" data={{json_encode($StatArray)}}></script>

    </div>
</div>

