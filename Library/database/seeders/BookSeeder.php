<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $books = [
            [
                'authorid' => 1,
                'title' => 'Book 1',
                'ISBN' => 'ISBN-1234567890',
                'pub_year' => 2020,
                'available' => 1,
            ],
            [
                'authorid' => 2,
                'title' => 'Book 2',
                'ISBN' => 'ISBN-0987654321',
                'pub_year' => 2018,
                'available' => 1,
            ],
            [
                'authorid' => 3,
                'title' => 'Book 3',
                'ISBN' => 'ISBN-9876543210',
                'pub_year' => 2015,
                'available' => 1,
            ],
            [
                'authorid' => 4,
                'title' => 'Book 4',
                'ISBN' => 'ISBN-5432109876',
                'pub_year' => 2013,
                'available' => 1,
            ],
            [
                'authorid' => 5,
                'title' => 'Book 5',
                'ISBN' => 'ISBN-2468109753',
                'pub_year' => 2011,
                'available' => 1,
            ],
            [
                'authorid' => 6,
                'title' => 'Book 6',
                'ISBN' => 'ISBN-1357924680',
                'pub_year' => 2009,
                'available' => 1,
            ],
            [
                'authorid' => 7,
                'title' => 'Book 7',
                'ISBN' => 'ISBN-8642097531',
                'pub_year' => 2007,
                'available' => 1,
            ],
            [
                'authorid' => 8,
                'title' => 'Book 8',
                'ISBN' => 'ISBN-9753108642',
                'pub_year' => 2005,
                'available' => 1,
            ],
            [
                'authorid' => 9,
                'title' => 'Book 9',
                'ISBN' => 'ISBN-0123456789',
                'pub_year' => 2003,
                'available' => 1,
            ],
            [
                'authorid' => 10,
                'title' => 'Book 10',
                'ISBN' => 'ISBN-9876543210',
                'pub_year' => 2001,
                'available' => 1,
            ],
        ];

        // Insert books into the database
        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
