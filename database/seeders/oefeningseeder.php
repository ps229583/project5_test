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
            'vertaling' => 'Bend knees and stand up.'
        ]);
        
        $test = oefening::create([
            'naam' => 'Push-Up',
            'beschrijving' => 'Laat lichaam zakken en duw omhoog.', // Beschrijving ingekort
            'vertaling' => 'Lower body and push up.'
        ]);
        
        $test = oefening::create([
            'naam' => 'Dip',
            'beschrijving' => 'Laat lichaam zakken en til omhoog met gebogen armen.', // Beschrijving ingekort
            'vertaling' => 'Lower body and lift up with bent arms.'
        ]);
        
        $test = oefening::create([
            'naam' => 'Plank',
            'beschrijving' => 'Houd lichaam parallel aan de grond in rechte positie.', // Beschrijving ingekort
            'vertaling' => 'Keep body parallel to the ground in a straight position.'
        ]);
        
        $test = oefening::create([
            'naam' => 'Paardentrap',
            'beschrijving' => 'Trap been naar voren en naar achteren als een paard.', // Beschrijving ingekort
            'vertaling' => 'Kick leg forward and back like a horse.'
        ]);
        
        $test = oefening::create([
            'naam' => 'Mountain Climber',
            'beschrijving' => 'Breng knieën afwisselend naar borst in push-up positie.', // Beschrijving ingekort
            'vertaling' => 'Alternately bring knees to chest in push-up position.            '
        ]);
        
        $test = oefening::create([
            'naam' => 'Burpee',
            'beschrijving' => 'Squat, schop benen naar achteren, keer terug naar squat en spring omhoog.', // Beschrijving ingekort
            'vertaling' => 'Squat, kick legs back, return to squat and jump up.'
        ]);
        
        $test = oefening::create([
            'naam' => 'Lunge',
            'beschrijving' => 'Zet been naar voren en buig lichaam met beide knieën in hoek van 90 graden.', // Beschrijving ingekort
            'vertaling' => 'Put leg forward and bend body with both knees at a 90 degree angle.'
        ]);
        
        $test = oefening::create([
            'naam' => 'Wall Sit',
            'beschrijving' => 'Ga tegen muur zitten met dijen parallel aan de grond.', // Beschrijving ingekort
            'vertaling' => 'Sit against the wall with thighs parallel to the floor.'
        ]);
        
        $test = oefening::create([
            'naam' => 'Crunch',
            'beschrijving' => 'Krul bovenlichaam naar voren voor het trainen van de buikspieren.', // Beschrijving ingekort
            'vertaling' => 'Curl the upper body forward to work the abs.'
        ]);
    }
}