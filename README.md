# Implementing and Evaluating a DevSecOps Pipeline for Cloud-based Applications Using Microsoft Azure

## Project Overview

UniLink is a cloud-based student communication application designed to enhance collaboration and connectivity within educational institutions. The application includes key features such as user authentication, messaging, and student search.

This project focuses not only on developing the application but also on securing it by implementing a DevSecOps pipeline on Microsoft Azure. The pipeline integrates security best practices into the development lifecycle, automating processes such as static and dynamic testing, dependency scanning, and infrastructure as code (IaC) deployment to mitigate security risks.

## Technologies Used

The tech stack used for the project are:
- Front-end: HTML. CSS, JavaScript
- Back-end: PHP
- Database: Azure Database for MySQL
- Cloud Platform: Microsoft Azure
- CI/CD Pipeline: Azure DevOps
- Security Tools: SonarQube for SAST, OWASP ZAP for DAST, Snyk for Dependency Security Scans
- Version Control: GitHub

## How to Run Project

### Prerequisites

- PHP and MySQL should be installed locally or use Azure-hosted services
- Create an Azure account on the Azure portal and Azure DevOps to create pipeline and deploy application
- Clone this repository

## Simple Steps

1. Setup Environment:
- Create a database using Azure Database for MySQL and update the configuration file (config.php) with your database credentials.
- Set up your Azure environment to host the application and database.

2. Run the application locally:
- Start a local PHP server like XAMPP (or MAMP for MAC users) and run the application

3. Set Up the DevSecOps Pipeline:
- Create an Azure DevOps pipeline and connect it to this GitHub repository.
- Configure the pipeline with a PHP yml template
- Configure SonarQube for SAST, OWASP ZAP for DAST, and integrate dependency scanning using SnyK into the pipeline.

3. Deploy to Azure
- Use Azure DevOps to deploy the application to Azure App Services with Azure Database for MySQL.
- configure ARM templates to manage cloud resources.


## Screenshots

<img src ="assets/images/project images/Screenshot 1.png" width="300px">   <img src ="assets/images/project images/Screenshot 2.png" width="300px">   <img src ="assets/images/project images/Screenshot 3.png" width="300px">   <img src ="assets/images/project images/Screenshot 4.png" width="300px">   <img src ="assets/images/project images/Screenshot 5.png" width="300px">  <img src ="assets/images/project images/Screenshot 6.png" width="300px">  <img src ="assets/images/project images/Screenshot 8.png" width="300px">  <img src ="assets/images/project images/Screenshot 9.png" width="300px">  <img src ="assets/images/project images/Screenshot 10.png" width="300px">   <img src ="assets/images/project images/Screenshot 19.png" width="300px">  <img src ="assets/images/project images/Screenshot 12.png" width="300px">  <img src ="assets/images/project images/Screenshot 13.png" width="300px">  <img src ="assets/images/project images/Screenshot 15.png" width="300px">  <img src ="assets/images/project images/Screenshot 18.png" width="300px">  





_Other images to be added_








