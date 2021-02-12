
<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: '5 productos más vendidos'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Categorias',
            data: [
                <?php
                    $sql="SELECT modelo,producto.Cantidad FROM producto INNER JOIN detalle_pedido On detalle_pedido.Id_producto=producto.Id_producto GROUP by modelo ORDER by producto.Cantidad ASC LIMIT 5";
                    $params = array(); 
                    $data = Database::getRows($sql, $params);
                    foreach($data as $row){
                        echo "['$row[modelo]', $row[Cantidad]],";
                    } 
                ?>
            ]
        }]
    });
});


		</script>
	</head>
	<body>
<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>

	</body>
</html>