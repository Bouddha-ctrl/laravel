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
            <h2>CORONA Extra</h2>
        </div>
        <nav class="nav">
            <div class="navItem">Page 1</div>
            <div class="navItem">Page 2</div>
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
            
                <div class="table_title">
                    Statistic per country 
                </div>
                @yield('table')
            
        </div>
    </main>
    <footer>
        @yield('footer')
    </footer>
</body>
</html>