<?php
$footer_data = get_field('footer_data', 'option');
?>
<footer class="main-footer">
    <div class="wrapper">
        <div class="left">
            <?= $footer_data['left'] ?>
        </div>
        <div class="right">
            <?= $footer_data['right'] ?>
        </div>
    </div>
</footer>
<?php wp_footer() ?>
</body>

</html>