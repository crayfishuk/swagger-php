<?php

namespace UsingInterfaces;

/**
 * @OA\Schema(title="Product interface")
 */
interface ProductInterface
{

    /**
     * The unique identifier of a product in our catalog.
     *
     * @OA\Property(property="name", example="toaster")
     */
    public function getName();
}
