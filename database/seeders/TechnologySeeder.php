<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $techs = ['Html','Css','Laravel','JavaScript','Gemini','GPT','VueJS','ViteJS','PHP','Bootstrap','Sass','Svelte','Python','SQL','ReactJS','Angular','NodeJS'];
        foreach ($techs as $tech)
        {
            $newTech = new Technology();
            $newTech->name = $tech;
            $newTech->slug = Str::slug($newTech->name,'-');
            $newTech->save();
        }
    }
}
