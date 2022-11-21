<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Carbon\Carbon;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create(
            [
                "title" => "Me at the zoo",
                "publish_date" => Carbon::parse("2005-04-24"),
                "link" => "https://www.youtube.com/watch?v=jNQXAC9IVRw"
            ]
        );
        Post::create(
            [
                "title" => "Travel Day to Qatar for the 2022 FIFA World Cup FIRST IMPRESSION (Day 1) 🇶🇦",
                "publish_date" => Carbon::parse("2022-11-21"),
                "link" => "https://www.youtube.com/watch?v=6VNdLWPfub0"
            ]
        );
        Post::create(
            [
                "title" => "PHP Programming Language Tutorial - Full Course",
                "publish_date" => Carbon::parse("2018-06-20"),
                "link" => "https://www.youtube.com/watch?v=OK_JCtrrv-c"
            ]
        );
        Post::create(
            [
                "title" => "Blur - Stellar (Official Lyric Video)",
                "publish_date" => Carbon::parse("2020-07-19"),
                "link" => "https://www.youtube.com/watch?v=xOXfnMkN91g"
            ]
        );
        Post::create(
            [
                "title" => "How I Learned to Code in 4 MONTHS & Got a Job Offer (no CS Degree)",  
                "publish_date" => Carbon::parse("2022-02-22"),
                "link" => "https://www.youtube.com/watch?v=-VDXBHLU8q4"
            ]
        );
    }
}
