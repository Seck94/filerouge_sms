<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ProfilRepository;
use ApiPlatform\Core\Annotation\ApiFilter;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\BooleanFilter;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ProfilRepository::class)
 * @UniqueEntity ("libelle")
 * @ApiResource(
 *     attributes={
 *          "normalization_context"={"groups"={"profil_read","profil_details_read"}}
 *      },
 *     collectionOperations={
 *         "post"={
 *              "security_post_denormalize"="is_granted('EDIT', object)", 
 *              "security_post_denormalize_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/profils",
 *          },
 *         "get"={
 *              "security"="is_granted('ROLE_ADMIN')",
 *              "security_message"="Vous n'avez pas acces a cette ressource.",
 *              "path"="admin/profils",
 *              
 *              },
 *     },
 *     
 *     itemOperations={
 *       "api_questions_answer_get_subresource"={
 *              "security"="is_granted('ROLE_ADMIN')",
 *              "method"="GET",
 *              "path"="admin/profils/{id}/users",
 *
 *
 *     },
 *         "get"={
 *              "security"="is_granted('VIEW',object)", 
 *              "security_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/profils/{id}",
 *         }, 
 *         "delete"={
 *              "security"="is_granted('EDIT',object)",
 *              "security_message"="Vous n'avez pas ce privilege merci de garder les bonnes informations afin d'avoir cette possibilité.",
 *              "path"="admin/profils/{id}",
 *         },
 *         "patch"={
 *              "security"="is_granted('EDIT',object)", 
 *              "security_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/profils/{id}",
 *         },
 *         "put"={
 *              "security_post_denormalize"="is_granted('EDIT', object)", 
 *              "security_post_denormalize_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/profils/{id}",
 *         },
 *     },
 * )
 * @ApiFilter(BooleanFilter::class, properties={"Statut"})
 */
class Profil
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"profil_details_read"})
     * 
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"profil_details_read"})
     * @Assert\NotBlank(message="Le libelle ne peut pas etre nul !!!")
     */
    private $Libelle;

    /**
     * @ORM\OneToMany(targetEntity=User::class, mappedBy="profil")
     * @ApiSubresource
     * @Groups({"profil_read"})
     */
    private $users;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups({"profil_read"})
     */
    private $Statut = false;

   
    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->setProfil($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getProfil() === $this) {
                $user->setProfil(null);
            }
        }

        return $this;
    }

    public function getStatut(): ?bool
    {
        return $this->Statut;
    }

    public function setStatut(?bool $Statut): self
    {
        $this->Statut = $Statut;

        return $this;
    }

   
}
