*** Settings ***
Library     SeleniumLibrary


*** Variables ***
${BROWSER}          Chrome
${SEARCH_TERM}      robot framework


*** Test Cases ***
Search Google and Verify Results
    [Documentation]    Test case to search Google and verify results
    [Tags]  search
    Open Google
    Input Search Term
    Enter Google Search
    Verify Search Results
    Close Browser

Search Google and check Results
    [Documentation]    Test case to search Google and verify results
    [Tags]  search
    Open Google
    Input Search Term
    Enter Google Search
    Verify Search Results
    Close Browser

Search yahoo and check Results
    [Documentation]    Test case to search Google and verify results
    [Tags]  search
    Open yahoo
    Input Search Term yahoo
    Enter yahoo Search
    Verify Search Results
    Close Browser


*** Keywords ***
Open Google
    Open Browser    https://www.google.com    ${BROWSER}

Open yahoo
    Open Browser   https://www.yahoo.com   ${BROWSER}

Input Search Term
    Input Text    name=q    ${SEARCH_TERM}
Input Search Term yahoo
    Input Text    name=p    ${SEARCH_TERM}

Enter Google Search
    Press Keys    name=q    ENTER
Enter yahoo Search
    Press Keys    name=p    ENTER

Verify Search Results
    Wait Until Page Contains    ${SEARCH_TERM}
