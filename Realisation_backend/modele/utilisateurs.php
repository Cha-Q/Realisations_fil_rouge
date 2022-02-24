<?php

include('connect.php');

    Class User {


        public $connect;
        private $table = 'compte_utilisateur';

        private $id_user;
        private $name_user;
        private $firstName_user;
        private $age_user;
        private $mail_user;
        private $login_user;
        private $mdp_user;
        private $id_genre;
        private $id_droit;


         //constructeur
        public function __construct(){
            $this->connect = new Bdd();
            $this->connect = $this->connect->getConnexion();
        }

         //getters

    public function getTable(){
		return $this->table;
	}

	public function getId_user(){
		return $this->id_user;
	}

	public function getName_user(){
		return $this->name_user;
	}

	public function getFirstName_user(){
		return $this->firstName_user;
	}

	public function getAge_user(){
		return $this->age_user;
	}

	public function getMail_user(){
		return $this->mail_user;
	}

	public function getLogin_user(){
		return $this->login_user;
	}

	public function getMdp_user(){
		return $this->mdp_user;
	}

	public function getId_genre(){
		return $this->id_genre;
	}

	public function getId_droit(){
		return $this->id_droit;
	}	


    // setters
    public function setName_user($name_user){
		$this->name_user = $name_user;
	}
    public function setFirstName_user($firstName_user){
		$this->firstName_user = $firstName_user;
	}
    public function setAge_user($age_user){
		$this->age_user = $age_user;
	}
    public function setMail_user($mail_user){
		$this->mail_user = $mail_user;
	}
    public function setLogin_user($login_user){
		$this->login_user = $login_user;
	}
    public function setMdp_user($mdp_user){
		$this->mdp_user = $mdp_user;
	}
	public function setId_genre($id_genre){
		$this->id_genre = $id_genre;
	}
	public function setId_droit($id_droit){
		$this->id_droit = $id_droit;
	}


    public function getSingleUser(){
        $myQuery = 'SELECT
                        *
                    FROM
                        '.$this->table.'
                    JOIN
                        role, genre
                    Where
                        '.$this->table.'.id_droit = droits.id_droit
                    AND
                        '.$this->table.'.id_genre = genres.id_genre
                    AND
                        login_utilisateur = :login';
                    
        $stmt = $this->connect->prepare($myQuery);
        $stmt->bindParam(':login', $this->login_user);
        $stmt->execute();
        return $stmt;
    }
    public function createUser(){
        $myQuery = 'INSERT INTO
                        '.$this->table.'
                    SET
                        nom_utilisateur = :name,
                        prenom_utilisateur = :firstName,
                        age_utilisateur = :age,
                        mail_utilisateur = :mail,
                        login_utilisateur = :login,
                        mdp_utilisateur = :mdp,
                        id_genre = :id_genre,
                        id_droit = :id_droit';
        
        $stmt = $this->connect->prepare($myQuery);

        $stmt->bindParam(':name', $this->name_user);
        $stmt->bindParam(':firstName', $this->firstName_user);
        $stmt->bindParam(':age', $this->age_user);
        $stmt->bindParam(':mail', $this->mail_user);
        $stmt->bindParam(':login', $this->login_user);
        $stmt->bindParam(':mdp', $this->mdp_user);
        $stmt->bindParam(':id_genre', $this->id_genre);
        $stmt->bindParam(':id_droit', $this->id_droit);

        return $stmt->execute();
    }

    public function updateUser(){
        $myQuery = 'UPDATE
                        '.$this->table.'
                    SET
                        nom_utilisateur = :name,
                        prenom_utilisateur = :firstName,
                        login_utilisateur = :login,
                        mdp_utilisateur = :mdp,
                        mail_utilisateur = :mail,
                    WHERE
                        id_users = :id_users';

        $stmt = $this->connect->prepare($myQuery);

        // bind des paramètres
        $stmt->bindParam(':name', $this->name_user);
        $stmt->bindParam(':firstName', $this->firstName_user);
        $stmt->bindParam(':login', $this->login_user);
        $stmt->bindParam(':mdp', $this->mdp_user);
        $stmt->bindParam(':mail', $this->mail_user);
        $stmt->bindParam(':id_users', $this->id_user);

        if($stmt->execute()) {
            // je retourne true si mise à jour réussie
            return true;
        } else {
            return false;
        }
    }
    public function verifyPseudoAndMail() {
        $myQuery = 'SELECT
                        *
                    FROM
                        '.$this->table.'
                    WHERE
                        login_utilisateur = :login
                    OR 
                        mail_utilisateur = :mail';

        $stmt = $this->connect->prepare($myQuery);

        $stmt->bindParam(':login', $this->login_user);
        $stmt->bindParam(':mail', $this->mail_user);

        $stmt->execute();
        return $stmt;
    }
}

?>