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

            $cardModel = Card::create([
                'name' => $card->name,
                'type' => $card->type,
                'rarity' => (isset($card->rarity)) ? $card->rarity : 'N/A',
                'cost' => (isset($card->cost)) ? $card->cost : 'N/A',
                'attack' => (isset($card->attack)) ? $card->attack : 'N/A',
                'health' => (isset($card->health)) ? $card->health : 'N/A',
                'text' => (isset($card->flavor)) ? $card->flavor : 'N/A'
            ]);

            if( isset($card->mechanics) ){
                $cardModel->mechanics()->attach($card->mechanics);
            }

        }
    }
}
