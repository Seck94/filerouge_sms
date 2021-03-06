<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\NiveauRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=NiveauRepository::class)
 * @ApiResource(
 *        attributes={
 *          "normalization_context"={"groups"={"niveau_read","niveau_details_read"}}
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
 *              "security"="is_granted('ROLE_ADMIN')",
 *              "security_message"="Vous n'avez pas acces a cette ressource.",
 *              "path"="admin/groupecompetences"
 *              },
 *     },
 * )
 */
class Niveau
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"competence_read","niveau_read","competence_write","grpcompetence_write"})
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Competence::class, inversedBy="niveaux")
     *
     */
    private $Competence;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"competence_read","niveau_read","competence_write","grpcompetence_write"})
     */
    private $Descriptif;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"competence_read","niveau_read","competence_write","grpcompetence_write"})
     */
    private $GroupeAction;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"competence_read","niveau_read","competence_write","grpcompetence_write"})
     */
    private $GroupeEvaluation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompetence(): ?Competence
    {
        return $this->Competence;
    }

    public function setCompetence(?Competence $Competence): self
    {
        $this->Competence = $Competence;

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

    public function getGroupeAction(): ?string
    {
        return $this->GroupeAction;
    }

    public function setGroupeAction(string $GroupeAction): self
    {
        $this->GroupeAction = $GroupeAction;

        return $this;
    }

    public function getGroupeEvaluation(): ?string
    {
        return $this->GroupeEvaluation;
    }

    public function setGroupeEvaluation(string $GroupeEvaluation): self
    {
        $this->GroupeEvaluation = $GroupeEvaluation;

        return $this;
    }
}
