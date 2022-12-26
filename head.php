<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?= $pageTitle ?></title>
    <meta name="keyword" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= link_tag( "css/main.css" ); ?>
    <?= link_tag( "vendors/sweetalert/sweetalert2.min.css" ); ?>
    <?= link_tag( "vendors/select2/select2.min.css" ); ?>
    <?= link_tag( "https://fonts.googleapis.com/css2?family=Inter:wght@100;300;500;600;700;800&display=swap" ); ?>
    <?= script_tag( "js/jquery.js" ); ?>
    <?= script_tag( "vendors/sweetalert/sweetalert2.min.js" ); ?>
    <?= script_tag( "vendors/select2/select2.min.js" ); ?>
   
    <style type="text/css">
        .merch-top-header {
            background-color: <?=$styles[0][ 'value' ] ?>;
        }
        body {
            background-color:  <?= $styles[1][ 'value' ] ?> ;
        }

        .merch-btn.btn-green{
            background-color:  <?= $styles[2][ 'value' ] ?>;
        }
        .merch-btn: hover{
            background-color:  <?= $styles[3][ 'value' ] ?>;
        }
    </style>
    <script type="text/javascript">
        var Locale = {
            "createProduct" : "<?= lang( 'Fields.label.createProduct' ) ?>",
            "updateProduct" : "<?= lang( 'Fields.label.updateProduct' ) ?>",
            "searchProduct" : "<?= lang( 'Fields.placeholder.searchProduct' ) ?>",
            "ajaxUrl" : "<?= base_url() ?>/api/",
            'routes' : {
                'product' : "<?= lang( 'Route.product' ) ?>"
            },
            "bulkProduct": "<?= lang( 'Route.product' ) ?>/bulk",
            "bulkUserProduct": "<?= lang( 'Route.userProduct' ) ?>/bulk",
            "bulkUser": "<?= lang( 'Route.user' ) ?>/bulk",
            "bulkOrder": "<?= lang( 'Route.order' ) ?>/bulk",
            "emptyCheckbox": "<?= lang( 'Validation.emptyCheckbox' ) ?>",
            "deleteConfirmation": "<?= lang( 'Validation.deleteConfirmation' ) ?>",
            "delete": "<?= lang( 'Fields.label.delete' ) ?>",
            "emailExist": "<?= lang( 'Validation.emailExist' ) ?>",
            "userNameExist": "<?= lang( 'Validation.userNameExist' ) ?>",
            "errorTitle" : "<?= lang( 'Validation.errorTitle' ) ?>"
        };
    </script>
    <?= script_tag( "js/script.js" ); ?>
</head>