*** Settings ***
Library     SeleniumLibrary
Library     XML


*** Variables ***
${BROWSER}      Chrome


*** Test Cases ***
# Search Google and Verify Results
#    Open Google
#    Click Element    xpath=/html/body/div[1]/nav/div/div[2]/button[1]/a
#    Sleep    5
#    Click Element    xpath=/html/body/div[2]/div/div/div/button[1]
#    Sleep    5
#    Input Text    xpath=//*[@id="identifierId"]    644259044@webmail.npru.ac.th
#    Sleep    5
#    Click Element    xpath=//*[@id="identifierNext"]/div/button
#    Sleep    5
#    Input Text    xpath=//*[@id="password"]/div[1]/div/div[1]/input    1739902024001
#    Sleep    5
#    Click Element    xpath=//*[@id="passwordNext"]/div/button
#    Sleep    5

Search Google and Verify Results
    Open Google
    Click Element    xpath=/html/body/div[1]/nav/div/div[2]/button[1]/a
    Sleep    3
    Click Element    xpath=/html/body/div[2]/div/div/div/button[1]
    Sleep    3
    Input Text    xpath=//*[@id="identifierId"]    644259044@webmail.npru.ac.th
    Sleep    3
    Click Element    xpath=//*[@id="identifierNext"]/div/button
    Sleep    3
    Input Text    xpath=//*[@id="password"]/div[1]/div/div[1]/input    1739902024001
    Sleep    2
    Click Element    xpath=//*[@id="passwordNext"]/div/button
    Sleep    2
    Click Element    xpath=/html/body/div[1]/div[2]/div/div[1]/div[2]/div/div[1]/div[1]/div[1]/a[2]
    Sleep    3
    Click Element    xpath=/html/body/div[2]/div[2]/div/div[1]/div[4]/div[1]/div[2]/div/div/button
    Sleep    5
    Input Text    xpath=//*[@id="mantine-owl1cjld6-body"]/div/input    test
    Sleep    2


*** Keywords ***
Open Google
    Open Browser    http://localhost:3000    ${BROWSER}
