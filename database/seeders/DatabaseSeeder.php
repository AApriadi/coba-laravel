<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
         User::factory(6)->create();
        /*User::create([
            "name" => "Dedot",
            "email" => "mailserverdedot@gmail.com",
            "password" => bcrypt('12345')
        ]);

        User::create([
            "name" => "TesDedot",
            "email" => "dedot@gmail.com",
            "password" => bcrypt('12345')
        ]);*/

        Category::create([
            "name" => "Web Programming",
            "slug" => "web-programming"
        ]);

        Category::create([
            "name" => "Web Design",
            "slug" => "web-design"
        ]);

        Category::create([
            "name" => "Personal",
            "slug" => "Personal"
        ]);

        Post::factory(30)->create();
//        Post::create([
//            "title" => "Judul 1",
//            "category_id" => 1,
//            "user_id" => 1,
//            "slug" => "judul-1",
//            "excerpt" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur ipsam magnam minus natus neque, recusandae rem repellat repellendus tempore voluptate?",
//            "body" => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias animi aperiam asperiores assumenda culpa
//    cumque, cupiditate deleniti distinctio est in inventore itaque molestias nihil odio officiis praesentium quas quidem
//    quo reiciendis saepe sed sint soluta, tempore ullam veniam voluptatibus! Dignissimos earum eos est facere odio
//    provident, reiciendis? A accusamus assumenda consectetur culpa cum cupiditate deleniti deserunt dolore eaque eius
//    error excepturi molestiae natus, pariatur perspiciatis quo repudiandae sint soluta sunt, tempore.</p><p> Asperiores,
//    assumenda aut dolores eveniet labore nihil perferendis. A accusamus facere fuga itaque mollitia nobis, optio quae
//    veniam voluptates! Aliquid amet, blanditiis cum eaque error esse itaque iure iusto nam possimus, quas qui rerum
//    sapiente sunt, ullam voluptas voluptates.</p><p> Excepturi magni modi quibusdam recusandae veritatis? Ad dolor
//    dolorum facere incidunt, inventore iusto nesciunt nobis quam sequi suscipit, temporibus voluptates. Accusantium
//    adipisci cumque dolores expedita laborum maxime perspiciatis quidem?</p>"
//        ]);
//
//        Post::create([
//            "title" => "Judul 2",
//            "category_id" => 1,
//            "user_id" => 1,
//            "slug" => "judul-2",
//            "excerpt" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur ipsam magnam minus natus neque, recusandae rem repellat repellendus tempore voluptate?",
//            "body" => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias animi aperiam asperiores assumenda culpa
//    cumque, cupiditate deleniti distinctio est in inventore itaque molestias nihil odio officiis praesentium quas quidem
//    quo reiciendis saepe sed sint soluta, tempore ullam veniam voluptatibus! Dignissimos earum eos est facere odio
//    provident, reiciendis? A accusamus assumenda consectetur culpa cum cupiditate deleniti deserunt dolore eaque eius
//    error excepturi molestiae natus, pariatur perspiciatis quo repudiandae sint soluta sunt, tempore.</p><p> Asperiores,
//    assumenda aut dolores eveniet labore nihil perferendis. A accusamus facere fuga itaque mollitia nobis, optio quae
//    veniam voluptates! Aliquid amet, blanditiis cum eaque error esse itaque iure iusto nam possimus, quas qui rerum
//    sapiente sunt, ullam voluptas voluptates.</p><p> Excepturi magni modi quibusdam recusandae veritatis? Ad dolor
//    dolorum facere incidunt, inventore iusto nesciunt nobis quam sequi suscipit, temporibus voluptates. Accusantium
//    adipisci cumque dolores expedita laborum maxime perspiciatis quidem?</p>"
//        ]);
//
//        Post::create([
//            "title" => "Judul 3",
//            "category_id" => 2,
//            "user_id" => 1,
//            "slug" => "judul-3",
//            "excerpt" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur ipsam magnam minus natus neque, recusandae rem repellat repellendus tempore voluptate?",
//            "body" => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias animi aperiam asperiores assumenda culpa
//    cumque, cupiditate deleniti distinctio est in inventore itaque molestias nihil odio officiis praesentium quas quidem
//    quo reiciendis saepe sed sint soluta, tempore ullam veniam voluptatibus! Dignissimos earum eos est facere odio
//    provident, reiciendis? A accusamus assumenda consectetur culpa cum cupiditate deleniti deserunt dolore eaque eius
//    error excepturi molestiae natus, pariatur perspiciatis quo repudiandae sint soluta sunt, tempore.</p><p> Asperiores,
//    assumenda aut dolores eveniet labore nihil perferendis. A accusamus facere fuga itaque mollitia nobis, optio quae
//    veniam voluptates! Aliquid amet, blanditiis cum eaque error esse itaque iure iusto nam possimus, quas qui rerum
//    sapiente sunt, ullam voluptas voluptates.</p><p> Excepturi magni modi quibusdam recusandae veritatis? Ad dolor
//    dolorum facere incidunt, inventore iusto nesciunt nobis quam sequi suscipit, temporibus voluptates. Accusantium
//    adipisci cumque dolores expedita laborum maxime perspiciatis quidem?</p>"
//        ]);
//
//        Post::create([
//            "title" => "Judul 4",
//            "category_id" => 2,
//            "user_id" => 2,
//            "slug" => "judul-4",
//            "excerpt" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur ipsam magnam minus natus neque, recusandae rem repellat repellendus tempore voluptate?",
//            "body" => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias animi aperiam asperiores assumenda culpa
//    cumque, cupiditate deleniti distinctio est in inventore itaque molestias nihil odio officiis praesentium quas quidem
//    quo reiciendis saepe sed sint soluta, tempore ullam veniam voluptatibus! Dignissimos earum eos est facere odio
//    provident, reiciendis? A accusamus assumenda consectetur culpa cum cupiditate deleniti deserunt dolore eaque eius
//    error excepturi molestiae natus, pariatur perspiciatis quo repudiandae sint soluta sunt, tempore.</p><p> Asperiores,
//    assumenda aut dolores eveniet labore nihil perferendis. A accusamus facere fuga itaque mollitia nobis, optio quae
//    veniam voluptates! Aliquid amet, blanditiis cum eaque error esse itaque iure iusto nam possimus, quas qui rerum
//    sapiente sunt, ullam voluptas voluptates.</p><p> Excepturi magni modi quibusdam recusandae veritatis? Ad dolor
//    dolorum facere incidunt, inventore iusto nesciunt nobis quam sequi suscipit, temporibus voluptates. Accusantium
//    adipisci cumque dolores expedita laborum maxime perspiciatis quidem?</p>"
//        ]);
    }
}
