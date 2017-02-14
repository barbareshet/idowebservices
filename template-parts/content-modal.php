<?php
$modal_title = get_field('modal_title');
$modal_content = get_field('modal_content');
$modal_close_text = get_field('model_close_text');
?>


    <!-- Modal Structure -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <h4><?php echo $modal_title; ?></h4>
            <p>
                <?php echo $modal_content; ?>
            </p>
            <p>
                <?php echo do_shortcode('[contact-form-7 id="74" title="modal contact"]');?>
            </p>
        </div>
        <div class="modal-footer">
            <button class="modal-action modal-close waves-effect waves-red btn-flat red">
                <?php echo $modal_close_text;?>
            </button>

        </div>
    </div>