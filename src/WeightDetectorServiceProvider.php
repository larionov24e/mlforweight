<?php

namespace WeightDetector\Weight;

use Illuminate\Support\ServiceProvider;

class WeightDetectorServiceProvider extends ServiceProvider {

    protected $defer = true;


    public function register() {
        $this->app->singleton('weightDetector', function($app) {
            return new WeightDetectorService();
        });
    }

    public function provides() {
        return ['weightDetector'];
    }
}