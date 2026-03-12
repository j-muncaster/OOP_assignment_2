<?php

// --- PARENT CLASS ---
// this is the root class of my hierarchy (aka the parent class), all of the spell types I define will inherit from this class

class Spell implements SpellInterface
{
    public $manaCost = 0;

    public function cast()
    {
        echo "<p>This spell costs " . $this->manaCost . " mana.</p>";
    }
}

// --- INSTANCES ---
// this part is where I am creating objects (aka instances) of the spell class and setting the mana cost for each spell

$spellOne = new Spell();
$spellOne->manaCost = 10;
$spellOne->cast();

$spellTwo = new Spell();
$spellTwo->manaCost = 25;
$spellTwo->cast();


// --- (FIRST) CHILD CLASSES ---
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
        parent::cast();

        echo "<p>The healing spell restores health to the caster.</p>";
    }
}

$healingSpell = new HealingSpell();
$healingSpell->cast();

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
    }
}

$fireball = new Fireball('Fireball', 120);
var_dump($fireball);

$fireball2 = new Fireball('Inferno Blast', 200);
var_dump($fireball2);


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
        echo "<p>A bolt of lightning strikes the enemy for {$this->damage} damage!</p>";
    }
}

$lightning = new LightningStrike("Lightning Strike", 150);
$lightning->strike();

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
        echo "<p>An icy barrier forms, absorbing {$this->shieldStrength} damage!</p>";
    }
}

$shield = new IceShield("Ice Shield", 200);
$shield->protect();

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
        echo "<p>You restore {$this->healingAmount} health!</p>";
    }
}

$heal = new GreaterHeal("Greater Heal", 120);
$heal->heal();

// --- INTERFACE ---
// the interface defines required methods

interface SpellInterface
{
    public function cast();
}

// --- TRAIT --
// a trait allows us to share functionality between classes without using inheritance

trait MagicalEffectTrait
{
    public function cast()
    {
        echo "<h2>A mysterious magical effect occurs!</h2>";
    }
}


// --- TRAIT IMPLEMENTATION ---
// this class implements the SpellInterface but instead of defining its own cast() method, it borrows the functionality from the MagicalEffectTrait

class UtilitySpell implements SpellInterface
{
    use MagicalEffectTrait;
}

$utilitySpell = new UtilitySpell();


// -- TYPE HINTED FUNCTION ---
// this function accepts any object that implements the SpellInterface
// this demonstrates polymorphism since different spell types can be passed in

function dumpSpell(SpellInterface $spell)
{
    var_dump($spell);
}

// here I am passing different spell objects into the same function

dumpSpell($fireball);
dumpSpell($utilitySpell);


// this calls the cast method that came from the trait

$utilitySpell->cast();
?>