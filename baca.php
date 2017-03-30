<!DOCTYPE html>
<?php
            $result = file_get_contents('http://api.kalau.web.id/api/absen?nip=14650015&tgs=2016-01-01&tge=2016-10-30');
            $json_object = json_decode($result);
            ?>
<html>
    <head>
        <script src="jquery.js"></script>
        <script src="jscript.js"></script>
    </head>
    <body>
    <style>
        table{
  border-collapse:collapse;
}
table th,
table td{
  border:1px solid;
  line-height:25px;
  padding:0 6px;
}
table th{
  background:#3498db;
}
    </style>
        <table>
            <tr>
                <th rowspan="9">Presensi</th>
                <th colspan="9">Data Absensi Mobile</th>
            <tr>
                
            </tr>
            <tr>
                <th>ID</th>
                <th>NIP</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Presensi Ke-</th>
                <th>Photo</th>
                <th>Macaddress</th>
                <th>Created_at</th>
            </tr>
            <?php 
                for ($i=0;$i<2;$i++){
                     echo "<tr>
                    <td>".$json_object->presensi->data_absensi_mobile[$i]->id."</td>
                    <td>".$json_object->presensi->data_absensi_mobile[$i]->nip."</td>
                    <td>".$json_object->presensi->data_absensi_mobile[$i]->latitude."</td>
                    <td>".$json_object->presensi->data_absensi_mobile[$i]->longitude."</td>
                    <td>".$json_object->presensi->data_absensi_mobile[$i]->presensi_ke."</td>
                    <td>".$json_object->presensi->data_absensi_mobile[$i]->photo."</td>
                    <td>".$json_object->presensi->data_absensi_mobile[$i]->macaddress."</td>
                    <td>".$json_object->presensi->data_absensi_mobile[$i]->created_at."</td>
                    </tr>";
                }   
            ?>
            <tr>
                <th colspan="9">Data Absensi Finger</th>
            </tr>
            <tr>
                <th colspan="2">Finger ID</th>
                <th colspan="2">NIP</th>
                <th colspan="2">Tag Date</th>
                <th colspan="3">Finger IP</th>
            </tr>
            <tr>
                    <td colspan="2"><?php echo $json_object->presensi->data_absensi_finger[0]->finger_id ?>
                    </td>
                    <td colspan="2"><?php echo $json_object->presensi->data_absensi_finger[0]->nip?>
                        
                    </td>
                    <td colspan="2"><?php echo $json_object->presensi->data_absensi_finger[0]->tag_date?></td>
                    <td colspan="3"><?php echo $json_object->presensi->data_absensi_finger[0]->finger_ip?></td>
                    </tr>";  
        </table>
    </body>
</html>