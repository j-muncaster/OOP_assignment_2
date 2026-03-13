<?php
// --- (FIRST) CHILD CLASS ---
// this is the first child class that inherits from the spell class, it inherits $manaCost and cast()

class AttackSpell extends Spell
{
    public $manaCost = 20;

    public function explode()
    {
        echo "<h2>The attack spell explodes with power!</h2>";
    }

    public function cast()
    {
        $this->explode();
    }
}
?>