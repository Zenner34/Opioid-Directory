<?php
    require_once("configure.php");
    $state_id = ($_REQUEST["state_id"] <> "") ? trim($_REQUEST["state_id"]) : "";
        if ($state_id <> "") {
            $sql = "SELECT * FROM city WHERE state_id = :sid ORDER BY name";
                try {
                    $stmt = $DB->prepare($sql);
                    $stmt->bindValue(":sid", trim($state_id));
                    $stmt->execute();
                    $results = $stmt->fetchAll();
                } 
                catch (Exception $ex) {
                    echo($ex->getMessage());
                }
                if (count($results) > 0) {
                ?>
                <label>Select a City: 
                    <select name="city" onchange="showFacility(this);">
                        <option value="">Please Select</option>
                            <?php foreach ($results as $rs) { ?>
                                <option value="<?php echo $rs["id"]; ?>"><?php echo $rs["name"]; ?></option>
                            <?php } ?>
                        </select>
                </label>
            <?php
        }   
    }
?>