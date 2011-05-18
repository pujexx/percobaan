<?php echo anchor('admin/prake/add','add');?>
<br>
<?php echo anchor('admin/front','back');?>
<?php echo form_open('admin/prake/delete');?>


<table border="1">


    <tr>
        
        <td>id</td>
       
        
        <td>prake</td>
        
        <td>Action</td>

    </tr>
    <?php foreach ($prakes as $prake) { ?>

        <tr>
            <td><?php echo form_checkbox('id[]',$prake['id']).$prake['id']; ?></td>

             
            <td><?php echo $prake['prake']; ?></td>
           
            <td><a href="<?php echo site_url().'/admin/prake/form_update/'.$prake['id'];?>" >Edit</a>
        </tr>
 
<?php } ?>
</table>
<?php echo $pagination; ?>
<br>
<input type="submit" value="delete" onclick="return confirm('are you sure ?');">

<?php echo form_close();?>