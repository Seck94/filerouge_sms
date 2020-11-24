<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ADMINRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ADMINRepository::class)
 * @ORM\Table(name="`admin`")
 * @ApiResource(
 *     attributes={
 *          "security"="is_granted('ROLE_ADMIN')"
 *     },
 *
 *     collectionOperations={
 *          "add_apprenant"={
 *              "method"="POST",
 *              "path"="/admin/admins",
 *              "security"="is_granted('ROLE_ADMIN') or is_granted('ROLE_CM')",
 *              "security_message"="Vous n'avez pas access à cette Ressource"
 *          },
 *         "get"={
 *              "security"="is_granted('ROLE_ADMIN')",
 *              "security_message"="Vous n'avez pas acces a cette ressource.",
 *              "path"="admin/admins",
 *          },
 *          "get_apprenants"={
 *              "method"="GET",
 *              "path"="/admins" ,
 *              "security"="(is_granted('ROLE_ADMIN'))",
 *              "security_message"="Vous n'avez pas acces a cette ressource."
 *          },
 *     },
 *
 *     itemOperations={
 *         "get"={
 *              "security"="is_granted('ROLE_ADMIN')",
 *              "security_message"="Vous n'avez pas ces privileges.",
 *              "path"="admin/admins/{id}",
 *              "defaults"={"id"=null}
 *          },
 *          "get_apprenant"={
 *              "method"="GET",
 *              "path"="/admins/{id}",
 *              "requirements"={"id"="\d+"},
 *              "security"="(is_granted('ROLE_FORMATEUR'))",
 *              "security_message"="Vous n'avez pas access à cette Ressource"
 *          },
 *         "delete"={
 *              "security"="is_granted('ROLE_ADMIN')",
 *              "security_message"="Vous n'avez pas ces privileges.",
 *              "path"="admin/admins/{id}",
 *          },
 *         "patch"={
 *              "security"="is_granted('ROLE_ADMIN')",
 *              "security_message"="Vous n'avez pas ces privileges.",
 *              "path"="admin/admins/{id}",
 *          },
 *         "put"={
 *              "security_post_denormalize"="is_granted('ROLE_ADMIN')",
 *              "security_message"="Vous n'avez pas ces privileges.",
 *              "path"="admin/admins/{id}",
 *          },
 *     },
 * )
 */
class ADMIN extends User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    public function getId(): ?int
    {
        return $this->id;
    }
}
