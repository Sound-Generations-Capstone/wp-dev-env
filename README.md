# Sound Generations Capstone Project

This software package is a custome WordPress theme written in HTML, CSS and PHP. It is currently running on a standalone website under website URL (url here, with modification to prevent bots) for preview. The goal for this project was to provide maintenance and design upgrades to a website for King County non-profit Sound Generations (link to Sound Generations here).

Automated testing is provided via Cypress, and the deployment is on a Pantheon server running Apache. 

## Table of Contents
### Dependencies
### Testing
### Deployment


### Dependencies

This package will not work unless installed onto a WordPress site. It is also tightly coupled to the original content
provided from the website of non-profit Sound Generations. 

To access the deployed version of the website, the most up-to-date browser version of your choice is recommended.

### Testing

As mentioned in the introduction, this package has automated testing using Cypress facilitated via GitHub Actions (link to GitHub actions). Using a test activation script configured in the .github/workflows folder, a browser is opened on a remote server. This browser and test runner simulate usage of the real website, scrolling and navigating the website close to how a real user might. This ensures that the website appears as intended.

To run the tests, make a contribution on a branch, then merge it with main. As part of the merge request, 
the test script will run, verifying that no regressions have occurred and any new tests also pass.

### Deployment

Similar to testing, this package has automated deployment onto a remote server, hosted by Pantheon. 
To redeploy any new content on the server, create a branch, make changes, and then merge into the main branch. 
Upon merging, the new code will be deployed.


### Contributing

To be added.

### Local Installation

To be added.

