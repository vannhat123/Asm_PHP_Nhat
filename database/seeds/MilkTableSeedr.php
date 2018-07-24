<?php

use Illuminate\Database\Seeder;

class MilkTableSeedr extends Seeder
{
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('milk')->truncate();
        \Illuminate\Support\Facades\DB::table('milk')->insert([
            [
                'name'=>'Whey gold',
                'author'=>'On',
                'content'=>'Thực phẩm tăng cơ giảm mỡ',
                'images'=>'https://images-na.ssl-images-amazon.com/images/I/61AzZFvGo8L._SL1000_.jpg'
            ],
            [
                'name'=>'Whey casein',
                'author'=>'On',
                'content'=>'Thực phẩm tăng cơ giảm mỡ dùng cho ban đêm',
                'images'=>'http://1.bp.blogspot.com/-3igjLaR2uI4/VUpYqxUTEjI/AAAAAAAAAYo/Pd_11sNXzZw/s1600/casein-healthvist.jpg'
            ],
            [
                'name'=>'Whey rule 1',
                'author'=>'Rule',
                'content'=>'Tăng sức mạnh- tăng cường sự trao đổi chất trong cơ thể',
                'images'=>'https://www.dinhduongthehinh.com/wp-content/uploads/2017/10/rule-1-protein-5lbs.jpg'
            ],
            [
                'name'=>'Whey blend 2.3kg',
                'author'=>'Platinum',
                'content'=>'Whey blend tỉ lệ hấp thụ 80%',
                'images'=>'http://maxtitanium.com.br/images/produtos/en-us/whey-blend-choc-produto-2016-02-12-09-52-53-2018-03-15-17-19-25.jpg'
            ],
            [
                'name'=>'Whey blend 5kg',
                'author'=>'Platinum',
                'content'=>'Whey blend tỉ lệ hấp thụ 80% loại to',
                'images'=>'https://images-americanas.b2w.io/produtos/01/00/sku/15513/2/15513298_1SZ.jpg'
            ],
            [
                'name'=>'Hydro whey',
                'author'=>'Hydro',
                'content'=>'Whey hydro thủy phân 100%',
                'images'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAe9Ncf7zWRXPjjwj5Z6d_V_VCwfHFE7SoyUwt-ONbIW34cBft'
            ],
            [
                'name'=>'Hydrolyzed WHey',
                'author'=>'Labs',
                'content'=>'Whey Hyrdolyzed Isolated Thủy Phân 120%',
                'images'=>'https://www.sexynutrition.com/wp-content/uploads/2015/10/NL-Hydrolyzed-Whey-Isolate-5.png'
            ],
            [
                'name'=>'Zero WHey',
                'author'=>'ON',
                'content'=>'Whey zero tỉ lệ chất béo 0%',
                'images'=>'https://sieuthicobap.com/upload/hinhanh/Untitled-1(47).jpg'
            ],
            [
                'name'=>'WHey Xcode',
                'author'=>'Labs',
                'content'=>'Dành cho người muốn tăng cân tăng cơ',
                'images'=>'http://www.musclefinesse.com/media/catalog/product/cache/1/image/390x/9df78eab33525d08d6e5fb8d27136e95/x/t/xtreme_whey_protein_ss_2kg.jpg'
            ],
            [
                'name'=>'C4 work out',
                'author'=>'Labs',
                'content'=>'C4 sản phẩm tăng sức mạnh',
                'images'=>'https://images-na.ssl-images-amazon.com/images/I/712nE2TzyWL._SY355_.jpg'
            ],
            [
                'name'=>'C4 Mass',
                'author'=>'Labs',
                'content'=>'Sản phẩm sức mạnh có calo',
                'images'=>'https://cf1.s3.souqcdn.com/item/2016/07/31/11/23/08/29/item_XL_11230829_15630066.jpg'
            ],
            [
                'name'=>'C4 ulitmate',
                'author'=>'Labs',
                'content'=>'Sức mạnh cuối cùng',
                'images'=>'https://cdn.shopify.com/s/files/1/1492/2278/t/3/assets/nav-c4-ultimate.png?16119781541536123855'
            ],
            [
                'name'=>'Lipo 6',
                'author'=>'Lp6',
                'content'=>'Sản phẩm đốt mỡ',
                'images'=>'http://www.thol.com.vn/media/catalog/product/cache/5/image/1200x1200/9df78eab33525d08d6e5fb8d27136e95/l/i/lipo6black_02.jpg'
            ],
            [
                'name'=>'Lipo 6 red',
                'author'=>'Lp6',
                'content'=>'ĐỐt mỡ loại đỏ',
                'images'=>'http://www.thol.com.vn/media/catalog/product/cache/5/image/1200x1200/9df78eab33525d08d6e5fb8d27136e95/l/i/lipo6_2.jpg'
            ],
            [
                'name'=>'Lipo 6 gold',
                'author'=>'Lp6',
                'content'=>'Lipo 6 loại vàng',
                'images'=>'https://store.bbcomcdn.com/images/store/skuimage/sku_NUT4910194/image_skuNUT4910194_largeImage_X_450_white.jpg'
            ],
            [
                'name'=>'BCAA viên',
                'author'=>'Bc',
                'content'=>'Giảm mệt mỏi loại viên',
                'images'=>'http://www.gnc.com/dw/image/v2/BBLB_PRD/on/demandware.static/-/Sites-master-catalog-gnc/default/dw0874ac47/hi-res/352277_1.jpg?sw=2000&sh=2000&sm=fit'
            ],
            [
                'name'=>'BCAA red',
                'author'=>'Bc',
                'content'=>'Bcaa loại đỏ tốt cho áu tập',
                'images'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRaNt_5o-5ScEhARxnu8RFc-cYKrrJn98dOaSPROem_m7dH3Alh'
            ],[
                'name'=>'BCAA for',
                'author'=>'Bc',
                'content'=>'Bcaa dùng trước tập',
                'images'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSolF1ggWQjHFJVHZVd_RH_H6M7Aiu8m-XObDTQyX8ro7nAU0x'
            ],
            [
                'name'=>'WHey Xcode',
                'author'=>'Labs',
                'content'=>'Dành cho người muốn tăng cân tăng cơ',
                'images'=>'http://www.musclefinesse.com/media/catalog/product/cache/1/image/390x/9df78eab33525d08d6e5fb8d27136e95/x/t/xtreme_whey_protein_ss_2kg.jpg'
            ],
            [
                'name'=>'BCAA in work out',
                'author'=>'ON',
                'content'=>'BCAA trong tập đỡ mệt mỏi',
                'images'=>'http://www.gnc.com/dw/image/v2/BBLB_PRD/on/demandware.static/-/Sites-master-catalog-gnc/default/dwd12c13a6/hi-res/352367_1.jpg?sw=2000&sh=2000&sm=fit'
            ],
        ]);
    }
}
