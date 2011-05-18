
<?php
if ($type_form == 'post') {

    echo form_open('admin/mahasiswa/add');
} else {

    echo form_open('admin/mahasiswa/update');
}
?>


<?php echo form_error('username'); ?>

<?php echo form_error('password'); ?>

<?php echo form_error('nama'); ?>

<?php echo form_error('status'); ?>

<table border="0">
    
    <tr>
        <td>id_mahasiswa-if the primary key is auto_increment then delete this field </td>
        <td><input type="text" name="id_mahasiswa" value="<?php if(isset ($isi['id_mahasiswa'])){echo $isi['id_mahasiswa'];}?>" /></td>
    </tr>
    
   
    <tr>
        <td>username</td>
        <td><input type="text" name="username" value="<?php if(isset ($isi['username'])){echo $isi['username'];}?>" /></td>
    </tr>
    
    <tr>
        <td>password</td>
        <td><input type="text" name="password" value="<?php if(isset ($isi['password'])){echo $isi['password'];}?>" /></td>
    </tr>
    
    <tr>
        <td>nama</td>
        <td><input type="text" name="nama" value="<?php if(isset ($isi['nama'])){echo $isi['nama'];}?>" /></td>
    </tr>
    
    <tr>
        <td>status</td>
        <td><input type="text" name="status" value="<?php if(isset ($isi['status'])){echo $isi['status'];}?>" /></td>
    </tr>
    
   
    <tr>
        <td></td>
        <td>
               <?php if ($type_form == 'post') { ?>
            <input type="submit" name="post" value="Submit" />
               <?php } else { ?>

             <?php if(isset ($isi['id_mahasiswa'])){ echo form_hidden('id_mahasiswa',$isi['id_mahasiswa']);}?>

            <input type="submit" name="update" value="update" />       
            
                <?php } ?>

        </td>
    </tr>
</table>




</form>