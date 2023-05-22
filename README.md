# 4DHT11_temp_hum_monitoring

Project Title: 4DHT_temp_hum_monitoring

Project Description:
The "4DHT_temp_hum_monitoring" project aims to monitor environmental parameters such as temperature and humidity using DHT sensors. The project utilizes an ESP8266 microcontroller to process the sensor data and send it to a cloud platform. The collected data is then displayed on a website that has been specifically created for this purpose.
This project is developed with the help of (https://github.com/aesthet1c0der)

Equipment and Components used:
1. ESP8266 microcontroller (NodeMCU)
2. Four DHT sensors (DHT11)
3. Breadboard and jumper wires
4. USB cable for power and programming
5. Computer with Arduino IDE installed
6. Internet connection

Procedure:

Step 1: Hardware Setup
1. Connect the ESP8266 microcontroller to your computer using the USB cable.
2. Place the ESP8266 on the breadboard and make the necessary connections:
   - Connect the 3.3V pin of the ESP8266 to the positive rail of the breadboard.
   - Connect the GND pin of the ESP8266 to the negative rail of the breadboard.
   - Connect the DHT sensors to the breadboard.
   - Connect the VCC pin of each DHT sensor to the positive rail of the breadboard.
   - Connect the GND pin of each DHT sensor to the negative rail of the breadboard.
   - Connect the data pin of each DHT sensor to a separate GPIO pin of the ESP8266 (e.g., D4, D5, D6, D7).
3. Ensure all the connections are secure and well-insulated.

Step 2: Software Setup

1. Open the Arduino IDE on your computer.
2. Install the necessary libraries for DHT sensors and ESP8266.
3. Create a new sketch in the Arduino IDE.
4. Include the required libraries at the beginning of the sketch.
5. Define variables for storing the sensor data (temperature and humidity).
6. Set up the ESP8266 Wi-Fi connection by providing the network credentials (SSID and password).
7. Set up a cloud platform account (000webhost) and obtain the necessary credentials or API keys.
8. Configure the ESP8266 to establish a connection with the cloud platform using the obtained credentials.
9. Initialize the DHT sensors and configure their data pins in the setup() function.
10. Continuously read the sensor data in the loop() function and store it in the respective variables.
11. Send the collected data to the cloud platform using the provided API or data transmission method.

Step 3: Cloud Platform Configuration

1. Log in to your cloud platform account.
2. Set up a new project or channel to receive the sensor data.
3. Configure the incoming data format and fields according to the parameters you wish to monitor (temperature and humidity).
4. Obtain the API endpoint or data transmission method to send the data from the ESP8266 to the cloud platform.

Step 4: Website Creation

1. Develop a website using HTML, CSS, and JavaScript, or use a website builder platform.
2. Design the website layout and structure to display the sensor data.
3. Utilize the API or data transmission method from the cloud platform to fetch the sensor data.
4. Implement the necessary functions to display the retrieved data on the website.
5. Deploy the website to a hosting platform or a local server accessible from the internet.

Step 5: Testing and Deployment

1. Verify the hardware connections and upload the sketch to the ESP8266 microcontroller.
2. Power on the ESP8266 and ensure it connects to the Wi-Fi network successfully.
3. Check if the sensor data is being read and transmitted to the cloud platform.
4. Access the website and verify if the sensor data is displayed correctly.
5. Monitor the data over a period of time to ensure its consistency and accuracy.
6. Make any necessary adjustments or refinements to the hardware or software based on the testing results.
7. Once satisfied with the performance, deploy the system in the desired location for continuous monitoring.
