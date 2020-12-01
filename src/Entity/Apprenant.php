<?php

namespace App\Entity;

use App\Entity\User;
use App\Entity\Apprenant;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ApprenantRepository;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass=ApprenantRepository::class)
 * @ApiResource(
 *     attributes={
 *          "security"="is_granted('ROLE_ADMIN')",
 *          "normalization_context"={"groups"={"apprenant_read","apprenant_details_read"}}
 *
 *     },
 *
 *     collectionOperations={
 *          "post"={
 *
 *              "path"="/admin/apprenants",
 *              "security"="is_granted('ROLE_ADMIN') or is_granted('ROLE_CM')",
 *              "security_message"="Vous n'avez pas access à cette Ressource"
 *          },
 *         "get"={
 *              "security"="is_granted('ROLE_ADMIN')",
 *              "security_message"="Vous n'avez pas acces a cette ressource.",
 *              "path"="admin/apprenants",
 *              "normalization_context"={"groups"={"apprenant_read"}}
 *          },
 *          "get_apprenants"={
 *              "method"="GET",
 *              "path"="/apprenants" ,
 *              "security"="(is_granted('ROLE_ADMIN'))",
 *              "security_message"="Vous n'avez pas acces a cette ressource."
 *          },
 *     },
 *
 *     itemOperations={
 *
 *          "get_apprenant"={
 *              "method"="GET",
 *              "path"="/apprenants/{id}",
 *              "requirements"={"id"="\d+"},
 *              "security"="(is_granted('ROLE_FORMATEUR'))",
 *              "security_message"="Vous n'avez pas access à cette Ressource"
 *          },
 *         "delete"={
 *              "security"="is_granted('ROLE_ADMIN')",
 *              "security_message"="Vous n'avez pas ces privileges.",
 *              "path"="admin/apprenants/{id}",
 *          },
 *         "patch"={
 *              "security"="is_granted('ROLE_ADMIN')",
 *              "security_message"="Vous n'avez pas ces privileges.",
 *              "path"="admin/apprenants/{id}",
 *          },
 *         "put"={
 *              "security_post_denormalize"="is_granted('ROLE_ADMIN')",
 *              "security_message"="Vous n'avez pas ces privileges.",
 *              "path"="admin/apprenants/{id}",
 *          },
 *     },
 * )
 */
class Apprenant extends User
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
