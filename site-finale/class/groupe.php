<?php
class groupe {
    private $id_groupe = null;
    private $nom_groupe = null;

    /**
     * ville constructor.
     * @param null $id_groupe
     * @param null $nom_groupe
     */
    public function __construct($id_groupe, $nom_groupe)
    {
        $this->id_groupe = $id_groupe;
        $this->nom_groupe = $nom_groupe;
    }

    /**
     * @return null
     */
    public function getIdGroupe()
    {
        return $this->id_groupe;
    }

    /**
     * @return null
     */
    public function getNomGroupe()
    {
        return $this->nom_groupe;
    }

    /**
     * @param null $nom_groupe
     */
    public function setNomGroupe($nom_groupe)
    {
        $this->nom_groupe = $nom_groupe;
    }

}
?>
