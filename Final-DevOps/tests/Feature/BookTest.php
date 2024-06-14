<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Book;
use function PHPUnit\Framework\assertTrue;

test('create book', function () {
    $book = Book::create([
        'title' => 'The Great Gatsby',
        'author' => 'F. Scott Fitzgerald',
        'isbn' => '9780743273565',
    ]);
    assertTrue($book->exists());
});

// class BookTest extends TestCase
// {
//     /**
//      * A basic feature test example.
//      */
//     public function test_example(): void
//     {
//         $response = $this->get('/');

//         $response->assertStatus(200);
//     }
//     test('create book', function () {
//         $book = Book::create([
//             'title' => 'The Great Gatsby',
//             'author' => 'F. Scott Fitzgerald',
//             'isbn' => '9780743273565',
//         ]);
//         assertTrue($book->exists());
//     });
// }