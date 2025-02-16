<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        // for ($i = 1; $i <= 6; $i++) {
        //     Product::create([
        //         "product_name" => "Product $i",
        //         "orientation" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci porro debitis eius deserunt odio, repudiandae ad repellendus laboriosam nobis sed?",
        //         "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem temporibus, pariatur, tempore quia officiis at repudiandae dolore assumenda sunt fugiat alias illo nam minus autem dolor voluptate. Dignissimos eum natus ipsum optio neque numquam, voluptatem autem! Officiis, voluptas. Dolorum atque minima, aliquam facilis minus exercitationem aliquid doloremque vero, error qui consequatur quas tempore aspernatur asperiores cupiditate similique? Eius esse excepturi repellat deleniti, asperiores quas magni! Labore facere dicta expedita natus quisquam eaque, aspernatur minima quas nobis mollitia soluta sed id incidunt consequatur recusandae. Asperiores distinctio cum recusandae, odit earum quod vero similique assumenda? Autem perferendis ipsa accusamus id eaque. Sapiente!",
        //         "price" => rand(5000, 30000),
        //         "stock" => rand(10, 100),
        //         "discount" => 0.05,
        //         "image" => env("IMAGE_PRODUCT"),
        //     ]);
        // }
        // gaamRDJEO5xNbQMfgSXx91ZNIVYxid2S110yVkKg.jpg

        Product::create([
            "product_name" => "Toraja Coffee",
            "id_supplier" => 3,
            "orientation" => "Toraja Coffee is renowned for its deep connection to Sulawesi's highland culture. With bold flavors and earthy undertones, it delights coffee enthusiasts who enjoy a full-bodied brew.",
            "description" => "Toraja Coffee is known for its unique flavor profile and cultural significance. This coffee is grown in the highlands of Sulawesi, Indonesia, offering a bold and earthy taste. Perfect for those who enjoy strong, full-bodied coffee. It is also appreciated for its low acidity and chocolaty finish.",
            "price" => 50000,
            "stock" => 120,
            "discount" => 5,
            "image" => "product/gaamRDJEO5xNbQMfgSXx91ZNIVYxid2S110yVkKg.jpg",
        ]);
        
        Product::create([
            "product_name" => "Arabica Coffee",
            "id_supplier" => 3,
            "orientation" => "Arabica Coffee offers a mild and smooth taste, favored by coffee lovers worldwide. With fruity and aromatic notes, it delivers a delightful experience.",
            "description" => "Arabica Coffee is celebrated for its smooth and mild flavor. Sourced from the finest plantations, this coffee boasts a hint of sweetness and fruity undertones. Ideal for coffee enthusiasts who prefer a lighter and more aromatic cup. It is a favorite worldwide for its balance of flavor and aroma.",
            "price" => 35000,
            "stock" => 60,
            "discount" => 0,
            "image" => "product/r8e0iS6hEBocNNBRkmTy5uL7BUf9IjNSQmZrgKJy.jpg",
        ]);
        
        Product::create([
            "product_name" => "Robusta Coffee",
            "id_supplier" => 3,
            "orientation" => "Robusta Coffee delivers a bold and robust flavor, perfect for those seeking a high-caffeine coffee experience. Ideal for strong espresso blends.",
            "description" => "Robusta Coffee is prized for its strong and bold taste. This coffee variety contains higher caffeine content, making it perfect for those who need an extra energy boost. With nutty and woody flavors, it offers a rich and robust drinking experience. Enjoy it as an espresso or in blends.",
            "price" => 55000,
            "stock" => 70,
            "discount" => 10,
            "image" => "product/Gy6UVqa000obrsMGJaRAzZ4hWEz5WGhu38QawLzC.jpg",
        ]);
        
        Product::create([
            "product_name" => "Sumatra Coffee",
            "id_supplier" => 4,
            "orientation" => "Sumatra Coffee brings a deep and exotic flavor with earthy and spicy notes. A perfect choice for lovers of unique and bold coffees.",
            "description" => "Sumatra Coffee is well-known for its deep, complex flavor and low acidity. It offers a combination of earthy, spicy, and herbal notes, making it an excellent choice for those who enjoy unique and exotic tastes. This coffee is also loved for its rich, syrupy body and lingering aftertaste.",
            "price" => 48000,
            "stock" => 100,
            "discount" => 0,
            "image" => "product/xnWvCE9hdOIJLw0uyKg7aMfBsYtZR3XmOKTpDfAn.jpg",
        ]);
        
        Product::create([
            "product_name" => "Kintamani Coffee",
            "id_supplier" => 4,
            "orientation" => "Kintamani Coffee offers a light and refreshing taste with citrusy notes. A delightful choice for morning brews or light coffee lovers.",
            "description" => "Kintamani Coffee comes from the highlands of Bali and is known for its citrusy and bright flavor. This coffee offers a unique blend of fruity and floral notes, creating a refreshing and light taste. Its balanced acidity makes it a perfect choice for a morning brew.",
            "price" => 45000,
            "stock" => 90,
            "discount" => 0,
            "image" => "product/BztXG5p7aKvN1fWys6hM2eRtQYXCm8Jh9orVAzEy.jpg",
        ]);
        
        Product::create([
            "product_name" => "Gayo Coffee",
            "id_supplier" => 4,
            "orientation" => "Gayo Coffee features a clean taste with hints of dark chocolate. Grown in the Sumatra highlands, it is ideal for a balanced coffee experience.",
            "description" => "Gayo Coffee is highly regarded for its smooth and clean taste. Sourced from the Gayo highlands in Sumatra, this coffee features hints of dark chocolate and a subtle sweetness. With a medium body and balanced flavor, it is a delightful option for coffee lovers.",
            "price" => 52000,
            "stock" => 110,
            "discount" => 0,
            "image" => "product/QpFrtYE8Ko9Md7vXLzRw1Bn5gJXTIVzAuOKC6WZa.jpg",
        ]);
        
        Product::create([
            "product_name" => "Java Coffee",
            "id_supplier" => 5,
            "orientation" => "Java Coffee offers a traditional and robust coffee experience. With a strong body and spiced undertones, it is perfect for any time of day.",
            "description" => "Java Coffee is synonymous with rich history and exceptional quality. This coffee delivers a strong and full-bodied taste with hints of spice and a smooth finish. Ideal for those who appreciate traditional coffee with a robust flavor profile. Perfect for any time of the day.",
            "price" => 47000,
            "stock" => 85,
            "discount" => 0,
            "image" => "product/NlPtYWzAVMKf8oGmZR1B5rTxQKJ9E7OLCX6JdWa.jpg",
        ]);
        
        Product::create([
            "product_name" => "Flores Coffee",
            "id_supplier" => 5,
            "orientation" => "Flores Coffee presents a smooth and rich flavor with caramel undertones. Grown in volcanic soils, it is a treat for balanced coffee lovers.",
            "description" => "Flores Coffee offers a rich and unique flavor with notes of chocolate and caramel. Grown in the volcanic soils of Flores, Indonesia, this coffee is known for its smooth body and distinct aroma. Perfect for those who enjoy a balanced and flavorful cup.",
            "price" => 50000,
            "stock" => 95,
            "discount" => 5,
            "image" => "product/A1QWRYZ5VpLOKmJ68NrfBzXTE7oG4Cd9t6MPFYJa.jpg",
        ]);
        
        Product::create([
            "product_name" => "Bali Blue Moon Coffee",
            "id_supplier" => 6,
            "orientation" => "Bali Blue Moon Coffee combines hints of chocolate, vanilla, and spice for a unique flavor. Perfect for those seeking an exotic brew.",
            "description" => "Bali Blue Moon Coffee offers an exceptional taste with hints of chocolate, vanilla, and spice. Grown in the volcanic soils of Bali, it is known for its smooth and velvety body. This coffee is perfect for those who enjoy unique and exotic flavors. Ideal for both hot and cold brew preparations.",
            "price" => 49000,
            "stock" => 100,
            "discount" => 0,
            "image" => "product/XY7ZrMj6Ko8PlvQNRB5WCE9TxYA1MdLf6OVJKXWa.jpg",
        ]);
        
        Product::create([
            "product_name" => "Aceh Coffee",
            "id_supplier" => 6,
            "orientation" => "Aceh Coffee delivers a rich and bold flavor with earthy undertones. A strong choice for lovers of robust coffee.",
            "description" => "Aceh Coffee is a rich and bold coffee grown in the northern region of Sumatra. It features a deep, earthy flavor with hints of dark chocolate and spice. Known for its full body and low acidity, it is an excellent choice for those who prefer a strong cup. Perfect for any time of day.",
            "price" => 53000,
            "stock" => 80,
            "discount" => 0,
            "image" => "product/FR8Ko5Mz7YLvNWC1XtE9ABJQ6PRMdYOZXVaLKJWa.jpg",
        ]);
        
        Product::create([
            "product_name" => "Papua Wamena Coffee",
            "id_supplier" => 6,
            "orientation" => "Papua Wamena Coffee features a mild flavor with floral and nutty notes. Perfect for a relaxing and aromatic experience.",
            "description" => "Papua Wamena Coffee is grown in the remote highlands of Papua, Indonesia. It offers a mild and clean flavor with floral and nutty undertones. The coffee's smooth texture and low acidity make it a favorite among coffee aficionados. Perfect for enjoying a relaxing and aromatic cup.",
            "price" => 54000,
            "stock" => 75,
            "discount" => 0,
            "image" => "product/R5MJKoWXY7Lv1B9ACE6P8FtNZOaQLKOVJMdYzWa.jpg",
        ]);
        
        Product::create([
            "product_name" => "Manggarai Coffee",
            "id_supplier" => 7,
            "orientation" => "Manggarai Coffee delivers a rich and complex flavor with spice, chocolate, and floral hints. A refined choice for true coffee connoisseurs.",
            "description" => "Manggarai Coffee is sourced from the volcanic highlands of Flores, Indonesia. It features a complex flavor profile with notes of spices, chocolate, and a hint of floral aroma. This coffee has a medium body and a pleasant, lingering aftertaste. Ideal for those who appreciate a refined coffee experience.",
            "price" => 51000,
            "stock" => 90,
            "discount" => 0,
            "image" => "product/L6KYZ8OWa5MFRXJ7v1AC9PQtNYMEVaJoWLXMdKa.jpg",
        ]);
        
        Product::create([
            "product_name" => "Sulawesi Kalossi Coffee",
            "id_supplier" => 7,
            "orientation" => "Sulawesi Kalossi Coffee offers bold and earthy flavors with nutty and spicy notes. Perfect for a strong and robust coffee experience.",
            "description" => "Sulawesi Kalossi Coffee is known for its bold and full-bodied flavor. This coffee offers a unique combination of earthy and nutty notes with a hint of spice. Grown in the Toraja region of Sulawesi, it is perfect for those who enjoy a strong and robust cup. A must-try for coffee lovers.",
            "price" => 55000,
            "stock" => 65,
            "discount" => 0,
            "image" => "product/KW8L1FZ7XY5R9ACME6VaJoOMJdYNXPWLKoMWaKa.jpg",
        ]);        
    }
}
