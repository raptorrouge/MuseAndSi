<?php
class instrument {
    public $code_instrument = null;
    public $nom_instrument = null;
    public $type_instrument = null;

    /**
     * instrument constructor.
     * @param null $code_instrument
     * @param null $nom_instrument
     * @param null $type_instrument
     */
    public function __construct($code_instrument, $nom_instrument, $type_instrument)
    {
        $this->code_instrument = $code_instrument;
        $this->nom_instrument = $nom_instrument;
        $this->type_instrument = $type_instrument;
    }

    /**
     * @return null
     */
    public function getCodeInstrument()
    {
        return $this->code_instrument;
    }

    /**
     * @return null
     */
    public function getNomInstrument()
    {
        return $this->nom_instrument;
    }

    /**
     * @param null $nom_instrument
     */
    public function setNomInstrument($nom_instrument)
    {
        $this->nom_instrument = $nom_instrument;
    }

    /**
     * @return null
     */
    public function getTypeInstrument()
    {
        return $this->type_instrument;
    }

    /**
     * @param null $type_instrument
     */
    public function setTypeInstrument($type_instrument)
    {
        $this->type_instrument = $type_instrument;
    }


}
?>