<?php

use App\Card;
use Illuminate\Database\Seeder;

class CardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->delete();

        $cardsJson = File::get(storage_path() . "/jsondata/cards.json");

        $cards = json_decode($cardsJson);

        foreach ($cards as $card) {
            Card::create([
                'name' => $card->name,
                'type' => $card->type,
                'rarity' => (isset($card->rarity)) ?: 'N/A',
                'cost' => (isset($card->cost)) ?: 'N/A',
                'attack' => (isset($card->attack)) ?: 'N/A',
                'health' => (isset($card->health)) ?: 'N/A',
                'text' => (isset($card->text)) ?: 'N/A',
                'summary' => (isset($card->flavor)) ?: 'N/A',
            ]);
        }
    }
}
