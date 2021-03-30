<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Document</title>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Technos', '<3', '>3', '-1'],
          ['HTML', 10, 4, 2],
          ['JS', 11, 6, 2],
          ['PHP', 6, 1, 3],
          ['AJAX', 1, 5, 3],
          ['CGI', 10, 5, 3]
        ]);

        var options = {
          chart: {
            title: 'Technos by levels',
            
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>


    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Technos', ''],
          ['js',     11],
          ['AJAX',      2],
          ['HTML',  2],
          ['CGI', 2],
          ['PHP',    7]
        ]);

        var options = {
          title: 'Top technos'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <img src="logo.png" alt="">
                <h4>hi, <?php echo $user_data['first_name'] . " " . $user_data['last_name'] ; ?></h4>
            </div>
        </header>
<section>
    <aside class="sidebar">
        <ul class="list">
            <li><a href="admin.php">Dashboard</a></li>
            <li><a href="users.php">users</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </aside>
    <div class="admin_content">
    <div class="staistique">
    <div class="box total_number">
    <p>Total number of developers :</p>
    <?php 
        $query = "select * from users";
		$result = mysqli_query($con, $query);
        $total_number = mysqli_num_rows($result);
        ?>
    <span><?php echo $total_number; ?></span>
    </div>
    <div class="box number_multidomain">
    <p>Number of multidomain :</p>
    <?php 
        $query0 = "SELECT * FROM `technos` WHERE html>3 or cgi>3 or js>3 or php>3 or ajax>3";
		$result0 = mysqli_query($con, $query0);
        $multidomain = mysqli_num_rows($result0);
        ?>
    <span><?php echo $multidomain; ?></span>
    </div>
    <div class="box training">
    <p>Developers are learning :</p>
    <?php 
        $query1 = "select * from formations";
		$result1 = mysqli_query($con, $query1);
        $learning = mysqli_num_rows($result1);
        ?>
    <span><?php echo $learning; ?></span>
    </div>
    </div>
    <div class="staistique">
    <div id="columnchart_material" style="width: 460px; height: 300px;"></div>
    <div id="piechart" style="width: 460px; height: 300px;"></div>

    </div>
    </div>
    
</section>
</div>
    
</body>
</html>