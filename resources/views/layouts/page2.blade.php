<?php
    $CurCountry = $_SERVER['REQUEST_URI'];
    $CurCountry=explode('/',$CurCountry);
    $CurCountry=end($CurCountry);
    $CurCountry=str_replace("%20"," ",$CurCountry);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/page2.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <title>statistique</title>
</head>
<body>
    <header class="site-header"> 
        <div class="logo">
            <h2>COVID-19 </h2>
            <h2 style="padding-left:4px;color: blue;"> Tracker</h2>
        </div>
        <nav class="nav">
            <div class="navItem"></div>
            <div class="navItem"></div>
        </nav>
    </header>

    <main>

        <div class="barre"> 
            @yield('barre')
        </div>

        <div class="container"> 
            <div class="item">
                <div class="itemTop">
                    Cumulative spread trends
                </div>
                <div class="itemBot">
                    @yield('graph2')
                </div>
            </div>
            <div class="item">
                <div class="itemTop">
                    Daily spread trends
                </div>
                <div class="itemBot">
                    @yield('graph1')
                </div>
            </div>
            
        </div>

        <div >
            @if ($CurCountry=='Global')
                <div class="table_title">
                    Statistic per country 
                </div>
                @yield('table')
            @else
                <div class="table_title">
                        Global Corona virus News 
                    
                </div>
                <div class="BigNews">
                    @yield('news')
                </div>
            @endif
            
        </div>
        <div style="height: 1px"></div>
    </main>

    <footer>
        @yield('footer')
    </footer>
</body>
</html>