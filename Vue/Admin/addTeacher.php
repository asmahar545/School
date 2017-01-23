<!-- Input addon -->
<?= require_once ('Vue/_Commun/headerPrinc.php');?>
<?php $this->titre = "Professeur"; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="content-wrapper">

    <section class="content-header">
        <div class="row">
            <div class="col-lg-3">

            </div>
            <div class="col-lg-6">
                <div class="box box-success">
                    <form action="admin/exeAddTeacher"class="form-horizontal form-label-left" method="post">
                        <div class="box-header with-border">
                            <h3 class="box-title">Ajouter un Professeur</A></h3>
                        </div>
                        <div class="box-body">
                            <div class="input-group">
                                <span class="input-group-addon">Nom</span>
                                <input name="name" type="text" class="form-control">
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon">Prénom</span>
                                <input name="firstname" type="text" class="form-control" placeholder="">
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon">Adresse</span>
                                <input name="adress" type="text" class="form-control">
                            </div>
                
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon">Date de naissance</span>
                                <input name="birthday" type="cale" class="form-control"id="datepicker">
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon">Sexe</span>
                                  <select name="sexe" type="text" class="form-control" placeholder="">
                                      <option>homme </option>
                                      <option>femme</option>
                                </select> 
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon">Télèphone</span>
                                <input name="phone" type="number" class="form-control" placeholder="">
                            </div>
                            <br>

                            <div class="input-group">
                                <span class="input-group-addon">Email</span>
                                <input name="email" type= "email" class="form-control" placeholder="">
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon">Password</span>
                                <input name="password" type="password" class="form-control" placeholder="">
                            </div>
                            <br>
                            
                            <div class="input-group">
                                <span class="input-group-addon">Catégorie</span>
                                <select name="id_adultCategory" type="text" class="form-control" placeholder="">
                                    <?php
                                    foreach ($cat as $list):

                                        echo '<option value="' . $this->nettoyer($list['id_adultCategory']) . '">' . $this->nettoyer($list['name']) . '</option>';
                                        ?>
                                    <?php endforeach; ?>

                                </select> 
                                
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

    </section>
    <!-- /.content -->
</div>
<?= require_once ('Vue/_Commun/navPrinc.php');?>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
    </body>