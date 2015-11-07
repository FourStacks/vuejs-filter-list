<?php

use App\CardMechanic;
use Illuminate\Database\Seeder;

class CardMechanicsTableSeeder extends Seeder
{

    private $mechanics = [
        "Battlecry",
        "Taunt",
        "Overload",
        "Secret",
        "Freeze",
        "Enrage",
        "Deathrattle",
        "Poisonous",
        "Combo",
        "Charge",
        "Stealth",
        "Spellpower",
        "Aura",
        "Silence",
        "AffectedBySpellPower",
        "Divine Shield",
        "Windfury"
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('card_mechanics')->delete();

        foreach($this->mechanics as $mechanic){
            CardMechanic::create([
                'name' => $mechanic
            ]);
        }
    }
}
