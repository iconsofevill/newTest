<?php

namespace App;

interface CalcInterface {

    public function plus (float $a, float $b) : float;
    public function minus (float $a, float $b) : float;

}