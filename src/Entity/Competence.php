<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use App\Repository\CompetenceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=CompetenceRepository::class)
 * @ApiResource(
 *      attributes={
 *          "normalization_context"={"groups"={"competence_read","competence_details_read"}}
 *      },
 *    collectionOperations={
 *          "add_competence"={
 *              "method"="POST",
 *              "path"="admin/competences",
 *              "security_post_denormalize"="is_granted('EDIT', object)",
 *              "security_post_denormalize_message"="Vous n'avez pas ce privilege.",
 *          },
 *         "show_groupecompetence"={
 *              "method"="GET",
 *              "security"="is_granted('ROLE_CM')",
 *              "security_message"="Vous n'avez pas acces a cette ressource.",
 *              "path"="admin/competences"
 *              },
 *     },
 *
 *     itemOperations={
 *         "get"={
 *              "security"="is_granted('VIEW',object)",
 *              "security_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/competences/{id}",
 *         },
 *         "delete"={
 *              "security"="is_granted('DELETE',object)",
 *              "security_message"="Seul le proprietaite....",
 *              "path"="admin/competences/{id}",
 *         },
 *         "update_competence"={
 *              "method"="PATCH",
 *              "security"="is_granted('EDIT',object)",
 *              "security_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/competences/{id}",
 *         },
 *         "update_competence"={
 *              "method"="PUT",
 *              "security_post_denormalize"="is_granted('EDIT', object)",
 *              "security_post_denormalize_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/competences/{id}",
 *         },
 *     },
 * )
 */
class Competence
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"competence_read","Grpcompetence_read"})
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity=GroupeCompetence::class, mappedBy="Competence")
     * @ApiSubresource()
     */
    private $groupeCompetences;

    /**
     * @ORM\OneToMany(targetEntity=Niveau::class, mappedBy="Competence")
     * @Groups({"competence_read","Grpcompetence_read"})
     */
    private $niveaux;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"competence_read","Grpcompetence_read"})
     */
    private $Libelle;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"competence_read","Grpcompetence_read"})
     */
    private $Descriptif;

    public function __construct()
    {
        $this->groupeCompetences = new ArrayCollection();
        $this->niveaux = new ArrayCollection();
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
            $groupeCompetence->addCompetence($this);
        }

        return $this;
    }

    public function removeGroupeCompetence(GroupeCompetence $groupeCompetence): self
    {
        if ($this->groupeCompetences->removeElement($groupeCompetence)) {
            $groupeCompetence->removeCompetence($this);
        }

        return $this;
    }

    /**
     * @return Collection|Niveau[]
     */
    public function getNiveaux(): Collection
    {
        return $this->niveaux;
    }

    public function addNiveau(Niveau $niveau): self
    {
        if (!$this->niveaux->contains($niveau)) {
            $this->niveaux[] = $niveau;
            $niveau->setCompetence($this);
        }

        return $this;
    }

    public function removeNiveau(Niveau $niveau): self
    {
        if ($this->niveaux->removeElement($niveau)) {
            // set the owning side to null (unless already changed)
            if ($niveau->getCompetence() === $this) {
                $niveau->setCompetence(null);
            }
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

    public function getDescriptif(): ?string
    {
        return $this->Descriptif;
    }

    public function setDescriptif(string $Descriptif): self
    {
        $this->Descriptif = $Descriptif;

        return $this;
    }
}
