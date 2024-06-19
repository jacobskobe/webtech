import requests
import random
import time

# Global variables for temperature simulation
current_temperature = 57.0  # Starting temperature
min_temperature = 55.5  # Minimum temperature
max_temperature = 60.9  # Maximum temperature
fluctuation_rate = 0.1  # Rate of temperature change per iteration

# Function to simulate gradual CPU temperature fluctuation
def simulate_cpu_temperature():
    global current_temperature
    # Generate a small random fluctuation
    fluctuation = random.uniform(-fluctuation_rate, fluctuation_rate)
    # Apply fluctuation to current temperature
    current_temperature += fluctuation
    # Ensure temperature stays within defined range
    current_temperature = max(min_temperature, min(current_temperature, max_temperature))
    return round(current_temperature, 2)

# Function to send temperature to server
def send_temperature_to_server(temperature):
    try:
        url = 'http://server-of-kobe.pxl.bjth.xyz/api.php'  # Replace with your server's API endpoint
        payload = {'temperature': temperature}
        response = requests.post(url, data=payload)
        if response.status_code == 200:
            print(f"Temperature {temperature} sent successfully.")
        else:
            print(f"Failed to send temperature {temperature}. Status code: {response.status_code}")
    except Exception as e:
        print(f"Error sending temperature {temperature}: {e}")

# Main loop to continuously send temperature data
while True:
    temperature = simulate_cpu_temperature()
    send_temperature_to_server(temperature)
    time.sleep(2)  # Adjust as needed
