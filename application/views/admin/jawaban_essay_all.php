<?php echo anchor('admin/jawaban_essay/add','add');?>
<br>
<?php echo anchor('admin/front','back');?>
<?php echo form_open('admin/jawaban_essay/delete');?>


<table border="1">


    <tr>
        
        <td>id</td>
       
        
        <td>id_mahasiswa</td>
        
        <td>jawaban</td>
        
        <td>prake</td>
        
        <td>Action</td>

    </tr>
    <?php foreach ($jawaban_essays as $jawaban_essay) { ?>

        <tr>
            <td><?php echo form_checkbox('id[]',$jawaban_essay['id']).$jawaban_essay['id']; ?></td>

             
            <td><?php echo $jawaban_essay['id_mahasiswa']; ?></td>
           
            <td><?php echo $jawaban_essay['jawaban']; ?></td>
           
            <td><?php echo $jawaban_essay['prake']; ?></td>
           
            <td><a href="<?php echo site_url().'/admin/jawaban_essay/form_update/'.$jawaban_essay['id'];?>" >Edit</a>
        </tr>
 
<?php } ?>
</table>
<?php echo $pagination; ?>
<br>
<input type="submit" value="delete" onclick="return confirm('are you sure ?');">

<?php echo form_close();?>