<?php defined('ALTUMCODE') || die() ?>

<div class="modal fade" id="vcard_block_delete_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <div class="d-flex justify-content-between mb-3">
                    <h5 class="modal-title">
                        <i class="fa fa-fw fa-sm fa-trash-alt text-muted mr-2"></i>
                        <?= l('vcard_block_delete_modal.header') ?>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="<?= l('global.close') ?>">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form name="vcard_block_delete_modal" method="post" action="<?= url('vcard-blocks/delete') ?>" role="form">
                    <input type="hidden" name="token" value="<?= \Altum\Middlewares\Csrf::get() ?>" required="required" />
                    <input type="hidden" name="vcard_block_id" value="" />

                    <p class="text-muted"><?= l('vcard_block_delete_modal.subheader') ?></p>

                    <div class="mt-4">
                        <button type="submit" name="submit" class="btn btn-block btn-danger"><?= l('global.delete') ?></button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<?php ob_start() ?>
<script>
    'use strict';

    /* On modal show load new data */
    $('#vcard_block_delete_modal').on('show.bs.modal', event => {
        let vcard_block_id = $(event.relatedTarget).data('vcard-block-id');

        $(event.currentTarget).find('input[name="vcard_block_id"]').val(vcard_block_id);
    });
</script>
<?php \Altum\Event::add_content(ob_get_clean(), 'javascript') ?>