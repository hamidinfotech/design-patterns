<?php
/**
 * Created by PhpStorm.
 * User: h.hosseini
 * Date: 10/1/2018
 * Time: 5:46 PM
 */
interface Interviewer
{
    public function askQuestions();
}

class Developer implements Interviewer
{
    public function askQuestions()
    {
        echo 'Ask about design patterns.';
    }

}

class Marketing implements Interviewer
{
    public function askQuestions()
    {
        echo 'Ask about digital marketing.';
    }

}



abstract class HiringManager
{
    // Factory method
    abstract protected function makeInterviewer(): Interviewer;

    public function takeInterview()
    {
        $interviewer = $this->makeInterviewer();
        $interviewer->askQuestions();
    }
}

class DevelopmentManager extends HiringManager
{
    protected function makeInterviewer(): Interviewer
    {
        return new Developer();
    }

}

class MarketingManager extends HiringManager
{
    protected function makeInterviewer(): Interviewer
    {
        return new Marketing();
    }

}


$developmentManager = new DevelopmentManager();
$developmentManager->takeInterview();

$marketingManager = new MarketingManager();
$marketingManager->takeInterview();