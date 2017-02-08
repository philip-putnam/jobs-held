<?php
    class Job
    {
        private $employer;
        private $position_title;
        private $start_date;
        private $end_date;
        private $work_skills;

        function __construct($employer, $position_title, $start_date, $end_date, $work_skills) {
            $this->employer = $employer;
            $this->position_title = $position_title;
            $this->start_date = $start_date;
            $this->end_date = $end_date;
            $this->work_skills = $work_skills;
        }

        function setEmployer($new_employer) {
            $this->employer = $new_employer;
        }

        function getEmployer() {
            return $this->employer;
        }

        function setPositionTitle($new_position_title) {
            $this->position_title = $new_position_title;
        }

        function getPositionTitle() {
            return $this->position_title;
        }

        function setStartDate($new_start_date) {
            $this->start_date = $new_start_date;
        }

        function getStartDate() {
            return $this->start_date;
        }

        function setEndDate($new_end_date) {
            $this->end_date = $new_end_date;
        }

        function getEndDate() {
            return $this->end_date;
        }

        function setWorkSkills($new_work_skills) {
            $this->work_skills = $new_work_skills;
        }

        function getWorkSkills() {
            return $this->work_skills;
        }

    }

?>
