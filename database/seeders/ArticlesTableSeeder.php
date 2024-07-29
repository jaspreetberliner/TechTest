<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->insert([
            'title' => Str::words("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur viverra tellus augue, at vulputate augue rutrum porttitor. Morbi felis dolor, rhoncus eu sagittis eget",10, true),
            'content' => Str::words("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur viverra tellus augue, at vulputate augue rutrum porttitor. Morbi felis dolor, rhoncus eu sagittis eget, congue eget ipsum. Nam scelerisque, risus eget porttitor congue, tortor tortor interdum ex, a scelerisque nulla nisi et leo. Duis tristique dolor maximus condimentum efficitur. Morbi mattis lorem non sem hendrerit, vel cursus tellus porttitor. Nulla dui nibh, consectetur vitae commodo nec, vehicula non dui. Aenean tellus nulla, tincidunt id nunc quis, pretium aliquet arcu.", 100, true),
            'image' => 'default.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
