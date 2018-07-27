<?php
class td_category_template_1 extends td_category_template {

    function render() {
        ?>

        <!-- subcategory -->
        <div class="td-category-header td-container-wrap">
            <div class="td-container">
                <div class="td-pb-row">
                    <div class="td-pb-span12">
                        <div class="td-crumb-container"><?php echo parent::get_breadcrumbs(); ?></div>

                            <h1 class="entry-title td-page-title"><?php echo parent::get_title(); ?></h1>
                            <?php echo parent::get_description(); ?>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Электромобили: адаптивный правильный -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-5231812690054700"
     data-ad-slot="6047838803"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
                    </div>
                </div>
                <?php echo parent::get_pull_down(); ?>
            </div>
        </div>

        <?php
    }
}
