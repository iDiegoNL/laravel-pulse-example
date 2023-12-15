@props([
    'title',
])

<a {{ $attributes->merge(['class' => 'min-w-max scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-indigo-500']) }}>
    <div>
        <div class="flex items-center justify-center w-16 h-16 rounded-full bg-indigo-50 dark:bg-indigo-900/20">
            {{ $slot }}
        </div>

        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
            {{ $title }}
        </h2>
    </div>
</a>
