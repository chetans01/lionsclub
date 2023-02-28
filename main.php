<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require("./head.php");
    ?>
    <title>Dashboard</title>
    
</head>

<body>

    <?php
    require("./nav.php");
    ?>
    <section class="home">
        <div class="text">
            <div class="Manage border border-secondary">


                <center>
                    <h1 class="display-4 mb-5">Inventory</h1>
                </center>

                <nav class="navbar navbar-light bg-light">
                    <form class="form-inline" method="get">
                        <div class="input-group mr-sm-2">
                            <input class="form-control " type="search" placeholder="Search" name="searchbar" aria-label="Search">
                            <div class="input-group-append">
                                <a href="main.php" class="btn btn-outline-danger">&times;</a>
                            </div>
                        </div>
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="SubmitButton">Search</button>
                    </form>
                </nav>
                <?php
                // if (isset($_GET['SubmitButton'])) { //check if form was submitted
                //     require("connect_testDb.php");
                //     $field1 = $con->real_escape_string($_GET['searchbar']);
                //     echo '<table class="table w-100"> 
                //     <thead class="thead-dark">
                //     <tr> 
                //         <th> <font face="Arial">ITEM NAME</font> </th> 
                //         <th> <font face="Arial">AVAILABLE</font> </th> 
                //         <th> <font face="Arial">PRICE</font> </th>
                //     </tr> </thead>
                //     <tbody> ';
                //     $sql = "SELECT * FROM itemsavailable WHERE item_name LIKE '%$field1%'";

                //     // $stmt = $con->prepare($sql); 
                //     // $stmt->execute();
                //     //$result = $stmt->get_result();
                //     //$row = mysqli_fetch_row($result);
                //     if ($result = $con->query($sql)) {
                //         while ($row = $result->fetch_assoc()) {
                //             $field1name = $row["item_name"];
                //             $field2name = $row["item_availability"];
                //             $field3name = $row["item_price"];

                //             echo '<tr> 
                //                                 <td>' . $field1name . '</td> 
                //                                 <td>' . $field2name . '</td> 
                //                                 <td>' . $field3name . '</td> 
                //                             </tr>';
                //         }
                //     }
                // }
                ?>

                <?php


                require("connect_testDb.php");
                if (mysqli_connect_errno()) {
                    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
                }
                $search = "";
                if (isset($_GET['SubmitButton'])) {
                    $search = $con->real_escape_string($_GET['searchbar']);
                }
                $query = "SELECT * FROM itemsavailable WHERE item_name LIKE '%$search%'";


                echo '<table class="table w-100"> 
                    <thead class="thead-dark">
                    <tr> 
                        <th> <font face="Arial">ITEM NAME</font> </th> 
                        <th> <font face="Arial">AVAILABLE</font> </th> 
                        <th> <font face="Arial">PRICE</font> </th>
                    </tr> </thead>
                    <tbody> ';

                if ($result = $con->query($query)) {
                    while ($row = $result->fetch_assoc()) {
                        $field1name = $row["item_name"];
                        $field2name = $row["item_availability"];
                        $field3name = $row["item_price"];

                        echo '<tr> 
                                <td>' . ucwords($field1name) . '</td> 
                                <td>' . $field2name . '</td> 
                                <td>' . $field3name . '</td> 
                            </tr>';
                    }
                    $result->free();
                }
                echo "</tbody></table>";
                ?>



                <br>




            </div>
        </div>
    </section>
    <?php
    require("./footer.php");
    ?>
</body>

</html>