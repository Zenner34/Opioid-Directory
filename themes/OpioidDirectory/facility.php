<?php
    require_once("configure.php");
    $city_id = ($_REQUEST["city_id"] <> "") ? trim($_REQUEST["city_id"]) : "";
    if ($city_id <> "") {
        $sql = "SELECT * FROM facility WHERE city_id = :cid ORDER BY name";
    try {
        $stmt = $DB->prepare($sql);
        $stmt->bindValue(":cid", trim($city_id));
        $stmt->execute();
        $results = $stmt->fetchAll();
    } 
    catch (Exception $ex) {
        echo($ex->getMessage());
    }
        if (count($results) > 0) {
            ?>    
                <?php foreach ($results as $rs) { ?>
                   <div class="col-md-3 facility">
                        <address>
                            <?php echo wordwrap($rs["name"],40,"<br>\n"); ?><br>
                            <?php echo $rs["location_street"]; ?><br>
                            <?php echo $rs["mail_city"]; ?>, <?php echo $rs["state_abbrv"]; ?> <?php echo $rs["location_zip"]; ?><br>
                            USA<br>
                            <?php
                                if(empty($rs['phone'])) {
                                    // Notify User That No Number Was Found
                                    echo "*No phone number on record*\n";
                                }
                                else {
                                    // Display The Number & Allow Click To Call
                                    echo "<a href = 'tel:".$rs['phone']."'>Call:".$rs['phone']."</a>";
                                }
                            ?>
                        </address>
                     </div>
                <?php } ?>
            <?php
        }
    }
?>