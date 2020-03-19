<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des contact</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Feuille de style -->
    <link rel="stylesheet" href="css/contact.css">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">

                <!-- En-tête -->
                <h1>Ajouter un contact</h1>
                <hr>

                <!-- Création du formulaire -->
                {{ Form::open(['route' => 'contact.store']) }}
                {{ Form::token() }}

                <!-- Choix civilité -->
                <div class="form-group">
                    Madame {{ Form::radio('civilite', '0', false) }}
                    Monsieur {{ Form::radio('civilite', '1', false) }}
                </div>

                <!-- Identité -->
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label for="prenom">Prénom: </label>
                            {{ Form::text(
                                'prenom',
                                null,
                                [
                                    'class' => 'form-control',
                                    'placeholder' => 'Prénom'
                                ]
                            ) }}
                        </div>
                        <div class="col">
                            <label for="nom">Nom: </label>
                            {{ Form::text(
                                'nom',
                                null,
                                [
                                    'class' => 'form-control',
                                    'placeholder' => 'Nom'
                                ]
                            ) }}
                        </div>
                    </div>
                </div>

                <!-- Email/tel -->
                <div class="form-group d-inline">
                    <div class="row">
                        <div class="col">
                            <label for="tel">Téléphone: </label>
                            {{ Form::text(
                                'tel',
                                null,
                                [
                                    'class' => 'form-control',
                                    'placeholder' => 'Téléphone'
                                ]
                            ) }}
                        </div>
                        <div class="col">
                            <label for="email">Email: </label>
                            {{ Form::email(
                                'email',
                                null,
                                [
                                    'class' => 'form-control',
                                    'placeholder' => 'Email'
                                ]
                            ) }}
                        </div>
                    </div>
                </div>

                <!-- Societe/ville -->
                <div class="form-group d-inline">
                    <div class="row">
                        <div class="col">
                            <label for="societe">Société: </label>
                            {{ Form::text(
                                'societe',
                                null,
                                [
                                    'class' => 'form-control',
                                    'placeholder' => 'Société'
                                ]
                            ) }}
                        </div>
                        <div class="col">
                            <label for="ville">Ville: </label>
                            {{ Form::text(
                                'ville',
                                null,
                                [
                                    'class' => 'form-control',
                                    'placeholder' => 'Ville'
                                ]
                            ) }}
                        </div>
                    </div>
                </div>

                <br>

                {{ Form::submit('Créer le contact', ['class' => 'btn btn-success pull-right']) }}

                {{ Form::close() }}

            </div>
        </div>
    </div>
</body>

</html>