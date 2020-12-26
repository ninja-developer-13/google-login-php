# google-login-php
In this tutorial you will learn How to Implement Google Login API in PHP.
 Create Google API Console Project
1.Go to Google Console https://console.developers.google.com/

2.Create New Project to a new project.

    Enter your project name
    Under the project name, creates a project ID. It must be unique Id.
    Then click on the create button and your project will be created.

3.Select Credentials under the apis & service section

    Select Credentials and click on create credentials and select oauth client ID
    In the Application type section, select Web application.
    In the Authorized redirect URIs field, enter the redirect URL.
    Click the Create button.

A dialog box will appear with Client ID and Client secret. This Client ID and Client secret allow you to access the Google APIs.
4.Select Oauth Consent and specify below.

    In App name field, enter the name of your application
    enter email in the support email field.
    upload your app logo
    add your domain into app domain, application home page, application privacy policy
    Enter your developer contact information

6.Install google api client library using below command
 
   composer require google/apiclient:"^2.0"

Blog: https://sleepy-coder.blogspot.com/2020/12/login-with-google-oauth-using-php.html
