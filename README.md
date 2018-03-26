# mlforweight
ML to check dis_weight


<code>
composer require larionov24e/mlforweight
</code>

<br>

<br>

<br>


Add to config/app.php to providers list



<code>
\WeightDetector\Weight\WeightDetectorServiceProvider::class,
</code>
<br><br><br>
Example:<br><br>
<code>
$weightDetect = app()->get('weightDetector');
$disWeight = $weightDetect->getDisWeight(21.3, 9.1, 26.4);
  // return 1.02
</code>
