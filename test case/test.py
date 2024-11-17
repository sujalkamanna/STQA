from selenium import webdriver
from selenium.webdriver.common.by import By
import time

driver = webdriver.Chrome()

try:
    driver.maximize_window()
    driver.get("http://localhost/Mini%20pro/index.php")
    time.sleep(2)
    import time

    # Sign Up Process
    sign_up_link = driver.find_element(By.LINK_TEXT, "Sign Up")
    sign_up_link.click()
    time.sleep(2)

    driver.find_element(By.NAME, "name").send_keys("Name")
    time.sleep(1)  # Delay after entering name
    driver.find_element(By.XPATH, "//input[@value='male']").click()
    time.sleep(1)  # Delay after clicking gender
    driver.find_element(By.NAME, "bg").send_keys("A-ve")
    time.sleep(1)  # Delay after entering blood group
    driver.find_element(By.NAME, "contact").send_keys("1111111111")
    time.sleep(1)  # Delay after entering contact
    driver.find_element(By.NAME, "email").send_keys("apple1@gmail.com")
    time.sleep(1)  # Delay after entering email
    driver.find_element(By.NAME, "address").send_keys("Pune")
    time.sleep(1)  # Delay after entering address
    driver.find_element(By.NAME, "uname").send_keys("name_surname")
    time.sleep(1)  # Delay after entering username
    driver.find_element(By.NAME, "pass").send_keys("123456789")
    time.sleep(1)  # Delay after entering password
    driver.find_element(By.NAME, "cpass").send_keys("123456789")
    time.sleep(1)  # Delay after entering confirm password

    driver.find_element(By.XPATH, "//input[@type='submit']").click()
    time.sleep(3)
    
    # Login Process
    driver.get("http://localhost/Mini%20pro/Login.php")
    time.sleep(2)
    
    driver.find_element(By.NAME, "user_name").send_keys("name_surname")
    driver.find_element(By.NAME, "password").send_keys("123456789")
    driver.find_element(By.XPATH, "//input[@type='submit']").click()
    time.sleep(3)
    
    # Register Donor
    register_donor_link = driver.find_element(By.LINK_TEXT, "Register the Donor")
    register_donor_link.click()
    time.sleep(2)
    
    driver.find_element(By.NAME, "name").send_keys("New_name")
    driver.find_element(By.NAME, "bday").send_keys("1990-01-01")
    driver.find_element(By.XPATH, "//input[@value='male']").click()
    driver.find_element(By.NAME, "bg").send_keys("A-ve")
    driver.find_element(By.NAME, "contact").send_keys("1111111111")
    driver.find_element(By.NAME, "email").send_keys("apple1@gmail.com")
    driver.find_element(By.NAME, "address").send_keys("Pune")
    
    driver.find_element(By.XPATH, "//input[@type='submit']").click()
    time.sleep(3)
    
    # Search the Donor
    dashboard_link = driver.find_element(By.LINK_TEXT, "Search the Donor")
    dashboard_link.click()
    time.sleep(2)

    # Input blood group to search
    search_input = driver.find_element(By.NAME, "search")
    search_input.send_keys("A-ve")
    
    # Submit the search form
    search_button = driver.find_element(By.XPATH, "//button[@type='submit']")
    search_button.click()
    time.sleep(10)

    # Logout
    logout_link = driver.find_element(By.XPATH, "//a[contains(text(), 'Logout')]")
    logout_link.click()
    time.sleep(3)

    # Navigate back to index.php
    driver.get("http://localhost/Mini%20pro/index.php")
    time.sleep(2)

finally:
    driver.quit()
