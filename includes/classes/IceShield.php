<?php
// this is the child class that inherits from the defense spell class

class IceShield extends DefenseSpell
{
    protected $spellName;
    protected $shieldStrength;

    public function __construct(string $spellName, int $shieldStrength)
    {
        $this->spellName = $spellName;
        $this->shieldStrength = $shieldStrength;
    }

    public function protect()
    {
        echo "<h3>An icy barrier forms, absorbing {$this->shieldStrength} damage!</h3>";
    }
}
?>