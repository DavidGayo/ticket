<?php

namespace Software\GeneralBundle\Entity;

/**
 * Proyecto
 */
class Proyecto
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $descripcion;


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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Proyecto
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Proyecto
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ticket;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ticket = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ticket
     *
     * @param \Software\TicketBundle\Entity\Ticket $ticket
     *
     * @return Proyecto
     */
    public function addTicket(\Software\TicketBundle\Entity\Ticket $ticket)
    {
        $this->ticket[] = $ticket;

        return $this;
    }

    /**
     * Remove ticket
     *
     * @param \Software\TicketBundle\Entity\Ticket $ticket
     */
    public function removeTicket(\Software\TicketBundle\Entity\Ticket $ticket)
    {
        $this->ticket->removeElement($ticket);
    }

    /**
     * Get ticket
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTicket()
    {
        return $this->ticket;
    }

    public function __toString()
    {
        return $this->nombre;
    }
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $usuario;


    /**
     * Add usuario
     *
     * @param \Software\UsuarioBundle\Entity\Usuario $usuario
     *
     * @return Proyecto
     */
    public function addUsuario(\Software\UsuarioBundle\Entity\Usuario $usuario)
    {
        $this->usuario[] = $usuario;

        return $this;
    }

    /**
     * Remove usuario
     *
     * @param \Software\UsuarioBundle\Entity\Usuario $usuario
     */
    public function removeUsuario(\Software\UsuarioBundle\Entity\Usuario $usuario)
    {
        $this->usuario->removeElement($usuario);
    }

    /**
     * Get usuario
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}
