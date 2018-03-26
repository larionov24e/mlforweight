<?php

namespace WeightDetector\Weight;

use \Illuminate\Support\Facades\Facade;


class WeightDetectorFacade extends Facade {

    protected static function getFacadeAccessor() {
        return 'wightDetector';
    }
}