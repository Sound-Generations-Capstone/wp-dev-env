describe("connecting to site works", () => {
  it("with env variable", () => {
    const url = Cypress.env('SITE_URL') || 'http://localhost:8881/';
    cy.visit(url);
  });
});
