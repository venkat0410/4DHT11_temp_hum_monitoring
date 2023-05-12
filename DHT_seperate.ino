#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include <WiFiClient.h>
#include <DHT.h>
const char *ssid = "Aesthet1c0der"; // replace with your wifi ssid and wpa2 key'
const char *pass = "biophyakash";
#define DHT_PIN_1 D1          // GPIO Pin for the first DHT sensor
#define DHT_PIN_2 D2          // GPIO Pin for the second DHT sensor
#define DHT_PIN_3 D3          // GPIO Pin for the third DHT sensor
#define DHT_PIN_4 D4          // GPIO Pin for the fourth DHT sensor
DHT dht1(DHT_PIN_1, DHT11);
DHT dht2(DHT_PIN_2, DHT11);
DHT dht3(DHT_PIN_3, DHT11);
DHT dht4(DHT_PIN_4, DHT11);
float hum1, temp1;
float hum2, temp2;
float hum3, temp3;
float hum4, temp4;
WiFiClient client;
void setup()
{
  Serial.begin(115200);
  delay(100);
  dht1.begin();
  dht2.begin();
  dht3.begin();
  dht4.begin();
  Serial.println("Connecting to ");
  Serial.println(ssid);
  WiFi.begin(ssid, pass);
  while (WiFi.status() != WL_CONNECTED)
  {
    delay(500);
    Serial.print(".");
  }
  Serial.println("");
  Serial.println("WiFi connected");
}
void readDHT1()
{
  hum1 = dht1.readHumidity();
  temp1 = dht1.readTemperature();
  if (isnan(hum1) || isnan(temp1))
  {
    Serial.println("Failed to read from DHT sensor 1!");
    return;
  }
  if (WiFi.status() == WL_CONNECTED)
  {
    HTTPClient http;
    String url = "http://htmonitor.000webhostapp.com/index.php?hum1=" + String(hum1) + "&temp1=" + String(temp1);
    Serial.println(url);
    http.begin(client, url);
    int httpCode = http.GET();
    if (httpCode > 0)
    {
      String payload = http.getString();
      Serial.println(payload);
    }
    http.end();
  }
}
void readDHT2()
{
  hum2 = dht2.readHumidity();
  temp2 = dht2.readTemperature();
  if (isnan(hum2) || isnan(temp2))
  {
    Serial.println("Failed to read from DHT sensor 2!");
    return;
  }
  if (WiFi.status() == WL_CONNECTED)
  {
    HTTPClient http;
    String url = "http://htmonitor.000webhostapp.com/index.php?hum2=" + String(hum2) + "&temp2=" + String(temp2);
    Serial.println(url);
    http.begin(client, url);
    int httpCode = http.GET();
    if (httpCode > 0)
    {
      String payload = http.getString();
      Serial.println(payload);
    }
    http.end();
  }
}
void readDHT3()
{
  hum3 = dht3.readHumidity();
  temp3 = dht3.readTemperature();
  if (isnan(hum3) || isnan(temp3))
  {
    Serial.println("Failed to read from DHT sensor 3!");
    return;
  }
  if (WiFi.status() == WL_CONNECTED)
  {
    HTTPClient http;
    String url = "http://htmonitor.000webhostapp.com/index.php?hum3=" + String(hum3) + "&temp3=" + String(temp3);
    Serial.println(url);
    http.begin(client, url);
    int httpCode = http.GET();
    if (httpCode > 0)
    {
      String payload = http.getString();
      Serial.println(payload);
    }
    http.end();
  }
}
void readDHT4()
{
  hum4 = dht4.readHumidity();
  temp4 = dht4.readTemperature();
  if (isnan(hum4) || isnan(temp4))
  {
    Serial.println("Failed to read from DHT sensor 4!");
    return;
  }
  if (WiFi.status() == WL_CONNECTED)
  {
    HTTPClient http;
    String url = "http://htmonitor.000webhostapp.com/index.php?hum4=" + String(hum4) + "&temp4=" + String(temp4);
    Serial.println(url);
    http.begin(client, url);
    int httpCode = http.GET();
    if (httpCode > 0)
    {
      String payload = http.getString();
      Serial.println(payload);
    }
    http.end();
  }
}
void loop()
{
  readDHT1();
  readDHT2();
  readDHT3();
  readDHT4(); 
  delay(60000);  // Delay for 10 seconds between readings
}