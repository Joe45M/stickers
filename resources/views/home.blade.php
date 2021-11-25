<x-guest-layout>
    <div class="container mx-auto px-3">
        <p class="text-4xl mb-3">Products</p>
        <div class="grid grid-cols-3 gap-8">
            @foreach($products as $product)
                <a href="{{ route('product.show', $product->name) }}">
                    <img src="" alt="" class="h-64 w-full bg-gray-500 object-cover mb-3">
                    <p class="font-bold">
                        {{ $product->name }}
                    </p>
                    <p class="text-gray-500">
                        {{ \Illuminate\Support\Str::limit($product->description, 100) }}
                    </p>
                </a>
            @endforeach
        </div>
    </div>
</x-guest-layout>
