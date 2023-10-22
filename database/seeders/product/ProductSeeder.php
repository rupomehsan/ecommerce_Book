<?php

namespace Database\Seeders\Product;

use App\Models\products\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::truncate();
        $product = new Product();
        $product->product_name = 'Her benny';
        $product->product_url = Str::slug('Her benny');
        $product->is_top_product = '1';
        $product->selected_categories = '[1, 2]';
        $product->short_description = "Benny Bates, a poor boy from the Liverpool slums, is ten years old when the story begins. He scrapes a living running errands in the streets; his beloved but frail sister Nelly, a year younger, sells matches. Their mother is dead, their father a drink-sodden brute, who dies later on in the story, becomes violent towards Nelly and the two children run away from home. Helped by their friend the night-watchman Joe Wrag, and 'Granny' Betty Barker, manage to retain their independence and learn to lead Christian lives. Nelly, a child of great natural spiritual insight, acts as Benny's moral conscience; when she dies after a street accident, he is in despair.";
        $product->description = "Benny Bates, a poor boy from the Liverpool slums, is ten years old when the story begins. He scrapes a living running errands in the streets; his beloved but frail sister Nelly, a year younger, sells matches. Their mother is dead, their father a drink-sodden brute, who dies later on in the story, becomes violent towards Nelly and the two children run away from home. Helped by their friend the night-watchman Joe Wrag, and 'Granny' Betty Barker, manage to retain their independence and learn to lead Christian lives. Nelly, a child of great natural spiritual insight, acts as Benny's moral conscience; when she dies after a street accident, he is in despair. A lucky encounter with Eva Lawrence, the little girl he will come to call his 'angel', leads to a job as office-boy to her father, a rich Liverpool businessman. Benny works hard, hoping to educate and better himself, but loses both job and reputation when Mr. Lawrence wrongly accuses him of stealing a five-pound note. Abandoning Liverpool, he nearly dies of starvation and heat-stroke, but is rescued and nursed back to health by a kindly farming family. He remains with them, working on the farm and studying in night school. Six years later, and by now grown up, he bravely stops a runaway carriage in a nearby lane; only afterwards does he discover that one of its occupants was Eva Lawrence. Benny has saved his 'angel's' life; now she reveals that she and her father have long known that he was innocent of the theft. The grateful Mr. Lawrence offers Benny a new job, this time as his clerk; he returns to Liverpool, to work his way up into partnership with Mr. Lawrence, and marriage with Eva, who gave him the shilling in his greatest hour of need, which he kept and never dared spend.";
        $product->image = 'assets/backend/product/1.jpg';
        $product->cost = 300;
        $product->sales_price = 600;
        $product->stock = 20;
        $product->low_stock = 5;
        $product->meta_title = 'Her benny';
        $product->description = 'meta description of the product';
        $product->schema_tag = "['title' => 'hello']";
        $product->video_url = "";
        $product->status = "active";
        $product->save();


        $product = new Product();
        $product->product_name = 'বৈজ্ঞানিক কল্পকাহিনী - সেরিনা (হার্ডকভার)';
        $product->product_url = Str::slug('বৈজ্ঞানিক কল্পকাহিনী - সেরিনা (হার্ডকভার)');
        $product->is_top_product = '1';
        $product->selected_categories = '[1, 2]';
        $product->short_description = " আলেক্স হঠাৎ করে গম্ভীর গলায় বলল, “দেখ শামীম। মানুষের প্রতি মহূর্তে বিবর্তন হচ্ছে, মিউটেশান হচ্ছে। তাই ঘটনাক্রমে খুব বিচিত্র কিছু হওয়া অসম্ভব কিছু না। এই মিউটেশানগুলো টিকে থাকে না বলে আমরা এই বিচিত্র উদাহরণগুলো দেখি না। মানুষের চামড়ারপ্রতি বর্গ ইঞ্চিতে চার মিটার রক্তনালী, সেগুলো যদি কোনোভাবে চামড়ার কোষের ভেতর দিয়ে অক্সিজেন একসচেঞ্জ করতে পারে সে হয়তো চামড়া দিয়ে নিশ্বাস নিতেও পারে। মাছ তার ফুলকা দিয়ে পানি থেকে অক্সিজেন নেয়-” ";
        $product->description = "আলেক্স হঠাৎ করে গম্ভীর গলায় বলল, দেখ শামীম। মানুষের প্রতি মুহূর্তে বিবর্তন হচ্ছে। তাই ঘটনাক্রমে খুব বিচিত্র কিছু হওয়া অসম্ভব কিছু না। এই মিউটেশানগুলো টিকে থাকেনা বলে আমরা এই বিচিত্র উদাহরণগুলো দেখি না। মানুষের চামড়ার প্রতি বরগ ইঞ্চিতে চার মিটার রক্তনালী, সেগুলো যদি কোন ভাবে চামড়ার কোষের ভেতর দিয়ে অক্সিজেন এক্সচেঞ্জ করতে পারে সে হয়তো চামড়া দিয়ে নিঃশ্বাস নিতেও পারে। মাছ তার ফুল্কা দিয়ে পানি থেকে অক্সিজেন নেয়...।";
        $product->image = 'assets/backend/product/2.jpg';
        $product->cost = 300;
        $product->sales_price = 400;
        $product->stock = 20;
        $product->low_stock = 5;
        $product->meta_title = 'বৈজ্ঞানিক কল্পকাহিনী - সেরিনা (হার্ডকভার)';
        $product->description = 'meta description of the product';
        $product->schema_tag = "['title' => 'hello']";
        $product->video_url = "";
        $product->status = "active";
        $product->save();



        $product = new Product();
        $product->product_name = 'ইচ্ছা পূরণ (হার্ডকভার)';
        $product->product_url = Str::slug('ইচ্ছা পূরণ (হার্ডকভার)');
        $product->is_top_product = '1';
        $product->selected_categories = '[3, 4]';
        $product->short_description = "*  টিকটিকিকে ধরার চেষ্টা করলে তাদের লেজটা খুলে আসে এবং তিড়িং তিড়িং করে নড়তে থাকে। সেটা দেখে টুটুল এতো মজা পেলো যে সে একটা একটা করে সবগুলো টিকটিকির লেজ খসিয়ে ফেলল, তাদের বাসার কোনো টিকটিকির এখন কোনো লেজ নাই। ";
        $product->description = " ২০১৭ সালের বইমেলায় প্রকাশ হওয়া ১০ বছর বয়েসি ছেলে বাচ্চাকে নিয়ে লেখা বইটি কিছুটা ছোটদের অ্যাডভেঞ্চার এর মত। এখানে টুটুল প্রতিমুহুর্তেই কিছু না কিছু এক্সপেরিমেন্ট করে এবং নিশ্চিত ভাবে সেটা ভুল হয় কিন্তু তাই বলে তাঁর কাজ থেমে থাকে না। বইটি রঙিন ছবিসহ এবং বাচ্চাদের উত্তাল আনন্দের মধ্যে বড় করে তোলার দিকটি লেখক জাফর ইকবাল সুন্দর করে তুলে এনেছেন।";
        $product->image = 'assets/backend/product/3.jpg';
        $product->cost = 200;
        $product->sales_price = 500;
        $product->stock = 15;
        $product->low_stock = 5;
        $product->meta_title = 'ইচ্ছা পূরণ (হার্ডকভার)';
        $product->description = 'meta description of the product';
        $product->schema_tag = "['title' => 'hello']";
        $product->video_url = "";
        $product->status = "active";
        $product->save();


        $product = new Product();
        $product->product_name = ' ত্রাতুলের জগৎ (হার্ডকভার)';
        $product->product_url = Str::slug(' ত্রাতুলের জগৎ (হার্ডকভার)');
        $product->is_top_product = '1';
        $product->selected_categories = '[1, 3]';
        $product->short_description = "আধুনিকতার এই সব সাইবর্গ, এন্ড্রয়েড,বাইভার্বাল, রোবট এদের সহচর্য পছন্দ করে না। এসব থেকে মুক্ত থাক্তেই নিজের “ট্রাকিওশান” ডিভাইস খুলে ফেলে। কারণ রোবট কিংবা এসব সায়েন্টিফিক কাজ-কর্ম টা ত্রাতুল আর মেনেই নিতে পারছিল না। এই নিয়েই এগিয়েছে বৈজ্ঞানিক কল্পকাহিনী ত্রাতুলের জগৎ। ";
        $product->description = "  ত্রাতুল, একটু অন্যরকম একটা মানুষ। আধুনিকতার এই সব সাইবর্গ, এন্ড্রয়েড,বাইভার্বাল, রোবট এদের সহচর্য পছন্দ করে না। এসব থেকে মুক্ত থাক্তেই নিজের “ট্রাকিওশান” ডিভাইস খুলে ফেলে। কারণ রোবট কিংবা এসব সায়েন্টিফিক কাজ-কর্ম টা ত্রাতুল আর মেনেই নিতে পারছিল না। এই নিয়েই এগিয়েছে বৈজ্ঞানিক কল্পকাহিনী ত্রাতুলের জগৎ। বইটি আশা করি পাঠকদের ভালো লাগবে।";
        $product->image = 'assets/backend/product/4.jpg';
        $product->cost = 200;
        $product->sales_price = 350;
        $product->stock = 25;
        $product->low_stock = 5;
        $product->meta_title = 'বৈজ্ঞানিক কল্পকাহিনী - ত্রাতুলের জগৎ (হার্ডকভার)';
        $product->description = 'meta description of the product';
        $product->schema_tag = "['title' => 'hello']";
        $product->video_url = "";
        $product->status = "active";
        $product->save();



        $product = new Product();
        $product->product_name = 'বৈজ্ঞানিক কল্পকাহিনী - ত্রাতুলের জগৎ (হার্ডকভার)';
        $product->product_url = Str::slug('বৈজ্ঞানিক কল্পকাহিনী - ত্রাতুলের জগৎ (হার্ডকভার)');
        $product->is_top_product = '1';
        $product->selected_categories = '[1, 3]';
        $product->short_description = "আধুনিকতার এই সব সাইবর্গ, এন্ড্রয়েড,বাইভার্বাল, রোবট এদের সহচর্য পছন্দ করে না। এসব থেকে মুক্ত থাক্তেই নিজের “ট্রাকিওশান” ডিভাইস খুলে ফেলে। কারণ রোবট কিংবা এসব সায়েন্টিফিক কাজ-কর্ম টা ত্রাতুল আর মেনেই নিতে পারছিল না। এই নিয়েই এগিয়েছে বৈজ্ঞানিক কল্পকাহিনী ত্রাতুলের জগৎ। ";
        $product->description = "  ত্রাতুল, একটু অন্যরকম একটা মানুষ। আধুনিকতার এই সব সাইবর্গ, এন্ড্রয়েড,বাইভার্বাল, রোবট এদের সহচর্য পছন্দ করে না। এসব থেকে মুক্ত থাক্তেই নিজের “ট্রাকিওশান” ডিভাইস খুলে ফেলে। কারণ রোবট কিংবা এসব সায়েন্টিফিক কাজ-কর্ম টা ত্রাতুল আর মেনেই নিতে পারছিল না। এই নিয়েই এগিয়েছে বৈজ্ঞানিক কল্পকাহিনী ত্রাতুলের জগৎ। বইটি আশা করি পাঠকদের ভালো লাগবে।";
        $product->image = 'assets/backend/product/5.jpg';
        $product->cost = 200;
        $product->sales_price = 400;
        $product->stock = 25;
        $product->low_stock = 5;
        $product->meta_title = 'বৈজ্ঞানিক কল্পকাহিনী - ত্রাতুলের জগৎ (হার্ডকভার)';
        $product->description = 'meta description of the product';
        $product->schema_tag = "['title' => 'hello']";
        $product->video_url = "";
        $product->status = "active";
        $product->save();



        $product = new Product();
        $product->product_name = 'জীববিজ্ঞান-প্রথম পত্র (একাদশ-দ্বাদশ শ্রেণি) (সাদা)';
        $product->product_url = Str::slug('জীববিজ্ঞান-প্রথম পত্র (একাদশ-দ্বাদশ শ্রেণি) (সাদা)');
        $product->is_top_product = '1';
        $product->selected_categories = '[1, 5]';
        $product->short_description = "নিঃসন্দেহে HSC এর জন্য এটিই সেরা বই। বইটিতে সহজ ও সাবলীলভাবে সবকিছু ব্যাখ্যা- বিশ্লেষণ করা হয়েছে। দেশে এই বইটি সর্বাধিক পঠিত। ";
        $product->description = "  নিঃসন্দেহে HSC এর জন্য এটিই সেরা বই। বইটিতে সহজ ও সাবলীলভাবে সবকিছু ব্যাখ্যা- বিশ্লেষণ করা হয়েছে। দেশে এই বইটি সর্বাধিক পঠিত । এসব থেকে মুক্ত থাক্তেই নিজের “ট্রাকিওশান” ডিভাইস খুলে ফেলে। কারণ রোবট কিংবা এসব সায়েন্টিফিক কাজ-কর্ম টা ত্রাতুল আর মেনেই নিতে পারছিল না। এই নিয়েই এগিয়েছে বৈজ্ঞানিক কল্পকাহিনী ত্রাতুলের জগৎ। বইটি আশা করি পাঠকদের ভালো লাগবে।";
        $product->image = 'assets/backend/product/6.jpg';
        $product->cost = 100;
        $product->sales_price = 300;
        $product->stock = 25;
        $product->low_stock = 5;
        $product->meta_title = 'জীববিজ্ঞান-প্রথম পত্র (একাদশ-দ্বাদশ শ্রেণি) (সাদা)';
        $product->description = 'meta description of the product';
        $product->schema_tag = "['title' => 'hello']";
        $product->video_url = "";
        $product->status = "active";
        $product->save();



        
        $product = new Product();
        $product->product_name = 'অর্থনীতি প্রথম পত্র (পেপারব্যাক)';
        $product->product_url = Str::slug('অর্থনীতি প্রথম পত্র (পেপারব্যাক)');
        $product->is_top_product = '1';
        $product->selected_categories = '[1, 2]';
        $product->short_description = "নিঃসন্দেহে HSC এর জন্য এটিই সেরা বই। বইটিতে সহজ ও সাবলীলভাবে সবকিছু ব্যাখ্যা- বিশ্লেষণ করা হয়েছে। দেশে এই বইটি সর্বাধিক পঠিত। ";
        $product->description = "  নিঃসন্দেহে HSC এর জন্য এটিই সেরা বই। বইটিতে সহজ ও সাবলীলভাবে সবকিছু ব্যাখ্যা- বিশ্লেষণ করা হয়েছে। দেশে এই বইটি সর্বাধিক পঠিত । এসব থেকে মুক্ত থাক্তেই নিজের “ট্রাকিওশান” ডিভাইস খুলে ফেলে। কারণ রোবট কিংবা এসব সায়েন্টিফিক কাজ-কর্ম টা ত্রাতুল আর মেনেই নিতে পারছিল না। এই নিয়েই এগিয়েছে বৈজ্ঞানিক কল্পকাহিনী ত্রাতুলের জগৎ। বইটি আশা করি পাঠকদের ভালো লাগবে।";
        $product->image = 'assets/backend/product/7.jpg';
        $product->cost = 100;
        $product->sales_price = 550;
        $product->stock = 25;
        $product->low_stock = 5;
        $product->meta_title = 'অর্থনীতি প্রথম পত্র (পেপারব্যাক)';
        $product->description = 'meta description of the product';
        $product->schema_tag = "['title' => 'hello']";
        $product->video_url = "";
        $product->status = "active";
        $product->save();


        $product = new Product();
        $product->product_name = 'যোগাযোগ প্রযুক্তি, একাদশ - দ্বাদশ ও আলিম শ্রেণি';
        $product->product_url = Str::slug('যোগাযোগ প্রযুক্তি, একাদশ - দ্বাদশ ও আলিম শ্রেণি');
        $product->is_top_product = '1';
        $product->selected_categories = '[1, 3]';
        $product->short_description = "নিঃসন্দেহে HSC এর জন্য এটিই সেরা বই। বইটিতে সহজ ও সাবলীলভাবে সবকিছু ব্যাখ্যা- বিশ্লেষণ করা হয়েছে। দেশে এই বইটি সর্বাধিক পঠিত। ";
        $product->description = "  নিঃসন্দেহে HSC এর জন্য এটিই সেরা বই। বইটিতে সহজ ও সাবলীলভাবে সবকিছু ব্যাখ্যা- বিশ্লেষণ করা হয়েছে। দেশে এই বইটি সর্বাধিক পঠিত । এসব থেকে মুক্ত থাক্তেই নিজের “ট্রাকিওশান” ডিভাইস খুলে ফেলে। কারণ রোবট কিংবা এসব সায়েন্টিফিক কাজ-কর্ম টা ত্রাতুল আর মেনেই নিতে পারছিল না। এই নিয়েই এগিয়েছে বৈজ্ঞানিক কল্পকাহিনী ত্রাতুলের জগৎ। বইটি আশা করি পাঠকদের ভালো লাগবে।";
        $product->image = 'assets/backend/product/8.jpg';
        $product->cost = 200;
        $product->sales_price = 600;
        $product->stock = 15;
        $product->low_stock = 5;
        $product->meta_title = 'জীববিজ্ঞান-প্রথম পত্র (একাদশ-দ্বাদশ শ্রেণি) (সাদা)';
        $product->description = 'meta description of the product';
        $product->schema_tag = "['title' => 'hello']";
        $product->video_url = "";
        $product->status = "active";
        $product->save();
        

        $product = new Product();
        $product->product_name = 'তথ্য ও যোগাযোগ প্রযুক্তি, একাদশ - দ্বাদশ ও আলিম শ্রেণি';
        $product->product_url =  Str::slug('তথ্য ও যোগাযোগ প্রযুক্তি, একাদশ - দ্বাদশ ও আলিম শ্রেণি');
        $product->is_top_product = '1';
        $product->selected_categories = '[1, 3]';
        $product->short_description = "নিঃসন্দেহে HSC এর জন্য এটিই সেরা বই। বইটিতে সহজ ও সাবলীলভাবে সবকিছু ব্যাখ্যা- বিশ্লেষণ করা হয়েছে। দেশে এই বইটি সর্বাধিক পঠিত। ";
        $product->description = "  নিঃসন্দেহে HSC এর জন্য এটিই সেরা বই। বইটিতে সহজ ও সাবলীলভাবে সবকিছু ব্যাখ্যা- বিশ্লেষণ করা হয়েছে। দেশে এই বইটি সর্বাধিক পঠিত । এসব থেকে মুক্ত থাক্তেই নিজের “ট্রাকিওশান” ডিভাইস খুলে ফেলে। কারণ রোবট কিংবা এসব সায়েন্টিফিক কাজ-কর্ম টা ত্রাতুল আর মেনেই নিতে পারছিল না। এই নিয়েই এগিয়েছে বৈজ্ঞানিক কল্পকাহিনী ত্রাতুলের জগৎ। বইটি আশা করি পাঠকদের ভালো লাগবে।";
        $product->image = 'assets/backend/product/8.jpg';
        $product->cost = 100;
        $product->sales_price = 250;
        $product->stock = 15;
        $product->low_stock = 5;
        $product->meta_title = 'গাণিতিক রসায়ন - প্রথম পত্র (একাদশ ও দ্বাদশ শ্রেণি) (পেপারব্যাক)';
        $product->description = 'meta description of the product';
        $product->schema_tag = "['title' => 'hello']";
        $product->video_url = "";
        $product->status = "active";
        $product->save();

        $product = new Product();
        $product->product_name = 'যুক্তিবিদ্যা-প্রথম পত্র (একাদশ-দ্বাদশ শ্রেণি) (সাদা) (পেপারব্যাক)';
        $product->product_url = Str::slug('যুক্তিবিদ্যা-প্রথম পত্র (একাদশ-দ্বাদশ শ্রেণি) (সাদা) (পেপারব্যাক)');
        $product->is_top_product = '1';
        $product->selected_categories = '[1, 3]';
        $product->short_description = "নিঃসন্দেহে HSC এর জন্য এটিই সেরা বই। বইটিতে সহজ ও সাবলীলভাবে সবকিছু ব্যাখ্যা- বিশ্লেষণ করা হয়েছে। দেশে এই বইটি সর্বাধিক পঠিত। ";
        $product->description = "  নিঃসন্দেহে HSC এর জন্য এটিই সেরা বই। বইটিতে সহজ ও সাবলীলভাবে সবকিছু ব্যাখ্যা- বিশ্লেষণ করা হয়েছে। দেশে এই বইটি সর্বাধিক পঠিত । এসব থেকে মুক্ত থাক্তেই নিজের “ট্রাকিওশান” ডিভাইস খুলে ফেলে। কারণ রোবট কিংবা এসব সায়েন্টিফিক কাজ-কর্ম টা ত্রাতুল আর মেনেই নিতে পারছিল না। এই নিয়েই এগিয়েছে বৈজ্ঞানিক কল্পকাহিনী ত্রাতুলের জগৎ। বইটি আশা করি পাঠকদের ভালো লাগবে।";
        $product->image = 'assets/backend/product/9.jpg';
        $product->cost = 100;
        $product->sales_price = 350;
        $product->stock = 15;
        $product->low_stock = 5;
        $product->meta_title = 'যুক্তিবিদ্যা-প্রথম পত্র (একাদশ-দ্বাদশ শ্রেণি) (সাদা) (পেপারব্যাক)';
        $product->description = 'meta description of the product';
        $product->schema_tag = "['title' => 'hello']";
        $product->video_url = "";
        $product->status = "active";
        $product->save();

        $product = new Product();
        $product->product_name = 'অর্থনীতি প্রথম পত্র (পেপারব্যাক)(একাদশ-দ্বাদশ শ্রেণি)';
        $product->product_url = Str::slug('অর্থনীতি প্রথম পত্র (পেপারব্যাক)(একাদশ-দ্বাদশ শ্রেণি)');
        $product->is_top_product = '1';
        $product->selected_categories = '[1, 3]';
        $product->short_description = "নিঃসন্দেহে HSC এর জন্য এটিই সেরা বই। বইটিতে সহজ ও সাবলীলভাবে সবকিছু ব্যাখ্যা- বিশ্লেষণ করা হয়েছে। দেশে এই বইটি সর্বাধিক পঠিত। ";
        $product->description = "  নিঃসন্দেহে HSC এর জন্য এটিই সেরা বই। বইটিতে সহজ ও সাবলীলভাবে সবকিছু ব্যাখ্যা- বিশ্লেষণ করা হয়েছে। দেশে এই বইটি সর্বাধিক পঠিত । এসব থেকে মুক্ত থাক্তেই নিজের “ট্রাকিওশান” ডিভাইস খুলে ফেলে। কারণ রোবট কিংবা এসব সায়েন্টিফিক কাজ-কর্ম টা ত্রাতুল আর মেনেই নিতে পারছিল না। এই নিয়েই এগিয়েছে বৈজ্ঞানিক কল্পকাহিনী ত্রাতুলের জগৎ। বইটি আশা করি পাঠকদের ভালো লাগবে।";
        $product->image = 'assets/backend/product/10.jpg';
        $product->cost = 100;
        $product->sales_price = 300;
        $product->stock = 25;
        $product->low_stock = 5;
        $product->meta_title = 'অর্থনীতি প্রথম পত্র (পেপারব্যাক)(একাদশ-দ্বাদশ শ্রেণি)';
        $product->description = 'meta description of the product';
        $product->schema_tag = "['title' => 'hello']";
        $product->video_url = "";
        $product->status = "active";
        $product->save();


        $product = new Product();
        $product->product_name = 'ব্যবসায় সংগঠন ও ব্যবস্থাপনা-দ্বিতীয় পত্র - (ব্যবস্থাপনা) (পেপারব্যাক)';
        $product->product_url = Str::slug('ব্যবসায় সংগঠন ও ব্যবস্থাপনা-দ্বিতীয় পত্র - (ব্যবস্থাপনা) (পেপারব্যাক)');
        $product->is_top_product = '1';
        $product->selected_categories = '[1, 2]';
        $product->short_description = "নিঃসন্দেহে HSC এর জন্য এটিই সেরা বই। বইটিতে সহজ ও সাবলীলভাবে সবকিছু ব্যাখ্যা- বিশ্লেষণ করা হয়েছে। দেশে এই বইটি সর্বাধিক পঠিত। ";
        $product->description = "  নিঃসন্দেহে HSC এর জন্য এটিই সেরা বই। বইটিতে সহজ ও সাবলীলভাবে সবকিছু ব্যাখ্যা- বিশ্লেষণ করা হয়েছে। দেশে এই বইটি সর্বাধিক পঠিত । এসব থেকে মুক্ত থাক্তেই নিজের “ট্রাকিওশান” ডিভাইস খুলে ফেলে। কারণ রোবট কিংবা এসব সায়েন্টিফিক কাজ-কর্ম টা ত্রাতুল আর মেনেই নিতে পারছিল না। এই নিয়েই এগিয়েছে বৈজ্ঞানিক কল্পকাহিনী ত্রাতুলের জগৎ। বইটি আশা করি পাঠকদের ভালো লাগবে।";
        $product->image = 'assets/backend/product/11.jpg';
        $product->cost = 100;
        $product->sales_price = 300;
        $product->stock = 20;
        $product->low_stock = 10;
        $product->meta_title = 'ব্যবসায় সংগঠন ও ব্যবস্থাপনা-দ্বিতীয় পত্র - (ব্যবস্থাপনা) (পেপারব্যাক)';
        $product->description = 'meta description of the product';
        $product->schema_tag = "['title' => 'hello']";
        $product->video_url = "";
        $product->status = "active";
        $product->save();

        $product = new Product();
        $product->product_name = 'সমাজকর্ম দ্বিতীয় পত্র (একাদশ-দ্বাদশ শ্রেণি) (পেপারব্যাক)';
        $product->product_url = Str::slug('সমাজকর্ম দ্বিতীয় পত্র (একাদশ-দ্বাদশ শ্রেণি) (পেপারব্যাক)');
        $product->is_top_product = '1';
        $product->selected_categories = '[1, 2]';
        $product->short_description = "নিঃসন্দেহে HSC এর জন্য এটিই সেরা বই। বইটিতে সহজ ও সাবলীলভাবে সবকিছু ব্যাখ্যা- বিশ্লেষণ করা হয়েছে। দেশে এই বইটি সর্বাধিক পঠিত। ";
        $product->description = "  নিঃসন্দেহে HSC এর জন্য এটিই সেরা বই। বইটিতে সহজ ও সাবলীলভাবে সবকিছু ব্যাখ্যা- বিশ্লেষণ করা হয়েছে। দেশে এই বইটি সর্বাধিক পঠিত । এসব থেকে মুক্ত থাক্তেই নিজের “ট্রাকিওশান” ডিভাইস খুলে ফেলে। কারণ রোবট কিংবা এসব সায়েন্টিফিক কাজ-কর্ম টা ত্রাতুল আর মেনেই নিতে পারছিল না। এই নিয়েই এগিয়েছে বৈজ্ঞানিক কল্পকাহিনী ত্রাতুলের জগৎ। বইটি আশা করি পাঠকদের ভালো লাগবে।";
        $product->image = 'assets/backend/product/12.jpg';
        $product->cost = 100;
        $product->sales_price = 230;
        $product->stock = 20;
        $product->low_stock = 10;
        $product->meta_title = 'সমাজকর্ম দ্বিতীয় পত্র (একাদশ-দ্বাদশ শ্রেণি) (পেপারব্যাক)';
        $product->description = 'meta description of the product';
        $product->schema_tag = "['title' => 'hello']";
        $product->video_url = "";
        $product->status = "active";
        $product->save();


        $product = new Product();
        $product->product_name = 'কৃষিশিক্ষা- প্রথম পত্র (একাদশ-দ্বাদশ শ্রেণি) (পেপারব্যাক)';
        $product->product_url = Str::slug('কৃষিশিক্ষা- প্রথম পত্র (একাদশ-দ্বাদশ শ্রেণি) (পেপারব্যাক)');
        $product->is_top_product = '1';
        $product->selected_categories = '[1, 2]';
        $product->short_description = "নিঃসন্দেহে HSC এর জন্য এটিই সেরা বই। বইটিতে সহজ ও সাবলীলভাবে সবকিছু ব্যাখ্যা- বিশ্লেষণ করা হয়েছে। দেশে এই বইটি সর্বাধিক পঠিত। ";
        $product->description = "  নিঃসন্দেহে HSC এর জন্য এটিই সেরা বই। বইটিতে সহজ ও সাবলীলভাবে সবকিছু ব্যাখ্যা- বিশ্লেষণ করা হয়েছে। দেশে এই বইটি সর্বাধিক পঠিত । এসব থেকে মুক্ত থাক্তেই নিজের “ট্রাকিওশান” ডিভাইস খুলে ফেলে। কারণ রোবট কিংবা এসব সায়েন্টিফিক কাজ-কর্ম টা ত্রাতুল আর মেনেই নিতে পারছিল না। এই নিয়েই এগিয়েছে বৈজ্ঞানিক কল্পকাহিনী ত্রাতুলের জগৎ। বইটি আশা করি পাঠকদের ভালো লাগবে।";
        $product->image = 'assets/backend/product/13.jpg';
        $product->cost = 100;
        $product->sales_price = 230;
        $product->stock = 20;
        $product->low_stock = 10;
        $product->meta_title = 'কৃষিশিক্ষা- প্রথম পত্র (একাদশ-দ্বাদশ শ্রেণি) (পেপারব্যাক)';
        $product->description = 'meta description of the product';
        $product->schema_tag = "['title' => 'hello']";
        $product->video_url = "";
        $product->status = "active";
        $product->save();


        $product = new Product();
        $product->product_name = 'প্রত্যয় ব্যবহারিক বাংলা (ব্যাকরণ ও নির্মিতি) দুই খন্ড একত্রে (পেপারব্যাক';
        $product->product_url = Str::slug('প্রত্যয় ব্যবহারিক বাংলা (ব্যাকরণ ও নির্মিতি) দুই খন্ড একত্রে (পেপারব্যাক');
        $product->is_top_product = '1';
        $product->selected_categories = '[1, 2]';
        $product->short_description = "নিঃসন্দেহে HSC এর জন্য এটিই সেরা বই। বইটিতে সহজ ও সাবলীলভাবে সবকিছু ব্যাখ্যা- বিশ্লেষণ করা হয়েছে। দেশে এই বইটি সর্বাধিক পঠিত। ";
        $product->description = "  নিঃসন্দেহে HSC এর জন্য এটিই সেরা বই। বইটিতে সহজ ও সাবলীলভাবে সবকিছু ব্যাখ্যা- বিশ্লেষণ করা হয়েছে। দেশে এই বইটি সর্বাধিক পঠিত । এসব থেকে মুক্ত থাক্তেই নিজের “ট্রাকিওশান” ডিভাইস খুলে ফেলে। কারণ রোবট কিংবা এসব সায়েন্টিফিক কাজ-কর্ম টা ত্রাতুল আর মেনেই নিতে পারছিল না। এই নিয়েই এগিয়েছে বৈজ্ঞানিক কল্পকাহিনী ত্রাতুলের জগৎ। বইটি আশা করি পাঠকদের ভালো লাগবে।";
        $product->image = 'assets/backend/product/14.jpg';
        $product->cost = 200;
        $product->sales_price = 300;
        $product->stock = 25;
        $product->low_stock = 10;
        $product->meta_title = 'প্রত্যয় ব্যবহারিক বাংলা (ব্যাকরণ ও নির্মিতি) দুই খন্ড একত্রে (পেপারব্যাক';
        $product->description = 'meta description of the product';
        $product->schema_tag = "['title' => 'hello']";
        $product->video_url = "";
        $product->status = "active";
        $product->save();

        $product = new Product();
        $product->product_name = 'HSC জৈবযৌগের ইন্টারেক্টিভ ম্যাপ';
        $product->product_url = Str::slug('HSC জৈবযৌগের ইন্টারেক্টিভ ম্যাপ');
        $product->is_top_product = '1';
        $product->selected_categories = '[1, 2]';
        $product->short_description = "নিঃসন্দেহে HSC এর জন্য এটিই সেরা বই। বইটিতে সহজ ও সাবলীলভাবে সবকিছু ব্যাখ্যা- বিশ্লেষণ করা হয়েছে। দেশে এই বইটি সর্বাধিক পঠিত। ";
        $product->description = "  নিঃসন্দেহে HSC এর জন্য এটিই সেরা বই। বইটিতে সহজ ও সাবলীলভাবে সবকিছু ব্যাখ্যা- বিশ্লেষণ করা হয়েছে। দেশে এই বইটি সর্বাধিক পঠিত । এসব থেকে মুক্ত থাক্তেই নিজের “ট্রাকিওশান” ডিভাইস খুলে ফেলে। কারণ রোবট কিংবা এসব সায়েন্টিফিক কাজ-কর্ম টা ত্রাতুল আর মেনেই নিতে পারছিল না। এই নিয়েই এগিয়েছে বৈজ্ঞানিক কল্পকাহিনী ত্রাতুলের জগৎ। বইটি আশা করি পাঠকদের ভালো লাগবে।";
        $product->image = 'assets/backend/product/15.jpg';
        $product->cost = 200;
        $product->sales_price = 400;
        $product->stock = 20;
        $product->low_stock = 5;
        $product->meta_title = 'HSC জৈবযৌগের ইন্টারেক্টিভ ম্যাপ';
        $product->description = 'meta description of the product';
        $product->schema_tag = "['title' => 'hello']";
        $product->video_url = "";
        $product->status = "active";
        $product->save();



        $product = new Product();
        $product->product_name = 'উচ্চতর গণিত-১ম পত্র(একদশ-দ্বাদশ শ্রেণি)(সাদা)';
        $product->product_url = Str::slug('উচ্চতর গণিত-১ম পত্র(একদশ-দ্বাদশ শ্রেণি)(সাদা)');
        $product->is_top_product = '1';
        $product->selected_categories = '[1, 2]';
        $product->short_description = "নিঃসন্দেহে HSC এর জন্য এটিই সেরা বই। বইটিতে সহজ ও সাবলীলভাবে সবকিছু ব্যাখ্যা- বিশ্লেষণ করা হয়েছে। দেশে এই বইটি সর্বাধিক পঠিত। ";
        $product->description = "  নিঃসন্দেহে HSC এর জন্য এটিই সেরা বই। বইটিতে সহজ ও সাবলীলভাবে সবকিছু ব্যাখ্যা- বিশ্লেষণ করা হয়েছে। দেশে এই বইটি সর্বাধিক পঠিত । এসব থেকে মুক্ত থাক্তেই নিজের “ট্রাকিওশান” ডিভাইস খুলে ফেলে। কারণ রোবট কিংবা এসব সায়েন্টিফিক কাজ-কর্ম টা ত্রাতুল আর মেনেই নিতে পারছিল না। এই নিয়েই এগিয়েছে বৈজ্ঞানিক কল্পকাহিনী ত্রাতুলের জগৎ। বইটি আশা করি পাঠকদের ভালো লাগবে।";
        $product->image = 'assets/backend/product/16.jpg';
        $product->cost = 200;
        $product->sales_price = 300;
        $product->stock = 25;
        $product->low_stock = 10;
        $product->meta_title = 'উচ্চতর গণিত-১ম পত্র(একদশ-দ্বাদশ শ্রেণি)(সাদা)';
        $product->description = 'meta description of the product';
        $product->schema_tag = "['title' => 'hello']";
        $product->video_url = "";
        $product->status = "active";
        $product->save();

         
    }
}
