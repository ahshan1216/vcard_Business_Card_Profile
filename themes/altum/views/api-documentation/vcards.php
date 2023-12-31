<?php defined('ALTUMCODE') || die() ?>

<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="custom-breadcrumbs small">
            <li><a href="<?= url() ?>"><?= l('index.breadcrumb') ?></a> <i class="fa fa-fw fa-angle-right"></i></li>
            <li><a href="<?= url('api-documentation') ?>"><?= l('api_documentation.breadcrumb') ?></a> <i class="fa fa-fw fa-angle-right"></i></li>
            <li class="active" aria-current="page"><?= l('api_documentation.vcards.breadcrumb') ?></li>
        </ol>
    </nav>

    <h1 class="h4"><?= l('api_documentation.vcards.header') ?></h1>

    <div class="accordion">
        <div class="card">
            <div class="card-header bg-gray-50 p-3 position-relative">
                <h3 class="h6 m-0">
                    <a href="#" class="stretched-link" data-toggle="collapse" data-target="#vcards_read_all" aria-expanded="true" aria-controls="vcards_read_all">
                        <?= l('api_documentation.vcards.read_all_header') ?>
                    </a>
                </h3>
            </div>

            <div id="vcards_read_all" class="collapse">
                <div class="card-body">

                    <div class="form-group mb-4">
                        <label><?= l('api_documentation.endpoint') ?></label>
                        <div class="card bg-gray-100 border-0">
                            <div class="card-body">
                                <span class="badge badge-success mr-3">GET</span> <span class="text-muted"><?= SITE_URL ?>api/vcards/</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label><?= l('api_documentation.example') ?></label>
                        <div class="card bg-gray-100 border-0">
                            <div class="card-body">
                                curl --request GET \<br />
                                --url '<?= SITE_URL ?>api/vcards/' \<br />
                                --header 'Authorization: Bearer <span class="text-primary">{api_key}</span>' \
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive table-custom-container mb-4">
                        <table class="table table-custom">
                            <thead>
                            <tr>
                                <th><?= l('api_documentation.parameters') ?></th>
                                <th><?= l('api_documentation.details') ?></th>
                                <th><?= l('api_documentation.description') ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>page</td>
                                <td>
                                    <span class="badge badge-info"><?= l('api_documentation.optional') ?></span>
                                    <span class="badge badge-secondary"><?= l('api_documentation.int') ?></span>
                                </td>
                                <td><?= l('api_documentation.filters.page') ?></td>
                            </tr>
                            <tr>
                                <td>results_per_page</td>
                                <td>
                                    <span class="badge badge-info"><?= l('api_documentation.optional') ?></span>
                                    <span class="badge badge-secondary"><?= l('api_documentation.int') ?></span>
                                </td>
                                <td><?= sprintf(l('api_documentation.filters.results_per_page'), '<code>' . implode('</code> , <code>', [10, 25, 50, 100, 250, 500]) . '</code>', 25) ?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="form-group">
                        <label><?= l('api_documentation.response') ?></label>
                        <div class="card bg-gray-100 border-0">
                                        <pre class="card-body">
{
    "data": [
        {
            "id": 1,
            "domain_id": 0,
            "monitors_ids": [1,2,3],
            "project_id": 0,
            "url": "example",
            "full_url": "<?= SITE_URL ?>s/example/",
            "name": "Example",
            "description": "This is just a simple description for the example vcard 👋.",
            "socials": {
              "facebook": "example",
              "instagram": "example",
              "twitter": "example",
              "email": "",
              "website": "https://example.com/"
            },
            "logo_url": "",
            "favicon_url": ""
            "password": false,
            "custom_js": "",
            "custom_css": "",
            "pageviews": 50,
            "is_se_visible": true,
            "is_removed_branding": false,
            "is_enabled": true,
            "datetime": "2021-02-16 10:47:34"
        }
    ],
    "meta": {
        "page": 1,
        "results_per_page": 25,
        "total": 1,
        "total_pages": 1
    },
    "links": {
        "first": "<?= SITE_URL ?>api/vcards?&page=1",
        "last": "<?= SITE_URL ?>api/vcards?&page=1",
        "next": null,
        "prev": null,
        "self": "<?= SITE_URL ?>api/vcards?&page=1"
    }
}</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header bg-gray-50 p-3 position-relative">
                <h3 class="h6 m-0">
                    <a href="#" class="stretched-link" data-toggle="collapse" data-target="#vcards_read" aria-expanded="true" aria-controls="vcards_read">
                        <?= l('api_documentation.vcards.read_header') ?>
                    </a>
                </h3>
            </div>

            <div id="vcards_read" class="collapse">
                <div class="card-body">

                    <div class="form-group mb-4">
                        <label><?= l('api_documentation.endpoint') ?></label>
                        <div class="card bg-gray-100 border-0">
                            <div class="card-body">
                                <span class="badge badge-success mr-3">GET</span> <span class="text-muted"><?= SITE_URL ?>api/vcards/</span><span class="text-primary">{vcard_id}</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label><?= l('api_documentation.example') ?></label>
                        <div class="card bg-gray-100 border-0">
                            <div class="card-body">
                                curl --request GET \<br />
                                --url '<?= SITE_URL ?>api/vcards/<span class="text-primary">{vcard_id}</span>' \<br />
                                --header 'Authorization: Bearer <span class="text-primary">{api_key}</span>' \
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label><?= l('api_documentation.response') ?></label>
                        <div class="card bg-gray-100 border-0">
                                        <pre class="card-body">
{
    "data": {
        "id": 1,
        "domain_id": 0,
        "monitors_ids": [1,2,3],
        "project_id": 0,
        "url": "example",
        "full_url": "<?= SITE_URL ?>s/example/",
        "name": "Example",
        "description": "This is just a simple description for the example vcard 👋.",
        "socials": {
          "facebook": "example",
          "instagram": "example",
          "twitter": "example",
          "email": "",
          "website": "https://example.com/"
        },
        "logo_url": "",
        "favicon_url": ""
        "password": false,
        "custom_js": "",
        "custom_css": "",
        "pageviews": 50,
        "is_se_visible": true,
        "is_removed_branding": false,
        "is_enabled": true,
        "datetime": "2021-02-16 10:47:34"
    }
}</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
