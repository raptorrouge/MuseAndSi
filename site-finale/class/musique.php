<?php
class musique {
    private $id_musique = null;
    private $nom_musique = null;
    private $temps_musique = null;
    private $original_musique = null;
    private $chemin_musique = null;


    /**
     * musique constructor.
     * @param null $id_musique
     * @param null $temps_musique
     * @param null $original_musique
     * @param null $nom_musique
     * @param null $chemin_musique
     */
    public function __construct($id_musique, $nom_musique, $chemin_musique, $original_musique, $temps_musique)
    {
        $this->id_musique = $id_musique;
        $this->nom_musique = $nom_musique;
        $this->chemin_musique = $chemin_musique;
        $this->original_musique = $original_musique;
        $this->temps_musique = $temps_musique;
    }

    /**
     * @return null
     */
    public function getIdMusique()
    {
        return $this->id_musique;
    }

    /**
     * @return null
     */
    public function getNomMusique()
    {
        return $this->nom_musique;
    }

    /**
     * @param null $nom_musique
     */
    public function setNomMusique($nom_musique)
    {
        $this->nom_musique = $nom_musique;
    }



    /**
     * @return null
     */
    public function getCheminMusique()
    {
        return $this->chemin_musique;
    }

    /**
     * @param null $chemin_musique
     */
    public function setCheminMusique($chemin_musique)
    {
        $this->chemin_musique = $chemin_musique;
    }



    /**
     * @return null
     */
    public function getOriginalMusique()
    {
        return $this->original_musique;
    }

    /**
     * @param null $original_musique
     */
    public function setOriginalMusique($original_musique)
    {
        $this->original_musique = $original_musique;
    }



    /**
     * @return null
     */
    public function getTempsMusique()
    {
        return $this->temps_musique;
    }

    /**
     * @param null $temps_musique
     */
    public function setTempsmusique($temps_musique)
    {
        $this->temps_musique = $temps_musique;
    }



}
?>
