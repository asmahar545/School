<!-- Input addon -->
<?= require_once ('Vue/_Commun/headerPrinc.php');?>
<?php $this->titre = "Classe"; ?>

<body class="hold-transition skin-blue sidebar-mini">
<div class="content-wrapper">
<section class="content-header">
    <h1>
        Ajouter
        <small>Une Classe:</small>
    </h1>

</section>
    <section class="content-header">
        <div class="row">
            <div class="col-lg-3">

            </div>
            <div class="col-lg-6">
                <div class="box box-success">
                    <form action="admin/exeAddClass"class="form-horizontal form-label-left" method="post">
                        <div class="box-header with-border">
                            <h3 class="box-title">Ajouter une classe</A></h3>
                        </div>
                        <div class="box-body">
                            <div class="input-group">
                                <span class="input-group-addon">N°</span>
                                <input name="classe" type="text" class="form-control" placeholder="Ex: 1C">
                            </div>
                            <br>

                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-10">

                                    <button type="submit" class="btn btn-success">Ajouter</button>
                                </div>
                            </div>

                    </form>

                </div>
            </div>
        </div>
    </section>
</div>


<?= require_once ('Vue/_Commun/navPrinc.php');?>

</body>
