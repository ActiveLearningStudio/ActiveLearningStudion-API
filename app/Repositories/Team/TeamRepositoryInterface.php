<?php

namespace App\Repositories\Team;

use App\Repositories\EloquentRepositoryInterface;
use App\Models\Team;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface TeamRepositoryInterface extends EloquentRepositoryInterface
{

    /**
     * Create pivots data on team creation
     *
     * @param $team
     * @param $data
     */
    public function createTeam($team, $data);

    /**
     * Invite user to the team
     *
     * @param $team
     * @param $user
     */
    public function inviteToTeam($team, $user);

    /**
     * Invite members to the team
     *
     * @param $team
     * @param $data
     * @return bool
     */
    public function inviteMembers($team, $data);

    /**
     * Set Team / Project / User relationship
     *
     * @param $team
     * @param $projects
     * @param $users
     */
    public function setTeamProjectUser($team, $projects, $users);

    /**
     * Remove Team / Project / User relationship
     *
     * @param $team
     * @param $user
     */
    public function removeTeamProjectUser($team, $user);

    /**
     * Remove Team / User / Project relationship
     *
     * @param $team
     * @param $project
     */
    public function removeTeamUserProject($team, $project);

    /**
     * Assign members to the team project
     *
     * @param $team
     * @param $project
     * @param $users
     */
    public function assignMembersToTeamProject($team, $project, $users);

    /**
     * Remove member from the team project
     *
     * @param $team
     * @param $project
     * @param $user
     */
    public function removeMemberFromTeamProject($team, $project, $user);

    /**
     * Get Team detail data
     *
     * @param $teamId
     * @return mixed
     */
    public function getTeamDetail($teamId);

}
