<?php

namespace Database\Seeders\Product;

use App\Models\products\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::truncate();
        $product = new Product();
        $product->prodcut_name = 'Her benny';
        $product->url = 'https://www.rokomari.com/book/her-benny';
        $product->is_top_product = '1';
        $product->selected_categories = '[1, 2]';
        $product->short_description = "Benny Bates, a poor boy from the Liverpool slums, is ten years old when the story begins. He scrapes a living running errands in the streets; his beloved but frail sister Nelly, a year younger, sells matches. Their mother is dead, their father a drink-sodden brute, who dies later on in the story, becomes violent towards Nelly and the two children run away from home. Helped by their friend the night-watchman Joe Wrag, and 'Granny' Betty Barker, manage to retain their independence and learn to lead Christian lives. Nelly, a child of great natural spiritual insight, acts as Benny's moral conscience; when she dies after a street accident, he is in despair.";
        $product->description = "Benny Bates, a poor boy from the Liverpool slums, is ten years old when the story begins. He scrapes a living running errands in the streets; his beloved but frail sister Nelly, a year younger, sells matches. Their mother is dead, their father a drink-sodden brute, who dies later on in the story, becomes violent towards Nelly and the two children run away from home. Helped by their friend the night-watchman Joe Wrag, and 'Granny' Betty Barker, manage to retain their independence and learn to lead Christian lives. Nelly, a child of great natural spiritual insight, acts as Benny's moral conscience; when she dies after a street accident, he is in despair. A lucky encounter with Eva Lawrence, the little girl he will come to call his 'angel', leads to a job as office-boy to her father, a rich Liverpool businessman. Benny works hard, hoping to educate and better himself, but loses both job and reputation when Mr. Lawrence wrongly accuses him of stealing a five-pound note. Abandoning Liverpool, he nearly dies of starvation and heat-stroke, but is rescued and nursed back to health by a kindly farming family. He remains with them, working on the farm and studying in night school. Six years later, and by now grown up, he bravely stops a runaway carriage in a nearby lane; only afterwards does he discover that one of its occupants was Eva Lawrence. Benny has saved his 'angel's' life; now she reveals that she and her father have long known that he was innocent of the theft. The grateful Mr. Lawrence offers Benny a new job, this time as his clerk; he returns to Liverpool, to work his way up into partnership with Mr. Lawrence, and marriage with Eva, who gave him the shilling in his greatest hour of need, which he kept and never dared spend.";
        $product->image = '';
        $product->cost = 300;
        $product->sales_price = 600;
        $product->stock = 20;
        $product->low_stock = 5;
        $product->meta_title = 'Her benny';
        $product->description = 'meta description of the product';
        $product->schema_tag = "['title' => 'hello']";
        $product->video_url = "https://www.youtube.com/watch?v=OrAbqNXtgsY";
        $product->status = "active";
        $product->save();


        $product = new Product();
        $product->prodcut_name = 'বৈজ্ঞানিক কল্পকাহিনী - সেরিনা (হার্ডকভার)';
        $product->url = 'https://www.rokomari.com/book/boigganik-kolpokahini-serina';
        $product->is_top_product = '1';
        $product->selected_categories = '[1, 2]';
        $product->short_description = " আলেক্স হঠাৎ করে গম্ভীর গলায় বলল, “দেখ শামীম। মানুষের প্রতি মহূর্তে বিবর্তন হচ্ছে, মিউটেশান হচ্ছে। তাই ঘটনাক্রমে খুব বিচিত্র কিছু হওয়া অসম্ভব কিছু না। এই মিউটেশানগুলো টিকে থাকে না বলে আমরা এই বিচিত্র উদাহরণগুলো দেখি না। মানুষের চামড়ারপ্রতি বর্গ ইঞ্চিতে চার মিটার রক্তনালী, সেগুলো যদি কোনোভাবে চামড়ার কোষের ভেতর দিয়ে অক্সিজেন একসচেঞ্জ করতে পারে সে হয়তো চামড়া দিয়ে নিশ্বাস নিতেও পারে। মাছ তার ফুলকা দিয়ে পানি থেকে অক্সিজেন নেয়-” ";
        $product->description = "আলেক্স হঠাৎ করে গম্ভীর গলায় বলল, দেখ শামীম। মানুষের প্রতি মুহূর্তে বিবর্তন হচ্ছে। তাই ঘটনাক্রমে খুব বিচিত্র কিছু হওয়া অসম্ভব কিছু না। এই মিউটেশানগুলো টিকে থাকেনা বলে আমরা এই বিচিত্র উদাহরণগুলো দেখি না। মানুষের চামড়ার প্রতি বরগ ইঞ্চিতে চার মিটার রক্তনালী, সেগুলো যদি কোন ভাবে চামড়ার কোষের ভেতর দিয়ে অক্সিজেন এক্সচেঞ্জ করতে পারে সে হয়তো চামড়া দিয়ে নিঃশ্বাস নিতেও পারে। মাছ তার ফুল্কা দিয়ে পানি থেকে অক্সিজেন নেয়...।";
        $product->image = '';
        $product->cost = 300;
        $product->sales_price = 600;
        $product->stock = 20;
        $product->low_stock = 5;
        $product->meta_title = 'বৈজ্ঞানিক কল্পকাহিনী - সেরিনা (হার্ডকভার)';
        $product->description = 'meta description of the product';
        $product->schema_tag = "['title' => 'hello']";
        $product->video_url = "https://www.youtube.com/watch?v=OrAbqNXtgsY";
        $product->status = "active";
        $product->save();



        $product = new Product();
        $product->prodcut_name = 'ইচ্ছা পূরণ (হার্ডকভার)';
        $product->url = 'https://www.rokomari.com/book/129446/ichsapuron';
        $product->is_top_product = '1';
        $product->selected_categories = '[3, 4]';
        $product->short_description = "*  টিকটিকিকে ধরার চেষ্টা করলে তাদের লেজটা খুলে আসে এবং তিড়িং তিড়িং করে নড়তে থাকে। সেটা দেখে টুটুল এতো মজা পেলো যে সে একটা একটা করে সবগুলো টিকটিকির লেজ খসিয়ে ফেলল, তাদের বাসার কোনো টিকটিকির এখন কোনো লেজ নাই। ";
        $product->description = " ২০১৭ সালের বইমেলায় প্রকাশ হওয়া ১০ বছর বয়েসি ছেলে বাচ্চাকে নিয়ে লেখা বইটি কিছুটা ছোটদের অ্যাডভেঞ্চার এর মত। এখানে টুটুল প্রতিমুহুর্তেই কিছু না কিছু এক্সপেরিমেন্ট করে এবং নিশ্চিত ভাবে সেটা ভুল হয় কিন্তু তাই বলে তাঁর কাজ থেমে থাকে না। বইটি রঙিন ছবিসহ এবং বাচ্চাদের উত্তাল আনন্দের মধ্যে বড় করে তোলার দিকটি লেখক জাফর ইকবাল সুন্দর করে তুলে এনেছেন।";
        $product->image = '';
        $product->cost = 200;
        $product->sales_price = 400;
        $product->stock = 15;
        $product->low_stock = 5;
        $product->meta_title = 'ইচ্ছা পূরণ (হার্ডকভার)';
        $product->description = 'meta description of the product';
        $product->schema_tag = "['title' => 'hello']";
        $product->video_url = "https://www.youtube.com/watch?v=OrAbqNXtgsY";
        $product->status = "active";
        $product->save();


        $product = new Product();
        $product->prodcut_name = 'বৈজ্ঞানিক কল্পকাহিনী - ত্রাতুলের জগৎ (হার্ডকভার)';
        $product->url = 'https://www.rokomari.com/book/7163/boigganik-kolpokahini-tratular-jogot?ref=rncl_2';
        $product->is_top_product = '1';
        $product->selected_categories = '[1, 3]';
        $product->short_description = "আধুনিকতার এই সব সাইবর্গ, এন্ড্রয়েড,বাইভার্বাল, রোবট এদের সহচর্য পছন্দ করে না। এসব থেকে মুক্ত থাক্তেই নিজের “ট্রাকিওশান” ডিভাইস খুলে ফেলে। কারণ রোবট কিংবা এসব সায়েন্টিফিক কাজ-কর্ম টা ত্রাতুল আর মেনেই নিতে পারছিল না। এই নিয়েই এগিয়েছে বৈজ্ঞানিক কল্পকাহিনী ত্রাতুলের জগৎ। ";
        $product->description = "  ত্রাতুল, একটু অন্যরকম একটা মানুষ। আধুনিকতার এই সব সাইবর্গ, এন্ড্রয়েড,বাইভার্বাল, রোবট এদের সহচর্য পছন্দ করে না। এসব থেকে মুক্ত থাক্তেই নিজের “ট্রাকিওশান” ডিভাইস খুলে ফেলে। কারণ রোবট কিংবা এসব সায়েন্টিফিক কাজ-কর্ম টা ত্রাতুল আর মেনেই নিতে পারছিল না। এই নিয়েই এগিয়েছে বৈজ্ঞানিক কল্পকাহিনী ত্রাতুলের জগৎ। বইটি আশা করি পাঠকদের ভালো লাগবে।";
        $product->image = '';
        $product->cost = 200;
        $product->sales_price = 400;
        $product->stock = 25;
        $product->low_stock = 5;
        $product->meta_title = 'বৈজ্ঞানিক কল্পকাহিনী - ত্রাতুলের জগৎ (হার্ডকভার)';
        $product->description = 'meta description of the product';
        $product->schema_tag = "['title' => 'hello']";
        $product->video_url = "https://www.youtube.com/watch?v=OrAbqNXtgsY";
        $product->status = "active";
        $product->save();


        
    }
}
