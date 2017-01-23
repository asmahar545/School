<?= require_once ('Vue/_Commun/headerPrinc.php');?>

<?php $this->titre = "Mon Site  - Erreur !"; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="content-wrapper">
    <section class="content-header">
    <div id= "erreur" class="panel panel-default">
        <!-- Default panel contents -->
        <h4>Problème: </h4>
        <!-- List group -->
        <div class="well-small">

            <div class=" alert alert-danger">

                <?= $msgErreur ?>

            </div>
        </div>
    </div>
    </section>
</div>
<?= require_once ('Vue/_Commun/navPrinc.php');?>
</body>