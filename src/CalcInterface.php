<?php

namespace App;

interface CalcInterface {

    // добавь!
    public function plus (float $a, float $b) : float;

    // отними!!
    public function minus (float $a, float $b) : float;

    // умножь!!!
    public function mult (float $a, float $b) : float;

    // раздели!!!!
    public function div (float $a, float $b) : float;

    // логорифни!!!!!
    public function log (float $a, float $b) : float;

    // натурально логорифни!!!!!!
    public function ln (float $a) : float;

    // возведи в квадрат!!!!!!!
    public function pow (float $a, float $b) : float;

    // процент сделай срочно мне!!!!!!!!
    public function per (float $a, float $b) : float;

    // корень срочнee!!!!!!!!!!
    public function sqrt (float $a) : float;

    // факториал отсрачивать вообще нельзя!!!!!!!!!!!
    public function fact (float $a) : float;
    
}