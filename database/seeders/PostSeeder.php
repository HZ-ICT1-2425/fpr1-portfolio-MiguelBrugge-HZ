<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    private $posts = [
        [
            "title" => "Study choice",
            "slug" => "study-choice",
            "body" => "After completing this study I would like to have a job within software development. I am not sure yet if i want to do sw engineering, fullstack, front-end or mainly back-end, but that's what I want to find out. <br/> <br/>I want to get more experience as a programmer to see what fits me best and ofcourse to be a better developer not just with code but also working within an agile team.",
            "icon_path" => "images/hz-logo.png",
            "image_path" => "images/study-choice.png",
            "link" => "",
            "link_title" => ""
        ],
        [
            "title" => "Personal SWOT analysis",
            "slug" => "swot-analysis",
            "body" => "Strengths: - Planning: As a Scrum master I was able to plan meetings a head of time so all were attended by my (and sometimes other) teams. - Motivation: I always do what I have to do, even if I don't want to do it at all.
                <br/> <br/>
                Weaknessess
                - Shyness: I tend to be shy with people I haven't met yet.
                <br/> <br/>
                Opportunities
                - Current Skills: Because I did Software Development on the MBO, I am not new to programming and working inside a agile devOps team I also have used my skills to build and maintain a portfolio website
                <br/> <br/>
                Threats
                - Time: Altough planning isn't new for me, I still have a job and have to travel a bit so I need to make sure that doesn't get in the way",
            "icon_path" => "images/swot.png",
            "image_path" => "",
            "link" => "",
            "link_title" => ""
        ],
        [
            "title" => "Programming Experience",
            "slug" => "programming-experience",
            "body" => "I completed an MBO in Software Development at Scalda, where I gained hands-on experience through both coursework and an internship at Unitron. During my internship, I developed an RMA application, which allowed me to apply my knowledge in real-world scenarios. Throughout my studies, I worked with a variety of programming languages, frameworks, and tools, building a strong foundation in software development.
                <br/> <br/>
                Languages: HTML/CSS, JavaScript, PHP, SQL, Java, Python, Luau
                <br/> <br/>
                Frameworks: Django, React, Hibernate, Struts 2, Maven, JUnit, Bootstrap
                <br/> <br/>
                Tools: Git, GitHub, GitLab, SourceTree, Jira, Bitbucket, VS Code, Eclipse, MySQL Workbench, Visual Paradigm",
            "icon_path" => "images/java-icon.png",
            "image_path" => "images/programming-experience.png",
            "link" => "https://miguelbrugge.github.io/CV.pdf",
            "link_title" => "My CV"
        ],
        [
            "title" => "First Feedback",
            "slug" => "feedback",
            "body" => "Recently, we had the opportunity to get feedback from several students and one of my teachers about this website. I also had to create a poster to show off my motivation and the view of this site.
                <br/> <br/>
                Front-End
                Make Baby Yoda scroll down: I've tried it but can't seem to figure it out, wich is no big problem as we both agreed that it would not really add extra value to the site.
                Ongoing status colour change: It first was more grey and so not really a good highlight colour so I agree that it had to been changed.
                Make the site less empty: I dissagreed with this one as my site it meant to be minimalistic and simple.
                Keep the navigation inside a blog-post: I agreed. People still want to be able to navigate through my site via a post.
                <br/> <br/>
                Back-End
                More comments inside of HTML files: I do agree although most of my files are pretty clearly readable.",
            "icon_path" => "images/feedback-icon.png",
            "image_path" => "images/site-poster.png",
            "link" => "https://miguelbrugge-hz.github.io/MiguelBrugge-HZ/media/site-poster-pdf.pdf",
            "link_title" => "Site Poster"
        ],
        [
            "title" => "Webdesign",
            "slug" => "ict-field-work",
            "body" => "
                Web design is the process of creating the visual look and feel of a website. It involves planning, conceptualizing, and arranging content to ensure websites are both aesthetically pleasing and user-friendly. Web design goes beyond just making a site look good; it ensures functionality and a smooth experience for visitors.
                <br/> <br/>
                Layout: The arrangement of text, images, and other elements on a webpage. A clean, organized layout helps users find what they need quickly.
                <br/> <br/>
                Color Scheme: Colors influence the mood and message of a website. Designers use colors to create contrast, highlight important sections, and reflect a brand's identity.
                <br/> <br/>
                Typography: The choice of fonts affects readability and tone. Using clear, legible fonts ensures users can easily consume content. links should be straightforward and intuitive.
                <br/> <br/>
                Responsiveness: Websites must work well on various devices, like desktops, tablets, and smartphones. Responsive design automatically adjusts the layout based on screen size.
                ",
            "icon_path" => "images/design-icon.png",
            "image_path" => "images/messi-portfolio.png",
            "link" => "",
            "link_title" => ""
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->posts as $postData) {
            Post::create($postData);
        }
    }
}
