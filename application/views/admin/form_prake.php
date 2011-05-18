
<?php
if ($type_form == 'post') {

    echo form_open('admin/prake/add');
} else {

    echo form_open('admin/prake/update');
}
?>


<?php echo form_error('prake'); ?>

<table border="0">
    
    <tr>
        <td>id-if the primary key is auto_increment then delete this field </td>
        <td><input type="text" name="id" value="<?php if(isset ($isi['id'])){echo $isi['id'];}?>" /></td>
    </tr>
    
   
    <tr>
        <td>prake</td>
        <td><input type="text" name="prake" value="<?php if(isset ($isi['prake'])){echo $isi['prake'];}?>" /></td>
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