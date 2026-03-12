<?php

// this is the root class of my hierarchy (aka the parent class), all of the spell types I define will inherit from this class

class Spell implements SpellInterface
{
    public $manaCost = 0;

    public function cast()
    {
        echo "<p>This spell costs " . $this->manaCost . " mana.</p>";
    }
}

// this part is where I am creating objects (aka instances) of the spell class and setting the mana cost for each spell

$spellOne = new Spell();
$spellOne->manaCost = 10;
$spellOne->cast();

$spellTwo = new Spell();
$spellTwo->manaCost = 25;
$spellTwo->cast();


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

$attackSpell = new AttackSpell();
$attackSpell->cast();

// this is the second child class like the one above 

class DefenseSpell extends Spell
{
    public $manaCost = 15;

    protected $shieldStrength = 100;

    public function cast()
    {
        parent::cast();

        echo "<p>A magical shield surrounds the caster.</p>";

        parent::cast();
    }
}

$defenseSpell = new DefenseSpell();
$defenseSpell->cast();

// and this is the third child class, it also inherits from the spell class

class HealingSpell extends Spell
{
    public $manaCost = 30;

    public function cast()
    {
        echo "<p>The healing spell restores health to the caster.</p>";
    }
}

$healingSpell = new HealingSpell();
$healingSpell->cast();

?>