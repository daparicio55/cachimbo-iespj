<div class="overflow-x-auto rounded-lg shadow ring-1 ring-black ring-opacity-5">
    <table class="min-w-full divide-y divide-gray-200 bg-white">
        <thead class="bg-blue-100">
            {{ $header }}
        </thead>
        <tbody class="divide-y divide-gray-200 text-sm text-gray-700">
            {{ $slot }}
        </tbody>
        @if(isset($footer))
        <!-- Footer de la tabla -->
            <tfoot class="bg-blue-50 font-semibold text-gray-800">
                {{ $footer }}
            </tfoot>
        @endif
    </table>
</div>
