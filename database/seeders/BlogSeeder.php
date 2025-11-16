<?php

namespace Database\Seeders;

use Firefly\FilamentBlog\Models\Category;
use Firefly\FilamentBlog\Models\Post;
use Firefly\FilamentBlog\Enums\PostStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create categories
        $businessCategory = Category::create([
            'name' => 'Business',
            'slug' => 'business'
        ]);

        // Create sample blog posts
        Post::create([
            'title' => 'Empowering Entrepreneurs Fueling Growth Knowledge',
            'slug' => 'empowering-entrepreneurs-fueling-growth-knowledge',
            'sub_title' => 'Discover how modern businesses are transforming industries',
            'body' => '<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat. Duis aute irure and dolor in reprehenderit.</p>

<p>Use both direct conversations and indirect observations to get visibility into employees challenges and concerns. Use every opportunity to make clear to employees that you support and care them. To facilitate regular conversations between managers and employees, provide.</p>

<p>Vast numbers of employees now work remotely, and it\'s too late to develop a set of remote-work policies if you didn\'t already have one. But there are ways to make the remote-work experience productive and engaging for employees</p>',
            'status' => PostStatus::PUBLISHED,
            'published_at' => now(),
            'cover_photo_path' => 'assets/img/blog/1.jpg',
            'photo_alt_text' => 'Business growth illustration',
            'user_id' => 1, // Assuming user with ID 1 exists
        ])->categories()->attach($businessCategory);

        Post::create([
            'title' => 'Grow Your Business, Cut Office Costs by 70%',
            'slug' => 'grow-your-business-cut-office-costs-by-70',
            'sub_title' => 'Learn how to optimize your operations and reduce expenses',
            'body' => '<p>Business growth doesn\'t have to come at the expense of high operational costs. In today\'s competitive landscape, companies are finding innovative ways to streamline operations and reduce overhead while maintaining productivity.</p>

<p>Our comprehensive guide explores proven strategies for cost optimization, from implementing remote work policies to leveraging cloud-based solutions. Discover how leading companies have successfully reduced their office costs by up to 70% while improving employee satisfaction and business performance.</p>

<p>Learn about the latest tools and technologies that can help transform your business operations and drive sustainable growth in the digital age.</p>',
            'status' => PostStatus::PUBLISHED,
            'published_at' => now()->subDays(5),
            'cover_photo_path' => 'assets/img/blog/2.jpg',
            'photo_alt_text' => 'Office cost reduction strategies',
            'user_id' => 1,
        ])->categories()->attach($businessCategory);

        Post::create([
            'title' => 'Powering Business—Always On, Always Ready',
            'slug' => 'powering-business-always-on-always-ready',
            'sub_title' => 'Ensuring business continuity in the digital era',
            'body' => '<p>In an increasingly digital world, business continuity has become more critical than ever. Organizations need robust systems that ensure they\'re always operational, always ready to serve customers and adapt to changing market conditions.</p>

<p>This comprehensive analysis explores the technologies and strategies that enable businesses to maintain constant availability. From cloud infrastructure to disaster recovery planning, discover how modern enterprises stay resilient in the face of challenges.</p>

<p>Learn about the latest innovations in business continuity, including AI-powered monitoring systems, automated failover mechanisms, and predictive maintenance approaches that keep your business running smoothly 24/7.</p>',
            'status' => PostStatus::PUBLISHED,
            'published_at' => now()->subDays(10),
            'cover_photo_path' => 'assets/img/blog/3.jpg',
            'photo_alt_text' => 'Business continuity and reliability',
            'user_id' => 1,
        ])->categories()->attach($businessCategory);
    }
}
