Feature: Events Admin
  In order manage my events
  As a admin user
  I am able view, add, edit, and delete events

  Background:
    Given I am on "/login"
    And I am logged in

 # @javascript
  #Scenario: Create Event
   # Then I should see "/"
    #And I follow "newLink"
    #Then I should see "New Event"
    #And I fill in "event_name" with "some random event 5"
    #And I fill in "event_time_date_month" with "1"
    #And I fill in "event_time_date_day" with "3"
    #And I fill in "event_time_date_year" with "2018"
    #And I fill in "event_time_time_hour" with "10"
    #And I fill in "event_time_time_minute" with "30"
    #And I fill in "event_location" with "Coruscant"
    #And I fill in "event_details" with "Trash the emperors palace 5"
    #And I press "create"
    #Then I should see "Event"


  Scenario Outline: Create Event
    Then I should see "/"
    And I follow "newLink"
    Then I should see "New Event"
    And I fill in event name with "<name>"
    And I fill in event month with "<month>"
    And I fill in event day with "<day>"
    And I fill in event year with "<year>"
    And I fill in event hour with "<hour>"
    And I fill in event minute with "<minute>"
    And I fill in event location with "<location>"
    And I fill in event details with "<details>"
    And I press Create
    Then I should see Event

  Examples:
    | name               | month | day | year | hour | minute | location   | details            |
    | Velociraptor       | 3     | 23  | 2019 | 17   | 12     | Isla nubar | Trash the park     |
    | Tyrannosaurus Bill | 8     | 14  | 2018 | 19   | 17     | Mainland   | Trash the mainland |



