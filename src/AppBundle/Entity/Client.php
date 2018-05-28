<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="clients")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ClientRepository")
 */
class Client
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="dateMaj", type="string", length=10, nullable=true)
     */
    private $dateMaj;

    /**
     * @var bool
     *
     * @ORM\Column(name="unfea", type="boolean")
     */
    private $unfea;

    /**
     * @var bool
     *
     * @ORM\Column(name="synafel", type="boolean")
     */
    private $synafel;

    /**
     * @var bool
     *
     * @ORM\Column(name="proHelio", type="boolean")
     */
    private $proHelio;

    /**
     * @var bool
     *
     * @ORM\Column(name="impriFrance", type="boolean")
     */
    private $impriFrance;

    /**
     * @var bool
     *
     * @ORM\Column(name="s", type="boolean")
     */
    private $s;

    /**
     * @var bool
     *
     * @ORM\Column(name="e", type="boolean")
     */
    private $e;

    /**
     * @var bool
     *
     * @ORM\Column(name="h", type="boolean")
     */
    private $h;

    /**
     * @var bool
     *
     * @ORM\Column(name="p", type="boolean")
     */
    private $p;

    /**
     * @var bool
     *
     * @ORM\Column(name="mng", type="boolean")
     */
    private $mng;

    /**
     * @var bool
     *
     * @ORM\Column(name="luxe", type="boolean")
     */
    private $luxe;

    /**
     * @var string
     *
     * @ORM\Column(name="activite", type="string", length=350)
     */
    private $activite;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=50)
     */
    private $statut;

    /**
     * @var string
     *
     * @ORM\Column(name="societe", type="string", length=100)
     */
    private $societe;

    /**
     * @var string
     *
     * @ORM\Column(name="etatCivil", type="string", length=25, nullable=true)
     */
    private $etatCivil;

    /**
     * @var string
     *
     * @ORM\Column(name="nomComplet", type="string", length=100, nullable=true)
     */
    private $nomComplet;

    /**
     * @var string
     *
     * @ORM\Column(name="fonction", type="string", length=150, nullable=true)
     */
    private $fonction;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse1", type="string", length=100, nullable=true)
     */
    private $adresse1;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse2", type="string", length=100, nullable=true)
     */
    private $adresse2;

    /**
     * @var string
     *
     * @ORM\Column(name="codePostal", type="string", length=50, nullable=true)
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=50)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=25)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255, nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=100, nullable=true)
     */
    private $mobile;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="email2", type="string", length=100, nullable=true)
     */
    private $email2;

    /**
     * @var string
     *
     * @ORM\Column(name="etiqPack", type="string", length=255, nullable=true)
     */
    private $etiqPack;

    /**
     * @var string
     *
     * @ORM\Column(name="signalEtiq", type="string", length=255, nullable=true)
     */
    private $signalEtiq;

    /**
     * @var string
     *
     * @ORM\Column(name="etiqPack3", type="string", length=50, nullable=true)
     */
    private $etiqPack3;

    /**
     * @var string
     *
     * @ORM\Column(name="signalEtiq4", type="string", length=100, nullable=true)
     */
    private $signalEtiq4;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateMaj
     *
     * @param string $dateMaj
     *
     * @return Client
     */
    public function setDateMaj($dateMaj)
    {
        $this->dateMaj = $dateMaj;

        return $this;
    }

    /**
     * Get dateMaj
     *
     * @return string
     */
    public function getDateMaj()
    {
        return $this->dateMaj;
    }

    /**
     * Set unfea
     *
     * @param boolean $unfea
     *
     * @return Client
     */
    public function setUnfea($unfea)
    {
        $this->unfea = $unfea;

        return $this;
    }

    /**
     * Get unfea
     *
     * @return bool
     */
    public function getUnfea()
    {
        return $this->unfea;
    }

    /**
     * Set synafel
     *
     * @param boolean $synafel
     *
     * @return Client
     */
    public function setSynafel($synafel)
    {
        $this->synafel = $synafel;

        return $this;
    }

    /**
     * Get synafel
     *
     * @return bool
     */
    public function getSynafel()
    {
        return $this->synafel;
    }

    /**
     * Set proHelio
     *
     * @param boolean $proHelio
     *
     * @return Client
     */
    public function setProHelio($proHelio)
    {
        $this->proHelio = $proHelio;

        return $this;
    }

    /**
     * Get proHelio
     *
     * @return bool
     */
    public function getProHelio()
    {
        return $this->proHelio;
    }

    /**
     * Set impriFrance
     *
     * @param boolean $impriFrance
     *
     * @return Client
     */
    public function setImpriFrance($impriFrance)
    {
        $this->impriFrance = $impriFrance;

        return $this;
    }

    /**
     * Get impriFrance
     *
     * @return bool
     */
    public function getImpriFrance()
    {
        return $this->impriFrance;
    }

    /**
     * Set s
     *
     * @param boolean $s
     *
     * @return Client
     */
    public function setS($s)
    {
        $this->s = $s;

        return $this;
    }

    /**
     * Get s
     *
     * @return bool
     */
    public function getS()
    {
        return $this->s;
    }

    /**
     * Set e
     *
     * @param boolean $e
     *
     * @return Client
     */
    public function setE($e)
    {
        $this->e = $e;

        return $this;
    }

    /**
     * Get e
     *
     * @return bool
     */
    public function getE()
    {
        return $this->e;
    }

    /**
     * Set h
     *
     * @param boolean $h
     *
     * @return Client
     */
    public function setH($h)
    {
        $this->h = $h;

        return $this;
    }

    /**
     * Get h
     *
     * @return bool
     */
    public function getH()
    {
        return $this->h;
    }

    /**
     * Set p
     *
     * @param boolean $p
     *
     * @return Client
     */
    public function setP($p)
    {
        $this->p = $p;

        return $this;
    }

    /**
     * Get p
     *
     * @return bool
     */
    public function getP()
    {
        return $this->p;
    }

    /**
     * Set mng
     *
     * @param boolean $mng
     *
     * @return Client
     */
    public function setMng($mng)
    {
        $this->mng = $mng;

        return $this;
    }

    /**
     * Get mng
     *
     * @return bool
     */
    public function getMng()
    {
        return $this->mng;
    }

    /**
     * Set luxe
     *
     * @param boolean $luxe
     *
     * @return Client
     */
    public function setLuxe($luxe)
    {
        $this->luxe = $luxe;

        return $this;
    }

    /**
     * Get luxe
     *
     * @return bool
     */
    public function getLuxe()
    {
        return $this->luxe;
    }

    /**
     * Set activite
     *
     * @param string $activite
     *
     * @return Client
     */
    public function setActivite($activite)
    {
        $this->activite = $activite;

        return $this;
    }

    /**
     * Get activite
     *
     * @return string
     */
    public function getActivite()
    {
        return $this->activite;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return Client
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set societe
     *
     * @param string $societe
     *
     * @return Client
     */
    public function setSociete($societe)
    {
        $this->societe = $societe;

        return $this;
    }

    /**
     * Get societe
     *
     * @return string
     */
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * Set etatCivil
     *
     * @param string $etatCivil
     *
     * @return Client
     */
    public function setEtatCivil($etatCivil)
    {
        $this->etatCivil = $etatCivil;

        return $this;
    }

    /**
     * Get etatCivil
     *
     * @return string
     */
    public function getEtatCivil()
    {
        return $this->etatCivil;
    }

    /**
     * Set nomComplet
     *
     * @param string $nomComplet
     *
     * @return Client
     */
    public function setNomComplet($nomComplet)
    {
        $this->nomComplet = $nomComplet;

        return $this;
    }

    /**
     * Get nomComplet
     *
     * @return string
     */
    public function getNomComplet()
    {
        return $this->nomComplet;
    }

    /**
     * Set fonction
     *
     * @param string $fonction
     *
     * @return Client
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get fonction
     *
     * @return string
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * Set adresse1
     *
     * @param string $adresse1
     *
     * @return Client
     */
    public function setAdresse1($adresse1)
    {
        $this->adresse1 = $adresse1;

        return $this;
    }

    /**
     * Get adresse1
     *
     * @return string
     */
    public function getAdresse1()
    {
        return $this->adresse1;
    }

    /**
     * Set adresse2
     *
     * @param string $adresse2
     *
     * @return Client
     */
    public function setAdresse2($adresse2)
    {
        $this->adresse2 = $adresse2;

        return $this;
    }

    /**
     * Get adresse2
     *
     * @return string
     */
    public function getAdresse2()
    {
        return $this->adresse2;
    }

    /**
     * Set codePostal
     *
     * @param string $codePostal
     *
     * @return Client
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return string
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Client
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set pays
     *
     * @param string $pays
     *
     * @return Client
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Client
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     *
     * @return Client
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Client
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set email2
     *
     * @param string $email2
     *
     * @return Client
     */
    public function setEmail2($email2)
    {
        $this->email2 = $email2;

        return $this;
    }

    /**
     * Get email2
     *
     * @return string
     */
    public function getEmail2()
    {
        return $this->email2;
    }

    /**
     * Set etiqPack
     *
     * @param string $etiqPack
     *
     * @return Client
     */
    public function setEtiqPack($etiqPack)
    {
        $this->etiqPack = $etiqPack;

        return $this;
    }

    /**
     * Get etiqPack
     *
     * @return string
     */
    public function getEtiqPack()
    {
        return $this->etiqPack;
    }

    /**
     * Set signalEtiq
     *
     * @param string $signalEtiq
     *
     * @return Client
     */
    public function setSignalEtiq($signalEtiq)
    {
        $this->signalEtiq = $signalEtiq;

        return $this;
    }

    /**
     * Get signalEtiq
     *
     * @return string
     */
    public function getSignalEtiq()
    {
        return $this->signalEtiq;
    }

    /**
     * Set etiqPack3
     *
     * @param string $etiqPack3
     *
     * @return Client
     */
    public function setEtiqPack3($etiqPack3)
    {
        $this->etiqPack3 = $etiqPack3;

        return $this;
    }

    /**
     * Get etiqPack3
     *
     * @return string
     */
    public function getEtiqPack3()
    {
        return $this->etiqPack3;
    }

    /**
     * Set signalEtiq4
     *
     * @param string $signalEtiq4
     *
     * @return Client
     */
    public function setSignalEtiq4($signalEtiq4)
    {
        $this->signalEtiq4 = $signalEtiq4;

        return $this;
    }

    /**
     * Get signalEtiq4
     *
     * @return string
     */
    public function getSignalEtiq4()
    {
        return $this->signalEtiq4;
    }
}

