<?php

spl_autoload_register(function ($class) {
    $class = str_replace('OOP_assignment_2\\', '', $class);
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    $filepath = __DIR__ . '/includes/classes/' . $class . '.php';
    $filepath = str_replace("/", DIRECTORY_SEPARATOR, $filepath);
    
    require_once $filepath;
});

echo "<h1>Fantasy Spell System</h1>";


// --- Parent Spell Instances ---

$spellOne = new Spell();
$spellOne->manaCost = 10;
$spellOne->cast();

$spellTwo = new Spell();
$spellTwo->manaCost = 25;
$spellTwo->cast();


// --- First-Level Children ---

$attackSpell = new AttackSpell();
$attackSpell->cast();

$defenseSpell = new DefenseSpell();
$defenseSpell->cast();

$healingSpell = new HealingSpell();
$healingSpell->cast();


// --- Second-Level Children ---

$fireball = new Fireball("Fireball", 120);
$lightning = new LightningStrike("Lightning Strike", 150);
$shield = new IceShield("Ice Shield", 200);
$heal = new GreaterHeal("Greater Heal", 120);

$fireball->explode();
$lightning->strike();
$shield->protect();
$heal->heal();


// --- Trait Example ---

$utilitySpell = new UtilitySpell();
$utilitySpell->cast();


// --- Type Hinting Example ---

function dumpSpell(SpellInterface $spell)
{
    var_dump($spell);
}

dumpSpell($fireball);
dumpSpell($utilitySpell);
?>