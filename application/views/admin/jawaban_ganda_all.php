<?php echo anchor('admin/jawaban_ganda/add','add');?>
<br>
<?php echo anchor('admin/front','back');?>
<?php echo form_open('admin/jawaban_ganda/delete');?>


<table border="1">


    <tr>
        
        <td>id</td>
       
        
        <td>id_mahasiswa</td>
        
        <td>jawaban</td>
        
        <td>id_mk</td>
        
        <td>prake</td>
        
        <td>Action</td>

    </tr>
    <?php foreach ($jawaban_gandas as $jawaban_ganda) { ?>

        <tr>
            <td><?php echo form_checkbox('id[]',$jawaban_ganda['id']).$jawaban_ganda['id']; ?></td>

             
            <td><?php echo $jawaban_ganda['id_mahasiswa']; ?></td>
           
            <td><?php echo $jawaban_ganda['jawaban']; ?></td>
           
            <td><?php echo $jawaban_ganda['id_mk']; ?></td>
           
            <td><?php echo $jawaban_ganda['prake']; ?></td>
           
            <td><a href="<?php echo site_url().'/admin/jawaban_ganda/form_update/'.$jawaban_ganda['id'];?>" >Edit</a>
        </tr>
 
<?php } ?>
</table>
<?php echo $pagination; ?>
<br>
<input type="submit" value="delete" onclick="return confirm('are you sure ?');">

<?php echo form_close();?>