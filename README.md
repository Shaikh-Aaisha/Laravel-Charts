<h1>Laravel Chart using <b>larapex chart Library</b></h1>

## About

"php": "^7.4|^8.0"
"laravel": "9"
Library
"name": "arielmejiadev/larapex-charts"
"version": "5.2.0"

## Steps

1- Add larapex charts using composer to your project<br>
    composer require arielmejiadev/larapex-charts<br>
2- In terminal execute this command:<br>
    php artisan vendor:publish --tag=larapex-charts-config<br>
3- Create a chart<br>
    php artisan make:chart MonthlyUsersChart<br>
4- Then select a chart type:<br>
    - [x] Pie Chart<br>
    - [ ] Donut Chart<br>
    - [ ] Radial Bar Chart<br>
    - [ ] Polar Area Chart<br>
    - [ ] Line Chart<br>
    - [ ] Area Chart<br>
    - [ ] Bar Chart<br>
    - [ ] Horizontal Bar Chart<br>
    - [ ] HeatMap Chart<br>
    - [ ] Radar Chart<br>
 5- Now you are able to see the chart file in app/Charts/MonthlyUsersChart.php<br>
    https://larapex-charts.netlify.app/2-simple-example/<br>
6- Create a controller<br>
    php artisan make:controller UserController -r<br>
7- On app/Http/Controllers/UserController.php inject the chart object:<br>
    https://larapex-charts.netlify.app/2-simple-example/<br>
8- Add this route on routes/web.php<br>
    https://larapex-charts.netlify.app/2-simple-example/<br>
9- Add the chart to a view<br>
    Copy and paste this layout, it is using tailwindcss, but you can use any css styles.<br>
    It adds $chart->container(), $chart->cdn() and $chart->script() methods, to render a chart.<br>
    https://larapex-charts.netlify.app/2-simple-example/<br>
    
 <b>These are the steps.If you want to make different charts in your project select your respective option while making chart.</b>



