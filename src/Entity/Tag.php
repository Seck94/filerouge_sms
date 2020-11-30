<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use App\Repository\TagRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=TagRepository::class)
 * @ApiResource(
 *     attributes={
 *
 *          "normalization_context"={"groups"={"tag_read","tag_details_read"}}
 *      },
 *    collectionOperations={
 *          "add_groupecompetence"={
 *              "method"="POST",
 *              "path"="admin/tags",
 *              "security_post_denormalize"="is_granted('EDIT', object)",
 *              "security_post_denormalize_message"="Vous n'avez pas ce privilege.",
 *          },
 *         "show_groupecompetence"={
 *              "method"="GET",
 *              "security"="is_granted('ROLE_CM')",
 *              "security_message"="Vous n'avez pas acces a cette ressource.",
 *              "path"="admin/tags"
 *              },
 *     },
 *
 *     itemOperations={
 *         "get"={
 *              "security"="is_granted('VIEW',object)",
 *              "security_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/tags/{id}",
 *         },
 *         "delete"={
 *              "security"="is_granted('DELETE',object)",
 *              "security_message"="Seul le proprietaite....",
 *              "path"="admin/tags/{id}",
 *         },
 *         "patch"={
 *              "security"="is_granted('EDIT',object)",
 *              "security_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/tags/{id}",
 *         },
 *         "put"={
 *              "security_post_denormalize"="is_granted('EDIT', object)",
 *              "security_post_denormalize_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/tags/{id}",
 *         },
 *     },
 * )
 */
class Tag
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"tag_read"})
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity=GroupeTag::class, inversedBy="tags")
     * @ApiSubresource()
     * @Groups({"tag_read"})
     */
    private $groupetag;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"tag_read","groupetag_read"})
     */
    private $libelle;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"tag_read","groupetag_read"})
     */
    private $description;

    public function __construct()
    {
        $this->groupetag = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|GroupeTag[]
     */
    public function getGroupetag(): Collection
    {
        return $this->groupetag;
    }

    public function addGroupetag(GroupeTag $groupetag): self
    {
        if (!$this->groupetag->contains($groupetag)) {
            $this->groupetag[] = $groupetag;
        }

        return $this;
    }

    public function removeGroupetag(GroupeTag $groupetag): self
    {
        $this->groupetag->removeElement($groupetag);

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
