<?php
class type_musique {
    private $code_type_musique = null;
    private $nom_type_musique = null;

    /**
     * type_musique constructor.
     * @param null $code_type_musique
     * @param null $nom_type_musique
     */
    public function __construct($code_type_musique, $nom_type_musique)
    {
        $this->code_type_musique = $code_type_musique;
        $this->nom_type_musique = $nom_type_musique;
    }

    /**
     * @return null
     */
    public function getCodeTypeMusique()
    {
        return $this->code_type_musique;
    }

    /**
     * @return null
     */
    public function getNomType()
    {
        return $this->nom_type_musique;
    }

    /**
     * @param null $nom_type_musique
     */
    public function setNomTypeMusique($nom_type_musique)
    {
        $this->nom_type_musique = $nom_type_musique;
    }




}
?>
