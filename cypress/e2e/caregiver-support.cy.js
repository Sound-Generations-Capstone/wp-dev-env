/// <reference types="cypress" />

describe('Caregiver support page content', () => {
  beforeEach(() => {
    const url = Cypress.env('SITE_URL') + 'our-programs/caregiver-support/';
    cy.visit(url)
  })

  specify('Top of caregiver support page has links to navigate to the rest of the page', () => {
    cy.get("[data-testid=jump-general-caregiver-support]").click();
    cy.url().should("include", "#all-caregivers");

    cy.get("[data-testid=jump-veteran-caregiver-support]").click();
    cy.url().should("include", "#veteran-caregivers");
  }) 

  specify('Community outreach section email link is present', () => {
    cy.get("[data-testid=community-outreach]");
    cy.get("[data-testid=email-caregiver-support-presentation]").should('have.attr', 'href')
    .and('equals', 'mailto:caregiver@soundgenerations.org');
  })

  specify('Contact caregiver support links use correct information', () => {
    cy.get("[data-testid=email-caregiver-support").should('have.attr', 'href')
    .and('equals', 'mailto:caregiver@soundgenerations.org');

    cy.get("[data-testid=call-caregiver-support").should('have.attr', 'href')
    .and('equals', 'tel:+12064483110');

    cy.get("[data-testid=tty-caregiver-support").should('have.attr', 'href')
    .and('equals', 'tel:+18008336384');

    cy.get("[data-testid=toll-free-caregiver-support").should('have.attr', 'href')
    .and('equals', 'tel:+18884353377');
  })

  specify('General caregiver support links direct to correct pages', () => {
    cy.get("[data-testid=respite-services]").click();
    cy.url().should('contain', 'respite-services');
    cy.go(-1);

    cy.get("[data-testid=support-groups]").click();
    cy.url().should('contain', 'support-groups');
    cy.go(-1);

    cy.get("[data-testid=caregiver-stories]").click();
    cy.url().should('contain', 'the-heart-of-caregiving');
    cy.go(-1);

    cy.get("[data-testid=alzheimers-association]")
    .should('have.attr', 'href').and('contain', 'alz.org');
    

    cy.get("[data-testid=lgbtq-care]").click();
    cy.url().should('contain', 'lgbtq-caregiving-guide');

    cy.get("[data-testid=self-assessment]").click();
    cy.url().should('contain', 'caregiver-self-assessment')
  })


  specify('Veteran caregiver support links direct to correct pages', () => {
    cy.get("[data-testid=va-department-caregiver-support").should('have.attr', 'href')
    .and('equal', 'https://www.caregiver.va.gov/');

    cy.get("[data-testid=homeless-veteran-call-center]").should('have.attr', 'href')
    .and('equal', 'tel:+18774243838');

    cy.get("[data-testid=veteran-crisis-line]").should('have.attr', 'href')
    .and('equal', 'tel:+18002738255')

    cy.get("[data-testid=toll-free-va-department-caregiver-support").should('have.attr', 'href')
    .and('equal', 'tel:+18552603274')
  })

  specify('Veteran caregiver support contact links use correct information', () => {
    cy.get("[data-testid=email-veteran-caregiver-support").should('have.attr', 'href')
    .and('equals', 'mailto:reynaldc@soundgenerations.org');

    cy.get("[data-testid=call-veteran-caregiver-support").should('have.attr', 'href')
    .and('equals', 'tel:+12063855050');
  })
})