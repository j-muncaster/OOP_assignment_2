<?php
// this is the child class that inherits from the healing spell class

class GreaterHeal extends HealingSpell
{
    protected $spellName;
    protected $healingAmount;

    public function __construct(string $spellName, int $healingAmount)
    {
        $this->spellName = $spellName;
        $this->healingAmount = $healingAmount;
    }

    public function heal()
    {
        echo "<h3>You restore {$this->healingAmount} health!</h3>";
    }
}
?>