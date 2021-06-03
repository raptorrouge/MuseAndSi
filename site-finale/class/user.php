<?php
class user {
    private $id_user = null;
    private $nom_user = null;
    private $prenom_user = null;
    private $age_user = null;
    private $role_user = null;

    /**
     * Utilisateur constructor.
     * @param int $id_user
     * @param int $nom_user
     * @param int $prenom_user
     * @param int $age_user
     * @param int $role_user
     */
    public function __construct($id_user, $nom_user, $prenom_user, $age_user, $role_user) {
        $this->id_user = $id_user;
        $this->nom_user = $nom_user;
        $this->prenom_user = $prenom_user;
        $this->age_user = $age_user;
        $this->role_user = $role_user;

    }

    /**
     * @return int
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * @return int
     */
    public function getNomUser()
    {
        return $this->nom_user;
    }

    /**
     * @param int $nom_user
     */
    public function setNomUser($nom_user)
    {
        $this->nom_user = $nom_user;
    }

    /**
     * @return int
     */
    public function getPrenomUser()
    {
        return $this->prenom_user;
    }

    /**
     * @param int $prenom_user
     */
    public function setPrenomUser($prenom_user)
    {
        $this->prenom_user= $prenom_user;
    }

    /**
     * @return int
     */
    public function getAgeUser()
    {
        return $this->age_user;
    }

    /**
     * @param int $age_user
     */
    public function setAgeUser($age_user)
    {
        $this->age_user = $age_user;
    }

    /**
     * @return int
     */
    public function getRoleUser()
    {
        return $this->role_user;
    }

    /**
     * @param int $role_user
     */
    public function setRoleUser($role_user)
    {
        $this->role_user = $role_user;
    }

}
?>