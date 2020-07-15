<?php

use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $pages=['Hakkımızda','Kariyer','Vizyonumuz','Misyonumuz'];
      $count=0;
      foreach($pages as $page){
        $count++;
          DB::table('pages')->insert([
            'title'=>$page,
            'slug'=> Str::slug($page),
            'image'=>'https://miro.medium.com/max/8000/1*JrHDbEdqGsVfnBYtxOitcw.jpeg',
            'content'=>'Ürün ve hizmetlerinizi sınırlar ötesine taşıyan yerelleştirme projelerinizle markanıza uluslararası değer kazandırmak istiyorsanız, İçerik Bulutu’nun çok dilli içerik üreticilerinin deneyiminden yararlanabilirsiniz. İçerik Bulutu topluluğunun sektörel uzmanlığa sahip içerik üreticileri ve çevirmenleri, kültürel adaptasyonu gözeterek mesajlarınızı hedef kitlenize en doğru şekilde aktarır.',
            'order'=>$count,
            'created_at'=>now(),
            'updated_at'=>now()
          ]);
        }
    }
}
