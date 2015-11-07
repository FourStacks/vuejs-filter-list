<?php

use App\Mechanic;
use Illuminate\Database\Seeder;

class MechanicsTableSeeder extends Seeder
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
        DB::table('mechanics')->delete();

        foreach($this->mechanics as $mechanic){
            Mechanic::create([
                'name' => $mechanic
            ]);
        }
    }
}
