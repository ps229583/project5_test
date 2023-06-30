<x-app-layout>
    <style>
        .grid {
            display: grid;
            grid-template-columns: 1fr;
        }

        @media (min-width: 768px) {
            .grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>

    <div class="grid overflow-visible">
        <div class="max-w-sm mx-auto exercise-container">
            @php
            $exercises = App\Models\Oefening::all();
            @endphp

            @foreach ($exercises as $exercise)
            <div class="bg-white p-4 shadow rounded exercise-card">
                <h2 class="text-lg font-bold">{{ $exercise->naam }}</h2>
                <p class="text-sm text-gray-500 mb-2">{{ $exercise->beschrijving }}</p>
            </div>
            @endforeach
        </div>

        <div class="max-w-sm mx-auto">
            <div class="bg-white p-4 shadow rounded">
                <h2 class="text-lg font-bold">Video Links</h2>
                <ul class="video-list">
                    <li>
                        <h3 class="exercise-name">Squad</h3>
                        <iframe width="355" height="285" src="https://www.youtube.com/embed/gcNh17Ckjgg"></iframe>
                    </li>
                    <li>
                        <h3 class="exercise-name">Push-up</h3>
                        <iframe width="355" height="285" src="https://www.youtube.com/embed/IODxDxX7oi4"></iframe>
                    </li>
                    <li>
                        <h3 class="exercise-name">Dip</h3>
                        <iframe width="355" height="285" src="https://www.youtube.com/embed/2z8JmcrW-As"></iframe>
                    </li>
                    <li>
                        <h3 class="exercise-name">Plank</h3>
                        <iframe width="355" height="285" src="https://www.youtube.com/embed/BQu26ABuVS0"></iframe>
                    </li>
                    <li>
                        <h3 class="exercise-name">Paardentrap</h3>
                        <iframe width="355" height="285" src="https://www.youtube.com/embed/VBFUJEGAN94"></iframe>
                    </li>
                    <li>
                        <h3 class="exercise-name">Mountain Climber</h3>
                        <iframe width="355" height="285" src="https://www.youtube.com/embed/cnyTQDSE884"></iframe>
                    </li>
                    <li>
                        <h3 class="exercise-name">Burpee</h3>
                        <iframe width="355" height="285" src="https://www.youtube.com/embed/qLBImHhCXSw"></iframe>
                    </li>
                    <li>
                        <h3 class="exercise-name">Lunge</h3>
                        <iframe width="355" height="285" src="https://www.youtube.com/embed/wrwwXE_x-pQ"></iframe>
                    </li>
                    <li>
                        <h3 class="exercise-name">Wall Sit</h3>
                        <iframe width="355" height="285" src="https://www.youtube.com/embed/y-wV4Venusw"></iframe>
                    </li>
                    <li>
                        <h3 class="exercise-name">Crunch</h3>
                        <iframe width="355" height="285" src="https://www.youtube.com/embed/MKmrqcoCZ-M"></iframe>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
