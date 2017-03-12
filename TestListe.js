data=[
      {
        "prenom":"Yann",
        "nom":"Dias",
        "etat_dossier":"En attente"
      },
      {
        "prenom":"Loïc",
        "nom":"Dias",
        "etat_dossier":"Refusé"
      },
      {
        "prenom":"Killian",
        "nom":"Jacquemin",
        "etat_dossier":"En liste complémentaire"
      },
      {
        "prenom":"David",
        "nom":"Canessane",
        "etat_dossier":"En attente"
      },
      {
        "prenom":"Yann1",
        "nom":"Dias",
        "etat_dossier":"Refusé"
      },
      {
        "prenom":"Yann2",
        "nom":"Dias",
        "etat_dossier":"En liste complémentaire"
      },
      {
        "prenom":"Yann3",
        "nom":"Dias",
        "etat_dossier":"En attente"
      },
      {
        "prenom":"Yann4",
        "nom":"Dias",
        "etat_dossier":"Accepté"
      },
      {
        "prenom":"YannAZEAZ",
        "nom":"Dias",
        "etat_dossier":"En attente"
      },
      {
        "prenom":"YannQSDFQSDF",
        "nom":"Dias",
        "etat_dossier":"En attente"
      },
{
        "prenom":"YannQSDFQSDF",
        "nom":"Dias",
        "etat_dossier":"En attente"
      }



];

    $(document).ready(function () {
        $('#Liste_candidats').DataTable({
            "processing": true,
            "info": true,
            "stateSave": true,
            data: data,
            "columns": [
                { "data": "prenom" },
                { "data": "nom" },
                { "data": "etat_dossier" },
                {
                    "data": "Inquiry", "bSearchable": false, "bSortable": false, "sWidth": "40px",
                    "data": function (data) {
                        return '<button class="btn btn-primary" type="button">' + 'Modifier le dossier</button>'
                    }
                }
            ]
        });
    });
