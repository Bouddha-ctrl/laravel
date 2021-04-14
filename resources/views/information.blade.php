<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/frontend/css/page2.css">
        <title>General infromation</title>
    </head>
    <body style="background-color: #f5f5f0">
        
        <header>
            <div class="logo">
                COVID-19 
                <em> TRACKER </em>
            </div>
            <nav class="nav">
                <ul>
                    <a href="/statistiques"><span class="navitem">Statistiques</span></a>  
                    <a href="/information" class="active"><span class="navitem">Information</span></a>
                </ul>
            </nav>
        </header>
        <div class="header-space"></div>
        <div class="info_container">
            
            <h3>Développeur</h3>
            <hr/> 
            <div class="devlopper">
                <div class="information-personnel">
                    <table class="information-table">
                        <tr><td>Nom et prénom :</td><td> Miri Mohamed</td></tr>
                        <tr><td>Niveau :</td> <td>2ème année cycle d'ingenieur en informatique</td></tr>
                        <tr><td>Ecole :</td><td> <a href="https://ensah.ma/" target="_blank" alt="ensah.ma">ENSA AL Hoceima</a></td>
                        <tr><td>LinkedIn :</td> <td><a href="https://www.linkedin.com/in/mohamed-miri-37299a163/" target="_blank">Mohamed Miri</a> </tr>
                    </table>
                </div>
                <div class="photo">
                    <img class="img" src="frontend/images/myphoto.jpg" alt="myphoto"/>
                </div>
            </div>

            <hr/> 
            <h3>API utilisé </h3>
            <hr/>   
            <h4>API de la barre : </h4>
            <span class="code">
                <span class="icon orange">URL</span> 
                https://rapidapi.com/vaccovidlive-vaccovidlive-default/api/vaccovid-coronavirus-vaccine-and-treatment-tracker
                <br/>
                
                <h4>Les données d'un pays spécifique :</h4>
                <span class="icon">GET</span> https://vaccovid-coronavirus-vaccine-and-treatment-tracker.p.rapidapi.com/api/npm-covid-data/country-report-iso-based/:country/:iso3
                <br/>
                
                <h4>Les données de tous les pays cumulé (global) :</h4>
                <span class="icon">GET</span> https://vaccovid-coronavirus-vaccine-and-treatment-tracker.p.rapidapi.com/api/npm-covid-data/world
            </span>
            <br/>
            <h4>API des graphes : </h4>
            <span class="code">
                <span class="icon orange">URL</span> 
                https://about-corona.net/documentation                
                <br/>

                <h4>Les données quotidiennes d'un pays spécifique du 3/2020 - Aujourd'hui:</h4>
                <span class="icon">GET</span> https://corona-api.com/countries/:iso2
                <br/>

                <h4>Les données quotidiennes Global du 3/2020 - Aujourd'hui:</h4>
                <span class="icon">GET</span> 
                https://corona-api.com/timeline"
            </span>

            <br/>
            <h4>API du tableau : </h4>
            <span class="code">
                <span class="icon orange">URL</span> 
                https://rapidapi.com/vaccovidlive-vaccovidlive-default/api/vaccovid-coronavirus-vaccine-and-treatment-tracker
                <br/>

                <h4>Liste de données de tous les pays (219 pays)</h4>
                <span class="icon">GET</span> 
                https://vaccovid-coronavirus-vaccine-and-treatment-tracker.p.rapidapi.com/api/npm-covid-data/countries                
            </span>
            <br/>
            <h4>API des nouvelles : </h4>
            <span class="code">
                <span class="icon orange">URL</span> 
                https://newsapi.org/docs/endpoints/top-headlines
                <br/>
                
                <h4>Les dernières nouvelles du santé d'un pays spécifique</h4>
                <span class="icon">GET</span> 
                http://newsapi.org/v2/top-headlines?country=:country&category=health&apiKey=XXX              
                <br/>

                <h4>Les dernières nouvelles du Covid-19 dans le monde (Alternative si un pays n'existe pas dans l'api)</h4>
                <span class="icon">GET</span> 
                http://newsapi.org/v2/everything?q=covid19&apiKey=XXX
            </span>
            <br/>
            <hr/> 
            <h3>Téchnologie  </h3>
            <hr/> 
            <ul>
                <li>HTML5</li>
                <li>CSS3</li>
                <li>JavaScript</li>
                <li>Laravel 8</li>
            </ul>
            <br/>
            
            
        </div>
        <br/>
        <footer>
            <div class="footer">
                Copyright © 2021 Covid-19 - par MIRI Mohamed, Etudiant de: <a href="ensah.ma">Ensah.ma</a>
            </div>
        </footer>
    </body>
</html>