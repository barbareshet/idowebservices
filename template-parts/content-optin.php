<?php
//custom fields (CTA)
$optin_text     = get_field('optin_title');
$optin_btn_text = get_field('optin_btn_text');

?>
    <section id="optin">
        <div class="container-fluid">
            <div class="row">
                <div class="col m8 s12 optin-text">
                    <p class="lead text-center box vertical-align">
                        <?php echo $optin_text;?>
                    </p>
                </div>
                <div class="col m4 s12 optin-btn">
                    <button class="waves-effect waves-light btn btn-lg btn-block modal-trigger" data-toggle="modal" data-target="myModal">
                        <?php echo $optin_btn_text; ?>
                    </button>
                </div>
            </div>
        </div>
    </section>