/// <reference types="cypress" />

describe("Homepage content", () => {
  beforeEach(() => {
    const url = Cypress.env("SITE_URL");
    cy.visit(url+"our-programs/food-security/community-dining/");
  });

  specify(
    "MOW Program Home page online application button",
    () => {

      cy.get("[class=\"wp-block-button__link wp-element-button\"]");

      cy.get("[class=\"wp-block-button__link wp-element-button\"]")
        .should('have.attr', 'href').then((href) => {
          cy.visit(href)
        });

    }
  );

  

  
});
