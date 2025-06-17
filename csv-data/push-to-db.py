import mysql.connector

db = mysql.connector.connect(
    host="localhost",
    user="root",
    password="",
    database="db_gis",
    allow_local_infile=True  # Enable LOCAL INFILE
)

cursor = db.cursor()

# Path file CSV sebagai string mentah
file_path = r'C:\\xampp 8.1.6\\htdocs\\GISWEB-UAS\\csv-data\\DATA HOTEL FIX.csv'

load_data_query = f"""
LOAD DATA LOCAL INFILE '{file_path}'
INTO TABLE tb_hotel
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\\n'
IGNORE 1 ROWS;
"""

try:
    cursor.execute(load_data_query)
    db.commit()
    print("Data berhasil diimpor.")
except mysql.connector.Error as err:
    print(f"Error: {err}")
finally:
    cursor.close()
    db.close()



