<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use App\Repository\ReferentielRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=ReferentielRepository::class)
 * @ApiResource(
 * *     attributes={
 *          "security"="is_granted('ROLE_ADMIN')",
 *          "normalization_context"={"groups"={"referentiel_read","user_details_read","referentiel_groupecompetence_read"}}
 *     },
 *
 *     collectionOperations={
 *          "add_referentiel"={
 *              "method"="POST",
 *              "path"="/admin/referentiels",
 *              "security"="is_granted('ROLE_ADMIN')",
 *              "security_message"="Vous n'avez pas le privilege"
 *          },
 *         "get"={
 *              "security"="is_granted('ROLE_ADMIN')",
 *              "security_message"="Vous n'avez pas acces a cette ressource.",
 *              "path"="admin/referentiels",
 *
 *          },
 *           "show_groupecompetence"={
 *              "method"="GET",
 *              "security"="is_granted('ROLE_CM')",
 *              "security_message"="Vous n'avez pas acces a cette ressource.",
 *              "path"="admin/referentiels"
 *              },
 *
 *           "show_referentiel_groupecompetence"={
 *              "method"="GET",
 *              "security"="is_granted('ROLE_CM')",
 *              "security_message"="Vous n'avez pas acces a cette ressource.",
 *              "path"="admin/referentiels/groupecompetences",
 *              "normalization_context"={"groups"={"referentiel_groupecompetence_read","user_details_read"}}
 *              },
 *     },
 *
 *     itemOperations={
 *         "get"={
 *              "security"="is_granted('VIEW',object)",
 *              "security_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/referentiels/{id}",
 *          },
 *         "delete"={
 *              "security"="is_granted('ROLE_ADMIN')",
 *              "security_message"="Vous n'avez pas ces privileges.",
 *              "path"="admin/referentiels/{id}",
 *          },
 *         "update_referentiel"={
 *              "method"="PATCH",
 *              "security"="is_granted('ROLE_ADMIN')",
 *              "security_message"="Vous n'avez pas ces privileges.",
 *              "path"="admin/referentiels/{id}",
 *          },
 *         "update_referentiel"={
 *              "method"="PUT",
 *              "security_post_denormalize"="is_granted('ROLE_ADMIN')",
 *              "security_message"="Vous n'avez pas ces privileges.",
 *              "path"="admin/referentiels/{id}",
 *          },
 *     },
 * )
 */
class Referentiel
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"referentiel_read"})
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity=GroupeCompetence::class, mappedBy="Referentiel")
     * @Groups({"referentiel_read","referentiel_groupecompetence_read"})
     */
    private $groupeCompetences;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"referentiel_read","referentiel_groupecompetence_read"})
     */
    private $Libelle;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"referentiel_read","referentiel_groupecompetence_read"})
     */
    private $Presentation;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"referentiel_read","referentiel_groupecompetence_read"})
     */
    private $CritereEvaluation;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"referentiel_read","referentiel_groupecompetence_read"})
     */
    private $CritereAdmission;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    private $programme;

    public function __construct()
    {
        $this->groupeCompetences = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|GroupeCompetence[]
     */
    public function getGroupeCompetences(): Collection
    {
        return $this->groupeCompetences;
    }

    public function addGroupeCompetence(GroupeCompetence $groupeCompetence): self
    {
        if (!$this->groupeCompetences->contains($groupeCompetence)) {
            $this->groupeCompetences[] = $groupeCompetence;
            $groupeCompetence->addReferentiel($this);
        }

        return $this;
    }

    public function removeGroupeCompetence(GroupeCompetence $groupeCompetence): self
    {
        if ($this->groupeCompetences->removeElement($groupeCompetence)) {
            $groupeCompetence->removeReferentiel($this);
        }

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->Libelle;
    }

    public function setLibelle(string $Libelle): self
    {
        $this->Libelle = $Libelle;

        return $this;
    }

    public function getPresentation(): ?string
    {
        return $this->Presentation;
    }

    public function setPresentation(string $Presentation): self
    {
        $this->Presentation = $Presentation;

        return $this;
    }

    public function getCritereEvaluation(): ?string
    {
        return $this->CritereEvaluation;
    }

    public function setCritereEvaluation(string $CritereEvaluation): self
    {
        $this->CritereEvaluation = $CritereEvaluation;

        return $this;
    }

    public function getCritereAdmission(): ?string
    {
        return $this->CritereAdmission;
    }

    public function setCritereAdmission(string $CritereAdmission): self
    {
        $this->CritereAdmission = $CritereAdmission;

        return $this;
    }

    public function getProgramme()
    {
        return $this->programme;
    }

    public function setProgramme($programme): self
    {
        $this->programme = $programme;

        return $this;
    }
}
