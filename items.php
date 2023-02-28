<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require("./head.php");
    ?>

    <title>Admin</title>
</head>

<body>

    <?php
    require("./nav.php");
    ?>
    <section class="home">
        <div class="text">
            <div class="Manage">
                <h1 class="display-4 mb-5">Add new items</h1>
                <form action="" class="w-50" method="post">
                    <div class="form-group">
                        <label for="a">Enter new item: </label>
                        <input type="text" id="a" class="form-control" required="required" name="field1" />
                    </div>
                    <div class="form-group">
                        <label for="b">Enter availability: </label>
                        <input type="number" id="b" class="form-control" required="required" name="field2" />
                    </div>
                    <div class="form-group">
                        <label for="c">Enter selling price: </label>
                        <input type="number" id="c" class="form-control" required="required" name="field3" />
                    </div>
                    <div class="form-group">
                        <label for="d">Enter cost price: </label>
                        <input type="number" id="d" class="form-control" required="required" name="field4" />
                    </div>
                    <input type="submit" class="btn btn-primary" name="SubmitButton"><br>
                </form>

                <?php
                $message = "";
                if (isset($_POST['SubmitButton'])) { //check if form was submitted
                    require("connect_testDb.php");
                    $field1 = $con->real_escape_string($_POST['field1']);
                    $field2 = $con->real_escape_string($_POST['field2']);
                    $field3 = $con->real_escape_string($_POST['field3']);
                    $field4 = $con->real_escape_string($_POST['field4']);
                    $sql = "SELECT * FROM itemsavailable";
                    $result = $con->query($sql);

                    // see if any rows were returned 
                    if (mysqli_num_rows($result) < 1) {
                        $query = "INSERT INTO itemsavailable (item_name, item_availability, item_price, item_cprice)
                        VALUES ('{$field1}','{$field2}','{$field3}','{$field4}')";
                        if ($con->query($query) === TRUE) {
                            echo '<div class="alert alert-success mt-3" role="alert">Updated successfully</div>';
                            exit;
                        } else {
                            echo '<div class="alert alert-danger mt-3" role="alert">Failed to update</div>';
                        }
                    }
                    else if ($result = $con->query($sql)) {
                        while ($row = $result->fetch_assoc()) {
                            // while ($row = $result->fetch_assoc()) {
                            $field1name = $row["item_name"];
                            if (strcasecmp($field1, $field1name) == 0) {
                                echo '<div class="alert alert-warning mt-3" role="alert">Item already exists</div>';
                                exit;
                            } }
                                $query = "INSERT INTO itemsavailable (item_name, item_availability, item_price, item_cprice)
            VALUES ('{$field1}','{$field2}','{$field3}', '{$field4}')";
                                if ($con->query($query) === TRUE) {
                                    echo '<div class="alert alert-success mt-3" role="alert">Updated successfully</div>';
                                    
                                } else {
                                    echo '<div class="alert alert-danger mt-3" role="alert">Failed to update</div>';
                                }

                                $con->close();
                            }
                        }
                    
                

                ?>




            </div>

    </section>

    <?php
    require("./footer.php");
    ?>

</body>

</html>