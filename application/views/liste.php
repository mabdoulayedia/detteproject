<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>">
    <title>Gestion des dettes</title>
</head>
<body>
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">Liste des dettes</a>

        </div>
    </div>

    <div class="container" style="padding-top: 10px">
        <div class="row">
            <div class="col-6"><h3>Liste des dettes</h3></div>
            <div class="col-6"><a href="<?php echo base_url().'index.php/dette/creer' ?>" class="btn btn-primary">Ajouter</a></div>

        </div>
                <hr>
        <div class="row">
            <div class="col-md-12">
                <?php 
                    $success = $this->session->flashdata('success');   
                    if ($success!="") {
                ?>  
                <div class="alert alert-success"><?php echo $success; ?></div>
                    <?php } ?>
                
                    <?php 
                    $failure = $this->session->flashdata('failure');   
                    if ($failure!="") {
                ?>  
                <div class="alert alert-success"><?php echo $failure; ?></div>
                    <?php } ?>
            </div>
        </div>        
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Nom Client</th>
                        <th>Telephone</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Editer</th>
                        <th>Supprimer</th>
                    </tr>
                      <?php if (!empty($dette)) { foreach($dette as $dett) {?>
                            <tr>
                                <td><?php echo $dett['id']?></td>
                                <td><?php echo $dett['nomClient']?></td>
                                <td><?php echo $dett['telephone']?></td>
                                <td><?php echo $dett['description']?></td>
                                <td><?php echo $dett['date']?></td>
                                <td><a href="<?php echo base_url().'index.php/dette/edit/'.$dett['id']?>" class="btn btn-primary">Editer</a></td>
                                <td><a href="<?php echo base_url().'index.php/dette/supprimer/'.$dett['id']?>" class="btn btn-primary bg-danger">Supprimer</a></td>
                            </tr>
                        <?php } } else{ ?>
                            <tr>
                                <td colspan="5">Liste Found</td>
                            </tr>
                        <?php }  ?> 
                </table>
            </div>

        </div>
        
    </div>
</body>
</html>
