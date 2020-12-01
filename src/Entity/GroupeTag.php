<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use App\Repository\GroupeTagRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=GroupeTagRepository::class)
 * @ApiResource(
 *     attributes={
 *          "normalization_context"={"groups"={"groupetag_read","groupetag_details_read"}}
 *      },
 *     collectionOperations={
 *         "post"={
 *              "security_post_denormalize"="is_granted('EDIT', object)",
 *              "security_post_denormalize_message"="Vous n'avez pas ce privilege."
 *          },
 *         "get"={
 *              "security"="is_granted('ROLE_ADMIN')",
 *              "security_message"="Vous n'avez pas acces a cette ressource.",
 *              "path"="admin/groupetags",
 *
 *              },
 *     },
 *
 *     itemOperations={
 *          "api_questions_answer_get_subresource"={
 *              "security"="is_granted('ROLE_ADMIN')",
 *              "method"="GET",
 *              "path"="admin/groupetags/{id}/tags",
 *
 *
 *     },
 *         "get"={
 *              "security"="is_granted('VIEW',object)",
 *              "security_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/groupetags/{id}",
 *         },
 *         "delete"={
 *              "security"="is_granted('DELETE',object)",
 *              "security_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/groupetags/{id}",
 *         },
 *         "patch"={
 *              "security"="is_granted('EDIT',object)",
 *              "security_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/groupetags/{id}",
 *         },
 *         "put"={
 *              "security_post_denormalize"="is_granted('EDIT', object)",
 *              "security_post_denormalize_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/groupetags/{id}",
 *         }
 *     },
 * )
 */
class GroupeTag
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"groupetag_read"})
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity=Tag::class, mappedBy="groupetag")
     * @ApiSubresource()
     * @Groups({"groupetag_read"})
     */
    private $tags;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"groupetag_read"})
     * @Assert\NotBlank(message="Le username ne peut pas etre nul !!!")
     */
    private $libelle;

    public function __construct()
    {
        $this->tags = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Tag[]
     */
    public function getTags(): Collection
    {
        return $this->tags;
    }

    public function addTag(Tag $tag): self
    {
        if (!$this->tags->contains($tag)) {
            $this->tags[] = $tag;
            $tag->addGroupetag($this);
        }

        return $this;
    }

    public function removeTag(Tag $tag): self
    {
        if ($this->tags->removeElement($tag)) {
            $tag->removeGroupetag($this);
        }

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
}
