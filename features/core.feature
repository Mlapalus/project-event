Feature: Posts Utilisation
  In order tu use Event core
  As a user
  I need to be able to Create, Read, Update, Delete a Post

  Scenario: Creating a new Post
    Given I'm a user of the Application
    When I want add a new hashed Post
    And I put a Title for the Post
    And I put a Content for the Post
    Then The Post is stocked in the Repository

  Scenario: Read a valid Post
    Given I'm a user of the Application
    When I check a valid Post in the Repository
    Then The application return the Post

  Scenario: Read a invalid Post
    Given I'm a user of the Application
    When I check a invalid Post in the Repository
    Then The application return a false Response

  Scenario: Update a Post
    Given I'm a user of the Application
    When I want to update a existing Post
    Then I can modify the Post and save it in the Repository

  Scenario: Delete a valid Post
    Given I'm a user of the Application
    When I want to delete a existing Post
    Then The Post is deleted from the Repository

