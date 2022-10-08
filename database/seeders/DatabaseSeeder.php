<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Order;
use App\Models\Product;
use App\Models\Store;
use http\Client;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

       // Store::factory()->count(5)->hasClients(10)->create();

        Store::factory(2)->create()->each(function ($store){
          \App\Models\Client::factory(10)->create(['store_id'=>$store->id])->each(function ($client){
                Order::factory(4)->create([
                    'client_id'=>$client->id,
                ])->each(function ($order){
                    $client=\App\Models\Client::find($order->client_id);
                    $order->products()->attach(Product::factory(1)->create(['store_id'=>$client->store_id])->first->id,['quantity'=>rand(10,100),'price'=>rand(99,1000)]);
                    $order->products()->attach(Product::factory(1)->create(['store_id'=>$client->store_id])->first->id,['quantity'=>rand(10,100),'price'=>rand(99,1000)]);
                    $order->products()->attach(Product::factory(1)->create(['store_id'=>$client->store_id])->first->id,['quantity'=>rand(10,100),'price'=>rand(99,1000)]);
                    $order->products()->attach(Product::factory(1)->create(['store_id'=>$client->store_id])->first->id,['quantity'=>rand(10,100),'price'=>rand(99,1000)]);
                });
          });


        });

    }
}
