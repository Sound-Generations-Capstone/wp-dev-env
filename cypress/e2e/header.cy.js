/// <reference types="cypress" />

describe("Header content", () => {
  beforeEach(() => {
    const url = Cypress.env("SITE_URL");
    cy.visit(url);
  });

  specify("Tab headers are centered", () => {
    cy.get(".main-navigation ul").should(($ul) => {
      const rect = $ul[0].getBoundingClientRect();
      const viewportWidth = Cypress.config("viewportWidth");

      // Calculate the element's center
      const elementCenterX = rect.left + rect.width / 2;

      // Calculate the viewport center
      const viewportCenterX = viewportWidth / 2;

      // Allow a small margin for precision
      const margin = 10;

      // Assert the element is centered horizontally
      expect(elementCenterX).to.be.closeTo(viewportCenterX, margin);
    });
  });

  specify("Donate button stands out", () => {
    let button = cy.get(
      "#mega-menu-wrap-primary #mega-menu-primary > li:last-child > a.mega-menu-link"
    );
    button.should("have.css", "font-weight", "700");
    button.should("have.css", "border", "3px solid rgb(253, 130, 4)");
  });

  specify("5 header tabs", () => {
    let menu = cy.get("#mega-menu-wrap-primary #mega-menu-primary");
    menu
      .should("exist")
      .find("> li")
      .then(($lis) => {
        // Get text content of each li
        const items = $lis.map((i, el) => Cypress.$(el).text().trim()).get();

        // Verify the expected items
        expect(items).have.lengthOf(7);
      });
  });
});
