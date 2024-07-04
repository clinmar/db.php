<?php
include ("db.php");



$sql = "SELECT * FROM role";
$result = $conn->query($sql);
?>


<?php
include ("head.php");
?>


<div class="container m-5">
    <div class="row">



        <div class="col-12 col-lg-6">
            <div class="row">
                <div class="col-6">
                    <a href="user_add.php" class="btn btn-primary mb-1">
                        Add
                    </a>
                </div>
                <div class="col-6">
                    <h4>
                        List of the role

                    </h4>
                </div>
            </div>



            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            Name
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row["name"] . "</td>";
                            echo "</tr>";

                        }
                    }

                    ?>

                </tbody>
            </table>


        </div>


        <div class="col-12 col-lg-6">
            <div class="card">
                <div class="card-header bg-primary">
                    <h1>
                        Lorem ipsum dolor sit

                    </h1>
                </div>
                <div class="card-body">
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat voluptas excepturi facere
                        cum illum! Nisi laborum labore aspernatur minus, nam nostrum cumque quae error quidem nobis
                        assumenda, incidunt soluta? Delectus!
                    </p>
                </div>
            </div>

        </div>
    </div>

    <?php
    include ("footer.php");
    ?>
