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
                <h1 class="display-4 mb-5">Remove item</h1>
                <form action="" class="w-50" method="post">
                    <div class="form-group">
                        <label for="a">Item name:</label>
                        <input type="text" id="a" class="form-control" required="required" name="field1" />
                    </div>
                    <input type="submit" class="btn btn-primary" name="SubmitButton">
                </form>

                <?php
                $message = "";
                if (isset($_POST['SubmitButton'])) { //check if form was submitted
                    require("connect_testDb.php");
                    $field1 = $con->real_escape_string($_POST['field1']);
                    $count = 0;
                    $query = "SELECT * FROM itemsavailable";

                    if ($result = $con->query($query)) {
                        while ($row = $result->fetch_assoc()) {
                            $field1name = $row["item_name"];
                            if (strcasecmp($field1, $field1name) == 0) {
                                $count = 1;
                                break;
                                //     $sql = "DELETE FROM itemsavailable WHERE item_name='$field1name';";
                                //     if ($con->query($sql) === TRUE) {
                                //         echo '<div class="alert alert-success mt-3" role="alert">Updated successfully</div>';
                                //         exit;
                                //     } else {
                                //         echo '<div class="alert alert-danger mt-3" role="alert">Failed to update</div>';
                                //     }
                                // } else {
                                //     echo '<div class="alert alert-warning mt-3" role="alert">Item does not exist</div>';
                                //     exit;
                                // }

                            }
                        }
                    }
                    if ($count == 1) {
                        $sql = "DELETE FROM itemsavailable WHERE item_name='$field1name';";
                        if ($con->query($sql) === TRUE) {
                            echo '<div class="alert alert-success mt-3" role="alert">Updated successfully</div>';
                            exit;
                        } else {
                            echo '<div class="alert alert-danger mt-3" role="alert">Failed to update</div>';
                        }
                    }
                    if ($count < 1) {
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