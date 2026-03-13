<?php
// --- (SECOND) CHILD CLASSES ---
// these are the child classes that inherit from the attack, defense and healing spell class

// this is the first child class that inherits from the attack spell class

class Fireball extends AttackSpell
{
    protected $spellName;
    protected $damage;

    public function __construct(string $spellName, int $damage)
    {
        $this->spellName = $spellName;
        $this->damage = $damage;
    }

    public function explode()
    {
        $this->damage += 50;
        echo "<h3>A ball of fire explodes and deals {$this->damage} damage!</h3>";
    }
}
?>