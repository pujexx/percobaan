<?php echo anchor('admin/soal_random_essay/add','add');?>
<br>
<?php echo anchor('admin/front','back');?>
<?php echo form_open('admin/soal_random_essay/delete');?>


<table border="1">


    <tr>
        
        <td>id</td>
       
        
        <td>prake</td>
        
        <td>id_mahasiswa</td>
        
        <td>id_soal</td>
        
        <td>Action</td>

    </tr>
    <?php foreach ($soal_random_essays as $soal_random_essay) { ?>

        <tr>
            <td><?php echo form_checkbox('id[]',$soal_random_essay['id']).$soal_random_essay['id']; ?></td>

             
            <td><?php echo $soal_random_essay['prake']; ?></td>
           
            <td><?php echo $soal_random_essay['id_mahasiswa']; ?></td>
           
            <td><?php echo $soal_random_essay['id_soal']; ?></td>
           
            <td><a href="<?php echo site_url().'/admin/soal_random_essay/form_update/'.$soal_random_essay['id'];?>" >Edit</a>
        </tr>
 
<?php } ?>
</table>
<?php echo $pagination; ?>
<br>
<input type="submit" value="delete" onclick="return confirm('are you sure ?');">

<?php echo form_close();?>