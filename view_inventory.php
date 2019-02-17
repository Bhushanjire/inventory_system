<?php
    require 'webservices/database.php';
?>
<div id="demo-modal"></div>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th width="5%">Sr.No.</th>
                <th width="45%">Manufacture Name</th>
                <th width="45%">Model Name</th>
                <th width="5%">Total</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = "SELECT MA.manufacture_name,MO.name,MO.model_id,COUNT(`name`) AS TOTAL FROM manufacture MA LEFT JOIN model MO ON MO.manufacture_id=MA.manufacture_id GROUP BY MO.name ORDER BY MO.model_id DESC";
                 $data = $dbOject ->customQuery($query);
                 $i=1;
                foreach($data as $row){
            ?>
            <tr onclick="openPopup(<?php echo $row['model_id'];?>)" style="cursor: pointer;"> 
                <td><?php echo $i;?></td>
                <td><?php echo $row['manufacture_name']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['TOTAL']?></td>
            </tr>
                <?php $i++; } ?>
        </tbody>
       
    </table>




 
    



  
