<?php
include "koneksi.php";
$tampil_data=mysqli_query($input, "select *from input_cuti");
?>
<form action="" method="post">
    <table border="1" cellpadding="6" cellspacing="6">
        <tr>
            <th>nik</th>
            <th>nama</th>
            <th>jabatan</th>
            <th>hakCuti</th>
			<th>jeniscuti</th>
        </tr>
        <?php while($data=mysqli_fetch_array($tampil_data)){ ?>
        <tr>
            <td><?php echo $data["nik"];?></td>
            <td><?php echo $data["nama"];?></td>
            <td><?php echo $data["jabatan"];?></td>
            <td><?php echo $data["hakCuti"];?></td>
			<td><?php echo $data["jeniscuti"];?></td> 
            </td>
        </tr>
        <?php  } ?>

    </table>
</form>