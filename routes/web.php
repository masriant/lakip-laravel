<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Masrianto",
        "email" => "masrianto@lakip.co.id",
        "image" => "masrianto.jpg"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Masrianto",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi accusamus ratione, architecto esse corrupti ullam quia repellat assumenda laborum, velit eos consectetur perferendis aliquam reprehenderit nesciunt vero. Laudantium, eveniet expedita?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ducimus hic fugiat, a maxime, id dicta non perspiciatis veniam ex laborum dolore fugit blanditiis accusamus porro minima iusto dolorum ipsum! Repellendus vero odio, quisquam quis distinctio magnam amet iste! Asperiores accusamus dolorem numquam ipsum molestias sit rerum, inventore aspernatur nihil provident dignissimos, rem perspiciatis unde nesciunt accusantium odit, fuga id voluptates quasi tempora recusandae reiciendis excepturi possimus hic! Doloribus, exercitationem? Quis fugit libero minima, impedit quos quidem a ipsam nulla."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Zainal Muh",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur vitae, nobis exercitationem expedita, accusamus ab dolorem cupiditate molestias eveniet eius, porro illo! Veritatis sed iste provident qui? Atque nostrum ad fugiat vel animi dolorem alias consectetur facere ducimus repudiandae autem laboriosam, debitis illo, ab officiis quis voluptate ratione architecto aut? Vero veritatis corporis repellat velit qui distinctio eos odit eligendi? Dolorum dignissimos aperiam rerum, obcaecati consequatur magni labore totam quam illo vero incidunt in cupiditate! Laborum cumque hic assumenda et culpa, ipsum nisi velit enim quod eveniet, architecto voluptatibus ex quaerat aut dicta exercitationem, blanditiis numquam quos delectus accusantium cupiditate?"
        ],
        ];



    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// Halaman Single Post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Masrianto",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi accusamus ratione, architecto esse corrupti ullam quia repellat assumenda laborum, velit eos consectetur perferendis aliquam reprehenderit nesciunt vero. Laudantium, eveniet expedita?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ducimus hic fugiat, a maxime, id dicta non perspiciatis veniam ex laborum dolore fugit blanditiis accusamus porro minima iusto dolorum ipsum! Repellendus vero odio, quisquam quis distinctio magnam amet iste! Asperiores accusamus dolorem numquam ipsum molestias sit rerum, inventore aspernatur nihil provident dignissimos, rem perspiciatis unde nesciunt accusantium odit, fuga id voluptates quasi tempora recusandae reiciendis excepturi possimus hic! Doloribus, exercitationem? Quis fugit libero minima, impedit quos quidem a ipsam nulla."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Zainal Muh",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur vitae, nobis exercitationem expedita, accusamus ab dolorem cupiditate molestias eveniet eius, porro illo! Veritatis sed iste provident qui? Atque nostrum ad fugiat vel animi dolorem alias consectetur facere ducimus repudiandae autem laboriosam, debitis illo, ab officiis quis voluptate ratione architecto aut? Vero veritatis corporis repellat velit qui distinctio eos odit eligendi? Dolorum dignissimos aperiam rerum, obcaecati consequatur magni labore totam quam illo vero incidunt in cupiditate! Laborum cumque hic assumenda et culpa, ipsum nisi velit enim quod eveniet, architecto voluptatibus ex quaerat aut dicta exercitationem, blanditiis numquam quos delectus accusantium cupiditate?"
        ],
        ];

$new_post = [];
foreach($blog_posts as $post) {
    if($post["slug"] === $slug) {
        $new_post = $post;
    }
}

return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
