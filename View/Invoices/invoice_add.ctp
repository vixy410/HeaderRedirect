<?php pr($step); ?>

<div class="container">
    <?php 
        if($step == 1){
            echo $this->element('step1');
        }
        if($step == 2){
            echo $this->element('step2');
        }
    ?>
</div>