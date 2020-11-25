<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping\DiscriminatorColumn;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Security\Core\User\UserInterface;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\BooleanFilter;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
    
    * @ORM\InheritanceType("JOINED")
    * @ORM\DiscriminatorColumn(name="type", type="string")
    * @ORM\DiscriminatorMap({"user" = "User", "apprenant" = "Apprenant", "formateur" = "Formateur", "cm"="CM","admin"="ADMIN"})
    * @ApiResource(
 *     attributes={
 *          "security"="is_granted('ROLE_ADMIN')",
 *          "normalization_context"={"groups"={"user_read","user_details_read"}}
 *     },
 * 
 *     collectionOperations={
 *          "add_user"={
 *              "method"="POST",
 *              "path"="/admin/users",
 *              "security"="is_granted('ROLE_ADMIN')",
 *              "security_message"="Vous n'avez pas le privilege",
 *              "normalization_context"={"groups"={"user_read"}}
 *          },
 *         "get"={
 *              "security"="is_granted('ROLE_ADMIN')",
 *              "security_message"="Vous n'avez pas acces a cette ressource.",
 *              "path"="admin/users",
 *             
 *          }
 *     },
 *     
 *     itemOperations={
 *         "get"={
 *              "security"="is_granted('ROLE_ADMIN')",
 *              "security_message"="Vous n'avez pas ces privileges.",
 *              "normalization_context"={"groups"={"user_read","user_details_read"}},
 *              "path"="admin/users/{id}",
 *              "defaults"={"id"=null}
 *          },
 *         "put"={
 *              "security_post_denormalize"="is_granted('ROLE_ADMIN')",
 *              "security_message"="Vous n'avez pas ces privileges.",
 *              "path"="admin/users/{id}",
 *          },
 *     },)
 * @ApiFilter(BooleanFilter::class, properties={"Archivage"})
 * 
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer") 
     * @Groups({"user_read","profil_read"})
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     * @Groups({"user_read","profil_read","formateur_read"})
     */
    protected $username;

    /**
     * @ORM\Column(type="json")
     */
    protected $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    protected $password;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"user_read","profil_read","formateur_read"})
     */
    protected $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"user_read","profil_read","formateur_read"})
     */
    protected $Prenom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"user_read","profil_read","formateur_read"})
     */
    protected $Email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"user_read" ,"profil_read","formateur_read"})
     */
    protected $Statut;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    protected $Avatar;

    /**
     * @ORM\ManyToOne(targetEntity=Profil::class, inversedBy="users",cascade={"persist"})
     * @Groups({"user_read" ,"profil_read","formateur_read"})
     */
    private $profil;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups({"user_read"})
     */
    private $Archivage;

    /**
     * @ORM\OneToMany(targetEntity=GroupeCompetence::class, mappedBy="user")
     */
    private $GroupeCompetence;

    public function __construct()
    {
        $this->GroupeCompetence = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_'.$this->profil->getLibelle();

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->Statut;
    }

    public function setStatut(string $Statut): self
    {
        $this->Statut = $Statut;

        return $this;
    }

    public function getAvatar()
    {
        return $this->Avatar;
    }

    public function setAvatar($Avatar): self
    {
        $this->Avatar = $Avatar;

        return $this;
    }

    public function getProfil(): ?Profil
    {
        return $this->profil;
    }

    public function setProfil(?Profil $profil): self
    {
        $this->profil = $profil;

        return $this;
    }

    public function getArchivage(): ?bool
    {
        return $this->Archivage;
    }

    public function setArchivage(?bool $Archivage): self
    {
        $this->Archivage = $Archivage;

        return $this;
    }

    /**
     * @return Collection|GroupeCompetence[]
     */
    public function getGroupeCompetence(): Collection
    {
        return $this->GroupeCompetence;
    }

    public function addGroupeCompetence(GroupeCompetence $groupeCompetence): self
    {
        if (!$this->GroupeCompetence->contains($groupeCompetence)) {
            $this->GroupeCompetence[] = $groupeCompetence;
            $groupeCompetence->setUser($this);
        }

        return $this;
    }

    public function removeGroupeCompetence(GroupeCompetence $groupeCompetence): self
    {
        if ($this->GroupeCompetence->removeElement($groupeCompetence)) {
            // set the owning side to null (unless already changed)
            if ($groupeCompetence->getUser() === $this) {
                $groupeCompetence->setUser(null);
            }
        }

        return $this;
    }



}
