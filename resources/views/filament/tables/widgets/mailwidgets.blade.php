<x-filament-widgets::widget>
    <x-filament::section>
        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            {{-- <div>
                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Webmail</p>
                <p class="text-base font-semibold text-gray-900 dark:text-white">
                    Check company inbox
                </p>
            </div> --}}

            <div class="flex items-center gap-3">
                <x-filament::button tag="a" href="https://229consult.com:2096/" target="_blank" rel="noopener noreferrer">
                Open Webmail
            </x-filament::button>
                <span class="text-sm text-gray-500 dark:text-gray-400">{{ now()->format('l, M j Y') }}</span>

          
            </div>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
