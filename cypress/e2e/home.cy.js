/// <reference types="cypress" />

describe('Homepage content', () => {
  beforeEach(() => {
    const url = Cypress.env('SITE_URL') || 'http://localhost:8881/';
    cy.visit(url)
  })

  specify('Welcome section has buttons to volunteer and explore programs', () => {
    // Welcome panel
    cy.get('[data-testid=welcome-button-container]')

    // Volunteer button
    cy.get('[data-testid=volunteer-button]').click()
    cy.url().should('include', 'volunteer')
    cy.go('back')

    // Explore programs button
    cy.get('[data-testid=explore-button]').click()
    cy.url().should('include', 'programs')
    cy.go('back')
  })

  specify('Popular Services section links to relevant pages', () => {
    // Popular services section exists
    cy.get('[data-testid=popular-services]')

    // Transportation exists and links to transportation page
    cy.get('[data-testid=transportation]').click()
    cy.url().should('include', 'transportation')
    cy.go('back')

    // Food security exists and links to the food security page
    cy.get('[data-testid=food-security]').click()
    cy.url().should('include', 'food')
    cy.go('back')

    // Health and Wellness exists to the health and wellness page
    cy.get('[data-testid=health]').click()
    cy.url().should('include', 'health')
  })

  specify('Get Involved section has buttons for donation and news', () => {
    cy.get('[data-testid=donate]').should('have.attr', 'href').and('contains', 'go.soundgenerations.org')

    cy.get('[data-testid=subscribe-enews]').click()
    cy.url().should('include', 'e-news')
  })

  // Most recent posts (TODO: investigate other ways to check when most recent posts are dynamic)
  specify('What\'s Happening section has links for recent posts', () => {
    // TODO: tests fail
    // cy.get('[data-testid=happening]')
    // cy.get('[data-testid=most-recent').click()

    // cy.go('back')
    // cy.get('[data-testid=second-most-recent').click()
    // cy.url().should('include', '/')
    // cy.get('[data-testid=third-most-recent').click()
    // cy.url().should('include', '/')
    // cy.go('back')
  })
})

