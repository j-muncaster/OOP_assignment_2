<?php
// this is the second child class that inherits from the attack spell class

class LightningStrike extends AttackSpell
{
    protected $spellName;
    protected $damage;

    public function __construct(string $spellName, int $damage)
    {
        $this->spellName = $spellName;
        $this->damage = $damage;
    }

    public function strike()
    {
        echo "<h3>A bolt of lightning strikes the enemy for {$this->damage} damage!</h3>";
    }
}
?>