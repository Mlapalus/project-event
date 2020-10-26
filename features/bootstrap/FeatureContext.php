<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

use Core\Entity\User;


/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */

    private $user;

    public function __construct()
    {
        $this->user = new User();
    }
    /**
     * @Given I'm a user of the Application
     */
    public function imAUserOfTheApplication()
    {
        $isUser = $this->user->isConnected();

        \PHPUnit\Framework\Assert::assertTrue($isUser);

    }

    /**
     * @When I want add a new hashed Post
     */
    public function iWantAddANewHashedPost()
    {
        throw new PendingException();
    }

    /**
     * @When I put a Title for the Post
     */
    public function iPutATitleForThePost()
    {
        throw new PendingException();
    }

    /**
     * @When I put a Content for the Post
     */
    public function iPutAContentForThePost()
    {
        throw new PendingException();
    }

    /**
     * @Then The Post is stocked in the Repository
     */
    public function thePostIsStockedInTheRepository()
    {
        throw new PendingException();
    }

    /**
     * @When I check a valid Post in the Repository
     */
    public function iCheckAValidPostInTheRepository()
    {
        throw new PendingException();
    }

    /**
     * @Then The application return the Post
     */
    public function theApplicationReturnThePost()
    {
        throw new PendingException();
    }

    /**
     * @When I check a invalid Post in the Repository
     */
    public function iCheckAInvalidPostInTheRepository()
    {
        throw new PendingException();
    }

    /**
     * @Then The application return a false Response
     */
    public function theApplicationReturnAFalseResponse()
    {
        throw new PendingException();
    }

    /**
     * @When I want to update a existing Post
     */
    public function iWantToUpdateAExistingPost()
    {
        throw new PendingException();
    }

    /**
     * @Then I can modify the Post and save it in the Repository
     */
    public function iCanModifyThePostAndSaveItInTheRepository()
    {
        throw new PendingException();
    }

    /**
     * @When I want to delete a existing Post
     */
    public function iWantToDeleteAExistingPost()
    {
        throw new PendingException();
    }

    /**
     * @Then The Post is deleted from the Repository
     */
    public function thePostIsDeletedFromTheRepository()
    {
        throw new PendingException();
    }
}
