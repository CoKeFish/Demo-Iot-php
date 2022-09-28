<?php
include("db.php");
include("includes/header.php");
//include("testJson.php")
?>

<h1>
    Data test:
</h1>


<div class="col-md-8">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>
                    GSR Sensor
                </th>
                <th>
                    Temperature Sensor
                </th>
                <th>
                    Date
                </th>
            </tr>
        </thead>
        <tbody>
            <?php

                $query = "SELECT * FROM `DataIoT`";
                $results_data = mysqli_query($conn, $query);

                while($row = mysqli_fetch_array($results_data))
                { ?>

                <tr>
                    <td><?php echo $row['GSR_Sensor']?></td>
                    <td><?php echo $row['Temp_Sensor']?></td>
                    <td><?php echo $row['DateRead']?></td>
                </tr>


            <?php    }
            ?>
        </tbody>
    </table>
</div>

    <canvas id="grafica"></canvas>
    <script type="text/javascript" src="script.js"></script>

<?php include("includes/footer.php")?>