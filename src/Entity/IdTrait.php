<?php

namespace App\Entity;

/**
 * Created by PhpStorm.
 * User: Jonathan
 * Date: 30/01/2018
 * Time: 18:43
 */
trait IdTrait
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return IdTrait
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
