
<div class="row about-page">
<div class="col-sm-12">
<h3>Cox sorusulan suallar</h3>
<?php $no=1;$melumat=suallar();foreach ($melumat as $melumat) {?>

<span class="dropcap"><?php echo $no++;?></span>
<div class="extra-wrap">
<h4><?php echo $melumat->title; ?></h4>
<p><?php echo $melumat->description; ?></p>
</div>
<div class="clear"></div>
<?php } ?>

</div>
</div>
