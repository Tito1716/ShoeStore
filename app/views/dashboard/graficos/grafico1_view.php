
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Productos por categoría mujeres'
        },
        xAxis: {
            categories: [
                <?php
                    require_once("../../app/models/database.class.php");
                    $sql="SELECT Cantidad, modelo from producto INNER JOIN tipo_producto ON tipo_producto.Id_tipo_p=producto.tipo_producto_p AND producto.tipo_producto_p=?";
                    $params = array(1); 
                    $data = Database::getRows($sql, $params);
                    foreach($data as $row){
                        echo "['$row[modelo]', $row[Cantidad]],";
                    } 
                ?>
            ]
        },
        yAxis: {
            min: 0,
            title: {
                text: ''
            }
        },
        legend: {
            reversed: true
        },
        plotOptions: {
            series: {
                stacking: 'normal'
            }
        },
        series: [{
            name: 'cantidad',
            data: [
                <?php
                require_once("../../app/models/database.class.php");
                 $sql="SELECT Cantidad from producto INNER JOIN tipo_producto ON tipo_producto.Id_tipo_p=producto.tipo_producto_p AND producto.tipo_producto_p=?";
                 $params = array(1); 
                 $data = Database::getRows($sql, $params);
                 foreach($data as $row){
                     echo "$row[Cantidad],";
                 }
             ?>
            ]
        },
        ]
    });
});
		</script>
	</head>
	<body>
<div id="container" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>

	</body>
</html>