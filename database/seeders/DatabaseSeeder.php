<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        // User::create([
        //     'name'=>'Raga Devara',
        //     'email'=>'111@gmail.com',
        //     'password'=>bcrypt('12345')

        // ]);

        // User::create([
        //     'name'=>'Sugeng Super',
        //     'email'=>'abc@gmail.com',
        //     'password'=>bcrypt('54321')

        // ]);

        User::factory(3)->create();

        Category::create([
            'name'=>'Web Programming',
            'slug'=>'web-programming'

        ]);
        Category::create([
            'name'=>'Web Design',
            'slug'=>'web-design'

        ]);
        Category::create([
            'name'=>'Personal',
            'slug'=>'personal'

        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title'=>'Judul Pertama',
        //     'slug'=>'judul-pertama',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab sint explicabo ea porro adipisci ipsum tenetur mollitia possimus iste iusto? Vitae, facere voluptatem maxime provident soluta nemo perspiciatis perferendis ipsam!',
        //     'body'=>'<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae ea a ex quo nulla qui nesciunt velit beatae vel sequi autem totam, architecto necessitatibus quia explicabo excepturi et consequuntur doloremque delectus dolores! Soluta aut provident esse explicabo consequatur at atque, animi rem vel labore excepturi dolore magnam neque dignissimos ab, recusandae eligendi. Beatae aliquid doloremque quisquam maxime tenetur est dicta quidem cupiditate exercitationem sapiente rerum neque molestiae, possimus voluptatum eos vero soluta! Fugiat ducimus accusamus inventore at debitis beatae id numquam iure, ipsa porro ullam omnis totam sint sapiente, dolorem quisquam? Ea aliquid cupiditate inventore. Ab natus accusamus a aliquid iste quam quod libero reprehenderit fuga nesciunt ipsa, sed cumque nobis iure incidunt hic officiis sunt nulla odit rerum totam labore unde vitae? Accusantium, necessitatibus quas? Neque laudantium debitis esse sapiente vero provident sint inventore dolor mollitia id officia quasi cum vitae enim maxime, obcaecati quaerat consequuntur delectus fugiat perspiciatis.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae ea a ex quo nulla qui nesciunt velit beatae vel sequi autem totam, architecto necessitatibus quia explicabo excepturi et consequuntur doloremque delectus dolores! Soluta aut provident esse explicabo consequatur at atque, animi rem vel labore excepturi dolore magnam neque dignissimos ab, recusandae eligendi. Beatae aliquid doloremque quisquam maxime tenetur est dicta quidem cupiditate exercitationem sapiente rerum neque molestiae, possimus voluptatum eos vero soluta! Fugiat ducimus accusamus inventore at debitis beatae id numquam iure, ipsa porro ullam omnis totam sint sapiente, dolorem quisquam? Ea aliquid cupiditate inventore. Ab natus accusamus a aliquid iste quam quod libero reprehenderit fuga nesciunt ipsa, sed cumque nobis iure incidunt hic officiis sunt nulla odit rerum totam labore unde vitae? Accusantium, necessitatibus quas? Neque laudantium debitis esse sapiente vero provident sint inventore dolor mollitia id officia quasi cum vitae enim maxime, obcaecati quaerat consequuntur delectus fugiat perspiciatis.</p>',
        //     'category_id'=>1,
        //     'user_id'=>1
        // ]);

        // Post::create([
        //     'title'=>'Judul Kedua',
        //     'slug'=>'judul-kedua',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab sint explicabo ea porro adipisci ipsum tenetur mollitia possimus iste iusto? Vitae, facere voluptatem maxime provident soluta nemo perspiciatis perferendis ipsam!',
        //     'body'=>'<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae ea a ex quo nulla qui nesciunt velit beatae vel sequi autem totam, architecto necessitatibus quia explicabo excepturi et consequuntur doloremque delectus dolores! Soluta aut provident esse explicabo consequatur at atque, animi rem vel labore excepturi dolore magnam neque dignissimos ab, recusandae eligendi. Beatae aliquid doloremque quisquam maxime tenetur est dicta quidem cupiditate exercitationem sapiente rerum neque molestiae, possimus voluptatum eos vero soluta! Fugiat ducimus accusamus inventore at debitis beatae id numquam iure, ipsa porro ullam omnis totam sint sapiente, dolorem quisquam? Ea aliquid cupiditate inventore. Ab natus accusamus a aliquid iste quam quod libero reprehenderit fuga nesciunt ipsa, sed cumque nobis iure incidunt hic officiis sunt nulla odit rerum totam labore unde vitae? Accusantium, necessitatibus quas? Neque laudantium debitis esse sapiente vero provident sint inventore dolor mollitia id officia quasi cum vitae enim maxime, obcaecati quaerat consequuntur delectus fugiat perspiciatis.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae ea a ex quo nulla qui nesciunt velit beatae vel sequi autem totam, architecto necessitatibus quia explicabo excepturi et consequuntur doloremque delectus dolores! Soluta aut provident esse explicabo consequatur at atque, animi rem vel labore excepturi dolore magnam neque dignissimos ab, recusandae eligendi. Beatae aliquid doloremque quisquam maxime tenetur est dicta quidem cupiditate exercitationem sapiente rerum neque molestiae, possimus voluptatum eos vero soluta! Fugiat ducimus accusamus inventore at debitis beatae id numquam iure, ipsa porro ullam omnis totam sint sapiente, dolorem quisquam? Ea aliquid cupiditate inventore. Ab natus accusamus a aliquid iste quam quod libero reprehenderit fuga nesciunt ipsa, sed cumque nobis iure incidunt hic officiis sunt nulla odit rerum totam labore unde vitae? Accusantium, necessitatibus quas? Neque laudantium debitis esse sapiente vero provident sint inventore dolor mollitia id officia quasi cum vitae enim maxime, obcaecati quaerat consequuntur delectus fugiat perspiciatis.</p>',
        //     'category_id'=>1,
        //     'user_id'=>1
        // ]);

        // Post::create([
        //     'title'=>'Judul Ketiga',
        //     'slug'=>'judul-ketiga',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab sint explicabo ea porro adipisci ipsum tenetur mollitia possimus iste iusto? Vitae, facere voluptatem maxime provident soluta nemo perspiciatis perferendis ipsam!',
        //     'body'=>'<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae ea a ex quo nulla qui nesciunt velit beatae vel sequi autem totam, architecto necessitatibus quia explicabo excepturi et consequuntur doloremque delectus dolores! Soluta aut provident esse explicabo consequatur at atque, animi rem vel labore excepturi dolore magnam neque dignissimos ab, recusandae eligendi. Beatae aliquid doloremque quisquam maxime tenetur est dicta quidem cupiditate exercitationem sapiente rerum neque molestiae, possimus voluptatum eos vero soluta! Fugiat ducimus accusamus inventore at debitis beatae id numquam iure, ipsa porro ullam omnis totam sint sapiente, dolorem quisquam? Ea aliquid cupiditate inventore. Ab natus accusamus a aliquid iste quam quod libero reprehenderit fuga nesciunt ipsa, sed cumque nobis iure incidunt hic officiis sunt nulla odit rerum totam labore unde vitae? Accusantium, necessitatibus quas? Neque laudantium debitis esse sapiente vero provident sint inventore dolor mollitia id officia quasi cum vitae enim maxime, obcaecati quaerat consequuntur delectus fugiat perspiciatis.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae ea a ex quo nulla qui nesciunt velit beatae vel sequi autem totam, architecto necessitatibus quia explicabo excepturi et consequuntur doloremque delectus dolores! Soluta aut provident esse explicabo consequatur at atque, animi rem vel labore excepturi dolore magnam neque dignissimos ab, recusandae eligendi. Beatae aliquid doloremque quisquam maxime tenetur est dicta quidem cupiditate exercitationem sapiente rerum neque molestiae, possimus voluptatum eos vero soluta! Fugiat ducimus accusamus inventore at debitis beatae id numquam iure, ipsa porro ullam omnis totam sint sapiente, dolorem quisquam? Ea aliquid cupiditate inventore. Ab natus accusamus a aliquid iste quam quod libero reprehenderit fuga nesciunt ipsa, sed cumque nobis iure incidunt hic officiis sunt nulla odit rerum totam labore unde vitae? Accusantium, necessitatibus quas? Neque laudantium debitis esse sapiente vero provident sint inventore dolor mollitia id officia quasi cum vitae enim maxime, obcaecati quaerat consequuntur delectus fugiat perspiciatis.</p>',
        //     'category_id'=>2,
        //     'user_id'=>1
        // ]);

        // Post::create([
        //     'title'=>'Judul Keempat',
        //     'slug'=>'judul-keempat',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab sint explicabo ea porro adipisci ipsum tenetur mollitia possimus iste iusto? Vitae, facere voluptatem maxime provident soluta nemo perspiciatis perferendis ipsam!',
        //     'body'=>'<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae ea a ex quo nulla qui nesciunt velit beatae vel sequi autem totam, architecto necessitatibus quia explicabo excepturi et consequuntur doloremque delectus dolores! Soluta aut provident esse explicabo consequatur at atque, animi rem vel labore excepturi dolore magnam neque dignissimos ab, recusandae eligendi. Beatae aliquid doloremque quisquam maxime tenetur est dicta quidem cupiditate exercitationem sapiente rerum neque molestiae, possimus voluptatum eos vero soluta! Fugiat ducimus accusamus inventore at debitis beatae id numquam iure, ipsa porro ullam omnis totam sint sapiente, dolorem quisquam? Ea aliquid cupiditate inventore. Ab natus accusamus a aliquid iste quam quod libero reprehenderit fuga nesciunt ipsa, sed cumque nobis iure incidunt hic officiis sunt nulla odit rerum totam labore unde vitae? Accusantium, necessitatibus quas? Neque laudantium debitis esse sapiente vero provident sint inventore dolor mollitia id officia quasi cum vitae enim maxime, obcaecati quaerat consequuntur delectus fugiat perspiciatis.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae ea a ex quo nulla qui nesciunt velit beatae vel sequi autem totam, architecto necessitatibus quia explicabo excepturi et consequuntur doloremque delectus dolores! Soluta aut provident esse explicabo consequatur at atque, animi rem vel labore excepturi dolore magnam neque dignissimos ab, recusandae eligendi. Beatae aliquid doloremque quisquam maxime tenetur est dicta quidem cupiditate exercitationem sapiente rerum neque molestiae, possimus voluptatum eos vero soluta! Fugiat ducimus accusamus inventore at debitis beatae id numquam iure, ipsa porro ullam omnis totam sint sapiente, dolorem quisquam? Ea aliquid cupiditate inventore. Ab natus accusamus a aliquid iste quam quod libero reprehenderit fuga nesciunt ipsa, sed cumque nobis iure incidunt hic officiis sunt nulla odit rerum totam labore unde vitae? Accusantium, necessitatibus quas? Neque laudantium debitis esse sapiente vero provident sint inventore dolor mollitia id officia quasi cum vitae enim maxime, obcaecati quaerat consequuntur delectus fugiat perspiciatis.</p>',
        //     'category_id'=>2,
        //     'user_id'=>2
        // ]);
    }
}
