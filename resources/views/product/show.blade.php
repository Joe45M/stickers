<x-guest-layout>
    <div class="container mx-auto px-3">
        <div class="grid grid-cols-2 gap-4">
            <div>
                <img src="" alt="" class="h-96 w-full bg-gray-100 object-cover">
            </div>
            <div>
                <div class="mb-5">
                    <p class="text-4xl mb-2">{{ $product->name }}</p>
                    <p>{{ $product->formatted_price }}</p>
                </div>
                <p class="lg:w-2/3 mb-5">{{ $product->description }}</p>
                <div>
                    <a href="" class=" px-5 py-3 border inline-block border-black uppercase">buy now</a>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
