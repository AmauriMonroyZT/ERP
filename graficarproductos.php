<script src="js/Chart.min.js"></script>
<link rel="stylesheet" type="text/css" href="estilograficas.css">
<canvas id="myChart"></canvas>
<script>
<?php 
    require_once("grafiproductos.php");
    $obj = new Productos();
    $nombres = $obj->nombres();
    $cantidades = $obj->cantidades();
 ?>
var ctx = document.getElementById('myChart').getContext('2d');

var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [ <?php echo $nombres; ?> ],
        datasets: [{
            label: 'Gráfica de Materias',
            data: [ <?php echo $cantidades; ?> ],
            backgroundColor: "rgba(100,100,255,0.5)",
            borderColor: "blue",
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
<a href="index.php">Inicio</a>
</section>