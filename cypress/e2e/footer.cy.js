/// <reference types="cypress" />

describe("Footer tests", () => {
  beforeEach(() => {
    const url = Cypress.env("SITE_URL");
    cy.visit(url);
  });

  specify(`"Our Programs" is first under "Resources"`, () => {
    cy.get(".has-text-color")
      .contains("Resources")
      // Then within that section find the Our Programs link
      .parent()
      .find('a[data-testid="footer-our-programs"]')
      .should("have.text", "Our Programs");
  });
});
