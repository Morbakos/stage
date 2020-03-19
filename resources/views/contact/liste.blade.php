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

    <!-- DataTable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <!-- JS -->
    <script src="js/contact.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">

                <!-- En-tête -->
                <h1>Liste des contacts</h1>
                <hr>

                <!-- Bouton pour la création de contacts -->
                <a href="{{ route('contact.create') }}" role="button" class="btn btn-success btn-ajouter">Ajouter un contact</a>

                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-6">
                        <!-- Champ de recherche -->
                        <p>
                            <label for="champ-recherche">Rechercher</span> <input type="text" id="champ-recherche">
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 text-right">
                        <!-- Liens de la pagination -->
                        <nav class="pag">
                            {{ $links }}
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <!-- Tableau des contacts -->
                    <table class="table table-striped table-bordered table-hover table-sm" id="tableau-contact">
                        <thead>
                            <th>
                                <p>Civilité</p>
                            </th>
                            <th>
                                <p>Prénom</p>
                            </th>
                            <th>
                                <p>Nom</p>
                            </th>
                            <th>
                                <p>Téléphone</p>
                            </th>
                            <th>
                                <p>Email</p>
                            </th>
                            <th>
                                <p>Societe</p>
                            </th>
                            <th>
                                <p>Ville</p>
                            </th>
                            <th>
                                <p>Options</p>
                            </th>
                        </thead>
                        <tbody>

                            @foreach ($contacts as $contact)
                            <tr>

                                @if ( $contact->civilite === 1)
                                <!-- <td> Mr </td> -->
                                <td>
                                    <img src="img/mr.svg" alt="Monsieur" class="mr">
                                </td>
                                @else
                                <!-- <td> Mme </td> -->
                                <td>
                                    <img src="img/mme.svg" alt="Madame" class="mme">
                                </td>
                                @endif

                                <td> {{ $contact->prenom }} </td>
                                <td> {{ $contact->nom }} </td>
                                <td> {{ $contact->tel }} </td>
                                <td> {{ $contact->email }} </td>
                                <td> {{ $contact->societe }} </td>
                                <td> {{ $contact->ville }} </td>
                                <td>
                                    <!-- <span class="voir">show</span> -->
                                    <img src="img/voir.svg" alt="">
                                    <img src="img/edit.svg" alt="">
                                    <img src="img/supprimer.svg" alt="">
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-6">
                        <!-- Champ de recherche -->
                        <p>
                            <span>Rechercher <input type="text" id="champ-recherche"></span>
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 text-right">
                        <!-- Liens de la pagination -->
                        <nav class="pag">
                            {{ $links }}
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>