
<?php
 error_reporting (E_ALL ^ E_NOTICE);
include("db_connect.php");

$sql = "SELECT * FROM monthlybudget";
$result = mysqli_query($connection, $sql);
?>
<?php
if($result->num_rows > 0)
 {
   while($row = mysqli_fetch_array($result))
   {

     ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Moola</title>



     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
       <script src="insert2.js"></script>
       <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.

      function drawChart() {


        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Amount');
        data.addColumn('number', '$');
        data.addRows([


          <?php  while($row = mysqli_fetch_array($result))

echo "['".$row['description']."',".$row['bill']."],"; ?>



        ]);

        // Set chart options
        var options = {'title':'Monthly income Budget',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);

      }
    </script>
    <?php
}

}
?>

</head>
<body>


<div id="status">
</div>
<!---<img src="trump.png" alt="Smiley face" height="42" width="42">
-->

<?php 
    include_once("navigation.php");
?>
 
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center indigo-text">My Moolah Dashboard</h1>
      <!--Div that will hold the pie chart-->
          <div id="chart_div"></div>

      <div class="row center">

        <h5 class="header col s12 light">A simple page to keep up relevant news on the leader of the free world.</h5>
          <p>Wether you love him or hate him, you still have to know what he is doing because he is the president... </p>
      </div>
      <div class="row center">
        <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true"></div>
  <div id="fb-root"></div>

      </div>
      <br><br>
      <div class="row center">
        <h2>news</h2>
        <section id="content"></section> <!--The JS file will load content into this section, using JSON data-->
<script src="http://sulley.cah.ucf.edu/~al174346/googlechart/js/data-jsontrump4.js"></script>






    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->

    </div>
    <br><br>
  </div>

  <footer class="indigo darken-3">
    <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">Contact Us</h5>
        <ul class="white-text">
          <li><i class="material-icons">phone</i>&nbsp;&nbsp;(407) 906-3034</li>
          <li><i class="material-icons ">location_on</i>&nbsp;&nbsp;225 E Robinson St #660, Orlando, FL 32801</li>
          <li><i class="material-icons ">email</i>&nbsp;&nbsp;hello@moola.com</li>
      </ul>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Follow Us!</h5>
        <ul>
          <li><a class="white-text" href="#">Facebook</a></li>
          <li><a class="white-text" href="#">Instagram</a></li>
          <li><a class="white-text" href="#">Twitter</a></li>
          <li><a class="white-text" href="#">LinkedIn</a></li>
        </ul>
      </div>
    </div>
    </div>
    <div class="footer-copyright">
    <div class="container">
    <a class="white-text">&#169; 2018 MOOLA. ALL RIGHTS RESERVED</a>
    </div>
    </div>
    </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>