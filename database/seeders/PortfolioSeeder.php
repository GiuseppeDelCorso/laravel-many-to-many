<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Portfolio;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $portfolios = [
            [
                'title' => 'Cocking Whit me',
                'description' => 'Amalfi Cucina & Mercato is a traditional Neapolitan restaurant offering an authentic Italian menu including Neapolitan-style pizzas, authentic appetizers, fresh salads, traditional pasta dishes, and original desserts',
                'thumb' => 'https://imgs.search.brave.com/7dRNPR-_45_O-V3Xj9PAjXtms2NA1NNs5yK4p3NMR08/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS1hc3NldHMubGFj/dWNpbmFpdGFsaWFu/YS5pdC9waG90b3Mv/NjUxOWU4NDFkOTU4/YzU5MjYwODllNDM0/LzE6MS9wYXNzL3Vu/ZGVmaW5lZA.jpeg',
                'type_id' => 1
            ],
            [
                'title' => 'Warzone',
                'description' => 'The new Urzikstan map arrives in Call of Duty®: Warzone Season 1. Explore 11 new major points of interest, experience key innovations, and follow a new narrative in the new season of the popular battle royale game. Play free on PS5, PS4, XBOX, Battle.net, or Steam.',
                'thumb' => 'https://imgs.search.brave.com/DyNpRsWPifi33yvfDkeybCj5ib1i9EjNJiYIuvsxvtU/rs:fit:500:0:0/g:ce/aHR0cHM6Ly93YWxs/cGFwZXJjYXZlLmNv/bS93cC93cDU4NTcy/MjcuanBn',
                'type_id' => 2
            ],
            [
                'title' => 'Naturist',
                'description' => 'Nature is a British weekly scientific journal founded and based in London, England. As a multidisciplinary publication, Nature features peer-reviewed research from a variety of academic disciplines, mainly in science and technology. It has core editorial offices across the United States',
                'thumb' => 'https://imgs.search.brave.com/OKRpfZn2YpDc2bzGsh4mJwxwfwWHGh-bocDPW7yLls8/rs:fit:500:0:0/g:ce/aHR0cHM6Ly93d3cu/Z2VsZXN0YXRpYy5p/dC90aGltZy82di1K/WmIySmk0bkhUTlpv/V1lpUVN0aWF5S289/L2ZpdC1pbi83MzV4/NDE2L2h0dHBzOi8v/d3d3LnJlcHN0YXRp/Yy5pdC9jb250ZW50/L2xvY2FsaXJlcC9p/bWcvcmVwLW1pbGFu/by8yMDIzLzAyLzIy/LzE0MzMzNTMzOS0y/NWY5MTA5ZS1iYTU1/LTRkZDEtODIwMy0w/NzFlYTJkYjZmZDku/anBn',
                'type_id' => 3
            ],
        ];
        foreach ($portfolios as $portfolio) {

            $new_portfolio = new Portfolio();
            $new_portfolio->title = $portfolio['title'];
            $new_portfolio->description = $portfolio['description'];
            $new_portfolio->thumb =  $portfolio['thumb'];
            $new_portfolio->type_id =  $portfolio['type_id'];
            $new_portfolio->save();
        }
    }
}
