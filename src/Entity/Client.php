<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClientRepository::class)]
class Client
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $compteAffaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $compteEvenementVeh = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $compteDernierEvenementVeh = null;

    #[ORM\Column(nullable: true)]
    private ?int $numeroDeFiche = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $libelleCivilite = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $proprietaireActuelDuVehicule = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nEtNomDeLaVoie = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $complementAdresse = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $codePostal = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ville = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $telephoneDomicile = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $telephonePortable = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $telephoneJob = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateDeMiseEnCirculation = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateAchatDateDeLivraison = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateDernierEvenementVeh = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $libelleMarqueMrq = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $libelleModeleMod = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $version = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $vin = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $immatriculation = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $typeDeProspect = null;

    #[ORM\Column(nullable: true)]
    private ?int $kilometrage = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $libelleEnergieEnerg = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $vendeurVn = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $vendeurVo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $commentaireDeFacturationVeh = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $typeVnVo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $numeroDeDossierVnVo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $intermediaireDeVenteVn = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateEvenementVeh = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $origineEvenementVeh = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompteAffaire(): ?string
    {
        return $this->compteAffaire;
    }

    public function setCompteAffaire(?string $compteAffaire): self
    {
        $this->compteAffaire = $compteAffaire;

        return $this;
    }

    public function getCompteEvenementVeh(): ?string
    {
        return $this->compteEvenementVeh;
    }

    public function setCompteEvenementVeh(?string $compteEvenement): self
    {
        $this->compteEvenementVeh = $compteEvenement;

        return $this;
    }

    public function getCompteDernierEvenementVeh(): ?string
    {
        return $this->compteDernierEvenementVeh;
    }

    public function setCompteDernierEvenementVeh(?string $compteDernierEvenement): self
    {
        $this->compteDernierEvenementVeh = $compteDernierEvenement;

        return $this;
    }

    public function getNumeroDeFiche(): ?int
    {
        return $this->numeroDeFiche;
    }

    public function setNumeroDeFiche(?int $numeroFiche): self
    {
        $this->numeroDeFiche = $numeroFiche;

        return $this;
    }

    public function getLibelleCivilite(): ?string
    {
        return $this->libelleCivilite;
    }

    public function setLibelleCivilite(?string $libelleCivilite): self
    {
        $this->libelleCivilite = $libelleCivilite;

        return $this;
    }

    public function getProprietaireActuelDuVehicule(): ?string
    {
        return $this->proprietaireActuelDuVehicule;
    }

    public function setProprietaireActuelDuVehicule(?string $proprietaireActuelDuVehicule): self
    {
        $this->proprietaireActuelDuVehicule = $proprietaireActuelDuVehicule;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNEtNomDeLaVoie(): ?string
    {
        return $this->nEtNomDeLaVoie;
    }

    public function setNEtNomDeLaVoie(?string $numeroEtNomDeLaVoie): self
    {
        $this->nEtNomDeLaVoie = $numeroEtNomDeLaVoie;

        return $this;
    }

    public function getComplementAdresse(): ?string
    {
        return $this->complementAdresse;
    }

    public function setComplementAdresse(?string $complementAdresse): self
    {
        $this->complementAdresse = $complementAdresse;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    public function setCodePostal(?string $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getTelephoneDomicile(): ?string
    {
        return $this->telephoneDomicile;
    }

    public function setTelephoneDomicile(?string $telephoneDomicile): self
    {
        $this->telephoneDomicile = $telephoneDomicile;

        return $this;
    }

    public function getTelephonePortable(): ?string
    {
        return $this->telephonePortable;
    }

    public function setTelephonePortable(?string $telephonePortable): self
    {
        $this->telephonePortable = $telephonePortable;

        return $this;
    }

    public function getTelephoneJob(): ?string
    {
        return $this->telephoneJob;
    }

    public function setTelephoneJob(?string $telephoneJob): self
    {
        $this->telephoneJob = $telephoneJob;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getDateDeMiseEnCirculation(): ?\DateTimeInterface
    {
        return $this->dateDeMiseEnCirculation;
    }

    public function setDateDeMiseEnCirculation(?\DateTimeInterface $dateDeMiseEnCirculation): self
    {
        $this->dateDeMiseEnCirculation = $dateDeMiseEnCirculation;

        return $this;
    }

    public function getDateAchatDateDeLivraison(): ?\DateTimeInterface
    {
        return $this->dateAchatDateDeLivraison;
    }

    public function setDateAchatDateDeLivraison(?\DateTimeInterface $dateAchatDateDeLivraison): self
    {
        $this->dateAchatDateDeLivraison = $dateAchatDateDeLivraison;

        return $this;
    }

    public function getDateDernierEvenementVeh(): ?\DateTimeInterface
    {
        return $this->dateDernierEvenementVeh;
    }

    public function setDateDernierEvenementVeh(?\DateTimeInterface $dateDernierEvenementVeh): self
    {
        $this->dateDernierEvenementVeh = $dateDernierEvenementVeh;

        return $this;
    }

    public function getLibelleMarqueMrq(): ?string
    {
        return $this->libelleMarqueMrq;
    }

    public function setLibelleMarqueMrq(?string $libelleMarqueMrq): self
    {
        $this->libelleMarqueMrq = $libelleMarqueMrq;

        return $this;
    }

    public function getLibelleModeleMod(): ?string
    {
        return $this->libelleModeleMod;
    }

    public function setLibelleModeleMod(?string $libelleModeleMod): self
    {
        $this->libelleModeleMod = $libelleModeleMod;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->version = $version;

        return $this;
    }

    public function getVin(): ?string
    {
        return $this->vin;
    }

    public function setVin(?string $vin): self
    {
        $this->vin = $vin;

        return $this;
    }

    public function getImmatriculation(): ?string
    {
        return $this->immatriculation;
    }

    public function setImmatriculation(?string $immatriculation): self
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    public function getTypeDeProspect(): ?string
    {
        return $this->typeDeProspect;
    }

    public function setTypeDeProspect(?string $typeDeProspect): self
    {
        $this->typeDeProspect = $typeDeProspect;

        return $this;
    }

    public function getKilometrage(): ?int
    {
        return $this->kilometrage;
    }

    public function setKilometrage(?int $kilometrage): self
    {
        $this->kilometrage = $kilometrage;

        return $this;
    }

    public function getLibelleEnergieEnerg(): ?string
    {
        return $this->libelleEnergieEnerg;
    }

    public function setLibelleEnergieEnerg(?string $libelleEnergieEnerg): self
    {
        $this->libelleEnergieEnerg = $libelleEnergieEnerg;

        return $this;
    }

    public function getVendeurVn(): ?string
    {
        return $this->vendeurVn;
    }

    public function setVendeurVn(?string $vendeurVn): self
    {
        $this->vendeurVn = $vendeurVn;

        return $this;
    }

    public function getVendeurVo(): ?string
    {
        return $this->vendeurVo;
    }

    public function setVendeurVo(?string $vendeurVo): self
    {
        $this->vendeurVo = $vendeurVo;

        return $this;
    }

    public function getCommentaireDeFacturationVeh(): ?string
    {
        return $this->commentaireDeFacturationVeh;
    }

    public function setCommentaireDeFacturationVeh(?string $commentaireDeFacturationVeh): self
    {
        $this->commentaireDeFacturationVeh = $commentaireDeFacturationVeh;

        return $this;
    }

    public function getTypeVnVo(): ?string
    {
        return $this->typeVnVo;
    }

    public function setTypeVnVo(?string $typeVnVo): self
    {
        $this->typeVnVo = $typeVnVo;

        return $this;
    }

    public function getNumeroDeDossierVnVo(): ?string
    {
        return $this->numeroDeDossierVnVo;
    }

    public function setNumeroDeDossierVnVo(?string $numeroDeDossierVnVo): self
    {
        $this->numeroDeDossierVnVo = $numeroDeDossierVnVo;

        return $this;
    }

    public function getIntermediaireDeVenteVn(): ?string
    {
        return $this->intermediaireDeVenteVn;
    }

    public function setIntermediaireDeVenteVn(?string $intermediaireDeVenteVn): self
    {
        $this->intermediaireDeVenteVn = $intermediaireDeVenteVn;

        return $this;
    }

    public function getDateEvenementVeh(): ?\DateTimeInterface
    {
        return $this->dateEvenementVeh;
    }

    public function setDateEvenementVeh(?\DateTimeInterface $dateEvenementVeh): self
    {
        $this->dateEvenementVeh = $dateEvenementVeh;

        return $this;
    }

    public function getOrigineEvenementVeh(): ?string
    {
        return $this->origineEvenementVeh;
    }

    public function setOrigineEvenementVeh(?string $origineEvenementVeh): self
    {
        $this->origineEvenementVeh = $origineEvenementVeh;

        return $this;
    }
}
