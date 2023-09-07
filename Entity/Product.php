<?php

declare(strict_types = 1);

namespace Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Entity
 * @Table(name="product")
 */

class Product {

    /**
     * @ORM\Column(name="product_id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Id()
     */
    private $productId;
    /** @Column(name="product_title", type="varchar") */
    private $productTitle;
    /**
     * @ORM\Column(name="product_description", type="text")
     */
    private $productDescription;
    /**
     * @ORM\Column(name="product_price", type="int")
     */
    private $productPrice;
    /**
     * @ORM\Column(name="stock", type="int")
     */
    private $stock;
    /**
     * @ORM\Column(name="status", type="int")
     */
    private $status;

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->ProductId;
    }
    /**
     * @return mixed
     */
    public function getProductTitle()
    {
        return $this->ProductTitle;
    }
    /**
     * @return mixed
     */
    public function productDescription()
    {
        return $this->ProductDescription;
    }
    /**
     * @return mixed
     */
    public function productPrice()
    {
        return $this->ProductPrice;
    }


}