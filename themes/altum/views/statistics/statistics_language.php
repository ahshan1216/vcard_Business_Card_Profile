<?php defined('ALTUMCODE') || die() ?>

<div class="card my-3">
    <div class="card-body">

        <div class="row">
            <div class="col-12 col-xl d-flex align-items-center mb-3 mb-xl-0">
                <div>
                    <h3 class="h5"><?= l('vcard_statistics.statistics.language') ?></h3>
                    <p class="text-muted"><?= l('vcard_statistics.statistics.language_help') ?></p>
                </div>
            </div>

            <div class="col-12 col-xl-auto d-flex">
                <div class="">
                    <div class="dropdown">
                        <button type="button" class="btn btn-outline-secondary dropdown-toggle-simple" data-toggle="dropdown" data-boundary="viewport" title="<?= l('global.export') ?>">
                            <i class="fa fa-fw fa-sm fa-download"></i>
                        </button>

                        <div class="dropdown-menu dropdown-menu-right d-print-none">
                            <a href="<?= url('statistics?' . $data->identifier_key . '=' . $data->identifier_value . '&type=' . $data->type . '&start_date=' . $data->datetime['start_date'] . '&end_date=' . $data->datetime['end_date'] . '&export=csv') ?>" target="_blank" class="dropdown-item">
                                <i class="fa fa-fw fa-sm fa-file-csv mr-1"></i> <?= l('global.export_csv') ?>
                            </a>
                            <a href="<?= url('statistics?' . $data->identifier_key . '=' . $data->identifier_value . '&type=' . $data->type . '&start_date=' . $data->datetime['start_date'] . '&end_date=' . $data->datetime['end_date'] . '&export=json') ?>" target="_blank" class="dropdown-item">
                                <i class="fa fa-fw fa-sm fa-file-code mr-1"></i> <?= l('global.export_json') ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php foreach($data->rows as $row): ?>
            <?php $percentage = round($row->total / $data->total_sum * 100, 1) ?>

            <div class="mt-4">
                <div class="d-flex justify-content-between mb-1">
                    <div class="text-truncate">
                        <?php if(!$row->browser_language): ?>
                            <span><?= l('vcard_statistics.statistics.browser_unknown') ?></span>
                        <?php else: ?>
                            <span><?= get_language_from_locale($row->browser_language) ?></span>
                        <?php endif ?>
                    </div>

                    <div>
                        <small class="text-muted"><?= nr($percentage) . '%' ?></small>
                        <span class="ml-3"><?= nr($row->total) ?></span>
                    </div>
                </div>

                <div class="progress" style="height: 6px;">
                    <div class="progress-bar" role="progressbar" style="width: <?= $percentage ?>%;" aria-valuenow="<?= $percentage ?>" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>
