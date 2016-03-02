<?php

namespace Crm\UsuariosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 */
class Usuarios
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
    private $contrasena;


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
     * @return Usuarios
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
     * Set contrasena
     *
     * @param string $contrasena
     * @return Usuarios
     */
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;

        return $this;
    }

    /**
     * Get contrasena
     *
     * @return string 
     */
    public function getContrasena()
    {
        return $this->contrasena;
    }
    /**
     * @var \Crm\PersonalBundle\Entity\Personal
     */
    private $personal;


    /**
     * Set personal
     *
     * @param \Crm\PersonalBundle\Entity\Personal $personal
     * @return Usuarios
     */
    public function setPersonal(\Crm\PersonalBundle\Entity\Personal $personal = null)
    {
        $this->personal = $personal;

        return $this;
    }

    /**
     * Get personal
     *
     * @return \Crm\PersonalBundle\Entity\Personal 
     */
    public function getPersonal()
    {
        return $this->personal;
    }
    /**
     * @var \Crm\UsuariosBundle\Entity\Roles
     */
    private $rol;


    /**
     * Set rol
     *
     * @param \Crm\UsuariosBundle\Entity\Roles $rol
     * @return Usuarios
     */
    public function setRol(\Crm\UsuariosBundle\Entity\Roles $rol = null)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return \Crm\UsuariosBundle\Entity\Roles 
     */
    public function getRol()
    {
        return $this->rol;
    }

     public function __toString()
    {
        return $this->nombre;
    }
}
