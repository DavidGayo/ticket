<?php

namespace Software\TicketBundle\Entity;

/**
 * Imagen
 */
class Imagen
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $imagen;

    /**
     * @var string
     */
    private $path;

    /**
     * @var string
     */
    private $metatags;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     *
     * @return Imagen
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set path
     *
     * @param string $path
     *
     * @return Imagen
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set metatags
     *
     * @param string $metatags
     *
     * @return Imagen
     */
    public function setMetatags($metatags)
    {
        $this->metatags = $metatags;

        return $this;
    }

    /**
     * Get metatags
     *
     * @return string
     */
    public function getMetatags()
    {
        return $this->metatags;
    }

     /**
     * Manages the copying of the file to the relevant place on the server
     */
    public function upload($dir='img')
    {
        // the file property can be empty if the field is not required
        if (null === $this->getImagen()) {
            return false;
        }

        // we use the original file name here but you should
        // sanitize it at least to avoid any security issues

        // move takes the target directory and target filename as params
        $this->getImagen()->move(
            $this->getUploadRootDir($dir),
            urlencode(time().$this->getImagen()->getClientOriginalName())
        );

        // set the path property to the filename where you've saved the file
        $this->path = urlencode(time().$this->getImagen()->getClientOriginalName());
        $this->imagen=$this->getUploadDir($dir).'/'.$this->path;
        return true;
        // clean up the f$this->path = $this->getFile()->getClientOriginalName();ile property as you won't need it anymore
        //$this->setImagen(null);
    }

     /**
     * Updates the hash value to force the preUpdate and postUpdate events to fire
     */
   
    public function getAbsolutePath()
    {
        return null === $this->path
            ? null
            : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path
            ? null
            : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir($dir='Imagen')
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir($dir);
    }

    protected function getUploadDir($dir='Imagen')
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/'.$dir;
    }

   public function __toString()
   { 
     return $this->path;
    }
}
