## Mini Project : 
Create a small application by selecting relevant system environment / platform and programming languages. Narrate concise Test Plan consisting features to be tested and bug
taxonomy. Prepare Test Cases inclusive of Test Procedures for identified Test Scenarios.
Perform selective Black-box and White-box testing covering Unit and Integration test by using suitable Testing tools. Prepare Test Reports based on Test Pass/Fail Criteria and judge the
acceptance of application developed
---

# **Blood Bank Management System - Mini Project**

This mini-project is designed to manage and streamline the operations of a blood bank. It allows for registering blood donors, managing inventory, and ensuring smooth communication between donors, recipients, and blood bank staff.

## **Project Structure**

```
blood-bank-management/
│
├── database/
│   ├── blood_bank_db.sql           # SQL file for database structure
│
├── src/
│   ├── blood_bank_system.py        # Main application code for managing the blood bank
│   ├── blood_donor.py              # Logic for managing blood donor records
│   ├── blood_inventory.py          # Logic for managing blood inventory
│   └── ...
│
├── README.md                       # Project documentation (this file)
│
└── requirements.txt                # List of dependencies
```

## **Features**
- **Blood Donation Registration**: Allows donors to register their blood donation details.
- **Inventory Management**: Manages the stock of different blood types available.
- **Blood Request System**: Allows recipients to request blood.

---

## **Prerequisites**

### **Software Requirements**

- **Python 3.x**  
   This project uses Python 3.x. Download and install from [Python's official website](https://www.python.org/downloads/).

- **XAMPP**  
   XAMPP is used for setting up the local database (MySQL). Install from [XAMPP's official website](https://www.apachefriends.org/index.html).

- **Google Chrome**  
   Required for testing if you are using any web automation in the future. (This is not required for this version of the project without Selenium.)

- **ChromeDriver**  
   This is necessary if you plan to use Selenium for automated testing (optional). Download the correct version of [ChromeDriver](https://sites.google.com/a/chromium.org/chromedriver/).

---

## **Installation Instructions**

1. **Clone the Repository**  
   Clone this repository to your local machine:

   ```bash
   git clone https://github.com/yourusername/blood-bank-management.git
   cd blood-bank-management
   ```

2. **Set Up XAMPP & MySQL Database**  
   - Launch **XAMPP** and start the **Apache** and **MySQL** services.
   - Open phpMyAdmin (usually accessible via [http://localhost/phpmyadmin](http://localhost/phpmyadmin)) and create a new database named `blood_bank`.
   - Run the SQL script located in `database/blood_bank_db.sql` to create the required tables.

3. **Install Dependencies**  
   Create a virtual environment (optional but recommended) and install the required libraries:

   ```bash
   python -m venv venv
   source venv/bin/activate   # On Windows use: venv\Scripts\activate
   pip install -r requirements.txt
   ```

4. **Configure Database Connectivity**  
   Make sure your MySQL database details are correct in the `src/blood_bank_system.py` file. You might need to update the connection details like `host`, `user`, `password`, and `database`.

---

## **Usage**

1. **Start the Application**  
   Run the main application file (`blood_bank_system.py`) to start the blood bank management system.

   ```bash
   python src/blood_bank_system.py
   ```

2. **Access the Web Application**  
   Navigate to `http://localhost/Mini%20pro/index.php` in your browser to interact with the Blood Bank Management System. You can register donors, manage inventory, and request blood.

3. **Access the Web Application**  
   Use test.py for the selenium test cases.
---

## **Requirements**

Here are the required Python libraries for the project:

```plaintext
mysql-connector-python==8.0.30
```

You can install these dependencies using:

```bash
pip install -r requirements.txt
```

### **Setting Up ChromeDriver** (Optional for Testing)

Ensure that you have the **ChromeDriver** installed and it's compatible with your Chrome version.

- Download ChromeDriver: [ChromeDriver](https://sites.google.com/a/chromium.org/chromedriver/)
- Unzip the downloaded file and place it in a directory.
- Either set the system's PATH variable to point to this directory or provide the path directly in your Selenium tests (e.g., `driver = webdriver.Chrome(executable_path='/path/to/chromedriver')`).

---

## **Troubleshooting**

1. **XAMPP Not Running Properly**  
   If the database connection fails, ensure that the **MySQL** service is running in XAMPP, and that your database credentials are correct.

---

## **Contributing**

Feel free to fork the repository, make improvements, or submit a pull request. For any questions or issues, please open an issue on the repository.

---

## **License**

This project is open-source and available under the MIT License.

---
