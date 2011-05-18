<?php echo anchor('admin/soal_ganda/add','add');?>
<br>
<?php echo anchor('admin/front','back');?>
<?php echo form_open('admin/soal_ganda/delete');?>


<table border="1">


    <tr>
        
        <td>id</td>
       
        
        <td>soal</td>
        
        <td>a</td>
        
        <td>b</td>
        
        <td>c</td>
        
        <td>d</td>
        
        <td>id_mk</td>
        
        <td>prake</td>
        
        <td>key</td>
        
        <td>Action</td>

    </tr>
    <?php foreach ($soal_gandas as $soal_ganda) { ?>

        <tr>
            <td><?php echo form_checkbox('id[]',$soal_ganda['id']).$soal_ganda['id']; ?></td>

             
            <td><?php echo $soal_ganda['soal']; ?></td>
           
            <td><?php echo $soal_ganda['a']; ?></td>
           
            <td><?php echo $soal_ganda['b']; ?></td>
           
            <td><?php echo $soal_ganda['c']; ?></td>
           
            <td><?php echo $soal_ganda['d']; ?></td>
           
            <td><?php echo $soal_ganda['id_mk']; ?></td>
           
            <td><?php echo $soal_ganda['prake']; ?></td>
           
            <td><?php echo $soal_ganda['key']; ?></td>
           
            <td><a href="<?php echo site_url().'/admin/soal_ganda/form_update/'.$soal_ganda['id'];?>" >Edit</a>
        </tr>
 
<?php } ?>
</table>
<?php echo $pagination; ?>
<br>
<input type="submit" value="delete" onclick="return confirm('are you sure ?');">

<?php echo form_close();?>