<?php
// and this is the third child class, it also inherits from the spell class

class HealingSpell extends Spell
{
    public $manaCost = 30;

    public function cast()
    {
        parent::cast();

        echo "<h2>The healing spell restores health to the caster.</h2>";
    }
}
?>