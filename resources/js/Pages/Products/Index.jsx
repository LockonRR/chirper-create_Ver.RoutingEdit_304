import { Link } from "@inertiajs/react";


export default function Index({ products }) {
    return (
        <div className="container mx-auto px-4">
            <h1 className="text-3xl font-bold text-center my-6 text-red-700">
                ConceptRR Products
            </h1>
            <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                {products.map((product) => (
                    <div
                        key={product.id}
                        className="border border-red-700 rounded-lg shadow-md hover:shadow-lg transition duration-300 bg-black text-white"
                    >
                        {/* Image */}
                        <div className="w-full h-48 overflow-hidden bg-white">
                            <img
                                src={product.image}
                                alt={product.name}
                                className="w-full h-full object-contain"
                            />
                        </div>

                        <div className="p-4 text-center">
                            <h2 className="text-lg font-semibold truncate text-red-500">
                                {product.name}
                            </h2>
                            <p className="text-gray-300 text-sm mb-2">
                                {product.description}
                            </p>
                            <p className="text-white font-bold mb-3">
                                ฿{product.price.toLocaleString()}
                            </p>

                            <Link
                                href={`/products/${product.id}`}
                                className="inline-block bg-red-700 text-white px-4 py-2 rounded hover:bg-red-800 transition"
                            >
                                Buy
                            </Link>
                        </div>
                    </div>
                ))}
            </div>
        </div>
    );
}
