<?php echo anchor('admin/mahasiswa/add','add');?>
<br>
<?php echo anchor('admin/front','back');?>
<?php echo form_open('admin/mahasiswa/delete');?>


<table border="1">


    <tr>
        
        <td>id_mahasiswa</td>
       
        
        <td>username</td>
        
        <td>password</td>
        
        <td>nama</td>
        
        <td>status</td>
        
        <td>Action</td>

    </tr>
    <?php foreach ($mahasiswas as $mahasiswa) { ?>

        <tr>
            <td><?php echo form_checkbox('id_mahasiswa[]',$mahasiswa['id_mahasiswa']).$mahasiswa['id_mahasiswa']; ?></td>

             
            <td><?php echo $mahasiswa['username']; ?></td>
           
            <td><?php echo $mahasiswa['password']; ?></td>
           
            <td><?php echo $mahasiswa['nama']; ?></td>
           
            <td><?php echo $mahasiswa['status']; ?></td>
           
            <td><a href="<?php echo site_url().'/admin/mahasiswa/form_update/'.$mahasiswa['id_mahasiswa'];?>" >Edit</a>
        </tr>
 
<?php } ?>
</table>
<?php echo $pagination; ?>
<br>
<input type="submit" value="delete" onclick="return confirm('are you sure ?');">

<?php echo form_close();?>