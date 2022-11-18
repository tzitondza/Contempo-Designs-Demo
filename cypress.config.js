const { defineConfig } = require("cypress");

module.exports = defineConfig({
  projectId: 'sn8c2o',
  e2e: {
    setupNodeEvents(on, config) {
      // implement node event listeners here
    },
  },
});
