describe("connecting to site works", () => {
  it("with env variable", () => {
    const url = Cypress.env('SITE_URL');
    cy.visit(url);
  });
});
