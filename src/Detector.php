<?php

namespace WeightDetector\Weight;


interface Detector
{
    /**
     * Method for get dis weight
     *
     * @param float $width
     * @param float $height
     * @param float $length
     * @return mixed
     */
    public function getDisWeight(float $width, float $height, float $length);


    /**
     * Method for get product weight
     *
     * @return mixed
     */
    public function getProductWeight();
}