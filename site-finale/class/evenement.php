<?php
class evenement {
    private $id_evenement = null;
    private $nom_evenement = null;
    private $description_evenement = null;
    private $date_evenement = null;

    /**
     * ville constructor.
     * @param null $id_evenement
     * @param null $description_evenement
     * @param null $nom_evenement
     * @param null $date_evenement
     */
    public function __construct($id_evenement, $description_evenement, $nom_evenement, $date_evenement)
    {
        $this->id_evenement= $id_evenement;
        $this->description_evenement= $description_evenement;
        $this->nom_evenement = $nom_evenement;
        $this->date_evenement = $date_evenement;
    }

    /**
     * @return null
     */
    public function getIdEvenement()
    {
        return $this->id_evenement;
    }

    /**
     * @return null
     */
    public function getDescriptionEvenement()
    {
        return $this->description_evenement;
    }

    /**
     * @param null $description_evenement
     */
    public function setDescriptionEvenement($description_evenement)
    {
        $this->description_evenement = $description_evenement;
    }

    /**
     * @return null
     */
    public function getNomEvenement()
    {
        return $this->nom_evenement;
    }

    /**
     * @param null $nom_evenement
     */
    public function setNomEvenement($nom_evenement)
    {
        $this->nom_evenement = $nom_evenement;
    }
    /**
     * @return null
     */
    public function getDateEvenement()
    {
        return $this->date_evenement;
    }

    /**
     * @param null $date_evenement
     */
    public function setDateEvenement($date_evenement)
    {
        $this->date_evenement = $date_evenement;
    }



}
?>

