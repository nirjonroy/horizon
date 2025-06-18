<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Models\whereToStudy;
use App\Models\internationalStudentLife;
use App\Models\Blog;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate 
                            {--output=public/sitemap.xml : Path to save the sitemap file}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a dynamic sitemap based on all registered routes, excluding unwanted URLs';

    /**
     * List of URLs to include in the sitemap.
     *
     * @var array
     */
    protected $includedUrls = [
        '/',
        '/contact-us',
        '/apply-now',
        '/where-to-study/{id}',
        '/online-study-options',
        '/international-student-life/{id}',
        '/find-how-to-apply',
        '/fees-and-cost',
        '/entry-requirement',
        '/application-process',
        '/accommodation',
        '/who-we-are',
        '/support-for-study-abroad',
        '/support-career-preparation',
        '/blog-details/{id}',
    ];

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $outputPath = $this->option('output');

        // Fetch all registered routes
        $routes = Route::getRoutes();

        // Filter routes to include only GET routes with names and include only specified URLs
        $urls = [];
        foreach ($this->includedUrls as $url) {
            if (strpos($url, '{id}') !== false) {
                if ($url === '/where-to-study/{id}') {
                    $whereToStudies = whereToStudy::all();
                    foreach ($whereToStudies as $whereToStudy) {
                        $urls[] = url($url, ['id' => $whereToStudy->id]);
                    }
                } elseif ($url === '/international-student-life/{id}') {
                    $internationalStudentLives = internationalStudentLife::all();
                    foreach ($internationalStudentLives as $internationalStudentLife) {
                        $urls[] = url($url, ['id' => $internationalStudentLife->id]);
                    }
                } elseif ($url === '/blog-details/{id}') {
                    $blogs = Blog::all();
                    foreach ($blogs as $blog) {
                        $urls[] = url($url, ['id' => $blog->id]);
                    }
                }
            } else {
                $urls[] = url($url);
            }
        }

        // Generate the sitemap XML content
        $sitemapContent = $this->generateSitemapContent($urls);

        // Save the sitemap to the specified output path
        File::put($outputPath, $sitemapContent);

        $this->info("Sitemap generated successfully at: {$outputPath}");
        return Command::SUCCESS;
    }

    /**
     * Generate the sitemap XML content.
     *
     * @param array $urls
     * @return string
     */
    protected function generateSitemapContent(array $urls): string
    {
        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';

        foreach ($urls as $url) {
            $xml .= '<url>';
            $xml .= '<loc>' . htmlspecialchars($url) . '</loc>';
            $xml .= '<lastmod>' . now()->toDateString() . '</lastmod>';
            $xml .= '<priority>0.80</priority>';
            $xml .= '</url>';
        }

        $xml .= '</urlset>';

        return $xml;
    }
}