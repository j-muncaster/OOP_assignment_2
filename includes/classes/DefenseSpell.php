<?php
// this is the second child class like the one above 

class DefenseSpell extends Spell
{
    public $manaCost = 15;

    protected $shieldStrength = 100;

    public function cast()
    {
        parent::cast();

        echo "<h2>A magical shield surrounds the caster.</h2>";
    }
}
?>