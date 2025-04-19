<div {{ $attributes->merge(['class' => 'p-4 text-sm text-blue-800 rounded-lg ' . $class]) }} role="alert">
    <span class="font-medium">{{ $title ?? 'Alerta Definida!!' }}</span> {{ $slot }}
</div>
