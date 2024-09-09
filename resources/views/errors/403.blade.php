<x-guest-layout>
    <div class="h-screen flex flex-col items-center justify-center overflow-hidden bg-pattern">
        <img src="https://illustrations.popsy.co/red/surreal-hourglass.svg" class="h-[70vh] object-contain">
        <h2 class="text-gray-900 text-4xl font-bold">Oops! You don't have permission to access this page.</h2>
        <a href="{{ url('/') }}" class="underline font-bold">Back to home</a>
    </div>
</x-guest-layout>
