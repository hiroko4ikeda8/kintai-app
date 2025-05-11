<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        {{ $logo ?? '' }}
    </div>
    
    <div class="w-full max-w-md bg-white shadow-md overflow-hidden sm:rounded-lg m-0 p-0">
        <div class="p-6">
            {{ $slot }}
        </div>
    </div>
    
</div>
