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
?>