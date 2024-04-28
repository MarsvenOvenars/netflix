<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            'The Shawshank Redemption (1994)',
            'The Godfather (1972)',
            'The Dark Knight (2008)',
            'The Lord of the Rings: The Return of the King (2003)',
            'Pulp Fiction (1994)',
            "Schindler's List (1993)",
            '12 Angry Men (1957)',
            'The Silence of the Lambs (1991)',
            'Forrest Gump (1994)',
            'Fight Club (1999)',
            'Inception (2010)',
            'The Good, the Bad and the Ugly (1966)',
            'The Matrix (1999)',
            'Whiplash (2014)',
            'The Departed (2006)',
            'The Big Lebowski (1998)',
            'Parasite (2019)',
            'Spirited Away (2001)',
            'The Shining (1980)',
            'Seven Samurai (1954)',
            'Blade Runner (1982)',
            'Good Will Hunting (1997)',
            'Rear Window (1954)',
            'The Princess Bride (1987)',
            'Memento (2000)',
            'The Grand Budapest Hotel (2014)',
            'The Life Aquatic with Steve Zissou (2004)',
            'Casablanca (1942)',
            '2001: A Space Odyssey (1968)',
            "Singin' in the Rain (1952)",
            '12 Years a Slave (2013)',
            'The Farewell (2019)',
            'Kill Bill: Vol. 1 (2003)',
            'Ran (1985)',
            'City Lights (1931)',
            'The Bicycle Thief (1948)',
            'Amélie (2001)',
            'Jurassic Park (1993)',
            'The Lion King (1994)',
            'Spirited Away (2001)',
            'Princess Mononoke (1997)',
            'My Neighbor Totoro (1988)',
            'Raiders of the Lost Ark (1981)',
            'Back to the Future (1985)',
            'The Empire Strikes Back (1980)',
            'The Lord of the Rings: The Fellowship of the Ring (2001)',
            'The Wizard of Oz (1939)',
            'Snow White and the Seven Dwarfs (1937)',
            'Beauty and the Beast (1991)',
            'Toy Story (1995)',
        ];

        foreach ($objs as $obj) {
            Film::create([
                'name' => $obj,
            ]);
        };
    }
}
