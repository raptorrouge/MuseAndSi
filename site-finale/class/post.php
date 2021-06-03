<?php


class post {
    private $id_post = null;
    private $contenu_post = null;

    /**
     * post constructor.
     * @param null $id_post
     * @param null $contenu_post
     */
    public function __construct($id_post, $contenu_post)
    {
        $this->id_post = $id_post;
        $this->contenu_post = $contenu_post;
    }

    /**
     * @return null
     */
    public function getIdPost()
    {
        return $this->id_post;
    }

    /**
     * @return null
     */
    public function getContenuPost()
    {
        return $this->contenu_post;
    }

    /**
     * @param null $contenu_post
     */
    public function setContenuPost($contenu_post)
    {
        $this->contenu_post = $contenu_post;
    }


}