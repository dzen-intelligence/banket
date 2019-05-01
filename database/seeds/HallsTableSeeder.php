<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Factory;

class HallsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('halls')->insert([
            'title' => 'Винный бар "Истина"',
            'description' => 'Хорошее заведение. Отличная подача. Очень понравилось. Любители пропустить по бокалу вина, не пожалеете',
            'preview_image' => '/img/photo/photo-1426122402199-be02db90eb90.jpg',
            'instituion_id' => 1,
            'type_id' => 2,
            'price_per_person' => 200,
            'persons_count' => 30,
            'address' => 'Казань, адрес',
            'longitude' => '55.78529',
            'latitude' => '49.12509',
            'state' => 'Приволжский',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('halls')->insert([
            'title' => 'Караоке бар',
            'description' => 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия. По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых людей недоумение при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском языке наполнит любой макет непонятным смыслом и придаст неповторимый колорит советских времен.',
            'preview_image' => '/img/photo/photo-1467987506553-8f3916508521.jpg',
//            'restaurateur_id' => 2,
            'type_id' => 2,
            'instituion_id' => 2,
            'price_per_person' => 100,
            'persons_count' => 20,
            'address' => 'Казань, адрес',
            'longitude' => '55.78638',
            'latitude' => '49.12036',
            'state' => 'Долинский',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('halls')->insert([
            'title' => 'Суши бар',
            'description' => 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия. По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых людей недоумение при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском языке наполнит любой макет непонятным смыслом и придаст неповторимый колорит советских времен.',
            'preview_image' => '/img/photo/photo-1484154218962-a197022b5858.jpg',
//            'restaurateur_id' => 3,
            'type_id' => 3,
            'instituion_id' => 3,
            'price_per_person' => 250,
            'persons_count' => 40,
            'address' => 'Казань, адрес',
            'longitude' => '55.78738',
            'latitude' => '49.12108',
            'state' => 'Слободской',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('halls')->insert([
            'title' => 'Пашмир',
            'description' => 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия. По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых людей недоумение при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском языке наполнит любой макет непонятным смыслом и придаст неповторимый колорит советских времен.',
            'preview_image' => '/img/photo/photo-1488805990569-3c9e1d76d51c.jpg',
//            'restaurateur_id' => 3,
            'type_id' => 3,
            'instituion_id' => 3,
            'price_per_person' => 250,
            'persons_count' => 40,
            'address' => 'Казань, адрес',
            'longitude' => '55.78468',
            'latitude' => '9.12708',
            'state' => 'Верхошижемский',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('halls')->insert([
            'title' => 'Малабар',
            'description' => 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия. По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых людей недоумение при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском языке наполнит любой макет непонятным смыслом и придаст неповторимый колорит советских времен.',
            'preview_image' => '/img/photo/photo-1494526585095-c41746248156.jpg',
            'type_id' => 3,
            'instituion_id' => 4,
            'price_per_person' => 250,
            'persons_count' => 40,
            'address' => 'Казань, адрес',
            'longitude' => '55.78119',
            'latitude' => '49.12977',
            'state' => 'Свечинский',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('halls')->insert([
            'title' => 'Татарская Усадьба',
            'description' => ' При создании генератора мы использовали небезизвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия. По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых людей недоумение при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском языке наполнит любой макет непонятным смыслом и придаст неповторимый колорит советских времен.',
            'preview_image' => '/img/photo/photo-1512917774080-9991f1c4c750.jpg',
            'type_id' => 3,
            'instituion_id' => 4,
            'price_per_person' => 250,
            'persons_count' => 40,
            'address' => 'Казань, адрес',
            'longitude' => '55.78544',
            'latitude' => '49.11917',
            'state' => 'Советский',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('halls')->insert([
            'title' => 'Шеф Лобстер',
            'description' => 'Вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия. По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых людей недоумение при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском языке наполнит любой макет непонятным смыслом и придаст неповторимый колорит советских времен.',
            'preview_image' => '/img/photo/photo-1514890547357-a9ee288728e0.jpg',
            'type_id' => 5,
            'instituion_id' => 1,
            'price_per_person' => 250,
            'persons_count' => 40,
            'address' => 'Казань, адрес',
            'longitude' => '55.78755',
            'latitude' => '49.11791',
            'state' => 'Советский',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('halls')->insert([
            'title' => 'Татарская Усадьба',
            'description' => 'Верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия. По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых людей недоумение при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском языке наполнит любой макет непонятным смыслом и придаст неповторимый колорит советских времен.',
            'preview_image' => '/img/photo/photo-1521170665346-3f21e2291d8b.jpg',
//            'restaurateur_id' => 3,
            'type_id' => 3,
            'instituion_id' => 4,
            'price_per_person' => 250,
            'persons_count' => 40,
            'address' => 'Казань, адрес',
            'longitude' => '55.78529',
            'latitude' => '49.12509',
            'state' => 'Советский',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('halls')->insert([
            'title' => 'Утка в Котелке',
            'description' => 'В домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия. По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых людей недоумение при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском языке наполнит любой макет непонятным смыслом и придаст неповторимый колорит советских времен.',
            'preview_image' => '/img/photo/photo-1522771739844-6a9f6d5f14af.jpg',
//            'restaurateur_id' => 3,
            'type_id' => 3,
            'instituion_id' => 4,
            'price_per_person' => 250,
            'persons_count' => 40,
            'address' => 'Казань, адрес',
            'longitude' => '55.78529',
            'latitude' => '49.12509',
            'state' => 'Советский',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('halls')->insert([
            'title' => 'Добрая столовая',
            'description' => 'В домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия. По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых людей недоумение при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском языке наполнит любой макет непонятным смыслом и придаст неповторимый колорит советских времен.',
            'preview_image' => '/img/photo/photo-1522771739844-6a9f6d5f14af.jpg',
            'type_id' => 3,
            'instituion_id' => 4,
            'price_per_person' => 250,
            'persons_count' => 40,
            'address' => 'Казань, адрес',
            'longitude' => '55.78529',
            'latitude' => '49.12509',
            'state' => 'Советский',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('halls')->insert([
            'title' => 'Банкетный зал казань',
            'description' => 'В домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия. По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых людей недоумение при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском языке наполнит любой макет непонятным смыслом и придаст неповторимый колорит советских времен.',
            'preview_image' => '/img/photo/photo-1522771739844-6a9f6d5f14af.jpg',
            'type_id' => 1,
            'instituion_id' => 4,
            'price_per_person' => 500,
            'persons_count' => 80,
            'address' => 'Казань, адрес',
            'longitude' => '55.78529',
            'latitude' => '49.12509',
            'state' => 'Советский',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('halls')->insert([
            'title' => 'Банкетный зал 2',
            'description' => 'В домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия. По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых людей недоумение при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском языке наполнит любой макет непонятным смыслом и придаст неповторимый колорит советских времен.',
            'preview_image' => '/img/photo/photo-1522771739844-6a9f6d5f14af.jpg',
            'type_id' => 2,
            'instituion_id' => 4,
            'price_per_person' => 500,
            'persons_count' => 80,
            'address' => 'Казань, адрес',
            'longitude' => '55.78529',
            'latitude' => '49.12509',
            'state' => 'Советский',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('halls')->insert([
            'title' => 'Банкетный зал 4',
            'description' => 'В домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия. По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых людей недоумение при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском языке наполнит любой макет непонятным смыслом и придаст неповторимый колорит советских времен.',
            'preview_image' => '/img/photo/photo-1522771739844-6a9f6d5f14af.jpg',
            'type_id' => 3,
            'instituion_id' => 4,
            'price_per_person' => 500,
            'persons_count' => 80,
            'address' => 'Казань, адрес',
            'longitude' => '55.78529',
            'latitude' => '49.12509',
            'state' => 'Советский',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('halls')->insert([
            'title' => 'Банкетный зал 5',
            'description' => 'В домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия. По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых людей недоумение при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском языке наполнит любой макет непонятным смыслом и придаст неповторимый колорит советских времен.',
            'preview_image' => '/img/photo/photo-1522771739844-6a9f6d5f14af.jpg',
            'type_id' => 5,
            'instituion_id' => 4,
            'price_per_person' => 1000,
            'persons_count' => 10,
            'address' => 'Казань, адрес',
            'longitude' => '55.78529',
            'latitude' => '49.12509',
            'state' => 'Советский',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('halls')->insert([
            'title' => 'Заведение 6',
            'description' => 'В домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия. По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых людей недоумение при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском языке наполнит любой макет непонятным смыслом и придаст неповторимый колорит советских времен.',
            'preview_image' => '/img/photo/photo-1522771739844-6a9f6d5f14af.jpg',
            'type_id' => 6,
            'instituion_id' => 4,
            'price_per_person' => 500,
            'persons_count' => 80,
            'address' => 'Казань, адрес',
            'longitude' => '55.78529',
            'latitude' => '49.12509',
            'state' => 'Советский',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('halls')->insert([
            'title' => 'Заведение 8',
            'description' => 'В домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия. По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых людей недоумение при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском языке наполнит любой макет непонятным смыслом и придаст неповторимый колорит советских времен.',
            'preview_image' => '/img/photo/photo-1522771739844-6a9f6d5f14af.jpg',
            'type_id' => 7,
            'instituion_id' => 4,
            'price_per_person' => 300,
            'persons_count' => 20,
            'address' => 'Казань, адрес',
            'longitude' => '55.78529',
            'latitude' => '49.12509',
            'state' => 'Советский',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Заполняем пивот таблицу
        DB::table('addition_hall')->insert([
            'addition_id' => 1,
            'hall_id'   => 1
        ]);

        DB::table('addition_hall')->insert([
            'addition_id' => 2,
            'hall_id'   => 1
        ]);

        DB::table('addition_hall')->insert([
            'addition_id' => 3,
            'hall_id'   => 1
        ]);

        DB::table('addition_hall')->insert([
            'addition_id' => 1,
            'hall_id'   => 2
        ]);

        DB::table('addition_hall')->insert([
            'addition_id' => 3,
            'hall_id'   => 4
        ]);

        // Время работы
        DB::table('timeworks')->insert([
            'monday' => '8:00 - 18:00',
            'tuesday' => '8:00 - 18:00',
            'wednesday' => '8:00 - 18:00',
            'thursday' => '8:00 - 18:00',
            'friday' => '8:00 - 18:00',
            'saturday' => '8:00 - 18:00',
            'sunday' => '8:00 - 18:00',
            'hall_id'   => 1
        ]);

        DB::table('timeworks')->insert([
            'monday' => '8:00 - 18:00',
            'tuesday' => '8:00 - 18:00',
            'wednesday' => '8:00 - 18:00',
            'thursday' => '8:00 - 18:00',
            'friday' => '8:00 - 18:00',
            'saturday' => '8:00 - 18:00',
            'sunday' => '8:00 - 18:00',
            'hall_id'   => 2
        ]);

        DB::table('timeworks')->insert([
            'monday' => '8:00 - 18:00',
            'tuesday' => '8:00 - 18:00',
            'wednesday' => '8:00 - 18:00',
            'thursday' => '8:00 - 18:00',
            'friday' => '8:00 - 18:00',
            'saturday' => '8:00 - 18:00',
            'sunday' => '8:00 - 18:00',
            'hall_id'   => 3
        ]);

        DB::table('timeworks')->insert([
            'monday' => '8:00 - 18:00',
            'tuesday' => '8:00 - 18:00',
            'wednesday' => '8:00 - 18:00',
            'thursday' => '8:00 - 18:00',
            'friday' => '8:00 - 18:00',
            'saturday' => '8:00 - 18:00',
            'sunday' => '8:00 - 18:00',
            'hall_id'   => 4
        ]);

        DB::table('timeworks')->insert([
            'monday' => '8:00 - 18:00',
            'tuesday' => '8:00 - 18:00',
            'wednesday' => '8:00 - 18:00',
            'thursday' => '8:00 - 18:00',
            'friday' => '8:00 - 18:00',
            'saturday' => '8:00 - 18:00',
            'sunday' => '8:00 - 18:00',
            'hall_id'   => 5
        ]);

        DB::table('timeworks')->insert([
            'monday' => '8:00 - 18:00',
            'tuesday' => '8:00 - 18:00',
            'wednesday' => '8:00 - 18:00',
            'thursday' => '8:00 - 18:00',
            'friday' => '8:00 - 18:00',
            'saturday' => '8:00 - 18:00',
            'sunday' => '8:00 - 18:00',
            'hall_id'   => 6
        ]);

        DB::table('timeworks')->insert([
            'monday' => '8:00 - 18:00',
            'tuesday' => '8:00 - 18:00',
            'wednesday' => '8:00 - 18:00',
            'thursday' => '8:00 - 18:00',
            'friday' => '8:00 - 18:00',
            'saturday' => '8:00 - 18:00',
            'sunday' => '8:00 - 18:00',
            'hall_id'   => 7
        ]);

        DB::table('timeworks')->insert([
            'monday' => '8:00 - 18:00',
            'tuesday' => '8:00 - 18:00',
            'wednesday' => '8:00 - 18:00',
            'thursday' => '8:00 - 18:00',
            'friday' => '8:00 - 18:00',
            'saturday' => '8:00 - 18:00',
            'sunday' => '8:00 - 18:00',
            'hall_id'   => 8
        ]);

        DB::table('timeworks')->insert([
            'monday' => '8:00 - 18:00',
            'tuesday' => '8:00 - 18:00',
            'wednesday' => '8:00 - 18:00',
            'thursday' => '8:00 - 18:00',
            'friday' => '8:00 - 18:00',
            'saturday' => '8:00 - 18:00',
            'sunday' => '8:00 - 18:00',
            'hall_id'   => 9
        ]);

        DB::table('timeworks')->insert([
            'monday' => '8:00 - 18:00',
            'tuesday' => '8:00 - 18:00',
            'wednesday' => '8:00 - 18:00',
            'thursday' => '8:00 - 18:00',
            'friday' => '8:00 - 18:00',
            'saturday' => '8:00 - 18:00',
            'sunday' => '8:00 - 18:00',
            'hall_id'   => 10
        ]);

        // Contacts
        DB::table('hall_contacts')->insert([
            'phone' => '89377799906',
            'email' => 'info@example.com',
            'site' => 'www.somesite.ru',
            'vkontakte' => 'http://vk.com/user',
            'instagram' => 'http://instagram/user',
            'hall_id' => 1
        ]);

        DB::table('hall_contacts')->insert([
            'phone' => '89377799906',
            'email' => 'info@example.com',
            'site' => 'www.somesite.ru',
            'vkontakte' => 'http://vk.com/user',
            'instagram' => 'http://instagram/user',
            'hall_id' => 2
        ]);

        DB::table('hall_contacts')->insert([
            'phone' => '89377799906',
            'email' => 'info@example.com',
            'site' => 'www.somesite.ru',
            'vkontakte' => 'http://vk.com/user',
            'instagram' => 'http://instagram/user',
            'hall_id' => 3
        ]);

        DB::table('hall_contacts')->insert([
            'phone' => '89377799906',
            'email' => 'info@example.com',
            'site' => 'www.somesite.ru',
            'vkontakte' => 'http://vk.com/user',
            'instagram' => 'http://instagram/user',
            'hall_id' => 4
        ]);

        DB::table('hall_contacts')->insert([
            'phone' => '89377799906',
            'email' => 'info@example.com',
            'site' => 'www.somesite.ru',
            'vkontakte' => 'http://vk.com/user',
            'instagram' => 'http://instagram/user',
            'hall_id' => 5
        ]);

        DB::table('hall_contacts')->insert([
            'phone' => '89377799906',
            'email' => 'info@example.com',
            'site' => 'www.somesite.ru',
            'vkontakte' => 'http://vk.com/user',
            'instagram' => 'http://instagram/user',
            'hall_id' => 6
        ]);

        DB::table('hall_contacts')->insert([
            'phone' => '89377799906',
            'email' => 'info@example.com',
            'site' => 'www.somesite.ru',
            'vkontakte' => 'http://vk.com/user',
            'instagram' => 'http://instagram/user',
            'hall_id' => 7
        ]);

        DB::table('hall_contacts')->insert([
            'phone' => '89377799906',
            'email' => 'info@example.com',
            'site' => 'www.somesite.ru',
            'vkontakte' => 'http://vk.com/user',
            'instagram' => 'http://instagram/user',
            'hall_id' => 8
        ]);

        DB::table('hall_contacts')->insert([
            'phone' => '89377799906',
            'email' => 'info@example.com',
            'site' => 'www.somesite.ru',
            'vkontakte' => 'http://vk.com/user',
            'instagram' => 'http://instagram/user',
            'hall_id' => 9
        ]);

        DB::table('hall_contacts')->insert([
            'phone' => '89377799906',
            'email' => 'info@example.com',
            'site' => 'www.somesite.ru',
            'vkontakte' => 'http://vk.com/user',
            'instagram' => 'http://instagram/user',
            'hall_id' => 10
        ]);


    }
}