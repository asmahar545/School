<?= require_once ('Vue/_Commun/headerPrinc.php');?>
<?php $this->titre = "professeur"; ?>

<body class="hold-transition skin-blue sidebar-mini">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Professeur
            <small>tables</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">


                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"> Data teacher</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Adresse</th>
                                <th>Date de naissance</th>
                                <th>Sexe</th>
                                <th>Télèphone</th>
                                <th>Email</th>
                                <th>Mot de passe</th>
                                <th>Edit</th>

                            </tr>
                            </thead>
                            <tbody>
                                <?php $var=1?>
                            <?php foreach ($lists as $list): ?>

                                <tr>
                                    <td class=" " ><?php echo $var++ ?></td>
                                    <td class=" " ><?= $this->nettoyer($list['name']) ?></td>
                                    <td class=" " ><?= $this->nettoyer($list['firstname']) ?></td>
                                    <td class=" " ><?= $this->nettoyer($list['adress']) ?></td>
                                    <td class=" " ><?= $this->nettoyer($list['birthday']) ?></td>
                                    <td class=" " ><?= $this->nettoyer($list['sexe']) ?></td>
                                    <td class=" " ><?= $this->nettoyer($list['phone']) ?></td>
                                    <td class=" " ><?= $this->nettoyer($list['email']) ?></td>
                                    <td class=" " ><?= $this->nettoyer($list['password']) ?></td>
                                    <td>
                                        <a  href="admin/addTeacher" class="btn btn-success btn-xs"><i class="fa fa-folder"></i> Ajouter</a>
                                        <a href ="admin/editTeacher " class="btn btn-warning btn-xs"><i class="fa fa-folder"></i> Modifier</a>
                                        <a href ="admin/deleteTeacher" class="btn  btn-danger btn-xs"><i class="fa fa-folder"></i> Supprimer</a>
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
<!-- jQuery 2.2.3 -->
<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>