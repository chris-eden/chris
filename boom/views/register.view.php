<?php $title ="Inscription"; ?>
<?php include ('includes/constants.php'); ?>
<?php include ('partials/_header.php'); ?>

<div id="main-content">
    <div class="container">
        <h1 class="text-center">Devenez des a present membre!</h1>

        <form method="post" class="well col-md-6 col-md-offset-3">

            <!--NAme field -->
            <div class="form-group">
                <label class="control-label" for="name">Nom:</label>
                <input type="text"class="form-control" id="name" name="name"
                required="required"/>
            </div>

            <!--pseudofield -->
            <div class="form-group">
                <label class="control-label" for="pseudo">Pseudo</label>
                <input type="text"class="form-control" id="pseudo" name="pseudo"
                       required="required"/>
            </div>

            <!--Email field -->
            <div class="form-group">
                <label class="control-label" for="email">Adresse Eletronique:</label>
                <input type="email"class="form-control" id="email" name="email"
                       required="required"/>
            </div>

            <!--password field -->
            <div class="form-group">
                <label class="control-label" for="password">Mot de passe:</label>
                <input type="password"class="form-control" id="password" name="password"
                       required="required"/>
            </div>

            <!--2password field -->
            <div class="form-group">
                <label class="control-label" for="password_confirm">Confirmer votre mots de passe:</label>
                <input type="password"class="form-control" id="password_confirm" name="password_confirm"
                       required="required"/>
            </div>

            <input type="submit" class="btn btn-primary" value="Inscription" name="register"/>

        </form>
    </div>
</div>


<?php include ('partials/_footer.php'); ?>


