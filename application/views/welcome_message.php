<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

<style type="text/css">

body {
 background-color: #fff;
 margin: 40px;
 font-family: Lucida Grande, Verdana, Sans-serif;
 font-size: 14px;
 color: #4F5155;
}

a {
 color: #003399;
 background-color: transparent;
 font-weight: normal;
}

h1 {
 color: #444;
 background-color: transparent;
 border-bottom: 1px solid #D0D0D0;
 font-size: 16px;
 font-weight: bold;
 margin: 24px 0 2px 0;
 padding: 5px 0 6px 0;
}

code {
 font-family: Monaco, Verdana, Sans-serif;
 font-size: 12px;
 background-color: #f9f9f9;
 border: 1px solid #D0D0D0;
 color: #002166;
 display: block;
 margin: 14px 0 14px 0;
 padding: 12px 10px 12px 10px;
}

</style>
<script type="text/javascript" src="<?php echo base_url();?>/js/tiny_mce/tiny_mce.js"></script>
</head>
<body>
   <?php $this->load->view('tinymce');?> 
    <textarea id="elm1" name="elm1" rows="15" cols="80" style="width: 80%">
	
	</textarea>

<h1>Welcome to CodeIgniter!</h1>

<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

<p>If you would like to edit this page you'll find it located at:</p>
<code>application/views/welcome_message.php</code>

<p>The corresponding controller for this page is found at:</p>
<code>application/controllers/welcome.php</code>

<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>


<p><br />Page rendered in {elapsed_time} seconds</p>

</body>
</html>
<!--        <script type="text/javascript">
         
            $(document).ready(function(){
             
                $(":radio").change(function(){
                    var jawaban = $('input:radio:checked').val();
                    var id =$('input:radio:checked').attr("id");
                    alert(jawaban+"="+id);
                });  
            });
           
        </script>
    </head>

    <body>
        <ol>
            <?php foreach ($soal_ganda as $slgd): ?>
                <li>
                    <?php echo form_open(''); ?>
                    <p>
                        <?php echo $slgd['soal']; ?>

                    </p>
                    <p>a.  <input type="radio" name="jawabganda" value="a" id="<?php echo $slgd['id'] ?>a" onchange=""/> <?php echo $slgd['a']; ?></p>
                    <p>b. <input type="radio" name="jawabganda" value="b" id="<?php echo $slgd['id'] ?>b"/><?php echo $slgd['b']; ?></p>
                    <p>c.  <input type="radio" name="jawabganda" value="c" id="<?php echo $slgd['id'] ?>c"/> <?php echo $slgd['c']; ?></p>
                    <p>d. <input type="radio" name="jawabganda" value="d" id="<?php echo $slgd['id'] ?>d"/> <?php echo $slgd['d']; ?></p>
                    </form>
                </li>
            <?php endforeach; ?>
        </ol>

    </body>-->