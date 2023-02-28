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
                <h1 class="display-4 mb-5">Items sold</h1>

                <form action="" class="w-50" method="post">
                    <div class="form-group">
                        <label for="a">Item name: </label>
                        <input type="text" id="a" class="form-control" required="required" name="field1" />
                    </div>
                    <div class="form-group">
                        <label for="b">Number sold: </label>
                        <input type="number" id="b" class="form-control" required="required" name="field2" />
                    </div>
                    <div class="form-group">
                        <label for="c">Date of sale: </label>
                        <input type="date" id="c" class="form-control" name="field3" />
                    </div>
                    <input type="submit" class="btn btn-primary" name="SubmitButton">
                </form>

                <?php
                $message = "";
                if (isset($_POST['SubmitButton'])) { //check if form was submitted
                    require("connect_testDb.php");
                    $field1 = $con->real_escape_string($_POST['field1']);
                    $field2 = $con->real_escape_string($_POST['field2']);
                    $field3 = $con->real_escape_string($_POST['field3']);
                    $count = 0;
                    $query = "SELECT * FROM itemsavailable";

                    if ($result = $con->query($query)) {
                        while ($row = $result->fetch_assoc()) {
                            $field1name = $row["item_name"];
                            $field2name = $row["item_availability"];
                            if (strcasecmp($field1, $field1name) == 0) {
                                $count = 1;
                                break;
                                // $field3name = $field2name - $field2;
                                // $sql = "UPDATE itemsavailable SET item_availability=$field3name WHERE item_name= '$field1name'";
                                // if ($con->query($sql) === TRUE) {
                                //     echo '<div class="alert alert-success mt-3" role="alert">Updated successfully</div>';
                                // } else {
                                //     echo '<div class="alert alert-danger mt-3" role="alert">Failed to update</div>';                                }


                            }
                        }
                    }
                    if ($count == 1) {
                        $field3name = $field2name - $field2;
                        if ($field3name < 0) {
                            echo '<div class="alert alert-warning mt-3" role="alert">Not enough items in the inventory</div>';
                            $con->close();
                            exit;
                        } else {
                            $sql = "UPDATE itemsavailable SET item_availability=$field3name WHERE item_name= '$field1name'";
                            $sql1="INSERT INTO reportdata (	AddedDate, ActionDone, Item, NumberItem, AvailabilityR)
                            VALUES ('{$field3}','Sold','{$field1}','{$field2}','{$field3name}')";
                            $con->query($sql1);
                            if ($con->query($sql) === TRUE) {
                                echo '<div class="alert alert-success mt-3" role="alert">updated successfully</div>';
                            } else {
                                echo '<div class="alert alert-danger mt-3" role="alert">Failed to update</div>';
                            }
                        }
                    } else if ($count < 1) {
                        echo '<div class="alert alert-warning mt-3" role="alert">Item does not exist</div>';
                    }

                    $con->close();
                }
                ?>





            </div>

    </section>

    <?php
    require("./footer.php");
    ?>

</body>

</html>