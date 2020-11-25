<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use App\Repository\GroupeCompetenceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=GroupeCompetenceRepository::class)
 * @ApiResource(
 *     attributes={
 *          "normalization_context"={"groups"={"Grpcompetence_read","Grpcompetence_details_read"}}
 *      },
 *     collectionOperations={
 *          "add_groupecompetence"={
 *              "method"="POST",
 *              "path"="admin/groupecompetences",
 *              "security_post_denormalize"="is_granted('EDIT', object)",
 *              "security_post_denormalize_message"="Vous n'avez pas ce privilege.",
 *          },
 *         "show_groupecompetence"={
 *              "method"="GET",
 *              "security"="is_granted('ROLE_CM')",
 *              "security_message"="Vous n'avez pas acces a cette ressource.",
 *              "path"="admin/groupecompetences"
 *              },
 *     },
 *
 *     itemOperations={
 *         "get"={
 *              "security"="is_granted('VIEW',object)",
 *              "security_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/groupecompetences/{id}",
 *         },
 *         "delete"={
 *              "security"="is_granted('DELETE',object)",
 *              "security_message"="Seul le proprietaite....",
 *              "path"="admin/groupecompetences/{id}",
 *         },
 *         "update_groupecompetence"={
 *              "method"="PATCH",
 *              "security"="is_granted('EDIT',object)",
 *              "security_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/groupecompetences/{id}",
 *         },
 *         "update_groupecompetence"={
 *              "method"="PUT",
 *              "security_post_denormalize"="is_granted('EDIT', object)",
 *              "security_post_denormalize_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/groupecompetences/{id}",
 *         },
 *     },
 * )
 */
class GroupeCompetence
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"Grpcompetence_read"})
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity=Competence::class, inversedBy="groupeCompetences")
     * @Groups({"Grpcompetence_read"})
     * @ApiSubresource()
     */
    private $Competence;

    /**
     * @ORM\ManyToMany(targetEntity=Referentiel::class, inversedBy="groupeCompetences")
     */
    private $Referentiel;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"Grpcompetence_read"})
     */
    private $Libelle;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"Grpcompetence_read"})
     */
    private $Descriptif;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="GroupeCompetence")
     * @Groups({"Grpcompetence_read"})
     */
    private $user;

    public function __construct()
    {
        $this->Competence = new ArrayCollection();
        $this->Referentiel = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Competence[]
     */
    public function getCompetence(): Collection
    {
        return $this->Competence;
    }

    public function addCompetence(Competence $competence): self
    {
        if (!$this->Competence->contains($competence)) {
            $this->Competence[] = $competence;
        }

        return $this;
    }

    public function removeCompetence(Competence $competence): self
    {
        $this->Competence->removeElement($competence);

        return $this;
    }

    /**
     * @return Collection|Referentiel[]
     */
    public function getReferentiel(): Collection
    {
        return $this->Referentiel;
    }

    public function addReferentiel(Referentiel $referentiel): self
    {
        if (!$this->Referentiel->contains($referentiel)) {
            $this->Referentiel[] = $referentiel;
        }

        return $this;
    }

    public function removeReferentiel(Referentiel $referentiel): self
    {
        $this->Referentiel->removeElement($referentiel);

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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }


}
