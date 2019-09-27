<?php

use Illuminate\Database\Seeder;

class Stock extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stock')->insert([
            'name' => 'Wi-Fi роутер TP-LINK Archer C7',
            'desc' => '	Archer C7 поддерживает следующее поколение стандарта беспроводной связи 802.11ac, скорость которого в 3 раза превышает возможности устройств серии N. Поддержка IGMP Proxy, режима «мост» и 802.1Q TAG VLAN для IPTV Мulticast',
            'cost' => '4890',
            'src' => '/uploads/images/....jpg'
        ]);
        DB::table('stock')->insert([
            'name' => 'Коммутатор TP-LINK TL-SF1024D',
            'desc' => 'Оптимальным вариантом для построения сетей небольших рабочих групп является 24-портовый коммутатор TP-LINK TL-SF1024D. Эта модель прекрасно подходит и для увеличения эффективности передачи данных между уже существующими рабочими серверами.',
            'cost' => '2299',
            'src' => '/uploads/images/....jpg'
        ]);
        DB::table('stock')->insert([
            'name' => 'Беспроводной роутер XIAOMI Mi WiFi Router 4C, белый',
            'desc' => 'Купить Беспроводной роутер XIAOMI Mi WiFi Router 4C, белый в интернет-магазине Ситилинк по доступной цене. Беспроводной роутер XIAOMI Mi WiFi Router 4C, белый: характеристики, описание, фотографии, отзывы покупателей, сопутствующие товары.',
            'cost' => '1300',
            'src' => '/uploads/images/....jpg'
        ]);

    }
}
