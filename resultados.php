<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - % DE RESULTADOS DE OPCIONES </title>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
  
  <?php
  extract($_POST);

  //variable del archivo para sus próximas empleaciones
  $archivo="resultados.txt";

  //abrimos el archivo como lectura y escritura
  $fp=fopen("$archivo","a+");

  //grabamos el contenido con el // para poder separarlos (// es el separador)
  $w=fputs($fp,"$voto//");

  //volvemos a abrir el archivo pero esta vez, en modo lectura
  $fp=fopen("$archivo","r");

  //leemos el contenido del archivo
  $resultado=fread($fp, filesize ($archivo));

  //separamos el contenido por el simbolo //
  $div=explode("//",$resultado);

  //contamos el total de votos
  $total=count($div)-1;

  //for, para sumar ++voto
  $op1=0;
  $op2=0;
  $op3=0;

  /*
  $op4=0;
  $op5=0;
  $op6=0;
  $op7=0;
  $op8=0;
  */

  for($i=0; $i<$total; $i++){
    if($div[$i]=="op1"){
    $op1++;
    }

    if($div[$i]=="op2"){
    $op2++;
    }

    if($div[$i]=="op3"){
    $op3++;
    }
  }

    /*
    if($div[$i]=="op4"){
    $op4++;
    }

    if($div[$i]=="op5"){
      $op5++;
    }

    if($div[$i]=="op6"){
      $op6++;
    }

    if($div[$i]=="op7"){
      $op7++;
    }

    if($div[$i]=="op8"){
      $op8++;
    }
    */

  //valores, para redondear
  $respuesta1 = $op1*100/$total;
  $respuesta2 = $op2*100/$total;
  $respuesta3 = $op3*100/$total;
  
  //redondeando para que no salgan decimales
  $respuesta1=round($respuesta1);
  $respuesta2=round($respuesta2);
  $respuesta3=round($respuesta3);

  // $op es la cantidad de votos que hay
  // $respuesta es el redondeo de las opciones *100 / $total
  

  echo "Movie Fast and Furious: ".$op1."<br>";
  echo "Movie Narnia: ".$op2."<br>";
  echo "Movie Harry Potter: ".$op3."<br>";
  
  ?>

    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Opciones', 'Votos'],
          ['Fast and Furious', <?php echo $op1; ?>],
          ['Narnia', <?php echo $op2; ?>],
          ['Harry Potter', <?php echo $op3; ?>],
        ]);

        var options = {
          title: 'Movie Forms',
          is3D: true, // para que la grafica sea 3D
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

    <div id="piechart" style="width: 900px; height: 500px;"></div>


</body>
</html>