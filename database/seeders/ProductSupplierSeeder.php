<?php

namespace Database\Seeders;

// use App\Models\Product;
use App\Models\ProductSupplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductSupplier::create([
            "id_supplier" => 3,
            "product_name" => "Toraja Coffee",
            "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem temporibus, pariatur, tempore quia officiis at repudiandae dolore assumenda sunt fugiat alias illo nam minus autem dolor voluptate. Dignissimos eum natus ipsum optio neque numquam, voluptatem autem! Officiis, voluptas. Dolorum atque minima, aliquam facilis minus exercitationem aliquid doloremque vero, error qui consequatur quas tempore aspernatur asperiores cupiditate similique? Eius esse excepturi repellat deleniti, asperiores quas magni! Labore facere dicta expedita natus quisquam eaque, aspernatur minima quas nobis mollitia soluta sed id incidunt consequatur recusandae. Asperiores distinctio cum recusandae, odit earum quod vero similique assumenda? Autem perferendis ipsa accusamus id eaque. Sapiente!",
            "price" => 50000,
            "stock" => 120,
            "image" => "product/gaamRDJEO5xNbQMfgSXx91ZNIVYxid2S110yVkKg.jpg",
        ]);

        ProductSupplier::create([
            "id_supplier" => 3,
            "product_name" => "Arabica Coffee",
            "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem temporibus, pariatur, tempore quia officiis at repudiandae dolore assumenda sunt fugiat alias illo nam minus autem dolor voluptate. Dignissimos eum natus ipsum optio neque numquam, voluptatem autem! Officiis, voluptas. Dolorum atque minima, aliquam facilis minus exercitationem aliquid doloremque vero, error qui consequatur quas tempore aspernatur asperiores cupiditate similique? Eius esse excepturi repellat deleniti, asperiores quas magni! Labore facere dicta expedita natus quisquam eaque, aspernatur minima quas nobis mollitia soluta sed id incidunt consequatur recusandae. Asperiores distinctio cum recusandae, odit earum quod vero similique assumenda? Autem perferendis ipsa accusamus id eaque. Sapiente!",
            "price" => 35000,
            "stock" => 60,
            "image" => "product/r8e0iS6hEBocNNBRkmTy5uL7BUf9IjNSQmZrgKJy.jpg",
        ]);

        ProductSupplier::create([
            "id_supplier" => 3,
            "product_name" => "Robusta Coffee",
            "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem temporibus, pariatur, tempore quia officiis at repudiandae dolore assumenda sunt fugiat alias illo nam minus autem dolor voluptate. Dignissimos eum natus ipsum optio neque numquam, voluptatem autem! Officiis, voluptas. Dolorum atque minima, aliquam facilis minus exercitationem aliquid doloremque vero, error qui consequatur quas tempore aspernatur asperiores cupiditate similique? Eius esse excepturi repellat deleniti, asperiores quas magni! Labore facere dicta expedita natus quisquam eaque, aspernatur minima quas nobis mollitia soluta sed id incidunt consequatur recusandae. Asperiores distinctio cum recusandae, odit earum quod vero similique assumenda? Autem perferendis ipsa accusamus id eaque. Sapiente!",
            "price" => 55000,
            "stock" => 70,
            "image" => "product/Gy6UVqa000obrsMGJaRAzZ4hWEz5WGhu38QawLzC.jpg",
        ]);
    }
}
