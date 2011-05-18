<?php echo anchor('admin/soal_essay/add','add');?>
<br>
<?php echo anchor('admin/front','back');?>
<?php echo form_open('admin/soal_essay/delete');?>


<table border="1">


    <tr>
        
        <td>id</td>
       
        
        <td>soal</td>
        
        <td>prake</td>
        
        <td>Action</td>

    </tr>
    <?php foreach ($soal_essays as $soal_essay) { ?>

        <tr>
            <td><?php echo form_checkbox('id[]',$soal_essay['id']).$soal_essay['id']; ?></td>

             
            <td><?php echo $soal_essay['soal']; ?></td>
           
            <td><?php echo $soal_essay['prake']; ?></td>
           
            <td><a href="<?php echo site_url().'/admin/soal_essay/form_update/'.$soal_essay['id'];?>" >Edit</a>
        </tr>
 
<?php } ?>
</table>
<?php echo $pagination; ?>
<br>
<input type="submit" value="delete" onclick="return confirm('are you sure ?');">

<?php echo form_close();?>