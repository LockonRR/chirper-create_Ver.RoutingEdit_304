import { Link, usePage } from "@inertiajs/react";

export default function Show({ product }) {
    const { auth } = usePage().props; // ดึงข้อมูล auth จาก props ที่ Inertia ส่งมาให้

    // ตรวจสอบว่าผู้ใช้ล็อกอินหรือไม่
    if (!auth || !auth.user) {
        window.location.href = route("login"); // Redirect ไปหน้า Login
        return null; // หยุดการ Render ของ Component
    }

    return (
        <div className="min-h-screen bg-gray-100 py-10">
            <div className="container mx-auto max-w-5xl bg-white border-4 border-red-700 rounded-lg shadow-lg overflow-hidden">
                <div className="flex flex-col lg:flex-row">
                    {/* ส่วนของรูปภาพ */}
                    <div className="w-full lg:w-1/2">
                        <img
                            src={product.image}
                            alt={product.name}
                            className="w-full h-full object-cover"
                        />
                    </div>

                    {/* ส่วนของคำอธิบาย */}
                    <div className="w-full lg:w-1/2 p-6 bg-white">
                        <h1 className="text-3xl font-bold text-red-700 mb-4">
                            {product.name}
                        </h1>
                        <p className="text-gray-700 text-base leading-relaxed mb-4">
                            {product.description}
                        </p>
                        <p className="text-2xl font-bold text-gray-900 mb-6">
                            ฿{product.price.toLocaleString()}
                        </p>

                        {/* ปุ่ม */}
                        <div className="flex items-center gap-4">
                            <Link
                                href="/products"
                                className="bg-red-700 text-white font-semibold py-2 px-6 rounded hover:bg-red-800 transition-colors duration-300"
                            >
                                Back to All Products
                            </Link>

                            {auth.user.id === product.owner_id && (
                                <Link
                                    href={`/products/${product.id}/edit`}
                                    className="bg-red-700 text-white font-semibold py-2 px-6 rounded hover:bg-red-800 transition-colors duration-300"
                                >
                                    Edit Product
                                </Link>
                            )}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}
