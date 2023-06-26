# Weather API 

This PHP script uses the OpenWeatherMap API to retrieve and display the current weather information for a specified city. It requires the user to input their API key and city name. The script extracts the weather description and temperature from the JSON data obtained from the API request, and displays it to the user.

## Usage

To use this script, you need to have an API key from OpenWeatherMap. If you don't have one already, you can get it from OpenWeatherMap website.

## Usage

1. Clone the repository or download the `weather-api.php` file.
2. Open the `weather-api.php` file in your text editor.
3. Replace `YOUR_API_KEY` with your actual API key obtained from OpenWeatherMap.
4. Replace `Istanbul` with the name of the city for which you want to fetch the weather information.
5. Save the changes to the file.
6. Run the script by opening the file in your web browser or running it from the command line.

## Example

Here's an example of how to use this script:

```
$api_key = '12345'; // Your OpenWeatherMap API key
$city_name = 'London'; // The city name for which weather information is required

$url = "http://api.openweathermap.org/data/2.5/weather?q=$city_name&appid=$api_key&units=metric";
$data = json_decode(file_get_contents($url), true);

$description = $data['weather'][0]['description'];
$temp = $data['main']['temp'];

echo "The current weather in $city_name is $description with a temperature of $temp degrees Celsius.";
``` 

