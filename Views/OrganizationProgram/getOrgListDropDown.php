<?php
function getOrgList()
{
    require_once "../../config.php";


    ?>
    <select name="orgListList" class="select2 form-control">
        <?php
        if (!empty($_POST)) {

            $orgTypeId = $_POST['orgTypeId'];
            $sql = " SELECT id,organization_list_name FROM organization_list WHERE organization_type_id = $orgTypeId; ";
            $result = sqlsrv_query($conn, $sql);
            while ($row = sqlsrv_fetch_array($result)) {
                echo "<option value='" . $row['id'] . "'>" . $row['organization_list_name'] . "</option>";
            }
        } else {
            ?>
            <option value=""><?php echo $sql; ?></option>
            <option value=""><?php echo $orgTypeId; ?></option>
        <?php
    }
    ?>
    </select>
<?php
}
?>