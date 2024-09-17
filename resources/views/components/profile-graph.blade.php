<!-- resources/views/components/profile-graph.blade.php -->

@props(['value' => '1/8', 'percent' => 1/8])

<div class="flex justify-end -mt-10 mb-8">
    <div class="flex items-end flex-wrap max-w-md px-10 relative"
         x-data="{ circumference: 50 * 2 * Math.PI, percent: {{ $percent }} }">
        <div class="flex items-center justify-center -m-6 overflow-hidden rounded-full">
            <svg class="w-16 h-16 transform translate-x-1 translate-y-1" x-cloak aria-hidden="true">
                <circle
                    class="text-gray-300"
                    stroke-width="5"
                    stroke="currentColor"
                    fill="transparent"
                    r="25"
                    cx="30"
                    cy="30"
                />
                <circle
                    class="text-purple-900"
                    stroke-width="5"
                    :stroke-dasharray="circumference"
                    :stroke-dashoffset="circumference - (percent * 100) / 100 * circumference"
                    stroke-linecap="round"
                    stroke="currentColor"
                    fill="transparent"
                    r="25"
                    cx="30"
                    cy="30"
                />
            </svg>
            <h3 class="absolute text-xl text-purple-900">{{ $value }}</h3>
        </div>
    </div>
</div>
