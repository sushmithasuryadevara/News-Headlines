# News-Headlines
The main aim of this app is to display the title and content of the top 10 headlines from the google news api (https://newsapi.org/).

The codebase focuses 👓 on following key things:
- Code structuring, style and comments
- Rendering the top 10 Headlines for every country individually.
- Added the test case scenario.

# Development Setup 🖥

You will require XAMPP on local to operate this Application.
- Place the news folder into htdocs.
- Run the local host in the browser using http://localhost/news/

## API key 🔑

The news is fetched from [NewsAPI](https://newsapi.org/).
- Used a endpoint "Top Headlines" to fetch the news by passing a params.
- Country: passed as country code.
- API_Key: Add a key ( Registered into News API to get a key)

## Steps to use the Application

Users can enter the name of a country and click on a submit button. Upon submit, the app displays the content of Top 10 Headlines.
Name of the countries are Case Sensitive. For Example: United States, UAE, India.

## Libraries and tools 🛠

- Used Jquery to handle a asynchornus calls and events. 
- Bootstrap for mobile responsive.
- Used PHP programming language.

## Test Cases
- Added a simple assertion to test the actual and expected response case scenario.
