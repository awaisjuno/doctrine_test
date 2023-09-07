<?php

declare(strict_types = 1);

namespace Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="invoices")
 */
class Invoice
{
    /**
     * @ORM\Column(name="invoice_id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Id()
     */
    private $id;
    /**
     * @ORM\Column(name="user_id", type="integer")
     */
    private $userId;

    /**
     * @ORM\Column(name="product_id", type="integer")
     */
    private $productId;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId): self
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param mixed $productId
     */
    public function setProductId($productId): self
    {
        $this->productId = $productId;
        return $this;
    }
}