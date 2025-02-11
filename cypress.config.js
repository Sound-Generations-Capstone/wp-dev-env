const { defineConfig } = require("cypress");

module.exports = defineConfig({
  e2e: {
    env: {
      SITE_URL: process.env.SITE_URL || "http://localhost:8881/"
    }
  },
});
