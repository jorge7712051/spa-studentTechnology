<?php
require_once dirname(__FILE__, 3) . '/config/config.php';
?>

<div class="row ">
    <div class="col s12 center-align">
        <h6>Analisis de Muestra</h6>
    </div>
</div>
<div class="row valign-wrapper">
    <div class="col s4 ">
        <canvas id="myChart" ></canvas>
    </div>
    <div class="col s8 valign-wrapper">
        <canvas id="topTech"></canvas>
    </div>
</div>
<div class="row">
    <div class="col s6 offset-s3">
        <canvas id="myChartQuiz" ></canvas>
    </div>
    
</div>





<script src="<?php echo ROOTMODULE . "/public/js/charm.js"; ?>"></script>