<?php
// Simulação de dados (não usados no JS, só pra exibir respostas)
$dados = [
    "respostas" => [
        "Achei o conteúdo interessante e fácil de entender.",
        "Gostaria de mais exemplos práticos.",
        "O design da plataforma é agradável.",
        "Tive dificuldade na parte de login."
    ]
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Dashboard - Pesquisa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <style>
        .chart-container {
            width: 100%;
            height: 400px;
        }
    </style>
</head>
<body class="bg-light">
<div class="container-fluid p-4">
    <h2 class="text-center mb-4">📊 Dashboard de Resultados</h2>
    
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">Gráfico 1</div>
                <div class="card-body">
                    <div id="chart_div_1" class="chart-container"></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">Gráfico 2</div>
                <div class="card-body">
                    <div id="piechart_2" class="chart-container"></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header bg-warning text-dark">Gráfico 3</div>
                <div class="card-body">
                    <div id="piechart_3" class="chart-container"></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header bg-danger text-white">Gráfico 4</div>
                <div class="card-body">
                    <div id="barchart_material_4" class="chart-container"></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header bg-info text-white">Gráfico 5</div>
                <div class="card-body">
                    <div id="columnchart_values_5" class="chart-container"></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header bg-secondary text-white">Gráfico 6</div>
                <div class="card-body">
                    <div id="linechart_material_6" class="chart-container"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-dark text-white">🗒 Respostas Abertas</div>
            <div class="card-body" style="max-height: 300px; overflow-y: auto;">
                <?php foreach ($dados["respostas"] as $resposta): ?>
                    <div class="border-bottom py-2">
                        <?= htmlspecialchars($resposta) ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<script>
    google.charts.load('current', { packages: ['corechart', 'bar', 'line'] });
    google.charts.setOnLoadCallback(drawAllCharts);

    function drawAllCharts() {
        drawChart1();
        drawChart2();
        drawChart3();
        drawChart4();
        drawChart5();
        drawChart6();
    }

    function drawChart1() {
        var data = google.visualization.arrayToDataTable([
            ['Month', 'Bolivia', 'Ecuador', 'Madagascar', 'Papua New Guinea', 'Rwanda', 'Average'],
            ['2004/05', 165, 938, 522, 998, 450, 614.6],
            ['2005/06', 135, 1120, 599, 1268, 288, 682],
            ['2006/07', 157, 1167, 587, 807, 397, 623],
            ['2007/08', 139, 1110, 615, 968, 215, 609.4],
            ['2008/09', 136, 691, 629, 1026, 366, 569.6]
        ]);

        var options = {
            title: 'Monthly Coffee Production by Country',
            vAxis: { title: 'Cups' },
            hAxis: { title: 'Month' },
            seriesType: 'bars',
            series: { 5: { type: 'line' } }
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div_1'));
        chart.draw(data, options);
    }

    function drawChart2() {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Work', 11],
            ['Eat', 2],
            ['Commute', 2],
            ['Watch TV', 2],
            ['Sleep', 7]
        ]);

        var options = { title: 'My Daily Activities' };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_2'));
        chart.draw(data, options);
    }

    function drawChart3() {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Work', 11],
            ['Eat', 2],
            ['Commute', 2],
            ['Watch TV', 2],
            ['Sleep', 7]
        ]);

        var options = { title: 'My Daily Activities' };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3'));
        chart.draw(data, options);
    }

    function drawChart4() {
        var data = google.visualization.arrayToDataTable([
            ['Year', 'Sales', 'Expenses', 'Profit'],
            ['2014', 1000, 400, 200],
            ['2015', 1170, 460, 250],
            ['2016', 660, 1120, 300],
            ['2017', 1030, 540, 350]
        ]);

        var options = {
            chart: {
                title: 'Company Performance',
                subtitle: 'Sales, Expenses, and Profit: 2014-2017'
            },
            bars: 'horizontal'
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material_4'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
    }

    function drawChart5() {
        var data = google.visualization.arrayToDataTable([
            ["Element", "Density", { role: "style" }],
            ["Copper", 8.94, "#b87333"],
            ["Silver", 10.49, "silver"],
            ["Gold", 19.30, "gold"],
            ["Platinum", 21.45, "color: #e5e4e2"]
        ]);

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
            {
                calc: "stringify",
                sourceColumn: 1,
                type: "string",
                role: "annotation"
            },
            2
        ]);

        var options = {
            title: "Density of Precious Metals, in g/cm^3",
            width: '100%',
            height: 400,
            bar: { groupWidth: "95%" },
            legend: { position: "none" }
        };

        var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values_5"));
        chart.draw(view, options);
    }

    function drawChart6() {
        var data = new google.visualization.DataTable();
        data.addColumn('number', 'Day');
        data.addColumn('number', 'Guardians of the Galaxy');
        data.addColumn('number', 'The Avengers');
        data.addColumn('number', 'Transformers: Age of Extinction');

        data.addRows([
            [1, 37.8, 80.8, 41.8],
            [2, 30.9, 69.5, 32.4],
            [3, 25.4, 57, 25.7],
            [4, 11.7, 18.8, 10.5],
            [5, 11.9, 17.6, 10.4],
            [6, 8.8, 13.6, 7.7],
            [7, 7.6, 12.3, 9.6],
            [8, 12.3, 29.2, 10.6],
            [9, 16.9, 42.9, 14.8],
            [10, 12.8, 30.9, 11.6],
            [11, 5.3, 7.9, 4.7],
            [12, 6.6, 8.4, 5.2],
            [13, 4.8, 6.3, 3.6],
            [14, 4.2, 6.2, 3.4]
        ]);

        var options = {
            chart: {
                title: 'Box Office Earnings in First Two Weeks of Opening',
                subtitle: 'in millions of dollars (USD)'
            },
            width: '100%',
            height: 400,
            axes: {
                x: {
                    0: { side: 'bottom' }
                }
            }
        };

        var chart = new google.charts.Line(document.getElementById('linechart_material_6'));
        chart.draw(data, google.charts.Line.convertOptions(options));
    }
</script>
</body>
</html>
