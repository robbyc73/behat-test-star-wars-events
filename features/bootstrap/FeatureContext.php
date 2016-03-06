<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use Behat\Behat\Context\Step\Given;
use Behat\Behat\Context\Step\When;
use Behat\Behat\Context\Step\Then;

//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext extends MinkContext
{
    /**
     * Initializes context.
     * Every scenario gets its own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
    }

    /**
     * @Given /^I am logged in$/
     */
    public function iAmLoggedIn()
    {
        return array(
            new Given('I am on "login"'),
            new Given('I fill in "username" with "rob"'),
            new Given('I fill in "password" with "ed209"'),
            new Given('I press "loginButton"'),
        );
    }
//
// Place your definition and hook methods here:
//
//    /**
//     * @Given /^I have done something with "([^"]*)"$/
//     */
//    public function iHaveDoneSomethingWith($argument)
//    {
//        doSomethingWith($argument);
//    }
//

    /**
     * @Given /^I fill in event name with "([^"]*)"$/
     */
    public function iFillInEventNameWith($name)
    {
        return array(new Given(sprintf(
            'I fill in "event_name" with "%s"',
            $name)));
    }

    /**
     * @Given /^I fill in event month with "([^"]*)"$/
     */
    public function iFillInEventMonthWith($month)
    {
        return array(new Given(sprintf(
            'I fill in "event_time_date_month" with "%s"',
            $month)));
    }

    /**
     * @Given /^I fill in event day with "([^"]*)"$/
     */
    public function iFillInEventDayWith($day)
    {
        return array(new Given(sprintf(
            'I fill in "event_time_date_day" with "%s"',
            $day)));
    }

    /**
     * @Given /^I fill in event year with "([^"]*)"$/
     */
    public function iFillInEventYearWith($year)
    {
        return array(new Given(sprintf(
            'I fill in "event_time_date_year" with "%s"',
            $year)));
    }

    /**
     * @Given /^I fill in event hour with "([^"]*)"$/
     */
    public function iFillInEventHourWith($hour)
    {
        return array(new Given(sprintf(
            'I fill in "event_time_time_hour" with "%s"',
            $hour)));
    }

    /**
     * @Given /^I fill in event minute with "([^"]*)"$/
     */
    public function iFillInEventMinuteWith($minute)
    {
        return array(new Given(sprintf(
            'I fill in "event_time_time_minute" with "%s"',
            $minute)));
    }

    /**
     * @Given /^I fill in event location with "([^"]*)"$/
     */
    public function iFillInEventLocationWith($location)
    {
        return array(new Given(sprintf(
            'I fill in "event_location" with "%s"',
            $location)));
    }

    /**
     * @Given /^I fill in event details with "([^"]*)"$/
     */
    public function iFillInEventDetailsWith($details)
    {
        return array(new Given(sprintf(
            'I fill in "event_details" with "%s"',
            $details)));
    }


    /**
     * @Given /^I press Create$/
     */
    public function iPressCreate()
    {
        return array(new Given('I press "create"'));
    }

    /**
     * @Then /^I should see Event$/
     */
    public function iShouldSeeEvent()
    {
        return array(new Then('I should see "Event"'));
    }
}
