<?php

namespace App\Console\Commands;

use App\Models\Project;
use App\Models\UserLogin;
use App\User;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Console\Command;

class SendDailyUsage extends Command
{
    private $client;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:daily';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send daily usage to HubSpot';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->client = new Client();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $hubspot_url = 'https://api.hsforms.com/submissions/v3/integration/submit/7874555/537d0f95-c495-4cba-bc52-3ea2d7eee8a1';
        $headers = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ];

        $users = User::all();

        foreach ($users as $user) {
            $login_count = UserLogin::where('user_id', $user->id)
                ->where('created_at', '>', Carbon::now()->subDays(1))
                ->count();

            $project_count = $user->projects()
                ->where('projects.created_at', '>', Carbon::now()->subDays(1))
                ->where('role', 'owner')
                ->count();

            $all_projects = $user->projects;
            $playlist_count = 0;
            $activity_count = 0;
            foreach ($all_projects as $project) {
                $count = $project->playlists()
                    ->where('playlists.created_at', '>', Carbon::now()->subDays(1))
                    ->count();
                $playlist_count = $playlist_count + $count;

                $all_playlists = $project->playlists;
                foreach ($all_playlists as $playlist) {
                    $a_count = $playlist->activities()
                        ->where('activities.created_at', '>', Carbon::now()->subDays(1))
                        ->count();
                    $activity_count = $activity_count + $a_count;
                }
            }

            $data = [
                'fields' => [
                    [
                        'name' => 'email',
                        'value' => $user->email,
                    ],
                    [
                        'name' => 'firstname',
                        'value' => $user->first_name . ' ' . $user->last_name,
                    ],
//                    [
//                        'name' => 'date',
//                        'value' => now()->toString(),
//                    ],
                    [
                        'name' => 'login_count',
                        'value' => $login_count,
                    ],
                    [
                        'name' => 'project_count',
                        'value' => $project_count,
                    ],
                    [
                        'name' => 'playlist_count',
                        'value' => $playlist_count,
                    ],
                    [
                        'name' => 'activity_count',
                        'value' => $activity_count,
                    ],
                ],
            ];

            $this->client->request(
                'POST',
                $hubspot_url,
                [
                    'headers' => $headers,
                    'json' => $data,
                ]
            );
        }
    }
}