<?php 

        /*$action_possible = array('Creation_de_dossier', 'Modificatin_de_dossier', 'Ajout_de_piece_jointe', 'Validation_par_email',
         'Non-validation_par_E-mail', 'Changelent_de_statut_de_dossier', 'Envoie_de_rapelle_de_piece', 'Envoie_de_resultat_de_statut',
         'Supprimer_dossier');*/

        class action
        {
        private $action;
        private $info;
        private $date;
        private $num;
        private $etudiant;
        private $admin;

        public function __construct($action, $info, $date, $num, $etudiant, $admin)
        {
            if(is_string($action))$this->action = $action;

            if(is_string($info))$this->info = $info;

            $this->date = $date;

            if(is_int($num))$this->num = $num;

            if(is_string($etudiant))$this->etudiant = $etudiant;

            if(is_string($admin))$this->admin = $admin;
        }

        function affiche()
        {
        	echo '<div class="action row">
        		 <div class="action-info col-sm-11"><h6>'. $this->admin .' : '. $this->action .' : '. $this->etudiant .'</h6><p>'. $this->info .'</p></div>
                 <p class="action-date col-sm-1">'. $this->date .'</p>
        	     </div>';
        }


        function enregistrer()
        {
            require('BDD_connexion.php');
            $ajout = $bdd->prepare('INSERT INTO historique(action, date, id, info, nom_admin, nom_etudiant)
             VALUES(:action, :date, :id, :info, :nom_admin, :nom_etudiant)');
            $ajout->execute(array(
                'action' => $this->action,
                'date' => $this->date,
                'id' => $this->num,
                'info' => $this->info,
                'nom_admin' => $this->admin,
                'nom_etudiant' => $this->etudiant
            ));

            $ajout->closeCursor(); // Termine le traitement de la requête
        }
        }
?>