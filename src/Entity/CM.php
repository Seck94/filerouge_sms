<?php

namespace App\Entity;

use App\Entity\CM;
use App\Entity\User;
use App\Repository\CMRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass=CMRepository::class)
 * @ApiResource(
 *     attributes={
 *          "security"="is_granted('ROLE_ADMIN')",
 *          "normalization_context"={"groups"={"cm_read","cm_details_read"}}
 *     },
 *
 *     collectionOperations={
 *          "add_formateur"={
 *              "method"="POST",
 *              "path"="/admin/cms",
 *              "security"="is_granted('ROLE_ADMIN'))",
 *              "security_message"="Vous n'avez pas access à cette Ressource"
 *          },
 *         "get"={
 *              "path"="/admin/cms",
 *              "security"="is_granted('ROLE_ADMIN')",
 *              "security_message"="Vous n'avez pas acces a cette ressource.",
 *              "normalization_context"={"groups"={"formateur_read"}}
 *          }
 *     },
 *
 *     itemOperations={
 *         "get"={
 *              "security"="is_granted('ROLE_ADMIN')",
 *              "security_message"="Vous n'avez pas ces privileges.",
 *              "path"="admin/cms/{id}",
 *              "defaults"={"id"=null}
 *          },
 *          "get_formateur"={
 *              "method"="GET",
 *              "path"="/cms/{id}",
 *              "requirements"={"id"="\d+"},
 *              "security"="(is_granted('ROLE_FORMATEUR'))",
 *              "security_message"="Vous n'avez pas access à cette Ressource"
 *          },
 *         "delete"={
 *              "security"="is_granted('ROLE_ADMIN')",
 *              "security_message"="Vous n'avez pas ces privileges.",
 *              "path"="admin/cms/{id}",
 *          },
 *         "patch"={
 *              "security"="is_granted('ROLE_ADMIN')",
 *              "security_message"="Vous n'avez pas ces privileges.",
 *              "path"="admin/cms/{id}",
 *          },
 *         "put"={
 *              "path"="admin/cms/{id}",
 *              "security_post_denormalize"="is_granted('ROLE_ADMIN')",
 *              "security_message"="Vous n'avez pas ces privileges."
 *          },
 *     },
 *
 * )
 */
class CM extends User
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
