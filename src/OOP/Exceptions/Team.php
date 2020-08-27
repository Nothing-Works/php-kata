<?php

class MaximumMembersReached extends Exception
{
    protected $message = 'You may not have more than 3 team members';
}

class TeamMembers extends Exception
{
    public static function tooManyMembers()
    {
        return new static('You may not have more than 3 team members');
    }
}

class Member
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Team
{
    private $members = [];

    public function add(Member $member)
    {
        if (3 === count($this->members)) {
            // this is ok but we can have a custom exception type.
            // throw new Exception('You may not have more than 3 team members');

            // throw new MaximumMembersReached();

            throw TeamMembers::tooManyMembers();
        }

        $this->members[] = $member;
    }

    public function members()
    {
        return $this->members;
    }
}

class TeamMemberController
{
    public function store()
    {
        $team = new Team(); // has a maximum of three members.

        try {
            $team->add(new Member('andy1'));
            $team->add(new Member('andy2'));
            $team->add(new Member('andy3'));
            $team->add(new Member('andy4'));
            var_dump($team->members());
            // } catch (Exception $e) {
        } catch (TeamMembers $e) {
            var_dump($e);
        }
    }
}

(new TeamMemberController())->store();
