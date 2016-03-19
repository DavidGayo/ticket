<?php

namespace Software\TicketBundle\Entity;

/**
 * Ticket
 */
class Ticket
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $sistemaOperativo;

    /**
     * @var string
     */
    private $navegador;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var boolean
     */
    private $aplica;

    /**
     * @var boolean
     */
    private $resuelto;

    /**
     * @var integer
     */
    private $usuarioCreo;


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
     * Set sistemaOperativo
     *
     * @param string $sistemaOperativo
     *
     * @return Ticket
     */
    public function setSistemaOperativo($sistemaOperativo)
    {
        $this->sistemaOperativo = $sistemaOperativo;

        return $this;
    }

    /**
     * Get sistemaOperativo
     *
     * @return string
     */
    public function getSistemaOperativo()
    {
        return $this->sistemaOperativo;
    }

    /**
     * Set navegador
     *
     * @param string $navegador
     *
     * @return Ticket
     */
    public function setNavegador($navegador)
    {
        $this->navegador = $navegador;

        return $this;
    }

    /**
     * Get navegador
     *
     * @return string
     */
    public function getNavegador()
    {
        return $this->navegador;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Ticket
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Ticket
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set aplica
     *
     * @param boolean $aplica
     *
     * @return Ticket
     */
    public function setAplica($aplica)
    {
        $this->aplica = $aplica;

        return $this;
    }

    /**
     * Get aplica
     *
     * @return boolean
     */
    public function getAplica()
    {
        return $this->aplica;
    }

    /**
     * Set resuelto
     *
     * @param boolean $resuelto
     *
     * @return Ticket
     */
    public function setResuelto($resuelto)
    {
        $this->resuelto = $resuelto;

        return $this;
    }

    /**
     * Get resuelto
     *
     * @return boolean
     */
    public function getResuelto()
    {
        return $this->resuelto;
    }

    /**
     * Set usuarioCreo
     *
     * @param integer $usuarioCreo
     *
     * @return Ticket
     */
    public function setUsuarioCreo($usuarioCreo)
    {
        $this->usuarioCreo = $usuarioCreo;

        return $this;
    }

    /**
     * Get usuarioCreo
     *
     * @return integer
     */
    public function getUsuarioCreo()
    {
        return $this->usuarioCreo;
    }
    /**
     * @var \Software\GeneralBundle\Entity\Proyecto
     */
    private $proyecto;


    /**
     * Set proyecto
     *
     * @param \Software\GeneralBundle\Entity\Proyecto $proyecto
     *
     * @return Ticket
     */
    public function setProyecto(\Software\GeneralBundle\Entity\Proyecto $proyecto = null)
    {
        $this->proyecto = $proyecto;

        return $this;
    }

    /**
     * Get proyecto
     *
     * @return \Software\GeneralBundle\Entity\Proyecto
     */
    public function getProyecto()
    {
        return $this->proyecto;
    }
    
}
