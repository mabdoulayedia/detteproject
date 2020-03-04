<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>">
    <title>Enregistrement</title>
</head>
<body>
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">Gestion des dettes</a>

        </div>
    </div>

    <div class="container" style="padding-top: 10px">
        <h3>Enregistrement de dette</h3>
        <hr>
        <div class="row"> 
            <form name="creerDette" method="POST" class="container" action="<?php echo base_url().'index.php/dette/creer'; ?>">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Nom Client</label>
                        <input type="text" name="nomClient" value="<?php echo set_value('') ?>" id="nomClient" class="form-control">
                        <?php echo form_error('nomClient'); ?> 
                    </div>

                    <div class="form-group">
                        <label for="">Téléphone</label>
                        <input type="text" name="telephone" value="" id="telephone" class="form-control">
                        <?php echo form_error('telephone'); ?>
                    </div>

                    <div class="form-group">
                        <label for="">Description produit</label>
                        <input type="text" name="description" value="" id="description" class="form-control">
                        <?php echo form_error('description'); ?>
                    </div>

                    <div class="form-group">
                        <label for="">Date</label>
                        <input type="date" name="date" value="" id="date" class="form-control">
                        <?php echo form_error('date'); ?>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary">Enregister</button>
                        <a href="<?php echo base_url().'index.php/dette/index'?>" class="btn-secondary btn bg-danger">Annuler</a>
                    </div>
                    
                    
                </div>
            </form>
        </div>
    </div>
</body>
</html>
