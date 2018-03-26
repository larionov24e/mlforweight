<?php

namespace WeightDetector\Weight;

use Phpml\ModelManager;

class WeightDetectorService implements Detector
{
    /**
     * ML dis weght filename
     */
    const ML_FILENAME_DISWEIGHT = 'disWeightTainModel';

    private $weightDetector;

    /**
     * @param float $width
     * @param float $height
     * @param float $length
     * @return float
     * @throws \Exception
     */
    public function getDisWeight(float $width, float $height, float $length) {

        if(!$width || !$height || !$length) {
            throw new \Exception('No data');
        }

        $modelManager = new ModelManager();
        $restoredClassifier = $modelManager->restoreFromFile('../mldata/' . self::ML_FILENAME_DISWEIGHT);

        return round($restoredClassifier->predict([$width, $height, $length]), 2);
    }

    /**
     * Method for get product weight
     *
     * @return mixed
     */
    public function getProductWeight()
    {
        // TODO: Implement getProductWeight() method.
    }

    public function get() {
        return $this->weightDetector;
    }
}