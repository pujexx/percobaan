<ol>
    <?php foreach ($soal_essay as $slgd): ?>
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