<?php
class ville {
    private $id_ville = null;
    private $code_postal = null;
    private $nom_ville = null;

    /**
     * ville constructor.
     * @param null $id_ville
     * @param null $code_postal
     * @param null $nom_ville
     */
    public function __construct($id_ville, $code_postal, $nom_ville)
    {
        $this->id_ville = $id_ville;
        $this->code_postal = $code_postal;
        $this->nom_ville = $nom_ville;
    }

    /**
     * @return null
     */
    public function getIdVille()
    {
        return $this->id_ville;
    }

    /**
     * @return null
     */
    public function getCodePostal()
    {
        return $this->code_postal;
    }

    /**
     * @param null $code_postal
     */
    public function setCodePostal($code_postal)
    {
        $this->code_postal = $code_postal;
    }

    /**
     * @return null
     */
    public function getNomVille()
    {
        return $this->nom_ville;
    }

    /**
     * @param null $nom_ville
     */
    public function setNomVille($nom_ville)
    {
        $this->nom_ville = $nom_ville;
    }



}
?>
