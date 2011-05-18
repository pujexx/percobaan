
<?php
if ($type_form == 'post') {

    echo form_open('admin/soal_ganda/add');
} else {

    echo form_open('admin/soal_ganda/update');
}
?>


<?php echo form_error('soal'); ?>

<?php echo form_error('a'); ?>

<?php echo form_error('b'); ?>

<?php echo form_error('c'); ?>

<?php echo form_error('d'); ?>

<?php echo form_error('id_mk'); ?>

<?php echo form_error('prake'); ?>

<?php echo form_error('key'); ?>

<table border="0">
    
    <tr>
        <td>id-if the primary key is auto_increment then delete this field </td>
        <td><input type="text" name="id" value="<?php if(isset ($isi['id'])){echo $isi['id'];}?>" /></td>
    </tr>
    
   
    <tr>
        <td>soal</td>
        <td><input type="text" name="soal" value="<?php if(isset ($isi['soal'])){echo $isi['soal'];}?>" /></td>
    </tr>
    
    <tr>
        <td>a</td>
        <td><input type="text" name="a" value="<?php if(isset ($isi['a'])){echo $isi['a'];}?>" /></td>
    </tr>
    
    <tr>
        <td>b</td>
        <td><input type="text" name="b" value="<?php if(isset ($isi['b'])){echo $isi['b'];}?>" /></td>
    </tr>
    
    <tr>
        <td>c</td>
        <td><input type="text" name="c" value="<?php if(isset ($isi['c'])){echo $isi['c'];}?>" /></td>
    </tr>
    
    <tr>
        <td>d</td>
        <td><input type="text" name="d" value="<?php if(isset ($isi['d'])){echo $isi['d'];}?>" /></td>
    </tr>
    
    <tr>
        <td>id_mk</td>
        <td><input type="text" name="id_mk" value="<?php if(isset ($isi['id_mk'])){echo $isi['id_mk'];}?>" /></td>
    </tr>
    
    <tr>
        <td>prake</td>
        <td><input type="text" name="prake" value="<?php if(isset ($isi['prake'])){echo $isi['prake'];}?>" /></td>
    </tr>
    
    <tr>
        <td>key</td>
        <td><input type="text" name="key" value="<?php if(isset ($isi['key'])){echo $isi['key'];}?>" /></td>
    </tr>
    
   
    <tr>
        <td></td>
        <td>
               <?php if ($type_form == 'post') { ?>
            <input type="submit" name="post" value="Submit" />
               <?php } else { ?>

             <?php if(isset ($isi['id'])){ echo form_hidden('id',$isi['id']);}?>

            <input type="submit" name="update" value="update" />       
            
                <?php } ?>

        </td>
    </tr>
</table>




</form>