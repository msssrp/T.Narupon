*** Settings ***
Library     SeleniumLibrary
Library     XML


*** Variables ***
${BROWSER}              Chrome
${URL}                  https://techvibe.app
${GOOGLE_USERNAME}      644259035@webmail.npru.ac.th
${GOOGLE_PASSWORD}      siripoom15052545


*** Test Cases ***
Login to the website
    [Documentation]    Test case for Login to the website
    Open WebSite
    Login to Blog Site


*** Keywords ***
Open WebSite
    Open Browser    ${URL}    ${BROWSER}

Login to Blog Site
    Click Element    id=btn-login
    Wait Until Page Contains Element    xpath=/html/body/div[2]/div/div/h1
    Click Element    xpath=/html/body/div[2]/div/div/div/button[1]
    Wait Until Page Contains Element    xpath=//*[@id="identifierId"]
    Input Text    xpath=//*[@id="identifierId"]    ${GOOGLE_USERNAME}
    Click Element    xpath=//*[@id="identifierNext"]/div/button
    Wait Until Element Is Visible    xpath=//*[@id="password"]/div[1]/div/div[1]/input
    Input Text    xpath=//*[@id="password"]/div[1]/div/div[1]/input    ${GOOGLE_PASSWORD}
    Click Element    xpath=//*[@id="passwordNext"]/div/button
    Wait Until Page Contains Element    xpath=//*[@id="yDmH0d"]/c-wiz/div/div[3]/div/div/div[2]/div/div/button
    Click Button    xpath=//*[@id="yDmH0d"]/c-wiz/div/div[3]/div/div/div[2]/div/div/button
    Wait Until Page Contains Element    xpath=/html/body/div[1]/div[2]/div/div[1]/div[1]/div[2]/div[1]/button
    Sleep    5
