<?= require_once ('Vue/_Commun/headerPrinc.php');?>
<?php $this->titre = "classe"; ?>

<body class="hold-transition skin-blue sidebar-mini">
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Classes
            <small>tables</small>
        </h1>

    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">


                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"> Data class</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">

                            <thead>
                            <tr>
                                <th>N°</th>
                                <th>Classe</th>
                                <th>#</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $var=1?>
                            <?php foreach ($lists as $list): ?>
                                <tr>
                                    <td class=" " ><?php echo $var++ ?></td>
                                    <td class=" " ><?= $this->nettoyer($list['yearSexion']) ?></td>
                                    <td>
                                        <a href="admin/addClass " class="btn btn-success btn-xs"><i class="fa fa-folder"></i> Ajouter</a>
                                        <a href ="admin/modifClass/<?= $this->nettoyer($list['id_classe']) ?> " class="btn btn-warning btn-xs"><i class="fa fa-folder"></i> Modifier</a>
                                        <a href ="admin/deleteClass" class="btn  btn-danger btn-xs"><i class="fa fa-folder"></i> Supprimer</a>
                                    </td>
                                </tr>

                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<?= require_once ('Vue/_Commun/navPrinc.php');?>
</body>
