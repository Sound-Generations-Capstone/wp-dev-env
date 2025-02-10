describe("connecting to localhost works on GH actions", () => {
  it("localhost:8881", () => {
    cy.visit("http://localhost:8881/");
  });
});
