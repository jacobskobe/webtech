import plotly.graph_objs as go
import psycopg2
from datetime import datetime

# PostgreSQL database connection settings
db_settings = {
    'host': 'db',      # Docker Compose service name
    'dbname': 'webtech_db',
    'user': 'kobejacobs',
    'password': 'kakapipi'
}

def fetch_temperature_data():
    try:
        # Connect to the PostgreSQL database
        conn = psycopg2.connect(**db_settings)
        cursor = conn.cursor()

        # Query to fetch temperature data
        cursor.execute("SELECT recorded_at, value FROM temperatures ORDER BY recorded_at")

        # Fetch all rows
        rows = cursor.fetchall()

        # Close cursor and connection
        cursor.close()
        conn.close()

        return rows

    except (Exception, psycopg2.DatabaseError) as error:
        print("Error fetching temperature data:", error)
        return None

def generate_plot(data):
    if data:
        # Extract x and y data for plotting
        x_data = [row[0] for row in data]
        y_data = [row[1] for row in data]

        # Create Plotly trace
        trace = go.Scatter(
            x=x_data,
            y=y_data,
            mode='lines+markers',
            name='Temperature (°C)'
        )

        # Create Plotly layout
        layout = go.Layout(
            title='CPU Temperature Over Time',
            xaxis=dict(title='Time'),
            yaxis=dict(title='Temperature (°C)'),
            showlegend=True
        )

        # Create Plotly figure
        fig = go.Figure(data=[trace], layout=layout)

        # Convert Plotly figure to HTML for embedding
        print(fig.to_html(full_html=False, include_plotlyjs='cdn'))

    else:
        print("No data available to plot.")

if __name__ == '__main__':
    # Fetch temperature data from PostgreSQL
    temperature_data = fetch_temperature_data()

    # Generate Plotly graph HTML
    generate_plot(temperature_data)
