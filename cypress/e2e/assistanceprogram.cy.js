/// <reference types="cypress" />

describe("Assistant services content", () => {
  beforeEach(() => {
    const url = Cypress.env("SITE_URL");
    cy.visit(url+"assistance-services/");
  });

  specify(
    "Assistance Program Home page has a card tile for Pathways and Information Assistance",
    () => {

      cy.get("[class=\"pathways service-card\"]");

      cy.get("[data-testid=pathways-link]").click();
      cy.url().should("include", "assistance-services");
      cy.go("back");

    }
  );

  specify(
    "Assistance Program Home page has a card tile for Caregiver Support",
    () => {

      cy.get("[class=\"caregiver-support service-card strong\"]");

      cy.get("[data-testid=caregiver-support-link]").click();
      cy.url().should("include", "caregiver-support");
      cy.go("back");

    }
  );

  specify(
    "Assistance Program Home page has a card tile for Legal Assistance",
    () => {

      cy.get("[class=\"legal service-card\"]");

      cy.get("[data-testid=legal-assistance-link]").click();
      cy.url().should("include", "senior-rights-assistance/");
      cy.go("back");

    }
  );

  specify(
    "Assistance Program Home page has a card tile for Minor Home Repair",
    () => {

      cy.get("[class=\"minor-home-repair service-card\"]");

      cy.get("[data-testid=minor-home-repair-link]").click();
      cy.url().should("include", "minor-home-repair/");
      cy.go("back");

    }
  );

  specify(
    "Assistance Program Home page has a card tile for Elder Education Institute",
    () => {

      cy.get("[class=\"elder-education service-card\"]");

      cy.get("[data-testid=elder-education-institute-link]").click();
      cy.url().should("include", "assistance-services/");
      cy.go("back");

    }
  );

  specify(
    "Assistance Program Home page has a card tile for GRAT",
    () => {

      cy.get("[class=\"grat service-card\"]");

      cy.get("[data-testid=grat-link]").click();
      cy.url().should("include", "grat/");
      cy.go("back");

    }
  );

  
});
