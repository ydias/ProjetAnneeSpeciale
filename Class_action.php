<?php 
        class action
        {
        private $nom = "Lambda";
        private $info = "Ac ne quis a nobis hoc ita dici forte miretur, quod alia quaedam in hoc facultas sit ingeni, neque haec dicendi ratio aut disciplina, ne nos quidem huic uni studio penitus umquam dediti fuimus. Etenim omnes artes, quae ad humanitatem pertinent, habent quoddam commune vinculum, et quasi cognatione quadam inter se continentur.";
        private $date = '17/06/2015';
        private $num = 1;
        private $etudiant = 'jean';
        private $admin = 'admin';


                function affiche()
                {
        	       echo '<div class="action row">
        		      <div class="action-info col-sm-11"><h6>'. $this->admin .' : '. $this->nom .' : '. $this->etudiant .'</h6><p>'. $this->info .'</p></div>
                              <p class="action-date col-sm-1">'. $this->date .'</p>
                              <FORM>
                                <INPUT type="checkbox" name="choix1" value="'. $this->num .'">
                              </FORM>
        	             </div>';
        	}
        }
?>