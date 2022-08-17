<?php
/*
Template Name: value_right tag
*/
?>
<div class="l-sidebar">
    <aside class="widget">
        <ul class="widget__list">
            <h3>Category</h3>
            <?php wp_list_categories('title_li='); ?>
        </ul>
        <ul class="widget__list">
            <h3>Month</h3>
            <?php wp_get_archives( 'type=monthly&limit=120' ); ?>
        </ul>
    </aside>
</div>
