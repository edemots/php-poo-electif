<?php

require_once('./src/Character.php');

class Archer extends Character
{
    public function __construct(
        float $health,
        float $defenseRatio,
        int $attackDamages,
        int $magicDamages,
    )
    {
        if ($magicDamages > $attackDamages) {
            throw new Exception("The archer cannot have more magic damages than physical damages.");
        }
        parent::__construct($health, $defenseRatio, $attackDamages, $magicDamages);
    }
}
