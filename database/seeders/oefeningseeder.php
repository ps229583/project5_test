<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Oefening;

class oefeningseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $test = oefening::create([
            'naam' => 'Squat',
            'beschrijving' => 'Buig knieën en sta op.', // Beschrijving ingekort
            'vertaling' => 'Squat'
        ]);
        
        $test = oefening::create([
            'naam' => 'Push-Up',
            'beschrijving' => 'Laat lichaam zakken en duw omhoog.', // Beschrijving ingekort
            'vertaling' => 'Push-Up'
        ]);
        
        $test = oefening::create([
            'naam' => 'Dip',
            'beschrijving' => 'Laat lichaam zakken en til omhoog met gebogen armen.', // Beschrijving ingekort
            'vertaling' => 'Dip'
        ]);
        
        $test = oefening::create([
            'naam' => 'Plank',
            'beschrijving' => 'Houd lichaam parallel aan de grond in rechte positie.', // Beschrijving ingekort
            'vertaling' => 'Plank'
        ]);
        
        $test = oefening::create([
            'naam' => 'Paardentrap',
            'beschrijving' => 'Trap been naar voren en naar achteren als een paard.', // Beschrijving ingekort
            'vertaling' => 'Paardentrap'
        ]);
        
        $test = oefening::create([
            'naam' => 'Mountain Climber',
            'beschrijving' => 'Breng knieën afwisselend naar borst in push-up positie.', // Beschrijving ingekort
            'vertaling' => 'Mountain Climber'
        ]);
        
        $test = oefening::create([
            'naam' => 'Burpee',
            'beschrijving' => 'Squat, schop benen naar achteren, keer terug naar squat en spring omhoog.', // Beschrijving ingekort
            'vertaling' => 'Burpee'
        ]);
        
        $test = oefening::create([
            'naam' => 'Lunge',
            'beschrijving' => 'Zet been naar voren en buig lichaam met beide knieën in hoek van 90 graden.', // Beschrijving ingekort
            'vertaling' => 'Lunge'
        ]);
        
        $test = oefening::create([
            'naam' => 'Wall Sit',
            'beschrijving' => 'Ga tegen muur zitten met dijen parallel aan de grond.', // Beschrijving ingekort
            'vertaling' => 'Wall Sit'
        ]);
        
        $test = oefening::create([
            'naam' => 'Crunch',
            'beschrijving' => 'Krul bovenlichaam naar voren voor het trainen van de buikspieren.', // Beschrijving ingekort
            'vertaling' => 'Crunch'
        ]);
    }
}