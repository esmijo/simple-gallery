<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gallery;
use Faker\Generator as Faker;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$g = new Gallery;
        $g->title = 'The Bird';
        $g->description = 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.';
        $g->imagePath = '/images/1.jpg';
        $g->save();

        $g = new Gallery;
        $g->title = 'The Feline';
        $g->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sollicitudin pretium sem sit amet.';
        $g->imagePath = '/images/2.jpg';
        $g->save();

        $g = new Gallery;
        $g->title = 'The Frog';
        $g->description = 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos.';
        $g->imagePath = '/images/3.jpg';
        $g->save();

        $g = new Gallery;
        $g->title = 'The Rhino';
        $g->description = 'Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores.';
        $g->imagePath = '/images/4.jpg';
        $g->save();

    }
}
