<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sites', function (Blueprint $table): void {
            $table->id();
            $table->string('title');
            $table->string('url');
            $table->string('description');
            $table->string('keywords');
        });

        // Insert multiple links into the 'sites' table
        $links = [
            ['title' => 'Google', 'url' => 'https://google.com', 'description' => 'Google', 'keywords' => 'Google'],
            ['title' => 'Facebook', 'url' => 'https://facebook.com', 'description' => 'Facebook', 'keywords' => 'Facebook'],
            ['title' => 'Twitter', 'url' => 'https://twitter.com', 'description' => 'Twitter', 'keywords' => 'Twitter'],
            ['title' => 'Instagram', 'url' => 'https://instagram.com', 'description' => 'Instagram', 'keywords' => 'Instagram'],
            ['title' => 'LinkedIn', 'url' => 'https://linkedin.com', 'description' => 'LinkedIn', 'keywords' => 'LinkedIn'],
            ['title' => 'YouTube', 'url' => 'https://youtube.com', 'description' => 'YouTube', 'keywords' => 'YouTube'],
            ['title' => 'Amazon', 'url' => 'https://amazon.com', 'description' => 'Amazon', 'keywords' => 'Amazon'],
            ['title' => 'Wikipedia', 'url' => 'https://wikipedia.org', 'description' => 'Wikipedia', 'keywords' => 'Wikipedia'],
            ['title' => 'Reddit', 'url' => 'https://reddit.com', 'description' => 'Reddit', 'keywords' => 'Reddit'],
            ['title' => 'Yahoo', 'url' => 'https://yahoo.com', 'description' => 'Yahoo', 'keywords' => 'Yahoo'],
            ['title' => 'Bing', 'url' => 'https://bing.com', 'description' => 'Bing', 'keywords' => 'Bing'],
            ['title' => 'Twitch', 'url' => 'https://twitch.tv', 'description' => 'Twitch', 'keywords' => 'Twitch'],
            ['title' => 'Netflix', 'url' => 'https://netflix.com', 'description' => 'Netflix', 'keywords' => 'Netflix'],
            ['title' => 'IMDb', 'url' => 'https://imdb.com', 'description' => 'IMDb', 'keywords' => 'IMDb'],
            ['title' => 'Stack Overflow', 'url' => 'https://stackoverflow.com', 'description' => 'Stack Overflow', 'keywords' => 'Stack Overflow'],
            ['title' => 'Microsoft', 'url' => 'https://microsoft.com', 'description' => 'Microsoft', 'keywords' => 'Microsoft'],
            ['title' => 'Apple', 'url' => 'https://apple.com', 'description' => 'Apple', 'keywords' => 'Apple'],
            ['title' => 'Tesla', 'url' => 'https://tesla.com', 'description' => 'Tesla', 'keywords' => 'Tesla'],
            ['title' => 'SpaceX', 'url' => 'https://spacex.com', 'description' => 'SpaceX', 'keywords' => 'SpaceX'],
            ['title' => 'Meta', 'url' => 'https://meta.com', 'description' => 'Meta', 'keywords' => 'Meta'],
            ['title' => 'DuckDuckGo', 'url' => 'https://duckduckgo.com', 'description' => 'DuckDuckGo', 'keywords' => 'DuckDuckGo'],
            ['title' => 'GitHub', 'url' => 'https://github.com', 'description' => 'GitHub', 'keywords' => 'GitHub'],
            ['title' => 'GitLab', 'url' => 'https://gitlab.com', 'description' => 'GitLab', 'keywords' => 'GitLab'],
            ['title' => 'BitBucket', 'url' => 'https://bitbucket.org', 'description' => 'BitBucket', 'keywords' => 'BitBucket'],
            ['title' => 'Medium', 'url' => 'https://medium.com', 'description' => 'Medium', 'keywords' => 'Medium'],
            ['title' => 'Quora', 'url' => 'https://quora.com', 'description' => 'Quora', 'keywords' => 'Quora'],
            ['title' => 'Pinterest', 'url' => 'https://pinterest.com', 'description' => 'Pinterest', 'keywords' => 'Pinterest'],
            ['title' => 'Tumblr', 'url' => 'https://tumblr.com', 'description' => 'Tumblr', 'keywords' => 'Tumblr'],
            ['title' => 'Flickr', 'url' => 'https://flickr.com', 'description' => 'Flickr', 'keywords' => 'Flickr'],
            ['title' => 'Snapchat', 'url' => 'https://snapchat.com', 'description' => 'Snapchat', 'keywords' => 'Snapchat'],
            ['title' => 'WhatsApp', 'url' => 'https://whatsapp.com', 'description' => 'WhatsApp', 'keywords' => 'WhatsApp'],
            ['title' => 'Telegram', 'url' => 'https://telegram.com', 'description' => 'Telegram', 'keywords' => 'Telegram'],
            ['title' => 'Signal', 'url' => 'https://signal.com', 'description' => 'Signal', 'keywords' => 'Signal'],
            ['title' => 'TikTok', 'url' => 'https://tiktok.com', 'description' => 'TikTok', 'keywords' => 'TikTok'],
            ['title' => 'Tinder', 'url' => 'https://tinder.com', 'description' => 'Tinder', 'keywords' => 'Tinder'],
            ['title' => 'Zoom', 'url' => 'https://zoom.com', 'description' => 'Zoom', 'keywords' => 'Zoom'],
            ['title' => 'Skype', 'url' => 'https://skype.com', 'description' => 'Skype', 'keywords' => 'Skype'],
            ['title' => 'Slack', 'url' => 'https://slack.com', 'description' => 'Slack', 'keywords' => 'Slack'],
            ['title' => 'Discord', 'url' => 'https://discord.com', 'description' => 'Discord', 'keywords' => 'Discord'],
            ['title' => 'Microsoft Teams', 'url' => 'https://teams.com', 'description' => 'Microsoft Teams', 'keywords' => 'Microsoft Teams'],
            ['title' => 'Google Meet', 'url' => 'https://meet.google.com', 'description' => 'Google Meet', 'keywords' => 'Google Meet'],
            ['title' => 'Google Classroom', 'url' => 'https://classroom.google.com', 'description' => 'Google Classroom', 'keywords' => 'Google Classroom'],
            ['title' => 'Google Drive', 'url' => 'https://drive.google.com', 'description' => 'Google Drive', 'keywords' => 'Google Drive'],
            ['title' => 'Google Docs', 'url' => 'https://docs.google.com', 'description' => 'Google Docs', 'keywords' => 'Google Docs'],
            ['title' => 'Google Sheets', 'url' => 'https://sheets.google.com', 'description' => 'Google Sheets', 'keywords' => 'Google Sheets'],
            ['title' => 'Google Slides', 'url' => 'https://slides.google.com', 'description' => 'Google Slides', 'keywords' => 'Google Slides'],
            ['title' => 'Google Forms', 'url' => 'https://forms.google.com', 'description' => 'Google Forms', 'keywords' => 'Google Forms'],
            ['title' => 'Google Calendar', 'url' => 'https://calendar.google.com', 'description' => 'Google Calendar', 'keywords' => 'Google'],
            ['title' => 'Google Photos', 'url' => 'https://photos.google.com', 'description' => 'Google Photos', 'keywords' => 'Google Photos'],
            ['title' => 'Google Translate', 'url' => 'https://translate.google.com', 'description' => 'Google Translate', 'keywords' => 'Google Translate'],
            ['title' => 'Google Maps', 'url' => 'https://maps.google.com', 'description' => 'Google Maps', 'keywords' => 'Google Maps'],
            ['title' => 'Google Earth', 'url' => 'https://earth.google.com', 'description' => 'Google Earth', 'keywords' => 'Google Earth'],
            ['title' => 'Google News', 'url' => 'https://news.google.com', 'description' => 'Google News', 'keywords' => 'Google News'],
            ['title' => 'Google Books', 'url' => 'https://books.google.com', 'description' => 'Google Books', 'keywords' => 'Google Books'],
            ['title' => 'Google Scholar', 'url' => 'https://scholar.google.com', 'description' => 'Google Scholar', 'keywords' => 'Google Scholar'],
            ['title' => 'Google Trends', 'url' => 'https://trends.google.com', 'description' => 'Google Trends', 'keywords' => 'Google Trends'],
            ['title' => 'Google Analytics', 'url' => 'https://analytics.google.com', 'description' => 'Google Analytics', 'keywords' => 'Google Analytics'],
            ['title' => 'Google AdSense', 'url' => 'https://adsense.google.com', 'description' => 'Google AdSense', 'keywords' => 'Google AdSense'],
            ['title' => 'Google AdWords', 'url' => 'https://adwords.google.com', 'description' => 'Google AdWords', 'keywords' => 'Google AdWords'],
            ['title' => 'Google AdMob', 'url' => 'https://admob.google.com', 'description' => 'Google AdMob', 'keywords' => 'Google AdMob'],
            ['title' => 'Google Hangouts', 'url' => 'https://hangouts.google.com', 'description' => 'Google Hangouts', 'keywords' => 'Google Hangouts'],
            ['title' => 'Google Pay', 'url' => 'https://pay.google.com', 'description' => 'Google Pay', 'keywords' => 'Google Pay'],
            ['title' => 'Google Fi', 'url' => 'https://fi.google.com', 'description' => 'Google Fi', 'keywords' => 'Google Fi'],
            ['title' => 'Google Store', 'url' => 'https://store.google.com', 'description' => 'Google Store', 'keywords' => 'Google Store'],
            ['title' => 'Google Cloud', 'url' => 'https://cloud.google.com', 'description' => 'Google Cloud', 'keywords' => 'Google Cloud'],
            ['title' => 'Google Cloud Platform', 'url' => 'https://cloud.google.com', 'description' => 'Google Cloud Platform', 'keywords' => 'Google Cloud Platform'],
            ['title' => 'Google Cloud Console', 'url' => 'https://console.cloud.google.com', 'description' => 'Google Cloud Console', 'keywords' => 'Google Cloud Console'],
            ['title' => 'Google Cloud Storage', 'url' => 'https://storage.cloud.google.com', 'description' => 'Google Cloud Storage', 'keywords' => 'Google Cloud Storage'],
            ['title' => 'Google Cloud Functions', 'url' => 'https://functions.cloud.google.com', 'description' => 'Google Cloud Functions', 'keywords' => 'Google Cloud Functions'],
            ['title' => 'Google Cloud Run', 'url' => 'https://run.cloud.google.com', 'description' => 'Google Cloud Run', 'keywords' => 'Google Cloud Run'],
            ['title' => 'Google Cloud SQL', 'url' => 'https://cloud.google.com/sql', 'description' => 'Google Cloud SQL', 'keywords' => 'Google Cloud SQL'],
            ['title' => 'Google Cloud BigQuery', 'url' => 'https://cloud.google.com/bigquery', 'description' => 'Google Cloud BigQuery', 'keywords' => 'Google Cloud BigQuery'],
            ['title' => 'Google Cloud Pub/Sub', 'url' => 'https://cloud.google.com/pubsub', 'description' => 'Google Cloud Pub/Sub', 'keywords' => 'Google Cloud Pub/Sub'],
            ['title' => 'Google Cloud Datastore', 'url' => 'https://cloud.google.com/datastore', 'description' => 'Google Cloud Datastore', 'keywords' => 'Google Cloud Data'],
            ['title' => 'Google Cloud Firestore', 'url' => 'https://cloud.google.com/firestore', 'description' => 'Google Cloud Firestore', 'keywords' => 'Google Cloud Firestore'],
            ['title' => 'Google Cloud Memorystore', 'url' => 'https://cloud.google.com/memorystore', 'description' => 'Google Cloud Memorystore', 'keywords' => 'Google Cloud Memorystore'],
            ['title' => 'Google Cloud CDN', 'url' => 'https://cloud.google.com/cdn', 'description' => 'Google Cloud CDN', 'keywords' => 'Google Cloud CDN'],
            ['title' => 'Google Cloud DNS', 'url' => 'https://cloud.google.com/dns', 'description' => 'Google Cloud DNS', 'keywords' => 'Google Cloud DNS'],
            ['title' => 'Google Cloud CDN', 'url' => 'https://cloud.google.com/cdn', 'description' => 'Google Cloud CDN', 'keywords' => 'Google Cloud CDN'],
            ['title' => 'Google Cloud Load Balancing', 'url' => 'https://cloud.google.com/load-balancing', 'description' => 'Google Cloud Load Balancing', 'keywords' => 'Google Cloud Load Balancing'],
            ['title' => 'Google Cloud IAM', 'url' => 'https://cloud.google.com/iam', 'description' => 'Google Cloud IAM', 'keywords' => 'Google Cloud IAM'],
            ['title' => 'Google Cloud Identity', 'url' => 'https://cloud.google.com/identity', 'description' => 'Google Cloud Identity', 'keywords' => 'Google Cloud Identity'],
            ['title' => 'Google Cloud Security', 'url' => 'https://cloud.google.com/security', 'description' => 'Google Cloud Security', 'keywords' => 'Google Cloud Security'],
            ['title' => 'Google Cloud Security Command Center', 'url' => 'https://cloud.google.com/security-command-center', 'description' => 'Google Cloud Security Command Center', 'keywords' => 'Google Cloud Security Command Center'],
            ['title' => 'Google Cloud Security Scanner', 'url' => 'https://cloud.google.com/security-scanner', 'description' => 'Google Cloud Security Scanner', 'keywords' => 'Google Cloud Security Scanner'],
            ['title' => 'Google Cloud Security Health Analytics', 'url' => 'https://cloud.google.com/security-health-analytics', 'description' => 'Google Cloud Security Health Analytics', 'keywords' => 'Google Cloud Security Health Analytics'],
            ['title' => 'Google Cloud Security Key Enforcement', 'url' => 'https://cloud.google.com/security-key-enforcement', 'description' => 'Google Cloud Security Key Enforcement', 'keywords' => 'Google Cloud Security Key Enforcement'],
            ['title' => 'Google Cloud Security Command Center for GKE', 'url' => 'https://cloud.google.com/security-command-center', 'description' => 'Google Cloud Security Command Center for GKE', 'keywords' => 'Google Cloud Security Command Center for GKE'],
            ['title' => 'Google Cloud Security Command Center for Cloud Storage', 'url' => 'https://cloud.google.com/security-command-center', 'description' => 'Google Cloud Security Command Center for Cloud Storage', 'keywords' => 'Google Cloud Security Command Center for Cloud Storage'],
            ['title' => 'Google Cloud Security Command Center for App Engine', 'url' => 'https://cloud.google.com/security-command-center', 'description' => 'Google Cloud Security Command Center for App Engine', 'keywords' => 'Google Cloud Security Command Center for App Engine'],
            ['title' => 'Google Cloud Security Command Center for Compute Engine', 'url' => 'https://cloud.google.com/security-command-center', 'description' => 'Google Cloud Security Command Center for Compute Engine', 'keywords' => 'Google Cloud Security Command Center for Compute Engine'],
            ['title' => 'Google Cloud Security Command Center for Cloud SQL', 'url' => 'https://cloud.google.com/security-command-center', 'description' => 'Google Cloud Security Command Center for Cloud SQL', 'keywords' => 'Google Cloud Security Command Center for Cloud SQL'],
            ['title' => 'Google Cloud Security Command Center for Cloud DNS', 'url' => 'https://cloud.google.com/security-command-center', 'description' => 'Google Cloud Security Command Center for Cloud DNS', 'keywords' => 'Google Cloud Security Command Center for Cloud DNS'],
            ['title' => 'Google Cloud Security Command Center for Cloud Storage', 'url' => 'https://cloud.google.com/security-command-center', 'description' => 'Google Cloud Security Command Center for Cloud Storage', 'keywords' => 'Google Cloud Security Command Center for Cloud Storage'],
            ['title' => 'FreeCodeCamp', 'url' => 'https://freecodecamp.org', 'description' => 'FreeCodeCamp', 'keywords' => 'FreeCodeCamp'],
            ['title' => 'Coursera', 'url' => 'https://coursera.org', 'description' => 'Coursera', 'keywords' => 'Coursera'],
            ['title' => 'edX', 'url' => 'https://edx.org', 'description' => 'edX', 'keywords' => 'edX'],
            ['title' => 'Khan Academy', 'url' => 'https://khanacademy.org', 'description' => 'Khan Academy', 'keywords' => 'Khan Academy'],
            ['title' => 'Udemy', 'url' => 'https://udemy.com', 'description' => 'Udemy', 'keywords' => 'Udemy'],
            ['title' => 'Udacity', 'url' => 'https://udacity.com', 'description' => 'Udacity', 'keywords' => 'Udacity'],
            ['title' => 'Codecademy', 'url' => 'https://codecademy.com', 'description' => 'Codecademy', 'keywords' => 'Codecademy'],
            ['title' => 'SoloLearn', 'url' => 'https://sololearn.com', 'description' => 'SoloLearn', 'keywords' => 'SoloLearn'],
            ['title' => 'W3Schools', 'url' => 'https://w3schools.com', 'description' => 'W3Schools', 'keywords' => 'W3Schools'],
            ['title' => 'Code.org', 'url' => 'https://code.org', 'description' => 'Code.org', 'keywords' => 'Code.org'],
            ['title' => 'CodeChef', 'url' => 'https://codechef.com', 'description' => 'CodeChef', 'keywords' => 'CodeChef'],
            ['title' => 'HackerRank', 'url' => 'https://hackerrank.com', 'description' => 'HackerRank', 'keywords' => 'HackerRank'],
            ['title' => 'HackerEarth', 'url' => 'https://hackerearth.com', 'description' => 'HackerEarth', 'keywords' => 'HackerEarth'],
            ['title' => 'LeetCode', 'url' => 'https://leetcode.com', 'description' => 'LeetCode', 'keywords' => 'LeetCode'],
            ['title' => 'TopCoder', 'url' => 'https://topcoder.com', 'description' => 'TopCoder', 'keywords' => 'TopCoder'],
            ['title' => 'Coderbyte', 'url' => 'https://coderbyte.com', 'description' => 'Coderbyte', 'keywords' => 'Coderbyte'],
            ['title' => 'CodeSignal', 'url' => 'https://codesignal.com', 'description' => 'CodeSignal', 'keywords' => 'CodeSignal'],
            ['title' => 'Codeforces', 'url' => 'https://codeforces.com', 'description' => 'Codeforces', 'keywords' => 'Codeforces'],
            ['title' => 'Netlify', 'url' => 'https://netlify.com', 'description' => 'Netlify', 'keywords' => 'Netlify'],
            ['title' => 'Vercel', 'url' => 'https://vercel.com', 'description' => 'Vercel', 'keywords' => 'Vercel'],
            ['title' => 'Heroku', 'url' => 'https://heroku.com', 'description' => 'Heroku', 'keywords' => 'Heroku'],
            ['title' => 'DigitalOcean', 'url' => 'https://digitalocean.com', 'description' => 'DigitalOcean', 'keywords' => 'DigitalOcean'],
            ['title' => 'Linode', 'url' => 'https://linode.com', 'description' => 'Linode', 'keywords' => 'Linode'],
            ['title' => 'AWS', 'url' => 'https://aws.amazon.com', 'description' => 'AWS', 'keywords' => 'AWS'],
            ['title' => 'GCP', 'url' => 'https://cloud.google.com', 'description' => 'GCP', 'keywords' => 'GCP'],
            ['title' => 'Azure', 'url' => 'https://azure.microsoft.com', 'description' => 'Azure', 'keywords' => 'Azure'],
            ['title' => 'Firebase', 'url' => 'https://firebase.google.com', 'description' => 'Firebase', 'keywords' => 'Firebase'],
            ['title' => 'MongoDB', 'url' => 'https://mongodb.com', 'description' => 'MongoDB', 'keywords' => 'MongoDB'],
            ['title' => 'MySQL', 'url' => 'https://mysql.com', 'description' => 'MySQL', 'keywords' => 'MySQL'],
            ['title' => 'PostgreSQL', 'url' => 'https://postgresql.org', 'description' => 'PostgreSQL', 'keywords' => 'PostgreSQL'],
            ['title' => 'Redis', 'url' => 'https://redis.com', 'description' => 'Redis', 'keywords' => 'Redis'],
            ['title' => 'SQLite', 'url' => 'https://sqlite.org', 'description' => 'SQLite', 'keywords' => 'SQLite'],
            ['title' => 'MariaDB', 'url' => 'https://mariadb.org', 'description' => 'MariaDB', 'keywords' => 'MariaDB'],
            ['title' => 'Kubernetes', 'url' => 'https://kubernetes.io', 'description' => 'Kubernetes', 'keywords' => 'Kubernetes, container orchestration'],
            ['title' => 'Docker', 'url' => 'https://docker.com', 'description' => 'Docker', 'keywords' => 'Docker, containerization'],
            ['title' => 'Ansible', 'url' => 'https://ansible.com', 'description' => 'Ansible', 'keywords' => 'Ansible, configuration management'],
            ['title' => 'Chef', 'url' => 'https://chef.io', 'description' => 'Chef', 'keywords' => 'Chef, configuration management'],
            ['title' => 'Puppet', 'url' => 'https://puppet.com', 'description' => 'Puppet', 'keywords' => 'Puppet, configuration management'],
            ['title' => 'Jenkins', 'url' => 'https://jenkins.io', 'description' => 'Jenkins', 'keywords' => 'Jenkins, CI/CD'],
            ['title' => 'Travis CI', 'url' => 'https://travis-ci.org', 'description' => 'Travis CI', 'keywords' => 'Travis CI, CI/CD'],
            ['title' => 'CircleCI', 'url' => 'https://circleci.com', 'description' => 'CircleCI', 'keywords' => 'CircleCI, CI/CD'],
            ['title' => 'GitLab CI', 'url' => 'https://gitlab.com', 'description' => 'GitLab CI', 'keywords' => 'GitLab CI, CI/CD'],
            ['title' => 'GitHub Actions', 'url' => 'https://github.com', 'description' => 'GitHub Actions', 'keywords' => 'GitHub Actions, CI/CD'],
            ['title' => 'Prometheus', 'url' => 'https://prometheus.io', 'description' => 'Prometheus', 'keywords' => 'Prometheus, monitoring'],
            ['title' => 'Grafana', 'url' => 'https://grafana.com', 'description' => 'Grafana', 'keywords' => 'Grafana, monitoring'],
            ['title' => 'Elasticsearch', 'url' => 'https://elastic.co', 'description' => 'Elasticsearch', 'keywords' => 'Elasticsearch, logging'],
            ['title' => 'PyTorch', 'url' => 'https://pytorch.org', 'description' => 'PyTorch', 'keywords' => 'PyTorch, machine learning library'],
            ['title' => 'TensorFlow', 'url' => 'https://tensorflow.org', 'description' => 'TensorFlow', 'keywords' => 'TensorFlow, machine learning library'],
            ['title' => 'Keras', 'url' => 'https://keras.io', 'description' => 'Keras', 'keywords' => 'Keras, machine learning library'],
            ['title' => 'Scikit-learn', 'url' => 'https://scikit-learn.org', 'description' => 'Scikit-learn', 'keywords' => 'Scikit-learn, machine learning library'],
            ['title' => 'NumPy', 'url' => 'https://numpy.org', 'description' => 'NumPy', 'keywords' => 'NumPy, machine learning library'],
            ['title' => 'Pandas', 'url' => 'https://pandas.pydata.org', 'description' => 'Pandas', 'keywords' => 'Pandas, machine learning library'],
            ['title' => 'Matplotlib', 'url' => 'https://matplotlib.org', 'description' => 'Matplotlib', 'keywords' => 'Matplotlib, machine learning library'],
            ['title' => 'Seaborn', 'url' => 'https://seaborn.pydata.org', 'description' => 'Seaborn', 'keywords' => 'Seaborn, machine learning library'],
            ['title' => 'Plotly', 'url' => 'https://plotly.com', 'description' => 'Plotly', 'keywords' => 'Plotly, machine learning library'],
            ['title' => 'Bokeh', 'url' => 'https://bokeh.org', 'description' => 'Bokeh', 'keywords' => 'Bokeh, machine learning library'],
            ['title' => 'Scrapy', 'url' => 'https://scrapy.org', 'description' => 'Scrapy', 'keywords' => 'Scrapy, web scraping library'],
            ['title' => 'Beautiful Soup', 'url' => 'https://www.crummy.com/software/BeautifulSoup', 'description' => 'Beautiful Soup', 'keywords' => 'Beautiful Soup, web scraping library'],
            ['title' => 'Selenium', 'url' => 'https://selenium.dev', 'description' => 'Selenium', 'keywords' => 'Selenium, web scraping library']
        ];

        // Insert the links into the database
        DB::table('sites')->insert($links);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
