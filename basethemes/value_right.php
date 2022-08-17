<?php
/*
Template Name: value_right tag
*/
?>
<ul class="ul_blgS_4">
<li>Category</li>
<?php wp_list_categories('title_li='); ?>
</ul>
<ul class="ul_blgS_4 mtop100">
<li>Month</li>
<?php wp_get_archives( 'type=monthly&limit=12' ); ?>
</ul>
