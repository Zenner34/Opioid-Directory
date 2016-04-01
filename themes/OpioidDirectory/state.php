<?php  
	require_once("configure.php");                        
    $sql = "SELECT * FROM state ORDER BY name";
        try {
            $stmt = $DB->prepare($sql);
            $stmt->execute();
            $results = $stmt->fetchAll();
        } 
        catch (Exception $ex) {
            echo($ex->getMessage('Nothing Found'));
        }
?>
<label>Select a State:
    <select name="state" onChange="showCity(this);">
        <option value="">Please Select</option>
            <?php foreach ($results as $rs) { ?>
               	<option value="<?php echo $rs["id"]; ?>"><?php echo $rs["name"]; ?></option>
            <?php } ?>
    </select>
</label>