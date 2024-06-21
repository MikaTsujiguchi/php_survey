    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

    <?php

    $f_handle = fopen('database.csv','r');

    echo '<select name="" id="options">';

    while($yomikomi = fgetcsv($f_handle)){
       
        echo '<option>'.$yomikomi[0].'</option>';

        }
        echo '</select>';
    fclose($f_handle);
    
    ?>

    <p id="getName"></p>
    

    <link rel="stylesheet" href="style.css">

    <?php

    $f_handle = fopen('database.csv','r');

    echo '<table border ="1" id="table">
    <tr>
    <th>Your Name</th>
    <th>Score1</th>
    <th>Score2</th>
    <th>Score3</th>
    </tr>';

    while($yomikomi = fgetcsv($f_handle)){
        echo '<tr>';
        echo '<td>'.$yomikomi[0].'</td>';
        echo '<td>'.$yomikomi[1].'</td>';
        echo '<td>'.$yomikomi[2].'</td>';
        echo '<td>'.$yomikomi[3].'</td>';
        echo '</tr>';
        }

    echo '</table>';
    fclose($f_handle);
    
    ?>


<div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'radar',
    data: {
      labels: ["Socre1", "Score2", "Score3"],
      datasets: [{
         
          
        data: [5,  4, 5],
      }]
    },
  

  options: {
      scales: {
        r: {
          max: 5,        //グラフの最大値
          min: 0,        //グラフの最小値
          ticks: {
            stepSize: 1  //目盛間隔
          }
        }
      },
    }
  });
</script>

 
    <script src="index.js"></script>
    </body>
    </html>



  

  


    