<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class ProductController extends Controller
{
private $products = [
    [
        'id' => 1,
        'name' => 'AMD RYZEN THREADRIPPER PRO 7995WX 2.5GHZ 384MB 96C l 192T',
        'description' => '96 cores, 192 threads, 2.5GHz base clock, 4.0GHz boost clock, 384MB L3 cache, PCIe 4.0 support',
        'price' => 411500,
        'image' => 'https://storage.googleapis.com/file-computeandmore/large_images/15578f6a-19cc-4456-be30-0bad8fa215c2.jpg'
    ],
    [
        'id' => 2,
        'name' => 'AMD RYZEN 9 9950X 4.3GHZ 16C | 32T',
        'description' => '16 cores, 32 threads, 4.3GHz base clock, 5.0GHz boost clock, PCIe 4.0 support',
        'price' => 25600,
        'image' => 'https://storage.googleapis.com/file-computeandmore/large_images/651d2d94-2aff-4ac3-80ce-ad5d69ceafff.png'
    ],
    [
        'id' => 3,
        'name' => 'AMD RYZEN 9 7950X3D 4.2GHZ 16C | 32T',
        'description' => '16 cores, 32 threads, 4.2GHz base clock, 5.7GHz boost clock, 128MB 3D V-Cache, PCIe 5.0 support',
        'price' => 23590,
        'image' => 'https://storage.googleapis.com/file-computeandmore/large_images/9e9d9157-9e17-410c-ac8e-676ac9d0191b.jpg'
    ],
    [
        'id' => 4,
        'name' => 'AMD RYZEN 7 9700X 3.8GHZ 8C | 16T',
        'description' => '8 cores, 16 threads, 3.8GHz base clock, 4.9GHz boost clock, PCIe 4.0 support',
        'price' => 12900,
        'image' => 'https://storage.googleapis.com/file-computeandmore/large_images/0f62ad75-4469-4dc4-9459-853c26a2736c.jpg'
    ],
    [
        'id' => 5,
        'name' => 'AMD RYZEN 5 9600X 3.9GHZ 6C | 12T',
        'description' => '6 cores, 12 threads, 3.9GHz base clock, 4.6GHz boost clock, PCIe 4.0 support',
        'price' => 9900,
        'image' => 'https://storage.googleapis.com/file-computeandmore/large_images/d6c0e3dc-df84-4404-8394-7696746a9e51.png'
    ],
    [
        'id' => 6,
        'name' => 'SAPPHIRE NITRO+ AMD RADEON RX 7900 XTX GAMING OC VAPOR-X 24GB GDDR6',
        'description' => '24GB GDDR6 memory, 96MB Infinity Cache, 384-bit memory bus, PCIe 4.0 support',
        'price' => 41900,
        'image' => 'https://storage.googleapis.com/file-computeandmore/large_images/0a3d6282-a808-477a-bc7c-780b204920de.jpg'
    ],
    [
        'id' => 7,
        'name' => 'MSI RADEON RX 7900 XT GAMING TRIO CLASSIC 20GB GDDR6',
        'description' => '20GB GDDR6 memory, 80MB Infinity Cache, 320-bit memory bus, PCIe 4.0 support',
        'price' => 34500,
        'image' => 'https://storage.googleapis.com/file-computeandmore/large_images/5e9043ce-b228-4a76-a253-bbfb53a74e72.png'
    ],
    [
        'id' => 8,
        'name' => 'SAPPHIRE PULSE AMD RADEON RX 7900 XT GAMING OC 20GB GDDR6',
        'description' => '20GB GDDR6 memory, 80MB Infinity Cache, 320-bit memory bus, PCIe 4.0 support',
        'price' => 28900,
        'image' => 'https://storage.googleapis.com/file-computeandmore/large_images/761ad853-6f0c-4a5d-9090-3f258d1441d4.jpg'
    ],
    [
        'id' => 9,
        'name' => 'SAPPHIRE NITRO+ AMD RADEON RX 7800 XT GAMING OC 16GB GDDR6',
        'description' => '16GB GDDR6 memory, 64MB Infinity Cache, 256-bit memory bus, PCIe 4.0 support',
        'price' => 20390,
        'image' => 'https://storage.googleapis.com/file-computeandmore/large_images/0610f79a-a568-4e74-ab17-a9b031ff99a9.jpg'
    ],
    [
        'id' => 10,
        'name' => 'SAPPHIRE PURE AMD RADEON RX 7800 XT GAMING OC 16GB GDDR6',
        'description' => '16GB GDDR6 memory, 64MB Infinity Cache, 256-bit memory bus, PCIe 4.0 support',
        'price' => 19690,
        'image' => 'https://storage.googleapis.com/file-computeandmore/large_images/da64e9b2-27b0-44cb-bb2a-920be40b50c8.jpg'
    ],
];



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Products/Index', ['products' => $this->products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    $product = collect($this->products)->firstWhere('id', $id);
    if (!$product) {
    abort(404, 'Product not found');
    }
    return Inertia::render('Products/Show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
