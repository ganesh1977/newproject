import mysql.connector
import threading

# Database connection details
DB_CONFIG = {
    "host": "localhost",
    "user": "root",
    "password": "gansuv@1",
    "database": "financial"
}

# Function to insert data
def insert_data(name, password, email):
    try:
        conn = mysql.connector.connect(**DB_CONFIG)
        cursor = conn.cursor()
        cursor.execute("INSERT INTO users (name, password, email) VALUES (%s, %s, %s)", (name, password,email))
        conn.commit()
        print(f"Inserted: {name}, {email}")
    except mysql.connector.Error as err:
        print(f"Error: {err}")
    finally:
        cursor.close()
        conn.close()

# Function to fetch data
def fetch_data():
    try:
        conn = mysql.connector.connect(**DB_CONFIG)
        cursor = conn.cursor()
        cursor.execute("SELECT * FROM users")
        for row in cursor.fetchall():
            print(f"Fetched: {row}")
    except mysql.connector.Error as err:
        print(f"Error: {err}")
    finally:
        cursor.close()
        conn.close()

# Creating threads for insertion
insert_threads = [
    threading.Thread(target=insert_data, args=(f"User{i}", f"user@123", f"user{i}@example.com"))
    for i in range(5)
]

# Start insert threads
for thread in insert_threads:
    thread.start()

# Wait for all insertions to complete
for thread in insert_threads:
    thread.join()

# Creating and starting fetch thread
fetch_thread = threading.Thread(target=fetch_data)
fetch_thread.start()
fetch_thread.join()

print("All operations completed.")
