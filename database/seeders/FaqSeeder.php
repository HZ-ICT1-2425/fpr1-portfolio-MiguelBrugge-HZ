<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    private $faqs = [
        [
            "question" => "How can you print a document from your laptop at HZ?",
            "answer" => "Visit the site and follow the provided instructions for printing.",
            "link" => "https://print.hz.nl",
            "link_title" => "print hz"
        ],
        [
            "question" => "How can you scan a document and send it to your laptop at HZ?",
            "answer" => "You approach the scanner, log in, and select 'Scan.' After choosing to send it to your email, you adjust the settings and place your document on the scanner. Once you press 'Start,' the scan finishes, and shortly after, the file appears in your inbox.",
            "link" => null,
            "link_title" => null
        ],
        [
            "question" => "How can I buy something (like when I sign up for the IT introduction event) on the HZ web shop?",
            "answer" => "Visit the site and order whatever you'd like!",
            "link" => "https://webshop.hz.nl/WebshopApp/",
            "link_title" => "HZ webshop"
        ],
        [
            "question" => "How can you book a project space?",
            "answer" => "Go to the site and you can start booking a room. If you don't know how, visit the tutorial.",
            "link" => "https://hzuniversity.topdesk.net/tas/public/ssp/content/page/locationreservationplanner?from=f56d5230-ffe5-4ab7-ad47-ec9374b5ec34",
            "link_title" => "topdesk"
        ],
        [
            "question" => "What are the instructions if you want to park your car at the HZ parking lot?",
            "answer" => "First, you obtain a permit. Then, you can drive into HZ's parking lot, display your permit, and find a student spot. After parking, you quickly check the signage before heading inside, confident that your car is parked correctly.",
            "link" => null,
            "link_title" => null
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->faqs as $faqData) {
            Faq::create($faqData);
        }
    }
}
